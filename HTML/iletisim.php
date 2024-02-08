<?php
include_once "../PHP/top.php";
$mesajbasarili = 0;
if (isset($_POST['isim'])) {
    // $csvFileContent[] = $_POST['isim'].";".$_POST['soyad'].";".$_POST['Email'].";".$_POST['Mesaj'].";"."\n";

    $fileref = "csvFileContent"; //Dynamically generated
    $filename = "$fileref.csv";
    $list = array(
        // array("İsim; Soyad; Email; Mesaj;"),
        array($_POST['isim'] . "; " . $_POST['soyad'] . "; " . $_POST['email'] . "; " . $_POST['Mesaj'] . ";")
    );

    $fp = fopen('csvFileContent.csv', 'a');

    foreach ($list as $fields) {
        fputcsv($fp, $fields, ";");
    }

    fclose($fp);
    $mesajbasarili = 1;
}
unset($_POST['isim']);
?>

<header class="main-header" id="navbar">
    <?php include "../PHP/navBar.php"; ?>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("submit").submit();
        }
    </script>

</header>
</div>
<script src="https://smtpjs.com/v3/smtp.js"></script>

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
                    <!-- <h2 class="featurette-heading fw-normal lh-1">Hakkımızda</h2> -->
                    <div class="feature col">
                        <hr class="spaceForLogo" style="height: 10px; opacity: 0;">
                        <hr class="spaceForLogo" style="height: 10px; opacity: 0;">
                        <hr class="spaceForLogo" style="height: 10px; opacity: 0;">
                        <!-- <h3 class="fs-2 fw-bold">Hakkımızda</h3> -->
                        <?php if ($mesajbasarili == 1) {
                            echo '<div class="alert alert-success" role="alert">'; echo $contactUSAlert; echo'</div>';
                        } ?>
                        <h2 class="featurette-heading fw-normal"> <?php echo $contactUSH2; ?></h2>
                        <hr class="spaceForLogo" style="height: 10px; opacity: 0;">
                        <?php echo $contactUsP; ?>
                        <br>
                        <form action="" method="POST">
                        <?php echo $contactUsForm; ?>

                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <hr class="spaceForLogo" style="height: 10px; opacity: 0;">
                    <div class="supportive shake">
                        <img class="bd-placeholder-img bd-placeholder-img-xl featurette-image img-fluid mx-auto"
                            id="img" src="../images/android-chrome-512x512.png" draggable="false">
                        </img>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once "../PHP/bottom.php"; ?>