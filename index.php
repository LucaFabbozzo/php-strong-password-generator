<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli (!?&%$<>^+-*/()[]{}@#_=)) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->

<?php

  $numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  $lettere = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'l','m', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'z'];
  $simboli = ['!', '?', '&', '%', '$', '<', '>', '^', '+', '-', '*', '/', '()', '[]', '{}', '@', '#', '_', '=' ];

  $unione = array_merge($numeri, $lettere, $simboli);

  // $random = array_rand($unione);

  foreach ($unione as $key => $value) {
     echo $value;
  }

  $random = $value.rand();

  echo $random;

  // var_dump($unione);


  $data = $_GET["data"];

  var_dump($data);

  function passwordGenerate($data) {

  } 

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
</head>
<body>
  
  <form method="GET">
    <input type="text" name="data">
    <button type="submit">Invia</button>
  </form>

</body>
</html>