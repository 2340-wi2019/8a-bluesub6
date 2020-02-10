
<!DOCTYPE HTML>
<html lang ="en">
<meta charset ="utf-8">
<head>
<!-- Jacobi Williams
     assignment8.htm
     INFO2340.WW
     Prof.Thoendel 
     02/9/20
-->
<title>Assignment08</title>
</head>
<?php
    include "includes/header.php";

     $Weight = 180;
     $FIRST_NAME = "Jacobi";
     $LAST_NAME = "Williams";
     $Age = 25;
    function PoundsToKG()
     {
    return global $Weight * (1 /2.2);
    }
    $KGWeight = function PoundsToKG();
    echo $KGWeight
    // Alternative would be 
    // function PoundsToKg($Weight) 
    // {
    // $Weight = 180;
    // return $Weight * (1/2.2);}
    // $KGWeight = function PoundsToKG ($Weight);
    // echo $KGWeight;
    // "For the locally defined variable?"//
?>
<body>
<p>Good morning, ladies and gentlemen!</p>
<p>My name is <?php echo "$FIRST_NAME", echo "$LAST_NAME" ?>
<p>I am <?php echo "$Age" ?> years old. I weigh <?php echo "$Weight" ?> pounds, which is <?php echo "$KGWeight" ?> kg!</p>

</body>
<?php
    include "includes/footer.php";
?>

</html>
