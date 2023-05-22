<?php

$jsonData = file_get_contents('./asset/data/questions.json');
$data = json_decode($jsonData, true);


foreach ($data as $item) {
    foreach ($item['lesQuestions'] as $question) {
        $category = $question['category'];
        $categories[] = $category;
    }
}

$uniqueCategories = array_unique($categories);


// Tableau pour stocker les données
$donnees = array();

// Parcours des éléments du tableau $data
foreach ($data as $item) {
    // Parcours des questions et réponses pour chaque élément
    foreach ($item['lesQuestions'] as $question) {
        // Récupération des données spécifiées
        $category = $question['category'];
        $index = $question['index'];
        $questionText = $question['question'];
        $reponse = $question['reponse'];

        // Stockage des données dans le tableau $donnees
        $donnees[] = array(
            'category' => $category,
            'index' => $index,
            'question' => $questionText,
            'answer' => $reponse
        );
    }
}

// var_dump($donnees);




include './view/view_faq.php';

?>