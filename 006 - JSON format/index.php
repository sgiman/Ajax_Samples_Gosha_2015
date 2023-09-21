<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Тестовая страница">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Ajax</title>
</head>
<body>

<div class="center">
    <h1>006 - Формат JSON</h1>
    <div class="button" id="test" onclick="$('#test').hide()">TEST JQUERY & PHP</div>
    <?php
        echo "<p class='t_blue'><b>Select country-city</b></p>";
        echo '<p>PHP VERSION: <b>' . phpversion() . '</b></p>';
        echo '<p>ZEND VERSION: <b>' . zend_version()  . '</b></p>';
    ?>

    <label for="country">Укажитие страну:</label>
    <select name="country" id="country">
        <option value="0" selected="selected">Пусто</option>
        <option value="1" >Aмерика</option>
        <option value="2" >Франция</option>
    </select>

    <label for="city">Города:</label>
    <select name="city" id="city">
        <!--option value="0">Пусто</option>-->
    </select>

    <br><br>
    <img id="SGI" class="no-select" src="img/SGI_002.png" alt="SGI" title="SGI-SCS" />

</div>

<script src="js/main.js"></script>
</body>
</html>
