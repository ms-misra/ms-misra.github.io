<?php
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
                <h1> CREDIT MANAGEMENT- HOME PAGE </h1>
                <nav>
                         <a href="index.php" class="active" > USERS INFO </a>
                         <a href="transaction.php"> TRANSFERS </a>
	        </nav>
	</header>
        <p> This is a dynamic website which transfers credits between two users. </p>
    
        <main>
                <table>
                        <tr>
                        <th> NAME </th>
                        <th> EMAIL </th>
                        <th> CREDITS </th>
                        </tr>
                        <?php
                             $query = "SELECT * FROM Users";
                             $result = mysqli_query($db, $query);
                             while ($row = mysqli_fetch_array($result)) 
                            {
                                 echo "<tr>";
                                 echo "<td>" . $row["NAME"] . "</td>";
                                 echo "<td>" . $row["EMAIL"] . "</td>";
                                 echo "<td>" . $row["CREDITS"] . "</td>";
                                 echo "</tr>";
                            }
                        mysqli_close($db);
                        ?>
                 <form action="transfer.php" method="post"/>
                 <p> From_user: <input type="text" name="From_user"/></p>
                 <p> To_user: <input type="text" name="To_user"/></p>
                 <p> Credits: <input type="int" name="Credits"/></p>
                 <input type="submit" value="submit"/>
                 </form>
                 </table>
         </main>
</body>
</html>
