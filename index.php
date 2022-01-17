<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta titolo="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex. oop php</title>
</head>
<body>
    <!--  * DEFINIRE CLASSE Film:
     *      Attributi:
     *      - titolo
     *      - sottotiolo
     *      - regista
     * 
     *      Metodi:
     *      - costruttore che accetta titolo
     *      - getFullTitle: 
     *          Se sottotitolo presente:
     *            restituisce "titolo: sottotitolo" 
     *          Se sottotiolo assente:
     *            restituisce "titolo" 
     *      - __toString: 
     *          Se regista presente:
     *            restituisce "fullTitle | regista"
     *          Se regista assente:
     *            restituisce "fullTitle | ???"
     * 
     * UTILIZZO OGGETTI Film:
     * 
     *      Generare 3 istanze della classe Film:
     *      - uno con solo il titolo
     *      - uno con titolo e sottotitolo
     *      - uno con titolo, sottotiolo e regista
     * 
     *      Stampare tutti gli oggetti tramite toString (implicito)
     * 
     *  RISULTATO ATTESO:
     * 
     *      Matrix | ???
     *      Fantozzi 2: il ritorno di fantozzi | ???
     *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd -->
    
    <?php

        class Film {

            public $titolo;
            public $sottotitolo;
            public $regista;
            
            public function __construct($titolo, $sottotitolo) {

                $this -> titolo = $titolo;
                $this -> sottotitolo = $sottotitolo;
            }

            public function getFullTitle() {
                //se sottotitolo é true me lo stampa, altrimenti "|"
                 if ($this -> sottotitolo) {

                    return $this -> titolo . " : " . $this -> sottotitolo;

                }  else  {

                    return $this -> titolo . " | ";

                }
                                
            } 

            public function __toString() {

                if ($this -> regista) {

                    return $this -> getFullTitle() . " : " . $this -> regista;

                }  else  {

                    return $this -> getFullTitle() . " ??? ";

                }

            }
        }

        $movie1 = new Film("Matrix ", "");
        $movie2 = new Film("Fantozzi 2 ", " il ritorno di fantozzi ");
        $movie3 = new Film("Peter Pan ", " il ritorno all'isola che non c'e' ");

        $movie1 -> regista = "";
        $movie2 -> regista = "";
        $movie3 -> regista = "Robin Budd";

        echo "<br>" . "movie1 : " . $movie1 . "<br>";
        echo "<br>" . "movie2 : " . $movie2 . "<br>";
        echo "<br>" . "movie3 : " . $movie3 . "<br>"; 

    ?>

</body>
</html>