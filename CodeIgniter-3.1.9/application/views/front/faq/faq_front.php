<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AntarAja | Frequently Asked Questions</title>
  </head>
  <body>
    <?php $this->load->view("front/navbar");  ?>
    <!-- FAQ -->
    <section class="section section-faq">
      <h1 class="text-center mb-4"> Frequently Asked Question </h1>
      <div class="container py-3">
          <div class="row">
              <div class="col-10 mx-auto">
                  <div class="accordion" id="faqExample">
                      <div class="card">
                          <div class="card-header p-2" id="headingOne">
                              <h5 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Bagaimana cara menginstall aplikasi AntarAja?
                                  </button>
                                </h5>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                              <div class="card-body">
                                  Untuk dapat menggunakan aplikasi AntarAja, Anda dapat langsung mendownload via google playstore. Ikuti panduan instalasi, dan selamat menggunakan aplikasi antaraja. Semua bisa pesan!
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header p-2" id="headingTwo">
                              <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Bagaimana cara menjadi parter AntarAja?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                              <div class="card-body">
                                  AntarAja membuka peluang kerjasama sebagai partner atau merchant dengan mudah dan tidak banyak perosedur. Anda dapat langsung mendaftarkan diri melalui menu daftar di halaman depan Website AntarAja. Kemudian ikuti dan isi field-field yang mandatory. Apabila sudah diisi dan disubmit, staff kami akan menghubungi Anda untuk follow-up data yang dikirimkan.
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header p-2" id="headingThree">
                              <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Bagaimana dengan insentif?
                                  </button>
                                </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                              <div class="card-body">
                                  Jawaban
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header p-2" id="headingFour">
                              <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Pertanyaan lain
                                  </button>
                                </h5>
                          </div>
                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                              <div class="card-body">
                                  Jawaban Lain
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Of FAQ -->
  </section>
  </body>
  <?php $this->load->view("front/footer"); ?>
</html>
