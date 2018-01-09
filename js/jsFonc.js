$(document).ready(function(){

$("select[name = 'arrondissements']").on ("change",function(){
  $("#ecoles").load("etablissements.php",{"arrondissements" : $(this).val() });
});

$("select[id = 'ecoles']").on ("change",function(){
  $("#detail").load("ecole.php",{"ecoles" : $(this).val() });
});

$("select[name = 'arrondissements']").on ("change",function(){
  $("#detail").load("clean.php",{"arrondissements" : $(this).val() });
});


})
