<?php
 //$connect = mysqli_connect('localhost','id10058662_root','qwerty123456');
 $db=new mysqli('localhost','id10058662_root','qwerty123456','id10058662_credit')
 or die('Error connecting to MySQL server.');
?>
<!DOCTYPE html>
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
                   <a href="index.php"> USERS INFO </a>
                   <a href="transaction.php" class="active"> TRANSFERS </a>

              </nav>
      </header>
          <p> This views all the transactions done so far. </p>
    
      <table>
             <tr>
             <th> "TRANSFERRED FROM" </th>
             <th> "TRANSFERRED TO" </th>
             <th> "CREDITS" </th>
             </tr>

       <?php
       $query = "SELECT * FROM Transfers";
       $result = mysqli_query($db, $query);
       //$row = mysqli_fetch_array($result);

       while ($row = mysqli_fetch_array($result)) 
       {
            echo "<tr>";
            echo "<td>" . $row["From_user"] . "</td>";
            echo "<td>" . $row["To_user"] . "</td>";
            echo "<td>" . $row["Credits"] . "</td>";
            echo "</tr>";
       }
       
mysqli_close($db);
?>
</table>
</body>
</html>

