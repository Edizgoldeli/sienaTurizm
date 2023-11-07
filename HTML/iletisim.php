<?php
include_once "../PHP/top.php";
require_once "../PHP/classes.php";
$csv = new Csv;
$csvFileContent = array();
$csvFileContent[] = "İsim; Soyad; Email; Mesaj; \n";
if(isset($_POST['İsim'])){
$csvFileContent[] = $_POST['İsim'].";".$_POST['Soyad'].";".$_POST['Email'].";".$_POST['Mesaj'].";"."\n";
$csv->saveFile($csvFileContent);}
?>

<header class="main-header" id="navbar">
    <?php include "../PHP/navBar.php"; ?>
    <!-- /.container -->
    
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
                        <h2 class="featurette-heading fw-normal">İletişim</h2>
                        <hr class="spaceForLogo" style="height: 10px; opacity: 0;">
                        <p>Telefon: <a href="tel:4445849"
                                style="text-decoration: none; color: black; font-weight: bolder;">444 5 849</a> / <a
                                href="tel:08508850209"
                                style="text-decoration: none; color: black; font-weight: bolder;">0850 885 0209</a> </p>

                        <p>Adres:</p>
                        <p style="font-size: medium;"> Piri Paşa Mah. Şaban DeresiSk. No:3/A Hasköy Beyoğlu / İstanbul
                        </p>
                        <p>Mail:</p>
                        <p style="font-size: medium;"> <a href="mailto:info@sienaturizm.com">info@sienaturizm.com</a>
                        </p>
                        <p>İletişim Formu:</p>
                        <form action="" method="POST">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col"> <label for="formGroupExampleInput">İsim</label>
                                        <input type="text" name="İsim" id="name"class="form-control" placeholder="İsim">
                                    </div>
                                    <div class="col"> <label for="formGroupExampleInput">Soyad</label>
                                        <input type="text" name="Soyad" id="surname" class="form-control" placeholder="Soyad">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col">
                                        <label for="formGroupExampleInput">E-mail</label>
                                        <input type="text" name="Email"  id="email" class="form-control" id="formGroupExampleInput"
                                            placeholder="mail">
                                        <br>
                                        <label for="exampleFormControlTextarea2">Mesajınız</label>
                                        <textarea class="form-control" name="Mesaj" id="exampleFormControlTextarea2"
                                            rows="5"></textarea><br> <button type="submit"
                                            class="btn btn-outline btn-lg"
                                            style="background-color: #19386b; color: white;"><b>Gönder</b></button>
                                    </div>
                                </div>
                            </div>

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