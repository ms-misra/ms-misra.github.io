<?php
 $db=new mysqli('localhost','id10058662_root','qwerty123456','id10058662_credit')
 or die('Error connecting to MySQL server.');
 

$value1=filter_input(INPUT_POST,'From_user');
$value2=filter_input(INPUT_POST,'To_user');
$value3=filter_input(INPUT_POST,'Credits');

$value4="select * from Users where name='" . $value1 . "'";
$result = mysqli_query($db, $value4);
$row=mysqli_fetch_array($result);

if($value3 > $row["CREDITS"])
     {
         echo "ERROR: Credits transferred cannot be more than user's current credits ."  . "<br>";
            
        }
        else 
      {
            $query = "update Users set CREDITS=CREDITS-" . $value3 . " where name='" . $value1 . "'";
            
            $query2= "update Users set CREDITS=CREDITS+" . $value3 . " where name='" . $value2 . "'";
           
            $sql="insert into Transfers () values ('$value1','$value2','$value3')";
		
            mysqli_query($db,$sql);
            mysqli_query($db,$query);
            mysqli_query($db,$query2);
            
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
       <p> Proceed to transfers.</p>
    </header>
<body>
	</html>
