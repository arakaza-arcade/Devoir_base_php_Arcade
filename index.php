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
$matin='bonjour';
$soir='bonsoir';

if($matin == 'bonjour'){

    echo 'Bonjour le monde </br>';
}
    if( $soir='bonsoir'){

        echo 'Bonsoir tous le monde </br> ';
}

    ?>
</body>
</html>