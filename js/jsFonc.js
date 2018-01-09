$(document).ready(function(){

$("select[name = 'arrondissements']").on ("change",function(){
  $("#ecoles").load("./views/etablissements.php",{"arrondissements" : $(this).val()});
  $("#detail").html("");

});

$("select[id = 'ecoles']").on ("change",function(){
  $("#detail").load("./views/ecole.php",{"ecoles" : $(this).val() });
});


})
