<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Aplikasi</title>
    <style>
        body {
            background: #f8f9fa;
        }
        .card {
            margin-top: 100px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .card-header {
            background: #007bff;
            color: white;
            border-radius: 10px 10px 0 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Benteng Marlborough</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="index.php">Home</a>
                    <a class="nav-item nav-link active" href="sejarah.php">Sejarah</a>
                    <a class="nav-item nav-link active" href="foto.php">Foto</a>
                    <a class="nav-item btn btn-danger tombol" href="login.php">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid bg-dark text-white">
        <div class="container text-center">
            <h1 class="display-4">WISATA SEJARAH ‘Benteng Marlborough</h1>
            <p class="lead">Jl. Kampung Cina / Bengkulu</p>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Form Login</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="cek_login.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="tusername" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="tpassword" placeholder="Password" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary" name="blogin"><i class="fa fa-sign-in" aria-hidden="true"></i> Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Footer -->
        <div class="row footer">
            <div class="col text-center">
                <p>2024 Muhammad Bais Al Hakiki</p>
            </div>
        </div>
        <!-- Akhir Footer -->
    </div>
    <!-- Akhir Container -->

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
