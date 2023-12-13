$(document).ready(function () {
    tablebody = $("#tab");
    function getTrashData() {
      $.ajax({
        method: "POST",
        url: "fetchtrash.php",
        success: function (data) {
          tablebody.html(data);},
      });
    }
    getTrashData();

    $("tbody").on("click",".restorebtn",function(){
        userid=$(this).attr('data-id');
        $.ajax({
        method:"POST",
        url:"restore.php",
        data:{
          userid:userid },
        success:function(data){
            alert(data);
            getTrashData();}
        })
        })

    $("tbody").on("click",".deletebtn",function(){
        userid=$(this).attr('data-id');
        $.ajax({
        method:"POST",
        url:"permanentdelete.php",
        data:{
          userid:userid},
        success:function(data){
            alert(data);
            getTrashData(); }
        })
        })
  });
  
  
  
  
  
  
  
  
 
 