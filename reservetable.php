<?php

session_start();

$conn = mysql_connect('localhost', 'root', '');
        mysql_select_db('restaurant', $conn);

    if(isset($_POST['tableID']))
    {
        $tableID = $_POST['id_t'];

        mysql_query("INSERT INTO tables (UserID, tableID) VALUES ('".$_SESSION['userID']."', '".$bookID."', '3')", $conn);
    }
     if ($result)
        echo "table" + $bookId + " has been reserved.";
    else
        echo "An error message!";
}

?>