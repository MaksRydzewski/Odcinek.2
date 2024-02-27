<?php
$login=$_POST["login"];
$haslo=$_POST["haslo"];
$host="localhost";
$user="root";
$pass="";
$db="odcinek.2_self";
$connect=new mysqli($host,$user,$pass,$db);

$sql="SELECT * FROM uzytkownicy WHERE user ='$login' and pass='$haslo';";
$result = $connect->query($sql);

if($result->num_rows >0){

    echo "Witaj $login! [<a href='index.php'>Wyloguj</a>]<br><br>";
    while($row = $result->fetch_assoc()) {
        echo "Drewno: " . $row["drewno"]. " | Kamień: " . $row["kamien"]. " | Zboże: " . $row["dnipremium"]."<br><br>";
        $email=$row["email"];
        $dnipremium=$row["dnipremium"];
      }
    } else {
      echo "0 results";
    }
    echo "<b>Email</b>: $email<br>";
    echo "<b>Dni premium</b>: " . $dnipremium;
    $connect->close();
?>