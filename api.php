<?php
    require __DIR__ . '/database.php';
    // Acquisisco il valore del genre attraverso il parametro GET

    // Se è 'all' stampo tutti i disci in pagina
    // Altrimenti stampo solo i disci relativi al genere seleziato
    if($_GET['genre'] === 'all'){

        header('Content-Type: application/json');
        echo json_encode($discs);  
    } else{
        $filteredArray = [];

        foreach($discs as $disc) {
            if($disc['genre'] === $_GET['genre']){
                $filteredArray[] = $disc;

            }
        }

        header('Content-Type: application/json');
        echo json_encode($filteredArray);

    }

?>