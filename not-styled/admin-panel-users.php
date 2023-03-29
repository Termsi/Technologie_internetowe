<?php
require('./elements/head.php');
?>
<div class="content">
    <form action="" method="get">
        <input type="text" placeholder="Search">
    </form>
    <button>User History</button>
    <button onclick="location.href='admin_panel_books.php'">Book management</button>
    <button>User Add</button>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Mail</th>
            <th>date of birth</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Maciej</td>
            <td>Nowak</td>
            <td>maciejnowak@wp.pl</td>
            <td>22.04.2001</td>
            <td><button>Delete</button><button>Edit</button><button>Return</button></td>
        </tr>
    </table>
</div>
<?php
require('./elements/footer.php');
?>