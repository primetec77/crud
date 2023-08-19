<?php
include "config/db_connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form to post</title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
   <div class="container m-auto w-50 mt-5">
   <form action="" method="post">
        <input type="text" name="title" placeholder="title" class="form-control mb-3">
        <textarea name="body" id="" cols="30" rows="10" class="form-control mb-3" placeholder="content"></textarea>
        <button type="submit" class="btn btn-primary form-control">Submit</button>
    </form>
   </div>
</body>
</html>