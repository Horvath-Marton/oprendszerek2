<?php

$cim = $_POST['cim'];
$mufaj = $_POST['mufaj'];
$evad = $_POST['evad'];

echo '<head> <meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>';

if (!empty($cim)){
if (!empty($mufaj)){
if (!empty($evad)){

	//$servername = "localhost";
//$username = "root";
//$password = "";
//$db = "gallery";

$conn = new mysqli('remotemysql.com','BLoxUleOVz','Hdgj6JUpmj','BLoxUleOVz');

//if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $saveFile)){
//	echo "<h1>Picture Uploaded</h1><br>".$_FILES['fileToUpload']['name']." was saved<br>";
//	echo "<img src='".$saveFile."'><br>";
//	echo "Picture Description: ".$description."<br>";
//	echo "Picture Tags: ".$tags."<br>";
//} else {
//	echo "Upload Did Not Work<a href='./index.php'> Go Back</a>";
//}

if ($conn->connect_error){
	die("Connection Failed: ".$conn->connect_error);
}	

$sql = "insert into sorozat(cim, mufaj, evad)values('$cim','$mufaj','$evad')";

if ($conn->query($sql)=== TRUE){	
	echo "Sikeres hozzáadás";
} else {
	echo "error";
}

//echo "<h3>Diagnostic Info:</h3>";
//echo "<br>Tmp File Name: ".$_FILES['fileToUpload']['tmp_name']."<br>";
//echo "saveFile Variable Valuable: ".$saveFile;

}else{
	echo "Az évad nem lehet üres";
	echo '<br><br><br><br><a href="index.php">Vissza az adatbázishoz</a>'; 
	die();
}

}else{
	echo "A műfaj nem lehet üres";
	echo '<br><br><br><br><a href="index.php">Vissza az adatbázishoz</a>'; 
	die();
}

}else{
	echo "A cím nem lehet üres";
	echo '<br><br><br><br><a href="index.php">Vissza az adatbázishoz</a>';
	die();
}


?>
<br><br><br><br>
<a href="index.php">Vissza az adatbázishoz</a> 