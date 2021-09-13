<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

<div>





    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">


            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

                <li><a href="/admin.php" class="nav-link px-2 link-secondary">Home</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="/admin.php?show=news" class="btn btn-primary">News</a>
                <a href="/admin.php?show=users" class="btn btn-outline-primary me-2">Users</a>
                <a href="/admin.php?show=logout" class="btn btn-outline-primary me-2">Logout</a>
                <p class="btn btn-light p-10 disabled"  >Logged as: <?=$_SESSION['username']?></p>
            </div>


        </header>

        <?php include_once 'views' . DIRECTORY_SEPARATOR . $this->page ?>




    </div>


    <footer class="pt-3 mt-4 text-center text-muted border-top">
        © 2021
    </footer>



</div>


</body>
<script src="../js/main.js"></script>
</html>