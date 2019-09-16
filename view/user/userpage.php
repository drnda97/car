<img src="../assets/icons/facebook_cover_photo_1.png" alt="logo_img" class="userpage_logo">
<div class="offer clearfix">
  <span class="headline">Da li želite da iskoristite sve opcije koje
    <br>
    nudi Vaš automobil ?
  </span>
  <div class="text_wrapper clearfix">
    <p>Code Expert je pripremio kompletan set usluga kako bi omugućio dodatnu funkcionalnost na vozilu i učinio Vašu vožnju udobnijom. Noviji automobili imaju sve više mogućnosti kao i opcija dodatne opreme. Automobili proizvedeni od strane VAG Grupe: AUDI, VW, SKODA, SEAT dozvoljavaju modifikacije, kodiranja i adaptacije u njihovim kompjuterskim modulima.</p>
    <p>Zašto sve ovo ima smisla ?</p>
    <p>Ugrađivanjem dodatnih funkcija u automobil ćete u potpunosti iskoristiti njegov potencijal, a usput će Vam pružiti viši nivo udobnosti i bezbednosti u vožnji.</p>
  </div>
</div>
<div class="clearfix">
  <?php foreach ($navs as $car): ?>
    <div class="car_offer">
      <a href="<?php echo WEBROOT . '/user/mark?mark='. $car['name'] ?>" class="car_id">
        <img src="<?php echo $car['img_url']; ?>" alt="car_image">
      </a>
      <span>
        <a href="<?php echo WEBROOT . '/user/mark?mark='. $car['name'] ?>" class="car_id"><?php echo strtoupper($car['name']); ?></a>
      </span>
    </div>
  <?php endforeach; ?>
</div>
<div class="what_we_can">
  <h1>Šta se može aktivirati ?</h1>
  <span>Primeri mogućih aktivacija su:
    <br>
    Asistencija za duga svetla, čitanje znakova na putu, opcija Lane Assist pridržavanje vozila u traci, deaktivacija sistema start / stop.
    <br>
    Kozmetičke izmene na vašoj instrument tabli, ekranima i raznorazne adaptacije, poput vizuelnog prikaza za zadnje fabričke senzore, spuštanja
    <br>
     desnog retrovizora za rikverc ili zvuka pri otključavanju ili zaključavanju automobila.
     <br>
     Istovremeno će sutra automobil biti zanimljiviji na tržištu zbog dodatne opreme i lakše će se prodati po višoj ceni.
  </span>
</div>
<div class="informations">
  <div class="text_wrapper">
    <h2>Da li je potrebno nešto posebno za dolazak ?</h2>
    <ul>
      <li>Potrebno je da zakažete termin i ponesete OBD priključak.</li>
    </ul>
    <h2>Koliko traje kodiranje i adaptacija ?</h2>
    <ul>
      <li>U zavisnosti od vrste izmene može da potraje od 5 min do 2h. Vozilo se odmah završava po dolasku i ne ostavlja se.</li>
    </ul>
    <h2>Gde se može videti zapravo kako to sve izgleda ?</h2>
    <ul>
      <li>Spisak karakteristika koje se mogu aktivirati u Vašem automobiliu, Audi, VW, Seat ili Skodi novije generacije dostupan je takođe i
        <br> na našoj Instagram stranici sa detaljima za svaki automobil pojedinačno iz te grupacije, kao i video prezentacije o tome kako
        <br>
        većina modifikacija funkcioniše u praksi.
      </li>
    </ul>
    <h2>Postoje li neki bonus paketi za adaptacije ?</h2>
    <ul>
      <li>Da, postoje u zavisnosti koliko se adaptacija ili kodiranja izvrši na automobilu.</li>
      <li>Za članove Audi Klub Srbija sa članskom kartom odobravamo 20% popusta.</li>
    </ul>
  </div>
</div>
<div class="contact">
  <div class="half">
    <h2>Kontakt</h2>
    <p>Beograd, Srbija</p>
    <a href="mailto:office@sexyshop.rs">office@sexyshop.rs</a>
    <div class="icons">
      <a href="#">
        <img src="https://static.wixstatic.com/media/0fdef751204647a3bbd7eaa2827ed4f9.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/facebook.webp" alt="">
      </a>
      <a href="#">
        <img src="https://static.wixstatic.com/media/01c3aff52f2a4dffa526d7a9843d46ea.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/instagram.webp" alt="">
      </a>
      <a href="#">
        <img src="https://static.wixstatic.com/media/78aa2057f0cb42fbbaffcbc36280a64a.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/youtube.webp" alt="">
      </a>
    </div>
  </div>
  <div class="half">
    <img src="../assets/images/sunset.jpg" alt="contact_image">
  </div>
</div>
<div class="mapouter"><div class="gmap_canvas"><iframe width="1366px" height="400px" id="gmap_canvas" src="https://maps.google.com/maps?q=gavrila%20popovica%2011&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{;text-align:right;height:400;width:1366px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:1366px;z-index:1;}</style></div>
