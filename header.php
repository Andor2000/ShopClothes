<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background: url('img/shop/fon.jpg') center no-repeat fixed;
            background-size: cover;
        }
    </style>
</head>

<body class="body">
    <div class="container">
        <header class="p-3 mb-3 border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                        <img src="img/shop/logo.png" alt="mdo" width="128" height="64" class="rounded-circle">
                    </a>

                    <ul class="nav col-12 col-lg-auto mr-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-4 link-secondary">Джинсы</a></li>
                        <li><a href="#" class="nav-link px-4 link-secondary">Футболки</a></li>
                        <li><a href="#" class="nav-link px-4 link-secondary">Платья</a></li>
                        <li><a href="#" class="nav-link px-4 link-secondary">Костюмы</a></li>
                    </ul>

                    <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form> -->

                    <div class="dropdown text-end mr-5">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="img/shop/user.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            <span class="position-absolute top-0 start-80 translate-middle badge rounded-pill bg-danger">
                                100
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="#">Корзина</a></li>
                            <li><a class="dropdown-item" href="#">История заказов</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Войти</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>