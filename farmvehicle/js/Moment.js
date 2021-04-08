
$(function() {

  $('#from-date').datepicker({
    autoclose: true,
    format: 'dd-mm-yyyy',
  });


  $('#to-date').datepicker({
    autoclose: true,
    format: 'dd-mm-yyyy'
  });

  $('#calculate').on('click', function() {

    var fromDate = moment($('#from-date').val(), 'DD-MM-YYYY');
    var toDate = moment($('#to-date').val(), 'DD-MM-YYYY'); 

    if (fromDate.isValid() && toDate.isValid()) {

      var duration = moment.duration(toDate.diff(fromDate));

      $('#total-count').val( duration.years() + ' Year(s) ' + duration.months() + ' Month(s) ' + duration.days() + ' Day(s)');

    } else {
        alert('Invalid date(s).')    

    }

  });


});