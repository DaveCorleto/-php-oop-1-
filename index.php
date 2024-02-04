<!-- ## Todo
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina.

Creare un file `index.php` in cui:
- è definita una classe `Movie`
- all'interno della classe sono dichiarate delle variabili d'istanza 
- all'interno della classe è definito un costruttore
- all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti `Movie` e stampati a schermo i valori delle relative proprietà

### Bonus 1
Modificare la classe `Movie` in modo che accetti piú di un genere

### Bonus 2
Creare un layout completo per stampare a schermo una lista di movies. 
Facciamo attenzione all'organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice 
- creando un file dedicato ai dati (tipo gli array di oggetti) che potremmo chiamare `db.php`
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare `Models` -->
<!-- - organizzando il layout dividendo la struttura ed i contenuti in file parziali dedicati -->
<?php

    class Movie {
        public $regista;
        public $year;
        public $costodelbiglietto;


        function __construct($regista, $year, $costodelbiglietto) {
            $this->regista = $regista;
            $this->year = $year;
            $this->costodelbiglietto = $costodelbiglietto;
        }
        public function rilasciatoNellAnno($anno) {
            return $this->year == $anno;
        }
}
    $ritornoalfuturo = new Movie("Robert Zemeckis", 1985, 9);
    $avatar = new Movie ("James Cameron", 2009, 12);
    $ilsignoredeglianelli = new Movie("Peter Jackson", 2001, 10);
    $bother = new Movie ("Anastasio Scaccabarozzi", 2122, 4);

    // Bother 

    var_dump ($bother);
    echo "<br><br>";

    var_dump($bother -> regista);
    echo "<br>";
    var_dump($bother -> year);
    echo "<br>";
    var_dump($bother -> costodelbiglietto);

    echo "<br>--------------------------<br>";

    // avatar 
    
    var_dump ($avatar);
    echo "<br><br>";

    var_dump($avatar -> regista);
    echo "<br>";
    var_dump($avatar -> year);
    echo "<br>";
    var_dump($avatar -> costodelbiglietto);

    echo "<br>--------------------------<br>";

    // Il signore degli anelli 
    
    var_dump ($ilsignoredeglianelli);
    echo "<br><br>";

    var_dump($ilsignoredeglianelli -> regista);
    echo "<br>";
    var_dump($ilsignoredeglianelli -> year);
    echo "<br>";
    var_dump($ilsignoredeglianelli -> costodelbiglietto);

    echo "<br>--------------------------<br>";

    // Ritorno al futuro 

    var_dump ($ritornoalfuturo);
    echo "<br><br>";

    var_dump($ritornoalfuturo -> regista);
    echo "<br>";
    var_dump($ritornoalfuturo -> year);
    echo "<br>";
    var_dump($ritornoalfuturo -> costodelbiglietto);

    echo "<br>--------------------------<br>";

    // Esempio di utilizzo del metodo rilasciatoNellAnno
$annoDaVerificare = 1985;

// Bother
var_dump($bother->rilasciatoNellAnno($annoDaVerificare));

// Avatar
var_dump($avatar->rilasciatoNellAnno($annoDaVerificare));

// Il Signore degli Anelli
var_dump($ilsignoredeglianelli->rilasciatoNellAnno($annoDaVerificare));

// Ritorno al Futuro
var_dump($ritornoalfuturo->rilasciatoNellAnno($annoDaVerificare));
?>