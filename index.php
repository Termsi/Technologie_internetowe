<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>

<body>
    <div class="container">
        <?php require('./elements/header.php'); ?>
        <main>
            <h1>Zaloguj Się!</h1>
            <form class="forms" action="" method="post">
                <div class="subgrid1"><label for="uname"><b>Username</b></label></div>
                <div class="subgrid2"><input type="login" placeholder="Login"></div>
                <div class="subgrid3"><label for="psw"><b>Password</b></label></div>
                <div class="subgrid4"><input type="password" placeholder="Password"></div>
                <div class="subgrid5"><input type="submit" value="Sign in"></div>
            </form>
        </main>
        <div id="sidebarl">sidebarl</div>
        <div id="sidebarr">sidebarr</div>
        <?php require('./elements/footer.php'); ?>
    </div>
</body>

</html>



