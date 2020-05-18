<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Админ-панель</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="/admin/Assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/admin/Assets/css/dashboard.css" rel="stylesheet">

    <!-- simplelineicons for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

    <!-- Redactor CSS -->
    <link rel="stylesheet" href="/admin/Assets/js/plugins/redactor/redactor.css">
</head>
<body class="font-face">
<header>
    <nav class="container navbar navbar-toggler navbar-dark bg-dark  fixed-top">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/admin/">
                <?= $lang->dashboardMenu['cpanel']?>
            </a>
            <a class="navbar-brand icon-logout icons" href="/admin/logout/">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin/">
                            <i class="icon-speedometer icons"></i>
                            <?= $lang->dashboardMenu['home'] ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/pages/">
                            <i class="icon-doc icons"></i>
                            <?= $lang->dashboardMenu['pages'] ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/posts/">
                            <i class="icon-pencil icons"></i>
                            <?= $lang->dashboardMenu['posts'] ?>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/admin/users/">
                            <i class="icon-user icons"></i>
                            <?= $lang->dashboardMenu['users']?>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/admin/settings/general/">
                            <i class="icon-equalizer icons"></i>
                            <?= $lang->dashboardMenu['settings'] ?>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/admin/logout/">
                            <i class="icon-logout icons"></i>
                            <?= $lang->dashboardMenu['logout']?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
</header>