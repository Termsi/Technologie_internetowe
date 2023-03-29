<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>

<body>

    <div class="container">
        <nav>
            <img src="" alt="logo">
            <div class="links">
                <a href="">Books</a>
            </div>
            <form action="" method="post">
                <input type="login" placeholder="Login">
                <input type="password" placeholder="Password">
                <input type="submit" value="Sign in">
            </form>
        </nav>

        <div class="content">
            <form action="" method="get">
                <input type="text" placeholder="Search">
            </form>
            <button>Book History</button>
            <button>Add books</button>
            <button onclick="location.href='admin-panel-users.html'">User management</button>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publish date</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>365 dni</td>
                    <td>Blanka</td>
                    <td>2021</td>
                    <td><button>Update</button><button>Delete</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>