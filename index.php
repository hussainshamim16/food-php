
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Php web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    *{
        margin:0px;
        padding:0px;
        box-sizing:border-box;
        font-family: "Poppins", sans-serif;
    }
    body{
        position: relative;
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("https://hips.hearstapps.com/hmg-prod/images/delish-230502-06-fried-chicken-0887-eb-index-645ec6fb0ca64.jpg?crop=0.888888888888889xw:1xh;center,top&resize=1200:*");
    background-repeat: no-repeat;
    background-size: cover;
        /* background-color: red; */
        color: white;
    }
    section.first{
    
        display:flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        /* border: 2px solid black; */
        height: 90vh;
        margin-bottom: 30px;
    }
    .menh1{
        font-size : 5rem;
        font-weight: bolder;
    }
    section.second{
        
        height: 70vh;
    }
        
    
        
    
</style>
<body>
    <section class="first">
        <h1 class="menh1">Crispy</h1>
        <p>Xorem ipsum dolor sit amet consectetur adipisicing elit?</p>
    </section>
<section class="first second">
<div class="container d-flex justify-content-around">
<div class="card" style="width: 18rem;">
  <img src="./images/product 1.jpg" class="card-img-top" alt="product images" id="p1" onmouseenter="inter1()" onmouseleave='over1()'>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="./images/product 2.jpg" class="card-img-top" alt="product images" id="p2" onmouseenter="inter2()" onmouseleave='over2()'>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="./images/product 3.jpg" class="card-img-top" alt="product images" id="p3" onmouseenter="inter3()" onmouseleave='over3()'>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
</section>
<?php echo "<h1 style= 'text-align: center; font-size: 4rem; margin: 200px 0px 200px;'>The Food's</h1>"?>
<section class="first">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="./images/product1.1.jpg" class="d-block w-100" alt="food">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./images/product1.1.jpg" class="d-block w-100" alt="food">
    </div>
    <div class="carousel-item">
      <img src="./images/product1.1.jpg" class="d-block w-100" alt="food">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

<?php

// echo "<h1 style= 'text-align: center; font-size: 4rem;'>The Food's</h1>";

echo "
<script>
// alert('hello world')
function inter1(){
    var p1 = document.getElementById('p1').src = './images/product1.1.jpg';
    }
    function over1(){
        var p1 = document.getElementById('p1').src = './images/product 1.jpg';
}
function inter2(){
    var p2 = document.getElementById('p2').src = 'https://makeyourmeals.com/wp-content/uploads/2022/09/baked-chicken-wings-featured-735x491.jpg.webp';
    }
    function over2(){
        var p2 = document.getElementById('p2').src = './images/product 2.jpg';
}
function inter3(){
    var p3 = document.getElementById('p3').src = 'https://media.istockphoto.com/id/1458229488/photo/fried-chicken-tenders-or-strips-with-sauces-and-fries.jpg?s=612x612&w=0&k=20&c=thkmV0imj5o22Cufl7yRhQfNafPkdziJIl7nfFdb0zI=';
    }
    function over3(){
        var p3 = document.getElementById('p3').src = './images/product 3.jpg';
}

</script>";
?>

<?php
echo "<style>




</style>"
?>