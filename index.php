<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//==================variable================

$nom='Arakaza';
$prenom="Arkade";

echo 'Mon nom est '.$nom. ' mon prenom est ' .$prenom;

//==================booleen========

$age=15;

if($age <= 15 )
{
 $enfant=true;
 echo 'tu es un enfant';

}else{
$enfant=false;
echo 'tu es adulte';

}
//======================tables==============



$enfant=[ 'nom' => 'Ajeneza',
              'prenom' =>'Audy',
 
];
echo 'son nom est ' .$enfant['nom'] . ' et son prenom '. $enfant['prrenom'];
//============================Structure conditionnelle========================

//================condition if=============
$age=15;

if($age >= 15){

    echo 'tu es adulte </br>';
}
else {

    echo 'tu es un enfant</br>';
}

//******switch case */
    $ville="buja";
    switch($ville){

            case "buja":
                echo "le capitale du burundi </br>";
            break;
            case "gitega":
                echo "capitale politique du burundi</br>";
            break;
            default:
                echo "pas d\'autre capitale </br>";
            break;


    }
    //=======================les boucles=================================

//========boucle while=======

$number=0;
while($number < 5){

        echo '<p>'.$number.'</p>'; // afficher tous les nombres inferieur a 10

        $number++; //parcourir toutes les valeurs inferieur de 10
}
//====boucle do while=====

    do{

        echo'<p>' .$number.'</p>';
        $number++;

    }while($number < 5); 

//======boucle for=======
for($i=0;$i<2;$i++)
{
    echo 'bonjour tous le monde'; 
    
}

    ?>
</body>
</html>