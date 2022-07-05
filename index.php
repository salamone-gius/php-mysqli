<?php

    // richiamo il file con le costanti per l'accesso
    require_once __DIR__ . '/config.php';

    // apro la connessione dichiarando una variabile $conn con valore 'nuovo oggetto mysqli' passandogli come parametri i dati della connessione
    $conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // eseguo un controllo sulla connessione
    if($conn && $conn->connect_error) {
        echo "Errore di connessione {$conn->connect_error}";
    };

    // salvo la query nella variabile $sql
    $sql = "SELECT * FROM `departments`";

    // passo la query $sql alla connessione $conn e salvo il risultato della query nella variable $result
    $result = $conn->query($sql);

    // eseguo un controllo sulla risultato della query:
    // SE $result E il numero di righe di $result è maggiore di 0...
    if ($result && $result->num_rows > 0) {
        // ...salvo il risultato di ogni riga della tabella risultante nella variabile $row sotto forma di array associativi (fetch_assoc())
        // il nome della colonna è la chiave, il dato è il suo valore.
        while ($row = $result->fetch_assoc()) {
            // stampo i dati della colonna 'name' dell'array '$row'
            echo "{$row['name']} <br>";
        }

    }

?>