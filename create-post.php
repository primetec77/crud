
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
   <div class="container mt-5">
    
    <div class="row">
        <div class="col-md-2"></div>
        <!-- form section -->
        <div class="col-md-8">
            <form method="post" action=""> 
                <input type="text" name="title" placeholder="title" class="form-control" required><br>
                <textarea name="body" id="" cols="30" rows="10" placeholder="body" class="form-control mb-3" required></textarea>
                <div class="text-center"> <button type="submit" name="create" class="btn btn-primary form-control w-50 ">Submit</button></div>
            </form>
        </div>

        <div class="col-md-2"></div>

    </div>
   </div>
</body>
</html>