<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AntarAja Official</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <?php $this->load->view("front/navbar"); ?>
    <div class="container">
      <br><br>

    <!-- Carousel Start -->
    <section class="Merchant">
      <h4>Recomendded <strong class="text-primary">Places</strong></h4>
      <h5 class="mb-5">Find Our Favourite <strong class="text-primary">Resto</strong> here</h5>
    </section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:100%;height:50%">
      <div class="carousel-inner" style="padding-left:35%">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets\images\indonesian-sate-ayam-1-X3.jpg" alt="First slide" style="height:100%">
        </div>
        <div class="carousel-item">
          <img  class="d-block w-100" src="assets\images\IMG_7741-2000x1333.jpg" alt="Second slide" style="height:100%">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets\images\Pirates-bay-cafe-food-Nusa-Dua-and-Uluwatu.jpg" alt="Third slide" style="height:100%">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only" style="rect(0,0,0,1)">Next</span>
      </a>
    </div>
    <br><br><hr>
    <!-- end of carousel -->
    <!-- news site -->
    <div class="row mt-5" style="font-size:20px">
      <?php foreach ($news as $value){ ?>
      <div class="col-md-4 col-lg-4 col-sm-12 mb-4 d-flex align-items-center justify-content-center">
        <p class="shadow" style="height:200px"><?php echo $value->gambar ?></p>
      </div>
      <div class="col-md-8 col-lg-8 col-sm-12 mb-4">
        <h3 class="text-left"> <strong class="text-primary"><?php echo $value->headline ?></strong></h3>
        <p><?php echo $value->isi_berita ?></p>
      </div>
      <?php
      }
      ?>
    </div>
    <!-- End of News Site -->
    </div>
  </body>
  <footer><?php $this->load->view("front/footer"); ?></footer>
</html>
