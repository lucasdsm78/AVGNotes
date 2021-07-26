$(document).ready(function(){
  $(".submit").click(function(){
    var idNote = this.id;
        var minNumber2 = 200; // le minimum
        var maxNumber2 = 500; // le maximum
        var randomnumber2 = Math.floor(Math.random() * (maxNumber2 + 1) + minNumber2); // la fonction magique
    var idEleve = $("#idEleve").val();
    var idMaxNote = $("#idNote").val();
    // var idMatiere = $("#idMatiere").val();
    var periode = $("#periode").val();
    var annee = $("#annee").val();
  	$("tr."+ this.id).append("<td></td><td></td><tr class='" + idNote + "'>" +
      "<td class='note'><form id='frm'><input type='text' id='note' class='note' size='1' style='width:20px' name='note' placeholder='note'>"
      + "<input type='text' id='points' size='1' style='width:21px' name='points' class='points' placeholder='pts'>"
      + "<sup><input type='text' id='coef' size='1' style='width:20px' name='coef' class='coef' placeholder='coef'></sup>"
      + "<input type='hidden' class='annee' id='annee' name='annee' value='" + annee + "'>"
      + "<input type='hidden' class='periode' id='periode' name='periode' value='" + periode + "'>"
      + "<input type='hidden' class='idMatiereNote' id='idMatiereNote' name='idMatiereNote' value='" + idNote + "'>"
      + "<input type='hidden' class='idEleve' id='idEleve' name='idEleve' value='" + idEleve + "'>"
      + "<input type='hidden' class='idMaxNote' id='idMaxNote' name='idMaxNote' value='" + randomnumber2 + "'>"
            // + "<button type='submit' name='valider' class='valider'>Valider</button></form></td></tr>");
      + "<button type='submit' id='"+ idNote +"' name='valider' class='valider'>Valider</button></form></td></tr>");
                   
        $(".valider").click(function(){
        var idEleve = $("#idEleve").val();
        var idMaxNote = $("#idMaxNote").val();
        var idMatiereNote = $("#idMatiereNote").val();
        var periode = $("#periode").val();
        var note = $("#note").val();
        var coef = $("#coef").val();
        var points = $("#points").val();
        var annee = $("#annee").val();

        // $.ajax({
        //   url : 'php/fonctions/insert.php' ,
        //   type : 'POST' ,
        //   data :  form.serialize(),
        //   // {
        //   //   idEleve:idEleve,
        //   //   idMaxNote:idMaxNote,
        //   //   idMatiereNote:idMatiereNote,
        //   //   periode:periode,
        //   //   note:note,
        //   //   coef:coef,
        //   //   points:points,
        //   //   annee:annee
        //   // },
        //    success : function(data)
        //   {
        //     alert(data);
        //   },
        //   error : function(error) 
        //   {
        //     alert(error) ;
        //   }
        // });

  // Récupération des valeurs
    

        var minNumber = 200; // le minimum
        var maxNumber = 500; // le maximum

        var noteAppend = $(".note");
        var randomnumber = Math.floor(Math.random() * (maxNumber + 1) + minNumber); // la fonction magique
      var note = $("#note").val();
      var points = $("#points").val();
      var coef = $("#coef").val();
      $(".note").remove();
      $("tr." + this.id).append("<td class='"+randomnumber+"'><form id='frmdelete'>" + note + "/" + points + "<sup>" + coef + "</sup>       <button type='submit' id='"+ randomnumber +"' name='supprimer' class='supprimer'>X</button></form></td>.");
        var $form = $("#frm");



  // Envoie des données
  var posting = $.post( "php/fonctions/insert.php", { idEleve: idEleve, idMaxNote: idMaxNote, idMatiereNote: idMatiereNote,  periode:periode, note:note, coef:coef, points:points, annee:annee} );
  // alert(idMaxNote);
      $(".supprimer").click(function(){
        $("td." + this.id).remove();
        var $form2 = $("#frmdelete");
  // Envoie des données
  var posting2 = $.post( "php/fonctions/delete.php", { idMaxNote: idMaxNote} );
      });
    });

  });
});


/*function estValider()
{
    $(".valider").click(function(){
    var note = $("#note").val();
    var points = $("#points").val();
    var coef = $("#coef").val();
    $(".note").append("<td>" + note + "/" + points + "<sup>" + coef + "</sup></td>.");
    });
}*/



/*$(document).ready(function(){
  $(".submit").click(function(){
    var idNote = this.id;
    $("tr."+ this.id).append("<td></td><td></td><tr class='" + idNote + "'><td class='note'><input type='text' id='note' size='1' style='width:20px' name='note' placeholder='note'><input type='text' id='points' size='1' style='width:21px' name='points' placeholder='pts'><sup><input type='text' id='coef' size='1' style='width:20px' name='coef' placeholder='coef'></sup><button id='"+ idNote +"' name='valider' class='valider'>Valider</button></td></tr>.");
      $(".valider").click(function(){
    var note = $("#note").val();
    var points = $("#points").val();
    var coef = $("#coef").val();
    $(".note").remove();
    $("tr." + this.id).append("<td></td><td>" + note + "/" + points + "<sup>" + coef + "</sup></td>.");
    });
  });
});*/



// <button id='valider' name='valider' class='valider'>Valider</button>



// $(document).ready(function(){
//   $(".submit").click(function(){
//      $("tr."+ this.id).append("<td></td><td></td><td><input type='text' id='note' size='1' style='width:20px' name='note' placeholder='note'><input type='text' id='points' size='1' style='width:21px' name='points' placeholder='pts'><sup><input type='text' id='coef' size='1' style='width:20px' name='coef' placeholder='coef'></sup></td>.");
//   });
// });


    // $(".valider").click(function(){
    // var note = $("#note").val();
    // var points = $("#points").val();
    // var coef = $("#coef").val();
    // $(".note").append("<td>" + note + "/" + points + "<sup>" + coef + "</sup></td>.");
    // });






// $(document).ready(function(){
//   $(".submit").click(function(){
//     var idNote = this.id;
//     var idEleve = $("#idEleve").val();
//     var idMaxNote = $("#idNote").val();
//     // var idMatiere = $("#idMatiere").val();
//     var periode = $("#periode").val();
//     var annee = $("#annee").val();
//     $("tr."+ this.id).append("<td></td><td></td><tr class='" + idNote + "'>" +
//       "<td class='note'><input type='text' id='note' size='1' style='width:20px' name='note' placeholder='note'>"
//       + "<input type='text' id='points' size='1' style='width:21px' name='points' placeholder='pts'>"
//       + "<sup><input type='text' id='coef' size='1' style='width:20px' name='coef' placeholder='coef'></sup>"
//       + "<input type='hidden' id='annee' name='annee' value='" + annee + "'>"
//       + "<input type='hidden' id='periode' name='periode' value='" + periode + "'>"
//       + "<input type='hidden' id='idMatiereNote' name='idMatiereNote' value='" + idNote + "'>"
//       + "<input type='hidden' id='idEleve' name='idEleve' value='" + idEleve + "'>"
//       + "<input type='hidden' id='idMaxNote' name='idMaxNote' value='" + idMaxNote + "'>"
//       + "<button type='submit' id='"+ idNote +"' name='valider' class='valider'>Valider</button></td></tr>.");
//       $(".valider").click(function(){
//         var idEleve = $("#idEleve").val();
//         var idMaxNote = $("#idMaxNote").val();
//         var idMatiereNote = $("#idMatiereNote").val();
//         var periode = $("#periode").val();
//         var note = $("#note").val();
//         var coef = $("#coef").val();
//         var points = $("#points").val();
//         var annee = $("#annee").val();

//         $.ajax({
//           url : 'php/fonctions/insert.php' ,
//           type : 'POST' ,
//           data : {
//             idEleve:idEleve,
//             idMaxNote:idMaxNote,
//             idMatiereNote:idMatiereNote,
//             periode:periode,
//             note:note,
//             coef:coef,
//             points:points,
//             annee:annee
//           },
//           success : function(data)
//           {
//             alert(data);
//           }
//         });





//       var note = $("#note").val();
//       var points = $("#points").val();
//       var coef = $("#coef").val();
//       $(".note").remove();
//       $("tr." + this.id).append("<td></td><td>" + note + "/" + points + "<sup>" + coef + "</sup></td>.");
//     });
//   });
// });




