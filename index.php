<?php
include_once "PHP/top.php";
?>

<header class="main-header" id="navbar">
  <?php include "PHP/navBar.php"; ?>
  <!-- /.container -->
</header>
<div class="image d-flex justify-content-around text-center">
  <div class="imgX" id="parallax">
    <div class="centeredText not-selectable"><h1><?php echo $indexBannerH1; ?></h1></div>
    <div class="ctchild">
      <p class="not-selectable"><?php echo $indexBannerP; ?></p>
    </div>

  </div>
</div>
<div class="container" id="container">
  <div class="square square-1"></div>
  <div class="square square-2"></div>
</div>
<main>

  <hr class="spaceForLogo" style="height: 10px; opacity: 0;">

  <div class="container marketing">
    <div class="row justify-content-center fs-4">

      <div class="col-lg-4" style="font-size: medium;">

        <img class="bd-placeholder-img rounded-circle" width="160" height="140"
          src="images/otel-rezervasyonu.jpg" role="img"
          aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" draggable="false">
        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
        </img>
        <h2 class="fw-normal"><?php echo $indexOtelRezH2; ?></h2>
        <p><?php echo $indexOtelRezP; ?></p>
        <p><a class="btn btn-secondary" href="./HTML/otelRez.php<?php echo$langHrefLink;?>"><?php echo $readMore; ?></a></p>

      </div>
      <div class="col-lg-4" style="font-size: medium;">
        <img class="bd-placeholder-img rounded-circle" width="160" height="140"
          src="images/vize-islemleri.jpg" role="img"
          aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" draggable="false">

        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
        </img>
        <h2 class="fw-normal"><?php echo $visaH2; ?></h2>
        <p><?php echo $visaP; ?></p>
        <p><a class="btn btn-secondary" href="./HTML/vize.php<?php echo$langHrefLink;?>"><?php echo $readMore; ?></a></p>
      </div>
      <div class="col-lg-4" style="font-size: medium;">
        <img class="bd-placeholder-img rounded-circle" width="160" height="140"
          src="images/cin-vizesi.jpg" role="img"
          aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" draggable="false">

        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
        </img>
        <h2 class="fw-normal"><?php echo $chinaVisaH2; ?></h2>
        <p><?php echo $chinaVisaP; ?></p>
        <p><a class="btn btn-secondary" href="./HTML/cinVize.php<?php echo$langHrefLink;?>"><?php echo $readMore; ?></a></p>
      </div>
      <div class="col-lg-4" style="font-size: medium;">
        <img class="bd-placeholder-img rounded-circle center" width="160" height="140"
          src="images/amerika-vizesi.jpg" role="img"
          aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" draggable="false">
        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
        </img>
        <h2 class="fw-normal"><?php echo $usaVisaH2; ?></h2>
        <p><?php echo $usaVisaP; ?></p>
        <p><a class="btn btn-secondary" href="./HTML/abdVize.php<?php echo$langHrefLink;?>"><?php echo $readMore; ?></a></p>

      </div>
      <div class="row featurette justify-content-center fs-4">
        <div class="col-md-6" style="font-size: medium;">
          <h2 class="featurette-heading fw-normal lh-1"><?php echo $servicesH2; ?></h2>
          <div class="feature col">
            <hr class="spaceForLogo" style="height: 10px; opacity: 0;">

            <h3 class="fs-2 fw-bold"><?php echo $servicesH3one; ?></h3>
            <p><?php echo $servicesP3one; ?></p>
          </div>
          <div class="feature col">
            <hr class="spaceForLogo" style="height: 10px; opacity: 0;">
            <h3 class="fs-2 fw-bold"><?php echo $servicesH3two; ?></h3>
            <p><?php echo $servicesPtwo; ?></p>
          </div>

          <div class="feature col">
            <hr class="spaceForLogo" style="height: 10px; opacity: 0;">
            <h3 class="fs-2 fw-bold"><?php echo $servicesH3three; ?></h3>
            <p><?php echo $servicesPthree; ?></p>
          </div>

        </div>
        <div class="col-md-5">
          <div class="supportive shake">
            <img class="bd-placeholder-img bd-placeholder-img-xl featurette-image img-fluid mx-auto" id="img"
              src="./images/no-bg-org.png" draggable="false">
            </img>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="featurette-heading fw-normal lh-1 center"><?php echo $ourCompanyH2; ?></h2>
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
          style="background-image: url('./images/Ofis1.webp'); ">
          <img src="./images/Ofis1.webp" style="opacity: 0;"
            draggable="false">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
          style="background-image: url('./images/Ofis3.webp'); ">
          <img src="./images/Ofis3.webp" style="opacity: 0;"
            draggable="false">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
          style="background-image: url('./images/Ofis2.webp'); ">
          <img src="./images/Ofis2.webp" style="opacity: 0;"
            draggable="false">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-0">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
          style="background-image: url('./images/manzara1.webp'); ">
          <img src="./images/manzara1.webp" style="opacity: 0;"
            draggable="false">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
          style="background-image: url('./images/Ofis4.webp'); ">
          <img src="./images/Ofis4.webp" style="opacity: 0;"
            draggable="false">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          </div>
        </div>
      </div>
      <div class="col">
        <div draggable="false" class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
          style="background-image: url('./images/manzara2.webp'); ">
          <img src="./images/manzara2.webp" style="opacity: 0;"
            draggable="false">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  -->

  <div class="container">
    <h2 class="display-5 border-bottom text-center fw-bold"><?php echo $affInstitutionsH2; ?></h2>
    <div class="row" style="margin-top: 50px;">
      <div class="col-sm">
        <div class="feature-icon-small d-inline-flex justify-content-center text-bg-primaryfs-4 rounded-3">

          <img class="bi" src="./images/iata.svg" alt="iata" width="150px" height="100%" draggable="false">
        </div>
        <h4 class="fw-semibold fs-2 fw-bold"><?php echo $IATAH4; ?></h4>
        <p style="font-size: medium;" style=" font-size: medium;"><?php echo $IATAP; ?></p>
      </div>
      <div class="col-sm">
        <div class="feature-icon-small d-inline-flex justify-content-center text-bg-primaryfs-4 rounded-3">
          <img class="bi" src="./images/tursab.svg" alt="tursab" width="150px" height="100%" draggable="false">
        </div>
        <h4 class="fw-semibold fs-2 fw-bold"><?php echo $TURSABH4; ?></h4>
        <p style="font-size: medium;"><?php echo $TURSABP; ?></p>
      </div>
      <div class="col-sm">
        <div class="feature-icon-small d-inline-flex justify-content-center text-bg-primaryfs-4 rounded-3">
          <img class="bi" src="./images/thy.svg" alt="STAR ALLİANCE" height="100%" draggable="false">
        </div>
        <h4 class="fw-semibold fs-2 fw-bold"><?php echo $starAllH4; ?></h4>
        <p style="font-size: medium;"><?php echo $starAllP; ?></p>
      </div>
    </div>
  </div><br><br><br>
  <div class="airlines d-flex justify-content-center">
    <img src="./images/logolar.png" draggable="false" />
  </div>
</main>

<?php include_once "./PHP/bottom.php"; ?>