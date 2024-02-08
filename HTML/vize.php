<?php
include_once "../PHP/top.php";
?>

<header class="main-header" id="navbar">
    <?php include "../PHP/navBar.php"; ?>
    <!-- /.container -->
</header>
</div>
<div class="container" id="container">
    <div class="square square-1"></div>
    <div class="square square-2"></div>
</div>
<main>

    <hr class="spaceForLogo" style="height: 10px; opacity: 0;">

    <div class="container marketing">
        <div class="row justify-content-center fs-4">
            <div class="row featurette justify-content-center fs-4">
                <div class="col-md-6">
                    <!-- <h2 class="featurette-heading fw-normal lh-1">Vize İşlemleri</h2> -->
                    <div class="feature col"><
                        <hr class="spaceForLogo" style="height: 10px; opacity: 0;">
                        <hr class="spaceForLogo" style="height: 10px; opacity: 0;">
                        <hr class="spaceForLogo" style="height: 10px; opacity: 0;">

                        <!-- <h3 class="fs-2 fw-bold">Vize İşlemleri</h3> -->
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo $visaInfoH2; ?></h2>
                        <hr class="spaceForLogo" style="height: 10px; opacity: 0;">

                        <p style="font-size: medium;"><?php echo $visaInfoP; ?></p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="supportive shake">
                        <img class="bd-placeholder-img bd-placeholder-img-xl featurette-image img-fluid mx-auto"
                            id="img" src="../images/no-bg-org.png" draggable="false">
                        </img>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once "../PHP/bottom.php"; ?>