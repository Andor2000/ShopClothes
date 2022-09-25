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
            background-color: #e4e4e4b0;
            /* background: url('img/shop/fon.jpg') center no-repeat fixed; */
            background-size: cover;
        }
    </style>
</head>

<body class="body">

    <div style="width: 80%; margin-left:auto; margin-right:auto;">
        <nav class="navbar navbar-expand-md " aria-label="Fourth navbar example">
            <div class="d-flex w-100" style="justify-content: space-between;">
                <div class="navbar_logo_razdel ">
                    <div class="d-flex w-100">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!--  -->
                        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                            <img src="img/shop/logo.png" alt="mdo" width="128" height="64" class="rounded-circle">
                        </a>
                    </div>
                    <!--  -->
                    <div class="collapse navbar-collapse ml-5 " id="navbarsExample04" style="order: 1;">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0 w-100">
                            <div class="navbar_name_razdel">
                                <li class="nav-item">
                                    <a class="nav-link active px-4 link-secondary" href="#">Джинсы</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active px-4 link-secondary" href="#">Футболки</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active px-4 link-secondary" href="#">Платья</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active px-4 link-secondary" href="#">Костюмы</a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <!--  -->
                <div class="dropdown text-end mt-3 mr-3" style="order: 2;">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle navbar_user" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="img/shop/user.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        <span class="position-absolute top-0 start-80 translate-middle badge rounded-pill bg-danger">
                            100
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu text-small" style="right: 5;">
                        <li><a class="dropdown-item" href="basket.php">Корзина</a></li>
                        <li><a class="dropdown-item" href="#">История заказов</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Войти</a></li>
                    </ul>
                </div>
            </div>
        </nav>