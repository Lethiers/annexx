$(document).ready(function() {
  let elementInput = $("#searchBar");

  elementInput.on("input", function() {
    // Récupérer la valeur de l'input
    const saisieUtilisateur = elementInput.val().trim();

    // Effectuer la requête Ajax pour récupérer le fichier JSON
    $.ajax({
      url: "../asset/data/questions.json",
      type: "GET",
      dataType: "json",
      success: function(data) {
        $(".question").each(function() {
          const elementParent = $(this).parent();
          const texteQuestion = $(this).text().trim();
          const texteReponse = $(this).next(".reponse").text().trim();

          // Vérifier si la valeur de la question ou de la réponse contient la recherche
          if (texteQuestion.includes(saisieUtilisateur) || texteReponse.includes(saisieUtilisateur)) {
            elementParent.show();
          } else {
            elementParent.hide();
          }
        });

        $(".titre").each(function() {
          const titreCourant = $(this);
          const titreSuivant = titreCourant.next(".titre");

          if (titreSuivant.length === 0) {
            const containersQuestions = titreCourant.nextUntil(".titre").filter(".container-question:visible");

            if (containersQuestions.length === 0) {
              titreCourant.hide();
            } else {
              titreCourant.show();
            }
          }
        });
      },
      error: function(xhr, status, error) {
        console.error("Erreur fichier JSON :", error);
      }
    });
  });
});
