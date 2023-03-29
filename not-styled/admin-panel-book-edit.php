<?php
require('./elements/head.php');
require('./scripts/database_connection.php');

    $q = "SELECT * FROM `books` WHERE id='$_GET[id]'";
    if (mysqli_query($conn, $q)) {
        $result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");
        $row = mysqli_fetch_row($result);
    } else {
        echo "Error: " . $q . "<br>" . mysqli_error($conn);
    }
?>
<form action="" method="POST">
    <input type="text" name="title" placeholder="Title" value="<?php echo $row[1]?>">
    <textarea placeholder="Description" name="desc" rows="4" cols="50"><?php echo $row[2]?></textarea>
    <input type="number" name="year" min="1500" max="2099" step="1" placeholder="year" value="<?php echo $row[3] ?>">
    <input type="submit" name="submit" value="Edit">
</form>
<?php
require('./elements/footer.php');
if(isset($_POST['submit'])) {
    $book_title = $_POST['title'];
    $book_description = $_POST['desc'];
    $book_year = $_POST['year'];
    $sql = "UPDATE `books` SET `title` = '$book_title', `description` = '$book_description', `publish_date` = $book_year WHERE `books`.`Id` = $_GET[id]";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Refresh:0");
}
?>
