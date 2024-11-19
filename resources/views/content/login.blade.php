<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Tikungan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .container {
        display: flex;
        margin-top: 50px;
    }
    #chef {
        mix-blend-mode: multiply;
    }
    .card {
        width: 40%;
        height: auto;
        margin-left: 10px;
    }
    </style>
</head>

<body>

    <div class="container">
        <img src="../img/Chef.png" id="chef" width="50%" alt="Chef">
        <div class="card card-login mt-5">
            <div class="card-body">
                <h1 class="text-center mt-5">M A S U K</h1>
                <form action="" method="#">
                    <div class="form-floating m-3 mt-5">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating m-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary m-3"><a href="dashboard" class="text-white">Submit</a></button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>