<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if (strpos($url, 'iletisim') !== false) {
  $iletisim = 'class="active"';
  $hakkimizda = "";
  $anaSyf = "";
} else if (strpos($url, 'hakkimizda') !== false) {
  $hakkimizda = 'class="active"';
  $iletisim = "";
  $anaSyf = "";
} else if($url == "http://localhost/sienaTurizm/"){
  $anaSyf = 'class="active"';
  $hakkimizda = "";
  $iletisim = "";
} else {
  $iletisim = "";
  $anaSyf = "";
  $hakkimizda = "";
}

?>
<div class="container not-selectable ">
  <nav class="navbar navbar-expand-lg main-nav px-0">
    <a class="navbar-brand" href="/sienaTurizm">
      <div class="logo" style="margin-top: 10px;"><img src="/sienaTurizm/images/300X106White1.png" alt="rajeshdas.com"
          draggable="false"></div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar icon-bar-1"></span>
      <span class="icon-bar icon-bar-2"></span>
      <span class="icon-bar icon-bar-3"></span>
    </button>

    <div class="collapse navbar-collapse navBarAlign" id="mainMenu">

      <ul class="navbar-nav ml-auto text-uppercase f1 ">
        <li><a <?php echo $anaSyf; ?> href="http://localhost/sienaTurizm/">Ana Sayfa</a></li>
        <li><a href="https://www.birucak.com/" rel="noopener noreferrer nofollow" target="_blank">Uçak Bileti</a>
        </li>
        <li><a <?php echo $hakkimizda; ?>href="/sienaTurizm/HTML/hakkimizda.php">Hakkımızda</a></li>
        <li><a <?php echo $iletisim; ?> href="/sienaTurizm/HTML/iletisim.php" class="text-center">İletişim</a></li>
      </ul>
    </div>
  </nav>
</div>