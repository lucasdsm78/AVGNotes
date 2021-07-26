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
        //   data : 
        //   {
        //     idEleve:idEleve,
        //     idMaxNote:idMaxNote,
        //     idMatiereNote:idMatiereNote,
        //     periode:periode,
        //     note:note,
        //     coef:coef,
        //     points:points,
        //     annee:annee
        //   },
        //    success : function(data)
        //   {
        //     alert(data);
        //   },
        //   error : function(error) 
        //   {
        //     alert(error) ;
        //   }
        // });

        var minNumber = 1; // le minimum
        var maxNumber = 100; // le maximum

        var noteAppend = $(".note");
        var randomnumber = Math.floor(Math.random() * (maxNumber + 1) + minNumber); // la fonction magique
      var note = $("#note").val();
      var points = $("#points").val();
      var coef = $("#coef").val();
      $(".note").remove();
      $("tr." + this.id).append("<td class='"+randomnumber+"'>" + note + "/" + points + "<sup>" + coef + "</sup>       <button type='submit' id='"+ randomnumber +"' name='supprimer' class='supprimer'>X</button></td>.");
      $(".supprimer").click(function(){
        $("td." + this.id).remove();
      });
    });
