<?php require_once 'inc/functions.php';?>
<!doctype html>
<html lang="H>
<head>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<forma id="buy" method="post">
<div class="input-group mb-3">
    <div class="input-group-prepend">
    </div>
    <input type="text" name="Имя" class="form-control" placeholder="Имя" aria-label="First name" aria-describedby="basic-addon1" required>
</div>

<div class="input-group mb-3">
    <input type="text" name="Фамилия" class="form-control" placeholder="Фамилия" aria-label="Last name" aria-describedby="basic-addon2">
    <div class="input-group-append">
    </div>
</div>


<form name="myForm">
    <div class="input-group mb-3">
        <div class="etot">
            <span class="etot" id="basic-addon3">Выберите вид лица</span>
        </div>
        <select name="face">
            <option value="fiz">Физ. лицо</option>
            <option value="yur">Юр. лицо</option>
        </select>
</form>

<div id="selection"></div>
<script>

    var forma = myForm.face;
    function changeOption(){

        var selection = document.getElementById("selection");
        var selectedOption = forma.options[forma.selectedIndex];
        selection.textContent = "Вы выбрали: " + selectedOption.text;
        if (selectedOption = "yur") {
            var num = prompt("Введите номер договора");
            document.getElementById('doc').value = num;
            return;
        }
        else  {
            document.getElementById('doc').value = null;
            return;
        }

    }
    forma.addEventListener("change", changeOption);
</script>

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="nomer">Номер договора</span>
    </div>
    <input id="doc" type="text" name="Номер договора" class="form-control" aria-label="Number" readonly>
    <div class="input-group-append">
        <span class="input-group-text"></span>
    </div>
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="data">Дата</span>
    </div>
    <input id="date" name="Дата" type="text" class="form-control" aria-label="Number" >
    <div class="input-group-append">
        <span class="input-group-text"></span>
    </div>
</div>

<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text">Товар</span>
    </div>
    <textarea class="form-control" name="Товар" aria-label="With textarea"></textarea>
</div>

<div>
    <button type="submit" class="submit">Отправить</button>
</div>
</forma>

<script src = main.js></script>

</html>