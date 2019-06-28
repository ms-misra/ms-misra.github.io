<?php
 $db=new mysqli('localhost','id10058662_root','qwerty123456','id10058662_credit')
 or die('Error connecting to MySQL server.');

$from_user=filter_input(INPUT_POST,'From_user');
$to_user=filter_input(INPUT_POST,'To_user');
$credits_tr=filter_input(INPUT_POST,'Credits');

$curent_cr="select * from Users where name='" . $from_user . "'";
$result = mysqli_query($db, $current_cr);
$row=mysqli_fetch_array($result);
$flag=0;
$check=mysqli_query($db,"select * from Users");
while($checklist=mysqli_fetch_array($check))
     {
            if(($from_user == $checklist["NAME"]) || ($to_user == $checklist["NAME"]))
                   $flag+=1;
     }
if($flag < 2)
     {
	    echo "ERROR:Enter valid username." . "<br/>";
     }
else if($credits_tr > $row["CREDITS"])
     {
            echo "ERROR: Credits transferred cannot be more than user's current credits ."  . "<br>";
            
     }
else 
     {
	    //updates Users table information and makes an entry in Transfers table.
            $query = "update Users set CREDITS=CREDITS-" . $credits_tr . " where name='" . $from_user . "'";
            $query2= "update Users set CREDITS=CREDITS+" . $credits_tr . " where name='" . $to_user . "'";           
            $sql="insert into Transfers () values ('$from_user','$to_user','$credits_tr')";		
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
        </header> 
	<nav>
                        <a href="index.php" class="active" > USERS INFO </a>
                        <a href="transaction.php"> TRANSFERS </a>
        </nav>
        <p> Proceed to transfers.</p>
<body>
</html>
