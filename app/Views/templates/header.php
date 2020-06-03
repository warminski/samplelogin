<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/navbar.css">


    <title></title>
</head>
<body>
<?php
    $uri = service('uri');
?>
<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="/">Codeigniter Login</a>
        <?php if (session()->get('isLoggedIn')): ?>
            <ul class="pure-menu-list">
                <li class="pure-menu-item <?=($uri->getSegment(1) == 'dashboard' ? 'pure-menu-selected' : null )?>"><a href="/dashboard" class="pure-menu-link">Dashboard</a></li>
                <li class="pure-menu-item <?=($uri->getSegment(1) == 'profile' ? 'pure-menu-selected' : null )?>"><a href="/profile" class="pure-menu-link">Profile</a></li>
            </ul>
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="/logout" class="pure-menu-link">Logout</a></li>

            </ul>


        <?php else: ?>
        <ul class="pure-menu-list">
            <li class="pure-menu-item <?=($uri->getSegment(1) == '' ? 'pure-menu-selected' : null )?>"><a href="/" class="pure-menu-link">Login</a></li>
            <li class="pure-menu-item <?=($uri->getSegment(1) == 'register' ? 'pure-menu-selected' : null )?>"><a href="/register" class="pure-menu-link">Register</a></li>
        </ul>
        <?php endif; ?>
    </div>
</div>
</body>
</html>