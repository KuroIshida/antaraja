<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AntarAja | Layanan kami</title>
  </head>
  <body>
    <?php $this->load->view("front/navbar") ?>
    <div class="container">
    <!-- Basic Feature -->
    <div class="row mt-5" style="font-size:20px">
      <div class="col-md-4 col-lg-4 col-sm-12 mb-4 d-flex align-items-center justify-content-center">
        <img src="assets\images\plates.jpg" class="w-50" alt="FOOD" >
      </div>
      <div class="col-md-8 col-lg-8 col-sm-12 mb-4">
        <h3 class="text-left"> Antar <strong class="text-primary">Makanan</strong></h3>
        <p>AntarMakanan adalah fitur yang disediakan oleh AntarAja untuk memudahkan pemesanan makanan dengan menggunakan aplikasi. Aplikasi AntarAja menyediakan ratusan warung dengan cita rasa istimewa.</p><br>
        <p>Selain itu, ongkosnya murah banget lho! Tunggu apa lagi, kasih tau yang lain buat pakai AntarAja sekarang!</p>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 mb-4 d-flex align-items-center justify-content-center">
        <img src="assets\images\motorcycles.png" class="w-50" alt="FOOD" >
      </div>
      <div class="col-md-8 col-lg-8 col-sm-12 mb-4">
        <h3 class="text-left"> Antar <strong class="text-primary">Penumpang</strong></h3>
        <p>AntarPenumpang adalah fitur yang disediakan oleh AntarAja untuk memudahkan pemesanan ojek dengan menggunakan aplikasi.</p><br>
        <p>Takut ongkos mahal?   Eits, jangan salah di AntarAja ongkosnya murah banget. Ayo buruan pakai AntarAja!</p>
      </div>
    </div>
    <hr>
    <!-- End Of Basic Feature -->
    <!-- Detailed Feature -->
    <h3 class="my-5 text-center">Fitur pada aplikasi <strong class="text-primary">AntarAja</strong></h3>
    <div class="row">
      <div class="col-sm 12 col-md-4 col-lg-4 mb-5">
        <div class="shadow" style="height:200px">
          <div class="content-wrapper">
            <img src="assets\images\chat.jpg" alt="Chat" class="w-25 float-left mr-2">
            <h4 class="text-primary"><strong>Chat</strong> dengan Parter Kami</h4>
            <p>Pastikan pesanan anda sesuai dengan keinginan, hubungi driver untuk konfirmasi pesanan anda.</p>
          </div>
        </div>
      </div>
      <div class="col-sm 12 col-md-4 col-lg-4 mb-5">
        <div class="shadow" style="height:200px">
          <img src="assets\images\human.jpg" class="w-25 float-left mr-2" alt="Human">
          <h4 class="text-primary"> Layanan <strong>Customer Sevice</strong></h4>
          <p>Customer Service kami akan siap membantu jika anda mengalamai kesulitan dalam penggunaan aplikasi</p>
        </div>
      </div>
      <div class="col-sm 12 col-md-4 col-lg-4 mb-5">
        <div class="shadow" style="height:200px">
          <img src="assets\images\track.jpg" class="w-25 float-left mr-2" alt="Track">
          <h4 class="text-primary"> Ketahui <strong>Lokasi </strong>Driver Anda</h4>
          <p>Untuk kenyamanan pengguna kami menyediakan fitur tracking yang berguna untuk mengetahui posisi partner kami</p>
        </div>
      </div>
      <div class="col-sm 12 col-md-4 col-lg-4 mb-5">
        <div class="shadow" style="height:200px">
          <img src="assets\images\ticket.jpg" class="w-25 float-left mr-2" alt="Discount">
          <h4 class="text-primary"><strong>Diskon & Promo </strong>AntarAja</h4>
          <p>AntarAja juga mengadakan promo menarik yang bisa anda ikuti untuk mendapatkan penawaran spesial.</p>
        </div>
      </div>
      <div class="col-sm 12 col-md-4 col-lg-4 mb-5">
        <div class="shadow" style="height:200px">
          <img src="assets\images\laundry.png" class="w-25 float-left mr-2" alt="Laundry">
          <h4 class="text-primary"><strong>Laundry </strong>AntarAja</h4>
          <h7 class=" text bg-danger">*<strong>Coming Soon</strong></h7>
          <p>Layanan Laundry AntarAja tentunya hadir untuk memudahkan anda dalam urusan cuci - mencuci pakaian. Kami antar ketika sudah bersih dan wangi.</p>
        </div>
      </div>
      <!-- If you want to add more box,just fucking copy the box format -->
      </div>

    </div>
    <!-- End Of Detailed Feature -->
  </div>
  </body>
  <footer><?php $this->view("front/footer") ?></footer>
</html>
