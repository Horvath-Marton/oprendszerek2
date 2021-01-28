<?php
//Step1
 $db = mysqli_connect('remotemysql.com','BLoxUleOVz','Hdgj6JUpmj','BLoxUleOVz')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head> <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css" />
 </head>
 <body>
 <div id=main>
 <h1> Sikeres csatlakozás a MySQL szerverre</h1>
 <a href="./uploadFormDB.html">Sorozat hozzáadása</a><br>
<?php
//Step2
$query = "SELECT * FROM sorozat";
mysqli_query($db, $query) or die('Error querying database.');

//Step3
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
    echo '<table> <tr> <th>'."ID".'</th><th>'."Cím".'</th><th>'."Műfaj".'</th><th>'."Évad:".'</th></tr><br>';
    //echo " ID:Cím:Műfaj:Évad".'<br>';
while ($row = mysqli_fetch_array($result)) {
    echo '<tr> <td>'.$row['id'] . '</td><td>' . $row['cim'] . '</td><td>' . $row['mufaj'] . '</td><td>' . $row['evad'] .'</td></tr><br />';
    //echo $row['id'] . ' ' . $row['cim'] . ': ' . $row['mufaj'] . ' ' . $row['evad'] .'<br />';
}
echo '</table>';
//Step 4
mysqli_close($db);
?>
</div>
</body>
</html>