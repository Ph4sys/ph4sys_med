@extends('layouts.app')

@section('content')
	
<div class="container">

<section class="content-header">
	<h1>
		Agendar
		<small>Painel de Controle</small>
	</h1>
	<ol class="bc breadcrumb">
		<li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
  		<li><a href="{{ route('admin.pacientes')}}"></i> Pacientes</a></li>
  		<li class="active"><a>Agendar</a></li>
	</ol>
</section>

<!-- Main Content -->

<div class="panel panel-default">
    <!-- Content Header (Page header) -->

    <div id="calendar"></div>
  </div><!-- /.panel -->
</div>
</div>

<!--/.content-->
@endsection

@section('scripts')
  <script>
  $(function () {
    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {
        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex: 1070,
          revert: true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        });

      });
    }

    ini_events($('#external-events div.external-event'));

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();

    //while(reload==false){
    $('#calendar').fullCalendar({
      header: {
        
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      
     

      events: { url:'admin.agendamento.salvarEventos'},

      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar !!!

      drop: function (date, allDay) { // this function is called when something is dropped
        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');
        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);
        allDay=true;
        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
        copiedEventObject.backgroundColor = $(this).css("background-color");
        copiedEventObject.borderColor = $(this).css("border-color");

        // render the event on the calendar
        //$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove();
        }
        //Guardamos el evento creado en base de datos
        var title=copiedEventObject.title;
        var start=copiedEventObject.start.format("YYYY-MM-DD HH:mm");
        var back=copiedEventObject.backgroundColor;

        crsfToken = document.getElementsByName("_token")[0].value;
        $.ajax({
             url: 'admin/agendamento/salvarEventos', //'guardaEventos',
             data: 'title='+ title+'&start='+ start+'&allday='+allDay+'&background='+back,
             type: "POST",
             headers: {
                    "X-CSRF-TOKEN": crsfToken
                },
              success: function(events) {
                console.log('Evento creado');      
                $('#calendar').fullCalendar('refetchEvents' );
              },
              error: function(json){
                console.log("Error al crear evento");
              }        
        });        
      },

      eventResize: function(event) {
          var start = event.start.format("YYYY-MM-DD HH:mm");
          var back=event.backgroundColor;
          var allDay=event.allDay;
          if(event.end){
            var end = event.end.format("YYYY-MM-DD HH:mm");
          }else{var end="NULL";
          }
          crsfToken = document.getElementsByName("_token")[0].value;
            $.ajax({
              url: 'actualizaEventos',
              data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id+'&background='+back+'&allday='+allDay,
              type: "POST",
              headers: {
                    "X-CSRF-TOKEN": crsfToken
                },
                success: function(json) {
                  console.log("Updated Successfully");
                },
                error: function(json){
                  console.log("Error al actualizar evento");
                }
            });
      },
      eventDrop: function(event, delta) {
        var start = event.start.format("YYYY-MM-DD HH:mm");
        if(event.end){
          var end = event.end.format("YYYY-MM-DD HH:mm");
        }else{var end="NULL";
        }
        var back=event.backgroundColor;
        var allDay=event.allDay;
        crsfToken = document.getElementsByName("_token")[0].value;

          $.ajax({  
            url: 'actualizaEventos',
            data: 'title='+ event.title+'&start='+ start +'&end='+ end+'&id='+ event.id+'&background='+back+'&allday='+allDay ,           
            type: "POST",
            headers: {
              "X-CSRF-TOKEN": crsfToken
            },
            success: function(json) {
              console.log("Updated Successfully eventdrop");
            },
            error: function(json){
              console.log("Error al actualizar eventdrop");
            }
          });
      },
      eventClick: function (event, jsEvent, view) {
        crsfToken = document.getElementsByName("_token")[0].value;
        var con=confirm("Esta seguro que desea eliminar el evento");
        if(con){
            $.ajax({
               url: 'eliminaEvento',
               data: 'id=' + event.id,
               headers: {
                  "X-CSRF-TOKEN": crsfToken
                },
               type: "POST",
               success: function () {
                    $('#calendar').fullCalendar('removeEvents', event._id);
                    console.log("Evento eliminado");
                }
            });
        }else{
           console.log("Cancelado");
        }
      },

      eventMouseover: function( event, jsEvent, view ) { 
        var start = (event.start.format("HH:mm"));
        var back=event.backgroundColor;
        if(event.end){
            var end = event.end.format("HH:mm");
        }else{var end="No definido";
        }
        if(event.allDay){
            var allDay = "Si";
        }else{var allDay="No";
        }
        var tooltip = '<div class="tooltipevent" style="width:200px;height:100px;color:white;background:'+back+';position:absolute;z-index:10001;">'+'<center>'+ event.title +'</center>'+'Todo el dia: '+allDay+'<br>'+ 'Inicio: '+start+'<br>'+ 'Fin: '+ end +'</div>';
        $("body").append(tooltip);
        $(this).mouseover(function(e) {
          $(this).css('z-index', 10000);
          $('.tooltipevent').fadeIn('500');
          $('.tooltipevent').fadeTo('10', 1.9);
        }).mousemove(function(e) {
          $('.tooltipevent').css('top', e.pageY + 10);
          $('.tooltipevent').css('left', e.pageX + 20);
        });            
      },

      eventMouseout: function(calEvent, jsEvent) {
        $(this).css('z-index', 8);
        $('.tooltipevent').remove();
      },

      dayClick: function(date, jsEvent, view) {
            if (view.name === "month") {
                $('#calendar').fullCalendar('gotoDate', date);
                $('#calendar').fullCalendar('changeView', 'agendaDay');
            }
      }
    });

    /* AGREGANDO EVENTOS AL PANEL */
    var currColor = "#3c8dbc"; //Red by default
    //Color chooser button
    var colorChooser = $("#color-chooser-btn");
    $("#color-chooser > li > a").click(function (e) {
      e.preventDefault();
      //Save color
      currColor = $(this).css("color");
      //Add color effect to button
      $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
    });
    $("#add-new-event").click(function (e) {
      e.preventDefault();
      //Get value and make sure it is not null
      var val = $("#new-event").val();
      if (val.length == 0) {
        return;
      }

      //Create events
      var event = $("<div />");
      event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
      event.html(val);
      $('#external-events').prepend(event);

      //Add draggable funtionality
      ini_events(event);

      //Remove event from text input
      $("#new-event").val("");
    });
  });
</script>
@endsection
