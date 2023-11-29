$(document).ready(function () {
  form = $("#form");
  tablebody = $("#tab");
  id = $("#id");
  uname = $("#name");
  email = $("#email");
  pass = $("#pass");
  btn = $("#btn");

  function getData() {
    $.ajax({
      method: "POST",
      url: "fetch.php",
      success: function (data) {
        tablebody.html(data);
      },
    });
  }
  getData();
btn.on('click',function(e){
    e.preventDefault();

 $.ajax({
      method: "POST",
      url: "insert.php",
     data : {
        id:id.val(),
        name:uname.val(),
        email:email.val(),
        pass:pass.val(),
     },
      success: function (data) {
          alert(data);
          getData();
          form.trigger('reset');
      }})})





});
