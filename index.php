<?php
       if(isset($_POST["form-submit"])){

        echo "bangla";


       }












    ?>
<!DOCTYPE html>
<html lang="en">

<!--Bootstrap core css-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="text-center">
    <form action="" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Please Sign in</h1>
        <label for="inputEmail">Email-address</label>
        <input type="email" name="email" class="form-control" required autofocus>
        <label for="inputPassword">Password</label>
        <input type="password"  name="password" class="form-control" required>
        <button name="form-submit" class="form-submit btn btn-lg btn-primary btn-block d-grid gap-2 col-12 mx-auto">sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>

    </form>

   
   
</body>
</html>