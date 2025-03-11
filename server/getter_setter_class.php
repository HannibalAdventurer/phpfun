<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link style="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<a href="http://localhost:8000/index.html">Return</a>

<?php 
class Chien {
    private $nom;
    private $race;

    // Constructeur
    public function __construct($nom, $race) {
        $this->nom = $nom;
        $this->race = $race;
    }

    // Getter pour le nom
    public function getNom() {
        return $this->nom;
    }

    // Setter pour le nom
    public function setNom($nom) {
        $this->nom = $nom;
    }

    // Getter pour la race
    public function getRace() {
        return $this->race;
    }

    // Setter pour la race
    public function setRace($race) {
        $this->race = $race;
    }
}

$ch1=new Chien ("Rio","Berger allemand");
$ch2=new Chien("Rocky","husky");
echo "<br>";
echo $ch1->getNom()." is ".$ch1->getRace()."\n";
echo "<br>";
echo $ch2->getNom()." is ".$ch2->getRace()."\n";
echo "<br>";
$ch1->setRace("Labrador");
$ch1->setNom("Lucky");

echo $ch1->getNom()." is ".$ch1->getRace()."\n";

?>

</body>
</html>