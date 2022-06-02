<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <?php
    require("index.php")
  ?>
  <div class="hoi">
    <div class="card"  style="width: 18rem; "height="15rem">
  <img src="producten/jameson70cl.png" width="270px" height="300px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jameson 70 cl <br>$25&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button class="btn1"><?php $num1=0; $num1-1;?>-</button>&numsp;<?php echo $num1;?>&numsp;<button class="btn2"><?php $num1 += 1?>+</button>

    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Plaats in je winkelmandje</a>
  </div>
</div>
<div class="card" style="width: 17rem;">
  <img src="producten/jamesoncm70cl.png" class="card-img-top" alt="..." width="300px" height="300px" >
  <div class="card-body">
    <h5 class="card-title">Jack Daniel's tennessee apple 70cl</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">plaats in je winkelmandje</a>
  </div>
</div>
<div class="card" style="width: 17rem;">
  <img src="producten/jamesoncs70cl.png" class="card-img-top" alt="..." width="300px" height="300px">
  <div class="card-body">
    <h5 class="card-title">Jack Daniel's tennessee apple 70cl</h5>
    <p class="card-text"></p>
    <a href="" class="btn btn-primary">plaats in je winkelmandje</a>
  </div>
</div>

</div>
 
</div>
  
</body>
</html>