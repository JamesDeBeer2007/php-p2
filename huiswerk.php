<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // hello world
    echo "Hello <b> World </b>!";
    //

echo "<br>";
echo "<br>";

    // 3.1
    
    date_default_timezone_set("Europe/Amsterdam");
    $today = date("l d F y");
    echo "Vandaag is het: $today";

    echo "<br>";

    $dayOfYear = date("z");
    echo "Vandaag is het de $dayOfYear van het jaar.";

    echo "<br>";

    $dayOfTheWeek = date("l");
    $dayOfTheWeekNumerical = date("w");
    echo "$dayOfTheWeek is de $dayOfTheWeekNumerical dag van de week.";

    echo "<br>";

    $monthOfTheYear = date("F");
    $totalDaysInMonth = date("t");

    echo "De maand $monthOfTheYear heeft in totaal $totalDaysInMonth dagen.";

    echo "<br>";

    $year = date("Y");
    $leapYear = date("L");

    if ($leapYear == 1) {
        echo "$year is een schrikkeljaar!";
    } elseif ($leapYear == 0) {
        echo "$year is geen schrikkeljaar!";
    } else {
        echo "Unexpected result from date('L')";
    }

    //

    echo "<br>";
    echo "<br>";

    // 4.1
    date_default_timezone_set("Europe/Amsterdam");

    $time = date("H");
    echo "$time";

    echo "<br>";

    if ($time >= 6 && 12 >= $time){
        echo "Het is Ochtend";
    } elseif ($time >= 12 && 18 >= $time){
        echo "Het is Middag";
    } elseif ($time >= 18 && 24 >= $time){
        echo "Het is Avond";
    } elseif ($time >= 24 && 6 >= $time){
        echo "Het is Nacht";
    };
    //

    // 4.2
    
   date_default_timezone_set("Europe/Amsterdam"); // time zone

   $time2 = date("H"); // variable voor uren
   $result = match ($time2) { // kiest het rusultaat base on uur
       '6', '7', '8', '9', '10', '11' => 'Het is Ochtend',
       '12', '13', '14', '15', '16', '17' => 'Het is Middag',
       '18', '19', '20', '21', '22', '23' => 'Het is Avond',
       '24', '1', '2', '3', '4', '5' => 'Het is Nacht',
       default => 'Error',
   };
   echo $result; // laat resultaat zien
    //

    // 4.3
   $nummer1 = 10;
   $nummer2 = 20;

   if ($nummer1 >= $nummer2){
    echo ($nummer1 * 2 + $nummer2);
   } else {
    echo ($nummer2 * 2 + $nummer1);
   };
   echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];
    //

    // 4.4
    $priceOld = 60;
    $price = 1;

    if ($priceOld >= 150) {
        $procent = 1.19;
        $price = $priceOld * $procent;
        echo "Oude prijs: $priceOld. na verhoging van $procent is de prijs: $price";
    } elseif ($priceOld <= 55) {
        $procent = 1.11;
        $price = $priceOld * $procent;
        echo "Oude prijs: $priceOld. na verhoging van $procent is de prijs: $price";
    } else{
        $procent = 1.16;
        $price = $priceOld * $procent;
        echo "Oude prijs: $priceOld. na verhoging van $procent is de prijs: $price";
    };
    //

    // 4.5
    $number = 4;
    if($number % 2 == 0){ 
        echo "is $number even? Ja";  
    } 
    else{ 
        echo "is $number even? Nee";  
    };
    //

    // 4.7
    $spaargeld = 750.82;

    if ($spaargeld <= 750){
        echo "Broke je mist ".(1000-$spaargeld);
    }  elseif ($spaargeld >= 1000){
        echo "Je bent niet meer broke, je kan de telefoon kopen van 1k en je hebt dan nog ".($spaargeld-1000)." buck over.";
    }   elseif($spaargeld >= 750){
        echo "Dumbass je mist nog ".(1000-$spaargeld);
    };
    //

    // 4.9
    $a = 5;
    $b = 4;
    $c = 7;
    echo "Zijde 1: $a";
    echo "<br>";
    echo "Zijde 2: $b";
    echo "<br>";
    echo "Zijde 3: $c";
    echo "<br>";
    if (($a + $b > $c) && ($b + $c > $a) && ($a + $c > $b)) {
        echo "Kan wel!";
    } else {
        echo "Kan niet !grrr";
    };
    //

    // 4.10
    $x = 12; 
    $antwoord = 0;
    $calc = ''; 
    
    for ($i = 0; $i <= $x; $i++) {
        $antwoord += $i;
        $calc .= ($i != 0) ? " + " . $i : $i;
    };
    
    echo " Gekozen getal is: $x";
    echo "<br>";
    echo "Berekening voor dit getal is:";
    echo "<br>";
    echo "$calc = $antwoord";
    //

    // 4.12
    $dollar = 1.09;
    $pond = 0.86;
    $yen = 157.49;
    $ant = 1.97;
    echo "<table boder = '1' ";
    for($euro = 1; $euro <= 10; $euro++){
    echo "<tr>";
    echo "<td>$euro</td>";
    echo "<td>" . ($euro * $dollar) . "</td>";
    echo "<td>" . ($euro * $pond) . "</td>";
    echo "<td>" . ($euro * $yen) . "</td>";
    echo "<td>" . ($euro * $ant) . "</td>";
    echo "</tr>";
        } ;
    echo "</table>";
    //

    // 4.14
    // nuh uh
    //

    // 4.15
    // nuh uh
    //

    // 5.1
    echo"het antwoord voor opdracht 1 ( hoofstuk 5, paragraaf 1 ) is A";
    //

    // 5.1
    echo"a = false";echo"<br>";
    echo"b = true";echo"<br>";
    echo"c = true";echo"<br>";
    echo"d = false";echo"<br>";
    echo"e = false";echo"<br>";
    echo"f = true";echo"<br>";
    echo"g = true";echo"<br>";
    echo"h = false";echo"<br>";    
    //

    // 5.2
    echo"opdracht 2";echo"<br>";
    echo"a = 1.0";echo"<br>";
    echo"b = 1.0";echo"<br>";
    $b = 1.0;
    $b += 1.5 * 3 + ($b + 1);
    echo "c = $b\n";echo"<br>";
    $b -= 3 / 1.5 + ($b + 1);
    echo "d = $b\n";echo"<br>";
    $b *= 2.5 * 6 / 5 + ($b + $b);
    echo "e = $b\n";echo"<br>";
    //

    // 5.3
    echo"opdracht 3";echo"<br>";
    echo"b,c en d zijn het zelfde";
    //

    // 5.4
    echo"opdracht 4";echo"<br>";
      echo"ja, ze zijn gelijk, omdat ze het zelfed doen";
    //

    // 5.5
    echo"opdracht 5";echo"<br>";
      $x = 3;
      switch ($x + 3) {
        case 3: $y = 0;
        case 6: $y = 1;
        default: $y += 01;
      };
      echo"y = $y";
    //

    // 6.1
    session_start(); // start het op

    if(isset($_SESSION['bezoekjes'])){ // als variable niet stuk is dan ++ vieuw score
       ++ $_SESSION['bezoekjes'];
    } else {
       $_SESSION['bezoekjes'] = 1; // anders is het 1
    }
    
    echo "Je hebt de page " . $_SESSION['bezoekjes']. " keer deze keer gerefreshed"; // laat de resultaat zien
    //

    // 6.2
    if(isset($_COOKIE['bezoekjes'])) {
        $bezoekjes = ++$_COOKIE['bezoekjes'];
    } else {
        $bezoekjes = 1;
    }
    
    setcookie('bezoekjes', $bezoekjes, time() + 3600 * 24 * 7 * 4 * 12);
    
    echo "Dit jaar heb je deze pagina al: " . $bezoekjes . " keer bekeken"; 
    //
    ?>
</body>
</html>