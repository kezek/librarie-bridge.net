$(document).ready(function()  { //so it runs when the DOM is ready

  var ccsc=

  {

	  'background-color': 'white',

	  'border': 'none'

  }

  $(".conv_tbl tr td,.sis_tbl tr td").each(function() {

    

	if ($.trim($(this).text()) == '') {

      $(this).css(ccsc);

    }

  });

});