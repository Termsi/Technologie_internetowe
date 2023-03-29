<?php
require('./elements/head.php');
?>
<div class="content">
    <form action="" method="get">
        <input type="text" placeholder="Search">
    </form>
    <button>Book History</button>
    <button onclick="location.href='admin_panel_users.php'">User management</button>
    <button onclick="location.href='admin_panel_book_add.php'">Add books</button>
    <table>
        <tr>        
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publish date</th>
            <th>Actions</th>
        </tr>
        <?php
        require('./scripts/database_connection.php');
        $q = "SELECT * FROM `books`";
        $result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");
        while($row = mysqli_fetch_row($result))
        {
echo <<< TEST
<tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td><button onclick="location.href='admin_panel_book_edit.php?id=$row[0]'">Update</button><button onclick="location.href='./scripts/database_book_delete.php?id=$row[0]'">Delete</button>
            </td>
        </tr>
TEST;
        }
        ?>
    </table>
</div>
<?php
require('./elements/footer.php');
?>
