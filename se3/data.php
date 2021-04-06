<?php

function get_price($name)
{
        /* Database INFO */
	$servername = "localhost";
	$username = "koyip1";
	$password = "s4ewab";
	$dbname = "koyip1_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }

       $sql = "SELECT price FROM items WHERE product = '$name'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $price = $row["price"];
      }
    } else {
                     $price = null;
        }

    $conn->close();

    return $price;
}

?>






