$(document).ready(function(){
var studentsList;
function getall() {
  $(".studentsList").html(" ");
  $.ajax({
    url:"api/getStudents.php",
    method:"GET",
    success:function(data) {
      studentsList = JSON.parse(data);
      console.log(studentsList);
      for (var i = 0; i < studentsList.length; i++) {
        $(".studentsList").append('<li><h2>'+"Name: "+studentsList[i]["name"]+'</h2><h3>'+"FatherName: "+studentsList[i]["fathername"]+'</h3><h4>'+"Rollno: "+studentsList[i]["rollno"]+'</h4><h5>'+"Degree: "+studentsList[i]["degree"]+'</h5><h6>'+"Branch: "+studentsList[i]["branch"]+'</h6><input type="hidden" value="" class="stdID"></li>');
      }
    }
  })
}
getall();






$(".submit-student").click(function() {
  var sName = $(".studentName").val();
  var sFname = $(".studentFname").val();
  var sRollno = $(".studentRollno").val();
  var sDegree = $(".studentDegree").val();
  var sBranch = $(".studentBranch").val();

  $.ajax({
    url:"api/addStudents.php",
    method:"POST",
    data:{
      name :sName,
      fathername :sFname,
      rollno :sRollno,
      degree :sDegree,
      branch :sBranch
    },
    success:function(data) {
    getall();
  }
  })
})

$(".downArrow").click(function() {
  $(".add-form").slideToggle("slow");
})
$(".save-student").click(function() {
$(".edit-form").hide();
})
$(".submit-student").click(function() {
$(".add-form").hide();
})
$(".close").click(function() {
$(".add-form").hide();
})
$(".close").click(function() {
$(".edit-form").hide("fast",function() {
getall();
});
})
})
