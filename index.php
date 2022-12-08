<!-- 
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli (!?&%$<>^+-*/()[]{}@#_=)) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente. -->


<?php

// var_dump($_GET);

$listChars = 'abcdefghilmnopqrstuvzABCDEFGHILMNOPQRSTUVZ12345678910!?&%$<>^+-*/()[]{}@#_=';

require_once 'functions.php';


//se invio la lunghezza della password
if (!empty($_GET['lenght'])) {
  //controllo la lunghezza
  if ($_GET['lenght'] < 8 || $_GET['lenght'] > 32) {
    $output = "Errore! la lunghezza deve essere compresa fra 8 e 32";
  } else {
    //genero la psw
    echo "OK";
    //adra in sessione...
    $password = generatePassword($_GET['lenght'], $listChars);
    session_start();
    $_SESSION['password'] = $password;
    header('Location: ./success.php');
  }
} else {
  // se non invio la lunghezza della psw
  $output = "Inserisci un numero compreso tra 8 e 32";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>PHP Strong Password Generator</title>
</head>

<body>
  <div class="container py-4 w-50 m-auto text-center">
    <h1 class="pb-4 text-uppercase fs-5">PHP Strong Password Generator</h1>

    <form method="GET">
      <div class="py-2">
        <p><?php echo $output; ?></p>
      </div>
      <div class="psw-input">
        <input name="lenght" type="number" class="w-25 m-auto" id="exampleInputPassword1">
        <button type="submit">Invia</button>
      </div>
    </form>
  </div>

</body>

</html>