$(document).ready(function () {
   $("#etudiant").click(function (e) { 
    e.preventDefault();
    $("#etudiant_section").show(200)
    $("#enseignant_section").hide(200)

   });

   $("#enseignant").click(function (e) { 
    e.preventDefault();
    $("#enseignant_section").show(200)
    $("#etudiant_section").hide(200)

   });

});
