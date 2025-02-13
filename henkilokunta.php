<?php
$page = "henkilokunta";
include "header.php";
?>
<section class="bg-black pb-5">
  <div class="container">
    <h1 class="text-white mt-4">Henkilökunta</h1>
    <div class="row g-4">
      <div class="col-12">
        <div class="p-3 bg-dark-gray">
          <p class="text-white henkilokunta-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas necessitatibus provident rerum modi dolores error nulla repudiandae numquam accusamus eius explicabo blanditiis itaque repellendus, eligendi inventore dolore quo, corporis in!</p>
        </div>
      </div>
      <div class="col-12">
        <div class="henkilokunta d-flex justify-content-between">
          <div class="henkilokunta-item">
            <img src="./assets/omistaja.jpg" width="380" height="280" alt="omistaja">
            <div class="henkilokunta-text">Erkki Linna<br>Perustaja & Omistaja<br>erkki.linna@linnakello.com<br>(+358)44 124 7560</div>
          </div>
          <div class="henkilokunta-item">
            <img src="./assets/myyjä.jpg" width="380" height="280" alt="">
            <div class="henkilokunta-text">Jaana Linna<br>Myyntivastaava<br>jaana.linna@linnakello.com<br>(+358)44 246 9870</div>
          </div>
          <div class="henkilokunta-item">
            <img src="./assets/kelloseppä.jpg" width="380" height="280" alt="">
            <div class="henkilokunta-text">Kasper Linna<br>Kelloseppä<br>kasper.linna@linnakello.com<br>(+358)44 470 4610</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require "footer.php";?>
