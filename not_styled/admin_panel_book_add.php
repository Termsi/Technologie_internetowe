<?php
require('./elements/head.php');

?>
<form action="" method="POST">
    <input type="text" name="title" placeholder="Title">
    <textarea placeholder="Description" name="desc" rows="4" cols="50"></textarea>
    <input type="number" name="year" min="1500" max="2099" step="1" placeholder="year">
    <input type="submit" name="submit" value="Add">
</form>
<?php
require('./elements/footer.php');
if(isset($_POST['submit'])) {

    require('./scripts/database_connection.php');
    $book_title = $_POST['title'];
    $book_description = $_POST['desc'];
    $book_year = $_POST['year'];
    $sql = "INSERT INTO `books` (`Id`, `title`, `description`, `publish_date`) VALUES (NULL, '$book_title', '$book_description', $book_year)";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
