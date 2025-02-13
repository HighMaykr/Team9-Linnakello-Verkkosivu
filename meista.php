<?php
$page = "meista";
include "header.php";
?>
<section class="bg-black pb-5">
  <div class="container position-relative">
    <!--    PAGE CONTENT HERE-->
    <img id="language-switch" src="./assets/sweden.png" alt="Language switch button">
    <h1 id="about-us-title" class="text-white mt-4">Linnakello Hämeenlinna -<br>Yli 70 vuotta kelloja ja kellojen huoltoja</h1>
    <div class="about mt-4">
      <img src="./assets/meista.png" alt="About us image">
      <span id="about-us-description" class="about-description bg-dark-gray">
        Linnakello Hämeenlinna on Hämeenlinnan keskustassa sijaitseva kello-
        ja kultasepänliike. <br> Me olemme perheyritys, jolla on takanaan jo 70
        vuoden historia, joiden aikana meille on kertynyt runsaasti alan
        osaamista ja pidämme itsemme ajan tasalla alan kehityksestä. <br>
        Ammattiosaamisemme mahdollistaa juuri oikeanlaisen tuotteen
        suosittelemisen perinteiseen tai nykyaikaiseen makuun. <br> <br>
        <br>Linnakello Hämeenlinna sai alkunsa vuonna 1953, Hämeenlinnan
        sydämessä, aivan kaupungin vilkkaan keskustan tuntumassa.
        <br>Perustaja, Erkki Linna, oli nuori, mutta
        jo aikaisin kiinnostunut kelloteollisuudesta. Erkki oli oppinut
        kellosepän taidot jo nuorena, auttaessaan isäänsä, joka oli
        tunnettu paikallinen käsityöläinen. <br>Erkki rakasti ajatusta siitä,
        miten kellojen tarkkuus ja kauneus yhdistyivät toisiinsa,
        ne eivät olleet vain työkaluja, vaan pienoisteoksia,
        jotka elivät mukana elämän joka hetkessä.
      </span>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  const languageSwitch = document.getElementById('language-switch');
  const aboutUsTitle = document.getElementById('about-us-title');
  const aboutUsDescription = document.getElementById('about-us-description');
  let currentLanguage = 'fi';
  languageSwitch.addEventListener('click', () => {
    if (currentLanguage === 'fi') {
      languageSwitch.attributes.src.value = './assets/finland.png';
      aboutUsTitle.innerHTML = 'Linnakello Tavastehus -<br>Över 70 år av klockor och klockservice';
      aboutUsDescription.innerHTML = `
        Linnakello Hämeenlinna är en urmakarrörelse i centrala Tavastehus. <br>
        Vi är ett familjeföretag med 70 års historia bakom oss, under vilka vi har samlat på oss mycket kunnande inom branschen och håller oss uppdaterade om utvecklingen inom branschen. <br>
        Vårt yrkeskunnande gör det möjligt att rekommendera precis rätt produkt för den traditionella eller moderna smaken. <br> <br>
        Linnakello Hämeenlinna fick sin början 1953, i hjärtat av Tavastehus, alldeles intill stadens livliga centrum. <br>
        Grundaren, Erkki Linna, var ung men tidigt intresserad av urindustrin. <br>
        Erkki hade lärt sig urmakarkonsten redan i unga år, då han hjälpte sin far, som var en känd hantverkare från trakten. <br>
        Erkki älskade idén om hur klockornas precision och skönhet förenades med varandra, de var inte bara verktyg, utan miniatyrverk som levde med livet i varje ögonblick.
      `;
      document.title = 'Om oss - Linnakello Hämeenlinna';
      currentLanguage = 'sv';
    } else {
      languageSwitch.attributes.src.value = './assets/sweden.png';
      aboutUsTitle.innerHTML = 'Linnakello Hämeenlinna -<br>Yli 70 vuotta kelloja ja kellojen huoltoja';
      aboutUsDescription.innerHTML = `
        Linnakello Hämeenlinna on Hämeenlinnan keskustassa sijaitseva kello-
        ja kultasepänliike. <br> Me olemme perheyritys, jolla on takanaan jo 70
        vuoden historia, joiden aikana meille on kertynyt runsaasti alan
        osaamista ja pidämme itsemme ajan tasalla alan kehityksestä. <br>
        Ammattiosaamisemme mahdollistaa juuri oikeanlaisen tuotteen
        suosittelemisen perinteiseen tai nykyaikaiseen makuun. <br> <br>
        Linnakello Hämeenlinna sai alkunsa
        vuonna 1953, Hämeenlinnan sydämessä, aivan kaupungin vilkkaan
        keskustan tuntumassa. <br>Perustaja, Erkki Linna, oli nuori, mutta
        jo aikaisin kiinnostunut kelloteollisuudesta. Erkki oli oppinut
        kellosepän taidot jo nuorena, auttaessaan isäänsä, joka oli
        tunnettu paikallinen käsityöläinen. <br>Erkki rakasti ajatusta siitä,
        miten kellojen tarkkuus ja kauneus yhdistyivät toisiinsa,
        ne eivät olleet vain työkaluja, vaan pienoisteoksia,
        jotka elivät mukana elämän joka hetkessä.
        `;
      document.title = 'Tietoa Meistä - Linnakello Hämeenlinna';
      currentLanguage = 'fi';

    }
  });
</script>
<?php require "footer.php";?>