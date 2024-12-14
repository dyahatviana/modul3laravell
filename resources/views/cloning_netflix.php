<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix Clone</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #141414;
            color: #fff;
        }

        .navbar {
            background-color: #141414;
        }

        .navbar-brand img {
            width: 120px;
        }

        .banner {
            position: relative;
            background: url('https://assets.nflxext.com/ffe/siteui/vlv3/2c9d01a7-5b8c-4a20-b18c-cc62c12dc66c/32b32513-f226-4b4c-b3ad-35602711dd53/ID-en-20231106-popsignuptwoweeks-perspective_alpha_website_large.jpg') no-repeat center center/cover;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        .movie-row img {
            transition: transform 0.3s ease;
        }

        .movie-row img:hover {
            transform: scale(1.1);
        }

        footer {
            background-color: #141414;
            color: #b3b3b3;
        }

        footer a {
            color: #b3b3b3;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" alt="Netflix Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">TV Shows</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Movies</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">New & Popular</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">My List</a></li>
                </ul>
                <button class="btn btn-danger btn-sm ms-3">Sign In</button>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="banner">
        <div class="text-center">
            <h1 class="display-4 fw-bold">Unlimited movies, TV shows, and more.</h1>
            <p class="lead">Watch anywhere. Cancel anytime.</p>
            <button class="btn btn-danger btn-lg mt-3">Get Started</button>
        </div>
    </div>

    <!-- Movie Rows -->
    <div class="container my-5">
        <h3 class="mb-4">Trending Now</h3>
        <div class="row movie-row text-center">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <img src="https://m.media-amazon.com/images/I/71niXI3lxlL._AC_SY679_.jpg" class="img-fluid rounded"
                    alt="Avengers: Endgame">
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <img src="https://m.media-amazon.com/images/I/71niXI3lxlL._AC_SY679_.jpg" class="img-fluid rounded"
                    alt="Avengers: Endgame">
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <img src="https://m.media-amazon.com/images/I/71niXI3lxlL._AC_SY679_.jpg" class="img-fluid rounded"
                    alt="Avengers: Endgame">
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <img src="https://m.media-amazon.com/images/I/71niXI3lxlL._AC_SY679_.jpg" class="img-fluid rounded"
                    alt="Avengers: Endgame">
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <img src="https://m.media-amazon.com/images/I/71niXI3lxlL._AC_SY679_.jpg" class="img-fluid rounded"
                    alt="Avengers: Endgame">
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <img src="https://m.media-amazon.com/images/I/71niXI3lxlL._AC_SY679_.jpg" class="img-fluid rounded"
                    alt="Avengers: Endgame">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-4">
        <div class="container">
            <p>Questions? Call 000-800-040-1843</p>
            <ul class="list-unstyled d-flex flex-wrap">
                <li class="me-4"><a href="#">FAQ</a></li>
                <li class="me-4"><a href="#">Help Center</a></li>
                <li class="me-4"><a href="#">Terms of Use</a></li>
                <li class="me-4"><a href="#">Privacy</a></li>
                <li class="me-4"><a href="#">Cookie Preferences</a></li>
                <li class="me-4"><a href="#">Corporate Information</a></li>
            </ul>
            <p class="mt-3">Netflix Clone © 2024</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
