<?php
 $db=new mysqli('localhost','id10058662_root','qwerty123456','id10058662_credit')
 or die('Error connecting to MySQL server.');
 

$value1=filter_input(INPUT_POST,'From_user');

$value2=filter_input(INPUT_POST,'To_user');
$value3=filter_input(INPUT_POST,'Credits');
$value4="select CREDITS from Users where NAME=$value1";


if($value3 <= $value4) 
     {
            $query = "update Users set CREDITS=CREDITS-" . $value3 . " where name='" . $value1 . "'";
            
            $query2= "update Users set CREDITS=CREDITS+" . $value3 . " where name='" . $value2 . "'";
            //mysqli_query($db,$query);
            $sql="insert into Transfers () values ('$value1','$value2','$value3')";
            mysqli_query($db,$sql);
            mysqli_query($db,$query);
            mysqli_query($db,$query2);
        }
        else 
      {
            echo "Credits transferred cannot be more than " . $value4 . "<br>";
            
        }
    

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <title> CREDIT MANAGEMENT </title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
       <h1> CREDIT MANAGEMENT </h1>
       <nav>
                   <a href="index.php" class="active" > USERS INFO </a>
                   <a href="transaction.php"> TRANSFERS </a>

       </nav>
</header>
       <p> Transferred.</p>
    
<body>
</html>

