<?php
// Esercizio 1
// Creare una scuola in OOP, con questa gerarchia di classi: Person classe parent, con classi figlie Student e Teacher. Dare la possibilità di contare ogni oggetto nuovo creato con un metodo counter.

// class persona
// {
//     public $nome;
//     public $cognome;
//     public $età;
//     public static $counter =0;

//     public function __construct($_nome, $_cognome, $_età){
//     $this->nome = $_nome;
//     $this->cognome = $_cognome;
//     $this->età = $_età;
//     self::$counter++;
//     }

//     public function ciao(){
//         echo "ciao a tutti sono un matto sgravato.";
//     }
// };
// $persona1 = new persona("luca", "Bianchi", 33);

// var_dump($persona1);

// class studente extends persona
// {
//     public $media;

//     public function __construct($_nome, $_cognome, $_età, $_media){
//         parent::__construct($_nome, $_cognome, $_età);
//         $this->media = $_media;
//     }
// }
// class insegnante extends persona
// {
//     public $stipendio;
//     public function __construct($_nome, $_cognome, $_età, $_stipendio){
//         parent::__construct($_nome, $_cognome, $_età);
//         $this->stipendio = $_stipendio;
//         }
    
// }
// $studente1 = new studente("gigi", "rossi", 16, 5);
// $insegnante1 = new studente("valeria", "verdi", 45, 1800);
// echo persona::$counter;
// var_dump($studente1) ;
// var_dump ($insegnante1);


// ---------------------------------------------------------------------


// Esercizio 2
// Riprodurre una concessionaria di automobili in OOP , con caratteristiche a scelta (Marchio, Modello, Numero porte, Prezzo….e altri a vostra scelta). Seguite questa gerarchia di classi: Automobile, SUV, Utilitaria, Sportiva, e tenere il conto degli oggetti creati per ogni classe

class automobile 
{
    public $marchio;
    public $modello;
    public $porte;
    private $numeroDiSerie;
    protected $ultimoProprietario;
    public static $counter = 0;

    public function __construct($_marchio, $_modello, $_porte, $_numeroDiSerie, $_ultimoProprietario) {
        $this->marchio = $_marchio;
        $this->modello = $_modello;
        $this->porte = $_porte;
        $this->numeroDiSerie = $numeroDiSerie;
        $this->ultimoProprietario = $_ultimoProprietario;
        self::$counter++;
    }
}
class utilitaria extends automobile{
    public $carburante;
    public function __construct($_marchio, $_modello, $_porte, $_numeroDiSerie, $_ultimoProprietario, $_carburante){
    parent::__construct($_marchio, $_modello, $_porte, $_numeroDiSerie, $_ultimoProprietario);
    $this->carburante = $_carburante;
    } 
}
class suv extends automobile{
    public $carburante;
    public function __construct($_marchio, $_modello, $_porte, $_numeroDiSerie, $_ultimoProprietario, $_carburante){
    parent::__construct($_marchio, $_modello, $_porte, $_numeroDiSerie, $_ultimoProprietario);
    $this->carburante = $_carburante;
    
    } 
}
class sportiva extends automobile{
    public $carburante;
    public static $count = 0;
    public function __construct($_marchio, $_modello, $_porte, $_numeroDiSerie, $_ultimoProprietario, $_carburante){
    parent::__construct($_marchio, $_modello, $_porte, $_numeroDiSerie, $_ultimoProprietario);
    $this->carburante = $_carburante;
    self::$count++;
    }
    public static function Nauto(){
        echo "Ci sono " . self::$count ." ".  "auto sportive \n";
    }
}
$automobile1= new automobile ("Toyota", "Yaris", 5, "934085", "Luca Verdi");
// var_dump($automobile1);

$sportiva1= new sportiva ("ferrari", "purosangue", 3, 6541845, "Nuova", "benzina");
$sportiva2= new sportiva ("ferrari", "roma", 3, 6541845, "Nuova", "benzina");
// var_dump($sportiva1);
Sportiva::Nauto();
$suv1= new suv ("alfaromeo", "stelvio", 5, 5878442, "Dario Rossi", "Diesel");
// var_dump($suv1);
 ?>