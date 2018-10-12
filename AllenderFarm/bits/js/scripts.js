$(function() {
	$("#accordion").accordion();
	
	
	
	$( "#datepicker-arrive" ).datepicker({
		defaultDate: "+1w",
		changeMonth: true,
		changeYear: true,
		numberofYears: 5,
		numberOfMonths: 1,
		onClose: function( selectedDate ) {
			$( "#datepicker-arrive" ).datepicker( "option", "minDate", selectedDate );
		}
	});
	$( "#datepicker-leave" ).datepicker({
		defaultDate: "+1w",
		changeMonth: true,
		changeYear: true,
		numberOfMonths: 1,
		numberofYears: 5,
		numberofYears: 5,
		onClose: function( selectedDate ) {
			$( "#datepicker-leave" ).datepicker( "option", "maxDate", selectedDate );
		}
	});
});
