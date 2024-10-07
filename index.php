<?php 
require_once __DIR__."/functions/functions.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body class="bg-dark-blue">
    <header class="my-5">
        <div class="container">
            <div class="row">

                <!-- titolo -->
                <div class="col-12 text-center">
                    <h1 class="text-secondary">Strong Password Generator</h1>
                    <h2 class="text-white">Genera un password sicura</h2>
                </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 bg-info-subtle rounded p-3">
                    <p class="mb-0 text-success">nessun parametro etc...</p>
                </div>
                <div class="col-12 mt-4 bg-white rounded">
                    <form action="index.php">
                        <div class="form-input d-flex justify-content-between align-items-center p-3">
                            <label class="" for="passwordLength">Lunghezza password</label>
                            <input class="rounded mx-2 border-1 p-2" type="text" id="passwordLength"
                                name="passwordLength">
                        </div>
                        <div class="buttons mb-3">
                            <button class="btn btn-primary" type="submit">Invia</button>
                            <button class="btn btn-secondary" type="reset">Annulla</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale.
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->