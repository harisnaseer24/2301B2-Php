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
      }})
    })

$("tbody").on("click",".deletebtn",function(){
userid=$(this).attr('data-id');
console.log(userid);
$.ajax({
method:"POST",
url:"delete.php",
data:{
  userid:userid
},
success:function(data){
  alert(data);
  getData();
}})
})

$("tbody").on("click",".updatebtn",function(){
  userid=$(this).attr('data-id');
  $.ajax({
  method:"POST",
  url:"update.php",
  data:{
    userid:userid
  },
  success:function(data){
    let record= JSON.parse(data);
   id.val(record.id);
   uname.val(record.name);
   email.val(record.email);
   pass.val(record.password);
  }
  })
  })
  
  


});








// $('tbody').on('click','.updatebtn',function(e){
//   userid=$(this).attr('data-id');

//  $.ajax({
//       method: "POST",
//       url: "update.php",
//      data : {
//       userid:userid
       
//      },

//      success :function(data){
//       let record = JSON.parse(data)
//       console.log(record.id);
//       id.val(record.id);
//       uname.val(record.name);
//       email.val(record.email);
//       pass.val(record.password);
//   }
// })})