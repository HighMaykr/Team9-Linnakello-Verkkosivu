<?php
$page = "home";
include "header.php";
?>
<!-- Sivun pääsisältö -->
<section class="bg-black pb-5">
  <div id="etusivu" class="container">

  <!-- Osio 3 -->
  <div id="osio-3" class="container-fluid pb-5 pt-5">
    <div class="row">
        <img src="./assets/tayttokuva-15.jpg" class="img-fluid p-0" alt="Photo" style="max-width: 400px;">
      <div class="col-md-6 text-background d-flex flex-column justify-content-center">
        <h2>Linnakello Hämeenlinna</h2>
        <p>Linnakello Hämeenlinnasta löydät
          huolella valitut kotimaiset ja kansainväliset kellomerkit sekä laadukkaat korut jokaiseen elämäntilanteeseen.
          Etsitpä täydellistä lahjaa tai ajannäyttäjää itsellesi, meiltä löydät laadukkaat vaihtoehdot häihin,
          merkkipäiviin ja muihin tärkeisiin hetkiin.
          Linnakello Hämeenlinna on perinteikäs kello- ja kultasepänliike,
          jossa laatu ja ammattitaito ovat kulkeneet käsi kädessä jo 70 vuoden ajan.</p>
          <p>Tarjoamme myös kellohuolto- ja korjauspalveluita.
            Tule tutustumaan liikkeeseemme Hämeenlinnan sydämessä, autamme sinua valitsemaan ajan arvoisia tuotteita.</p>
      </div>
    </div>
  </div>

  <!-- Osio 2 -->
  <div id="osio-2" class="container-fluid py-5">
    <div id="carouselSlider" class="carousel slide">
      <div class="carousel-inner">

  <!-- Osio 2:n, Slide 1 -->
  <div class="carousel-item active">
    <div class="row align-items-center">

      <!-- Kuva 1 -->
      <div class="col-3">
        <a href="kauppa.php">
          <img src="./assets/tayttokuva-24.webp" class="d-block w-100" alt="Item 1">
        </a>
      </div>

      <!-- Kuva 2 -->
      <div class="col-3">
        <a href="kauppa.php">
          <img src="./assets/tayttokuva-21.webp" class="d-block w-100" alt="Item 2">
        </a>
      </div>

      <!-- Kuva 3 -->
      <div class="col-3">
        <a href="kauppa.php">
          <img src="./assets/tayttokuva-25.webp" class="d-block w-100" alt="Item 3">
        </a>
      </div>

      <!-- Kuva 4 -->
      <div class="col-3">
        <a href="kauppa.php">
          <img src="./assets/tayttokuva-27.jpg" class="d-block w-100" alt="Item 4">
        </a>
      </div>
    </div>
  </div>

  <!-- Slide 2 -->
  <div class="carousel-item">
    <div class="row align-items-center">

      <!-- Kuva 5 -->
      <div class="col-3">
        <a href="kauppa.php">
          <img src="./assets/tayttokuva-29.avif" class="d-block w-100" alt="Item 5">
        </a>
      </div>

      <!-- Kuva 6 -->
      <div class="col-3">
        <a href="kauppa.php">
          <img src="./assets/tayttokuva-30.webp" class="d-block w-100" alt="Item 6">
        </a>
      </div>

      <!-- Kuva 7 -->
      <div class="col-3">
        <a href="kauppa.php">
          <img src="./assets/tuote2-1.png" class="d-block w-100" alt="Item 7">
        </a>
      </div>
      <!-- Kuva 8 -->
      <div class="col-3">
        <a href="kauppa.php">
          <img src="./assets/tuote8-1.png" class="d-block w-100" alt="Item 8">
        </a>
      </div>
    </div>
  </div>
  <!-- Lisää slideja, tarvittaessa -->
</div>

  <!-- Ohjain -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

  <!-- Osio 4 -->
  <div class="container-fluid bg-black text-white py-5">
    <div class="d-grid gap-3" style="grid-template-rows: 1fr 1fr; grid-template-columns: 1fr 1fr; grid-auto-flow: dense;">
        <!-- Teksti 1 -->
        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
            <div class="text-box-grid d-flex align-items-center justify-content-center" style="height: 100%; width: 100%; background-color: #141415;">
                <p class="mb-0 text-center">
                    Varaudu huoltoaikaan helposti verkossa tai tuo kellosi meille arvioitavaksi – löydämme sille juuri oikean ratkaisun!
                </p>
            </div>
        </div>
        <!-- Kuva 1 -->
        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
            <img src="assets/wristwatch-407096_640.jpg" alt="Kuva 1" class="img-fluid rounded shadow-sm" style="height: 100%; width: 100%; object-fit: cover;">
        </div>
        <!-- Kuva 2 -->
        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
            <img src="assets/tayttokuva-9.jpg" alt="Kuva 2" class="img-fluid rounded shadow-sm" style="height: 100%; width: 100%; object-fit: cover;">
        </div>
        <!-- Teksti 2 -->
        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
            <div class="text-box-grid d-flex align-items-center justify-content-center" style="height: 100%; width: 100%; background-color: #141415;">
                <p class="mb-0 text-center">
                    Älä anna kellosi pysähtyä – ota yhteyttä ja huolla se ammattilaisella!
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<?php require "footer.php";?>