<?php
$page = "yhteystiedot";
include "header.php";
?>
<section class="bg-black pb-5">
  <div class="container">
    <!--    PAGE CONTENT HERE-->
    <h1 class="text-white mt-4">Yhteystiedot</h1>
    <div class="contact-container">
      <!-- Yhteystietolaatikko -->
      <div class="contact-info">
        <h2 class="text-white">Yritys</h2>
        <span>
          Yrityksen nimi: Linnakello Hämeenlinna<br>
          Puhelin: +358 *********<br>
          Sähköposti: info@example.fi
        </span>
        <h2 class="text-white mt-3">Käyntiosoite</h2>
        <span>
          Osoite: Mummelinkatu 1 A<br>
          Postinumero: 13000<br>
          Kaupunki: Hämeenlinna<br>
          Maa: Suomi
        </span>
        <h2 class="text-white mt-3">Laskutusosoite</h2>
        <span>
          Yrityksen nimi: Linnakello OY<br>
          Osoite: Mummelinkatu 1 A<br>
          Postinumero: 13000<br>
          Kaupunki: Hämeenlinna<br>
          Maa: Suomi
        </span>
      </div>

      <!-- yhteydenottolomake -->
      <div class="contact-section">
        <h2>Ota yhteyttä</h2>
        <form action="send_message.php" method="post" class="contact-form">
          <div class="form-group">
            <label for="name">Nimi</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Sähköposti</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="phone">Puhelinnumero</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9+ ]*" required>
          </div>
          <div class="form-group">
            <label for="message">Viesti</label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <button type="submit">Lähetä</button>
        </form>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php require "footer.php";?>