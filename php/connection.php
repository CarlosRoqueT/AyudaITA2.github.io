<?php
$server ="bwhnvnwczxwww11cp6y3-mysql.services.clever-cloud.com";
$user="uwgtbrl7hsecgyis";
$pass="VqmiWM0xtnZPhUykVXpA";
$BD="bwhnvnwczxwww11cp6y3";


$connection=mysqli_connect($server,$user,$pass,$BD);

if(!$connection){

    echo "Error <br>";
    die("Connection failed; ".mysqli_connect_error());

}
//else{

  //  echo "Fine";
//}

?>
