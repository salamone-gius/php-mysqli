<?php

    // richiamo il file con le costanti per l'accesso
    require_once __DIR__ . '/config.php';

    // apro la connessione dichiarando una variabile $conn con valore 'nuovo oggetto mysqli' passandogli come parametri i dati della connessione
    $conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

    var_dump($conn);

?>