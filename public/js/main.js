// let keyword = document.getElementById('keyword');
// let tombolCari = document.getElementById('tombol-cari');
// let container = document.getElementById('container');



// keyword.addEventListener('keyup',function () {
//   console.log(keyword);
//   let xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function(){
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       container.innerHTML = xhr.responseText;
//     }
//   }

//   xhr.open('POST','../app/controllers/action.php', true);
//   xhr.send();

// })




(function ($) {

  "use strict";

  $(".toggle-password").click(function () {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }




  });

})(jQuery);

$(document).ready(function () {
  var date_input = $('input[name="date"]'); //our date input has the name "date"
  var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
  var options = {
    format: 'mm/dd/yyyy',
    container: container,
    todayHighlight: true,
    autoclose: true,
  };
  date_input.datepicker(options);
});


