<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <!-- Bootstrap Css Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- Bootstrap Css Link -->
</head>
<body>


<div class="container">
        <?php if (! isset($user)): ?>
            <form action="/user" method="post">
        <?php else: ?>
            <form action="/user/<?= $user['id'] ?>" method="post">
                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="id" value="<?php ?>">
        <?php endif ?>
        <div class="form-group">
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" placeholder="Enter Your Name..." class="form-control" value="<?= old('name') ?>">
        </div>
        <div class="form-group">
            <label for="family">Family : </label>
            <input type="text" name="family" id="family" placeholder="Enter Your Family..." class="form-control" value="<?= old('family') ?>">
        </div>
        <div class="form-group">
            <label for="age">Age : </label>
            <input type="number" name="age" id="age" placeholder="Enter Your Age..." class="form-control" value="<?= old('age') ?>">
        </div>
        <div class="form-group">
            <label for="address">Address : </label>
            <input type="text" name="address" id="address" placeholder="Enter Your Address..." class="form-control" value="<?= old('address') ?>">
        </div>
        <?php if(!isset($user)): ?>
            <div class="form-group">
                <label for="password">Password : </label>
                <input type="text" name="password" id="password" placeholder="Enter Your Password..." class="form-control">
            </div>
        <?php endif; ?>

        <input type="submit" value="Send" class="btn btn-success btn-block">
    </form>
</div>


<!-- Bootstrap Js Link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<!-- Bootstrap Js Link -->
</body>
</html>