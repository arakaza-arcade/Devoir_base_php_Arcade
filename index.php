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

echo 'Mon nom est '.$nom. ' mon prenom est ' .$prenom.'</br>';

//==================booleen========

$age=15;

if($age <= 15 )
{
 $enfant=true;
 echo 'tu es un enfant </br>';

}else{
$enfant=false;
echo 'tu es adulte </br>';

}
//======================tables==============



$enfant=[ 'nom' => 'Ajeneza',
              'prenom' =>'Audy' 
 
];
      echo 'son nom est ' .$enfant['nom'] . ' et son prenom '. $enfant['prenom']. '<br>';
//============================Structure conditionnelle========================

//================condition if=============
$matin='bonjour';
$soir='bonsoir';

if($matin == 'bonjour'){

    echo 'Bonjour le monde </br>';
}
    if( $soir =='bonsoir'){

        echo 'Bonsoir tous le monde </br> ';
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
             function somme($a,$b)
                {

                    
                    $c=$a+$b;
                    echo 'la somme de a et b edal à ' .$c;
                    
                }
                somme(2,4);
     


    ?>
</body>
</html>