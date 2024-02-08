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
if(isset($GLOBALS['lang'])){
  if($GLOBALS['lang'] == "tur"){
    $langA = "ENGLISH";
    $langHref = "?lang=eng";
    $langHrefLink = "?lang=tur";
  }
    else if($GLOBALS['lang'] == "eng"){
      $langA = "türkçe";
      $langHref = "?lang=tur";
      $langHrefLink = "?lang=eng";}
      else if($GLOBALS['lang'] == "arb"){
      $langA = "türkçe";
      $langHref = "?lang=tur";
      $langHrefLink = "?lang=arb";}
      else{
        {
          $langA = "ENGLISH";
          $langHref = "?lang=eng";
          $langHrefLink = "?lang=tur";}
      }
      }else{
      $langA = "ENGLISH";
      $langHref = "?lang=eng";
      $langHrefLink = "?lang=tur";}
  


?>
<div class="container not-selectable ">
  <nav class="navbar navbar-expand-lg main-nav px-0">
    <a class="navbar-brand" href="/sienaTurizm<?php echo$langHrefLink;?>">
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
        <li><a <?php echo $anaSyf; ?> href="http://localhost/sienaTurizm<?php echo$langHrefLink;?>"><?php echo $homePage;?></a></li>
        <li><a href="https://www.birucak.com/" rel="noopener noreferrer nofollow" target="_blank"><?php echo $planeTicket;?></a>
        </li>
        <li><a <?php echo $hakkimizda; ?>href="/sienaTurizm/HTML/hakkimizda.php<?php echo$langHrefLink;?>"><?php echo $aboutUs;?></a></li>
        <li><a <?php echo $iletisim; ?> href="/sienaTurizm/HTML/iletisim.php<?php echo$langHrefLink;?>" class="text-center"><?php echo $contactUs;?></a></li>
        <li><a href="<?php echo$langHref;?>" class="text-center" style="color: #DF8014;"><?php echo $langA; ?></a></li>
      </ul>
    </div>
  </nav>
</div>