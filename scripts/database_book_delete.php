<?php
require('./database_connection.php');
    $sql = "DELETE FROM `books` WHERE `books`.`Id` = $_GET[id]";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header('Location: ../admin_panel_books.php');
    ?>