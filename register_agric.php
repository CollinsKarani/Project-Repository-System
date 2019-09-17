<?php
$localhost='localhost';
$user='root';
$password='';
$dbname='agricsdb1';

$conn=mysqli_connect($localhost,$user,$password,$dbname);
if(!$conn){
    echo "Error in connection".mysqli_error($conn);
    exit();
}
// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Welcome To our E-Agriculture Platform \n";
    $response .= "1. Goats Service \n";
    $response .= "2. Sweet Potatoes";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Choose Goats Information to view \n";
    $response .= "1. Goat Diseases \n";
    $response .= "2. Goat Feeds";

} else if ($text == "2") {
    // Business logic for first level response
    $response = "END Sorry!!! This Potatoes Service is loadings soon";
} else if($text == "1*1") {
    // This is a second level response where the user selected 1 in the first instance
    $response = "CON Choose Disease Type \n";
    $response .= "1. Bacterial Disease \n";
    $response .= "2. Endo-parasitic Disease";
}
//check the bacterial diseases
else if($text == "1*1*1") {
 //fetch the diseases from the bacterial diseases
$response = "END The following are the Bacterial Diseases.\n ";
$bac=$conn->query("SELECT * FROM goats_diseases WHERE type='bacterial disease'");
$count=1;
while($row=mysqli_fetch_assoc($bac)){
    $response.=$count.' '.$row['name'];
}
$count++;
}

//check the endo-parasitic diseases
else if($text == "1*1*2") {
//fetch the diseases from the endo-parasitic diseases
 $response = "END The following are the Endo-parasitic Diseases.\n ";
 $bac=$conn->query("SELECT * FROM goats_diseases WHERE type='endo-parasetic disease'");
$count=1;
while($rowen=mysqli_fetch_assoc($bac)){
    $response.=$count.' '.$rowen['name'];
}
$count++;
}
else if($text == "1*2") {
//This is a second level response where the user selected 1 in the first instance
 $response = "END The goats Feeds is loading soon!!!!.\n ";
}
// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
?>