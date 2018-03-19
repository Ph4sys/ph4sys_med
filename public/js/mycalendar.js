$(document).ready(function() {

 $(document).ready(function() {
    var initialLangCode = 'pt-br';

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      defaultDate: '2016-06-12',
      lang: initialLangCode,
      buttonIcons: false, // show the prev/next text
      weekNumbers: true,
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2016-06-01'
        },
        {
          title: 'Long Event',
          start: '2016-06-07',
          end: '2016-06-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-06-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-06-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2016-06-11',
          end: '2016-06-13'
        },
        {
          title: 'Meeting',
          start: '2016-06-12T10:30:00',
          end: '2016-06-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2016-06-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2016-06-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2016-06-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2016-06-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2016-06-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2016-06-28'
        }
      ]
    });

    // build the language selector's options
    $.each($.fullCalendar.langs, function(langCode) {
      $('#lang-selector').append(
        $('<option/>')
          .attr('value', langCode)
          .prop('selected', langCode == initialLangCode)
          .text(langCode)
      );
    });

    // when the selected option changes, dynamically change the calendar option
    $('#lang-selector').on('change', function() {
      if (this.value) {
        $('#calendar').fullCalendar('option', 'lang', this.value);
      }
    });
  });

});
