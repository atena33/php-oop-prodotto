<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // Provare a immaginare una classe come quella vista a lezione, definendo le variabili
      // d'ambiente per disegnare un ipotetico prodotto di magazzino;
      // Definire anche costruttore completo (tutti le variabili che avete creato)
      // + printMe per fare il log, nell'ottica di quanto visto questa mattina a lezione

      //Definisco la classe con le sue variabili
      class Bicicletta{
        public $marca;
        public $rapporti;
        public $colore;

        //Faccio la funzione per richiamare come argomenti le variabili
        function __construct($marca, $rapporti, $colore){
          $this -> marca = $marca;
          $this -> rapporti = $rapporti;
          $this -> colore = $colore;
        }

        //Faccio la funzione per stampare
        public function printMe(){
          echo 'Bicicletta di marca' . ' ' . $this -> marca
          . ' '. 'con rapporti' . ' ' . $this -> rapporti . ' '
          . 'di colore' . ' ' . $this -> colore . '<br>';
        }
      }



     //Faccio gli oggetti valorizzando le variabili e richiamo la funzione per stampare
      $sq1 = new Bicicletta('Bianchi', 24, 'nero');
      // $sq1 -> marca = 'Bianchi';
      // $sq1 -> rapporti = 24;
      $sq1 -> printMe();

      $sq2 = new Bicicletta('Rossi', 18, 'giallo');
      // $sq2 -> marca = 'Rossi';
      // $sq2 -> rapporti = 18;
      $sq2 -> printMe();
     ?>

  </body>
</html>
