<?php
$bool = true;
$vrai=0 ;
function checkMdp(string $mdp):bool
{
    $i=0;
    $j=0;
    $k=0;
    $taille = strlen($mdp);
    $tablox = str_split($mdp);
    $bool = true;
    foreach ($tablox as $index => $lettre) {
        if (ctype_upper($lettre) == true and $i==0) {
            $i++;
        }
        if (ctype_lower($lettre) == true and $j==0) {
            $j++;
        }
        if (ctype_digit(($lettre)) == true and $k==0) {
            $k++;
        }
    }
    if ($i == 0 or $j == 0 or $k == 0 or $taille<8) {
        $bool = false;
    }
    return $bool;
}

function vraioufaux(bool $arg):string{
    if($arg==false){
        $vrai="false";
    }
    else{
        $vrai="true";
    }
    return $vrai;
}
// methode 2
function testmdp($mdp){
    $message="";
    $i=0;
    $j=0;
    $k=0;
    $taille = strlen($mdp);
    $tablox = str_split($mdp);
    $bool1 = true;
    foreach ($tablox as $lettre) {
        if (ctype_upper($lettre) == true and $i==0) {
            $i++;
        }
        if (ctype_lower($lettre) == true and $j==0) {
            $j++;
        }
        if (ctype_digit(($lettre)) == true and $k==0) {
            $k++;
        }
    }
    if ($i == 0 or $j == 0 or $k == 0) {
        $message="Il vous faut une majuscule, une minuscule, et un chiffre, au minimum";
        $bool1 = false;
    }
    else if ($taille<8)
    {
        $bool1=false;
        $message = "Votre mot de passe doit faire a minima 8 caractères de longueur.";
    }
    return array(1=>$message,2=>$bool1);
}
function vraioufaux2($argg)
{
    if ($argg[2] === false) {
        $v = "faux";
    } else {
        $v = "vrai";
    }
    return $v;
}
$result1 = testmdp("blaPPPubla");
$mess = vraioufaux2($result1);





?>