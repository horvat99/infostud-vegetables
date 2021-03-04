<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <meta charset="UTF-8">
    <title>Vegetable Shop</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="<?php
    $url = $_SERVER['REQUEST_URI'];
    if (strpos($url,'Shop') !== false){
        echo 'index';
    } else {
        echo 'Shop/index';
    }
    ?>">Vegetable Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php
                $url = $_SERVER['REQUEST_URI'];
                if (strpos($url,'Shop') !== false){
                    echo 'vegetables';
                } else {
                    echo 'Shop/vegetables';
                }
                ?>">Vegetables</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php
                $url = $_SERVER['REQUEST_URI'];
                if (strpos($url,'Shop') !== false){
                    echo 'vegetable/1';
                } else {
                    echo 'Shop/vegetable/1';
                }
                ?>">Vegetable by id</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php
                $url = $_SERVER['REQUEST_URI'];
                if (strpos($url,'Shop') !== false){
                    echo 'addvegetable';
                } else {
                    echo 'Shop/addvegetable';
                }
                ?>">Add vegetable</a>
            </li>
        </ul>
    </div>
</nav>
<?php
