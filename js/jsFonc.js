$(document).ready(function(){

$("select[name = 'arrondissements']").on ("change",function(){
  $("#ecoles").load("etablissements.php",{"arrondissements" : $(this).val()});
  $("#detail").html("");

});

$("select[id = 'ecoles']").on ("change",function(){
  $("#detail").load("ecole.php",{"ecoles" : $(this).val() });
});

 
})
