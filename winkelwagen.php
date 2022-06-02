<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>

.title{
    display: block;
    margin-left: 100px;
    margin-top: 50px;
}
.box2 {
    display: block;
    margin-left: 100px;
    width: 500px;
    height: 400px;
    border: 5px solid blue;
    background-color: white;
}

.overzicht{
    padding-left: 20x;
    padding-top: 20px;
}

.betalen{
    margin-top: 220px;
    padding-left: 300px;
}
</style>
</head>
<body>
    <?php
        require("index.php")
    ?>

    <h1 class="title">Winkelwagentje</h1>
    <div class="box2">
        <h4 class="overzicht">overzicht<br><hr></h4>
        <div class="betalen">
        <p>totaal artikelen: <br>verzendkosten: 2,99<hr>
        <p>totaal</p>
        

        </div>
        
    </div>
    
</body>
</html>