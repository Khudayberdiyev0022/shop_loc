<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Laravel</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Все товары</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Категории</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">В корзину</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ">Сбросить проект в начальное состояние</a>
                </li>
            </ul>
            <a href="" class="btn btn-outline-success" style="margin-left: auto">Панель Администратора</a>
        </div>
    </div>
</nav>


<div class="cards my-5">
    <div class="container">
        <h2 class="text-center">
            @if($category == 'mobile')
            Мобильные телефоны
            @elseif($category == 'portable')
                Портативная техника
            @elseif($category == 'appliance')
                Бытовая техника
            @endif
        </h2>
        <div class="row">
            <div class="col-4 border text-center p-2">
                <div>
                    <img src="{{ asset('images/products/iphone_x.jpg') }} " alt="" width="200">
                </div>
                <h3>iphone</h3>
                <small>71990 руб.</small>
                <div class="mt-2">
                    <a href="" class="btn btn-primary">В корзину</a>
                    <a href="" class="btn btn-secondary">Подробнее</a>
                </div>
            </div>
            <div class="col-4 border text-center p-2">
                <div>
                    <img src="{{ asset('images/products/iphone_x.jpg') }} " alt="" width="200">
                </div>
                <h3>iphone</h3>
                <small>71990 руб.</small>
                <div class="mt-2">
                    <a href="" class="btn btn-primary">В корзину</a>
                    <a href="" class="btn btn-secondary">Подробнее</a>
                </div>
            </div>
            <div class="col-4 border text-center p-2">
                <div>
                    <img src="{{ asset('images/products/iphone_x.jpg') }} " alt="" width="200">
                </div>
                <h3>iphone</h3>
                <small>71990 руб.</small>
                <div class="mt-2">
                    <a href="" class="btn btn-primary">В корзину</a>
                    <a href="" class="btn btn-secondary">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
