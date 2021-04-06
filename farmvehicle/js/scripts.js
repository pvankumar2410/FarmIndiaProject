/*!
    * Start Bootstrap - Creative v6.0.3 (https://startbootstrap.com/themes/creative)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
    */
    (function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 72)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 75
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-scrolled");
    } else {
      $("#mainNav").removeClass("navbar-scrolled");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);



})(jQuery); // End of use strict
<script>
$(document).ready(function() {
///////
var startDate;
var endDate;
 $( "#date_picker1" ).datepicker({
dateFormat: 'dd-mm-yy'
})
///////
///////
 $( "#date_picker2" ).datepicker({
dateFormat: 'dd-mm-yy'
});
///////
$('#date_picker1').change(function() {
startDate = $(this).datepicker('getDate');
$("#date_picker2").datepicker("option", "minDate", startDate );
})

///////
$('#date_picker2').change(function() {
endDate = $(this).datepicker('getDate');
$("#date_picker1").datepicker("option", "maxDate", endDate );
////////////////
var t1=$('#date_picker1').val();
t1=t1.split('-');
dt_t1=new Date(t1[2],t1[1]-1,t1[0]); // YYYY,mm,dd format to create date object
dt_t1_tm=dt_t1.getTime(); // time in milliseconds for day 1
//alert(dt_t1_tm);
var t2=$('#date_picker2').val();
t2=t2.split('-');
dt_t2=new Date(t2[2],t2[1]-1,t2[0]); // YYYY,mm,dd format to create date object
dt_t2_tm=dt_t2.getTime(); // time in milliseconds for day 2
/////////////////
var one_day = 24*60*60*1000; // hours*minutes*seconds*milliseconds
var diff_days=Math.abs((dt_t2_tm-dt_t1_tm)/one_day) // difference in days
$("#result").html("Difference in Days " + diff_days + "");
$("#result").show();
})

////////////////
})
</script>

$('#TextBox1').datepicker().datepicker('setDate',new Date());
$("#TextBox1").datepicker({
    minDate: 0,
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var min = $(this).datepicker('getDate'); // Get selected date
        $("#TextBox2").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
    }
});

$("#TextBox2").datepicker({
    minDate: '0',
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var max = $(this).datepicker('getDate'); // Get selected date
        $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
        var start = $("#TextBox1").datepicker("getDate");
        var end = $("#TextBox2").datepicker("getDate");
        var days = (end - start) / (1000 * 60 * 60 * 24);
        $("#TextBox3").val(days);
    }
});
