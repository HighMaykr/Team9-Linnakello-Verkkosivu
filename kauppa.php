<?php
$page = "kauppa";
include "header.php";
?>
<section class="bg-black pb-5">
  <div class="container">
    <!--    PAGE CONTENT HERE-->
    <div class="head">
      <h1 class="text-white mt-4">Kauppa</h1>
      <input class="search bg-dark-gray px-4 py-2" placeholder="Hae tuotteita"/>
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50" class="search-icon" fill="currentColor">
        <path d="M 7 4 C 5.3545455 4 4 5.3545455 4 7 L 4 43 C 4 44.645455 5.3545455 46 7 46 L 43 46 C 44.645455 46 46 44.645455 46 43 L 46 7 C 46 5.3545455 44.645455 4 43 4 L 7 4 z M 7 6 L 43 6 C 43.554545 6 44 6.4454545 44 7 L 44 43 C 44 43.554545 43.554545 44 43 44 L 7 44 C 6.4454545 44 6 43.554545 6 43 L 6 7 C 6 6.4454545 6.4454545 6 7 6 z M 22.5 13 C 17.26514 13 13 17.26514 13 22.5 C 13 27.73486 17.26514 32 22.5 32 C 24.758219 32 26.832076 31.201761 28.464844 29.878906 L 36.292969 37.707031 L 37.707031 36.292969 L 29.878906 28.464844 C 31.201761 26.832076 32 24.758219 32 22.5 C 32 17.26514 27.73486 13 22.5 13 z M 22.5 15 C 26.65398 15 30 18.34602 30 22.5 C 30 26.65398 26.65398 30 22.5 30 C 18.34602 30 15 26.65398 15 22.5 C 15 18.34602 18.34602 15 22.5 15 z"></path>
      </svg>
    </div>
    <div class="products">
      <h2 class="products-title text-white mt-5">Uusia tuotteita</h2>
      <div class="products-list">
        <div class="card bg-dark-gray">
          <div class="card-image">
            <img class="card-img-top" src="./assets/tuote1.png" alt="Product card image">
            <span class="card-price">500€</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Product 1</h5>
            <a href="#" class="btn card-btn mt-2">Lisää ostoskoriin</a>
          </div>
        </div>
        <div class="card bg-dark-gray">
          <div class="card-image">
            <img class="card-img-top" src="./assets/tuote2.png" alt="Product card image">
            <span class="card-price">1500€</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Product 2</h5>
            <a href="#" class="btn card-btn mt-2">Lisää ostoskoriin</a>
          </div>
        </div>
        <div class="card bg-dark-gray">
          <div class="card-image">
            <img class="card-img-top" src="./assets/tuote3.png" alt="Product card image">
            <span class="card-price">2750€</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Product 3</h5>
            <a href="#" class="btn card-btn mt-2">Lisää ostoskoriin</a>
          </div>
        </div>
        <div class="card bg-dark-gray">
          <div class="card-image">
            <img class="card-img-top" src="./assets/tuote4.png" alt="Product card image">
            <span class="card-price">400€</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Product 4</h5>
            <a href="#" class="btn card-btn mt-2">Lisää ostoskoriin</a>
          </div>
        </div>
      </div>
    </div>
    <div class="products">
      <h2 class="products-title text-white mt-5">Muita tuotteita</h2>
      <div class="products-list mt-3">
        <div class="card bg-dark-gray">
          <div class="card-image ">
            <img class="card-img-top" src="./assets/tuote5.png" alt="Product card image">
            <span class="card-price">800€</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Product 5</h5>
            <a href="#" class="btn card-btn mt-2">Lisää ostoskoriin</a>
          </div>
        </div>
        <div class="card bg-dark-gray">
          <div class="card-image">
            <img class="card-img-top" src="./assets/tuote6.png" alt="Product card image">
            <span class="card-price">1100€</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Product 6</h5>
            <a href="#" class="btn card-btn mt-2">Lisää ostoskoriin</a>
          </div>
        </div>
        <div class="card bg-dark-gray">
          <div class="card-image">
            <img class="card-img-top" src="./assets/tuote7.png" alt="Product card image">
            <span class="card-price">1950€</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Product 7</h5>
            <a href="#" class="btn card-btn mt-2">Lisää ostoskoriin</a>
          </div>
        </div>
        <div class="card bg-dark-gray">
          <div class="card-image">
            <img class="card-img-top" src="./assets/tuote8.png" alt="Product card image">
            <span class="card-price">2100€</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Product 8</h5>
            <a href="#" class="btn card-btn mt-2">Lisää ostoskoriin</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require "footer.php";?>