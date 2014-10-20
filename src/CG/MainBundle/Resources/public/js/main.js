(function($) {
	var datepickerUpdate = function() {
		$('input.datepicker').datetimepicker({timepicker:false, format:'Y-m-d'});
	}
	$(document).ready(function() {
		datepickerUpdate();
	});
})(jQuery);