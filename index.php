<?php
$euro=6.55957;
printf("%.2f FF<br />",$euro);
$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;
// echo $money affichera "123.1";
echo "affichage sans printf : " . $money . "<br />";
$monformat = sprintf("%01.2f", $money);

// echo $monformat affichera "123.10"
echo "affichage avec printf : " . $monformat . "<br />";

$year="2002";
$month="4";
$day="5";
$varDate = sprintf("%04d-%02d-%02d", $year, $month, $day) ;

// echo $varDate affichera "2002-04-05"
echo "affichage avec sprintf : " . $varDate;


echo "Fichier : " . __FILE__ . ", ligne : " . __LINE__ ;

$myVar = "KO";

if ($myVar == "OK")
{
    echo"C'est bon<br>";
}
else
{
    echo"<br>Ouh la la pas bien !<br>"; // Message affiché dans la page web
    $message = "Ouh la la pas bien ".__FILE__." ".__LINE__;
    error_log($message);
}
echo $_SERVER["DOCUMENT_ROOT"];
echo $_SERVER["SERVER_PORT"]."<br>";
echo $_SERVER["REMOTE_ADDR"]."<br>";
echo $_SERVER["SERVER_ADDR"];
//phpinfo();
function nbImpair(){
    for($a=0; $a<=150; $a++)
    {
        if($a%2!=0)
        {
            echo $a;
        }

    }
}
function punition(){
    for($i=1; $i<=500; $i++){
        echo "Je dois faire des sauvegardes régulières de mes fichiers sinon quand OVH crâme je suis dans la merde parce que j'ai pas fait de backup";
    }
}
$a=0;
$b=0;
$z=0;
$u=0;

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<table class="table table-bordered ">
    <tr>
    <th>

    </th>
        <?php
        for( $u=1; $u<=12; $u++)
        {
            echo "<th>".$u."</th>";
        } ?>
    </tr>
<?php
for($z=1;$z<=12;$z++)
{
    echo "<tr>"."<td>".$z."</td>";

    for( $b=1; $b<=12; $b++)
    {
        echo "<td>".$z*$b."</td>";
    }
    echo "</tr>";
}

?>

</table>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>