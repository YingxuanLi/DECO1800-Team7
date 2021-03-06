<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css" >
  <title>Wildlife Guide Junior - Learn</title>
</head>


<!-- ----------------------------LOGO && Search box------------------------------------ -->
<body>
  <?php 
  $page = "learn";
  include('header.php');
  ?>

<!-- -----------------------------Article Slider Container----------------------------------- -->

  <!-- This section code are refer to the https://www.w3schools.com/w3css/w3css_slideshow.asp -->
  <section id = "article_slider_container">
    <section id="slider">
      <div class="autoslider">
        <a href="https://www.thedodo.com/16-amazing-animal-facts-1094218100.html">
        <img src="images/koala_article.jpg">
        </a>
      </div>
    
      <div class="autoslider">
        <a href="https://www.thedodo.com/16-amazing-animal-facts-1094218100.html">
        <img src="images/bird_article.jpg">
        </a>
      </div>
    
      <div class="autoslider">
        <a href="https://www.thedodo.com/16-amazing-animal-facts-1094218100.html">
        <img src="images/lion_article.jpg">
        </a>
      </div>
    </section>

    <div class="Unique_fact">Animal <br> 16 <br> Unique <br> Facts</div>
    <a class="prev" onclick="slidesControler(-1)">&#10094;</a>
    <a class="next" onclick="slidesControler(1)">&#10095;</a>
    
  </section>


<!-- ----------------------------Animal Type Selection(mammal, amphibians...)------------------------------------ -->


  <section id = "animal_type_selection">
    <h1>ANIMAL TYPES IN QLD</h1>

    <section class="animal_types">

      <article class="mammals">

          <figure>
              <a href='animal_type_background.php?id=mammal'>
              <img src="images/mammal.jpg" alt="A koala image in the animal_type_selection">
              </a>
          </figure>
          <p>Mammals</p>
      </article>

      <article class="birds">

          <figure>
              <a href='animal_type_background.php?id=birds'>
              <img src="images/bird_article.jpg" alt="A kangaroo image in the animal_type_selection">
              </a>
          </figure>
          <p>Birds</p>
      </article>

      <article class="fish">

        <figure>
            <a href='animal_type_background.php?id=fish'>
            <img src="images/fish.jpg" alt="A lion image in the animal_type_selection">
            </a>
        </figure>
        <p>Fish</p>
      </article>
    </section>

    <section class="animal_types">

      <article class="reptile">

          <figure>
              <a href='animal_type_background.php?id=reptiles'>
              <img src="images/reptiles.jpg" alt="A koala image in the animal_type_selection">
              </a>
          </figure>
          <p>Reptiles</p>
      </article>

      <article class="invertebrate">

          <figure>
              <a href='animal_type_background.php?id=invertebrates'>
              <img src="images/invertebrate.jpg" alt="A kangaroo image in the animal_type_selection">
              </a>
          </figure>
          <p>Invertebrates</p>
      </article>

      <article class="amphibian">

        <figure>
            <a href='animal_type_background.php?id=amphibians'>
            <img src="images/amphibian.jpg" alt="A lion image in the animal_type_selection">
            </a>
        </figure>
        <p>Amphibians</p>
      </article>
    </section>
  </section>

<!-- ---------------------------------------------------------------- -->
<?php include('footer.php') ?>

<script src="JavaScript/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
<!-- end of body -->
<!-- ---------------------------------------------------------------- -->

</html>