(function($) {
	
	AddTableRow = function() {

    var newRow = $("<tr>");
    var cols = "";
    var x = +1;
    cols += '<td><input type="text" name="dados[].desc[]" class="form-control"></td>';
    cols += '<td><input type="text" name="dados[].qtd[]" class="form-control"></td>';
    cols += '<td><input type="text" name="dados[].und[]" class="form-control"></td>';
    cols += '<td><input type="text" name="dados[].val[]" class="form-control"></td>';

    cols += '<td>';
    cols += '<button onclick="RemoveTableRow(this)" type="button">Remover</button>';
    cols += '</td>';

    newRow.append(cols);
    $("#products-table").append(newRow);

    return false;

	};


})(jQuery);

(function($) {

	RemoveTableRow = function(item) {    
			
		var tr = $(item).closest('tr');	

	    tr.fadeOut(400, function() {		
	          tr.remove();  		   
	    });		
	    
	    return false;		
	}

})(jQuery);