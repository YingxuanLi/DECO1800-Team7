<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css" >
  <title>Wildlife Guide Junior - Explore</title>
</head>


<!-- ----------------------------LOGO && Search box------------------------------------ -->
<body>
  <!-- head -->
<?php $page = "video";include('header.php');?>

<!-- -----------------------------Article Slider Container----------------------------------- -->

<section id = "top_video">

<section class = demo_video>
    <iframe src="https://www.youtube.com/embed/XcQIXKbGios" allowfullscreen></iframe>
</section>

</section>


<!-- ----------------------------Animal Type Selection(Mammel, amphibians...)------------------------------------ -->


<section id="video_section">
  <h1>Videos</h1>

  <section id = "videos">
    <div class="video_part_one">
      <iframe src="https://www.youtube.com/embed/oI3ADcDH0Uc" frameborder="0" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/8BbZTCdB2X4" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="video_part_two">
      <iframe src="https://www.youtube.com/embed/bgiPTUy2RqI" frameborder="0" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/U7zARByAu1c" frameborder="0" allowfullscreen></iframe>
    </div>
  </section>
</section>

<?php include("footer.php") ?>
</body>
<script src="JavaScript/main.js"></script>

</html>