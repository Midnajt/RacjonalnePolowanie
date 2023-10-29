<?php
    require_once("include/translator.php");

    $translate = new Translator();
    $translate->translate();

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Witryna nieosiągalna</title>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RET72TSHHB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RET72TSHHB');
</script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 80%;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        @media (max-width: 768px) {
            .container {
                max-width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ta witryna jest nieosiągalna</h1>
        <p>Przepraszamy, ale podany adres strony nie istnieje lub jest nieosiągalny.</p>
    </div>
</body>
</html>

<!-- <html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hodowla myśliwskich psów rasy wyżeł niemiecki krótkowłosy. Skontaktuj się z nami i zapytaj o swojego idealnego towarzysza podczas wypraw do lasu i na łąki. Powiat Garowlin.">
    <meta property="og:image" content="https://turbofinder-test.cermotor.com.pl/images/yuma.jpg">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="Images/paw.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/lightbox.min.css">
    <title>Racjonalne Polowanie</title>
</head> -->
<!-- Google tag (gtag.js) -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-RET72TSHHB"></script> -->
<script>
//   window.dataLayer = window.dataLayer || [];
//   function gtag(){dataLayer.push(arguments);}
//   gtag('js', new Date());

//   gtag('config', 'G-RET72TSHHB');
</script>
<!-- <body>
    <div class="wrapper">
        <header>
            <div>
                <img src="Images/logotype.png" alt="logo">
            </div>
        </header>
        <nav>
            <ul>
                <li class='li' data-section='about'><a href="#"><?php echo $translate->oHodowli; ?></a></li>
                <li class='li' data-section='ourDogs'><a href="#"><?php echo $translate->naszePsy; ?></a></li>
                <li class='li' data-section='gallery'><a href="#"><?php echo $translate->galeria; ?></a></li>
                <li class='li' data-section='contact'><a href="#"><?php echo $translate->kontakt; ?></a></li>
            </ul>
            <div class="lang">
                <a href="?lang=pl"><img src="Images/pl.jpg" alt="pl"></a>
                <a href="?lang=eng"><img src="Images/eng.png" alt="eng"></a>
            </div>
        </nav>
        <main>
            <section class='about'>
                <div class="container">
                    <h1><?php echo $translate->oHodowli; ?></h1>
                    <div class="element">
                        <div>
                            <h2><?php echo $translate->dlaczegoHodowlaRacjonalnePolowanie; ?></h2>
                            <p><?php echo $translate->txt1; ?></p>
                            <p><?php echo $translate->txt2; ?></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-paw"></i>
                        </div>
                    </div>
                    <div class="element">
                        <div>
                            <h2><?php echo $translate->tresuraWyzla; ?></h2>
                            <p><?php echo $translate->txt3; ?></p>
                            <p><?php echo $translate->txt4; ?></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bone"></i>
                        </div>
                    </div>
                    <div class="element">
                        <div>
                            <h2>FCI - <?php echo $translate->miedzynarodowaFederacjaKynologiczna; ?></h2>
                            <p><?php echo $translate->txt5; ?></p>
                            <p><?php echo $translate->txt6; ?></p>
                            <p><?php echo $translate->txt58; ?>   <a target="_blank" href="http://www.fci.be/en/affixes/?lang=en&fbclid=IwAR1W4cZSGht6SH1kxcGLOQvsFN7vktnOIb48d9gbC0h2PQEYUpBmCc8GTgY"><?php echo $translate->tutaj; ?>.</a> <?php echo $translate->txt8; ?></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                    </div>
                    <a class='certificate' href="/Images/zk.jpg" data-lightbox="example"><img src="Images/zk.jpg" alt="certyfikat"/>
                    </a>
                </div>
            </section>
            <section class='ourDogs off'>
                <div class="container">
                    <h1><?php echo $translate->naszePsy; ?></h1>
                    <div class="element">
                        <div>
                            <h2><?php echo $translate->wyzelNiemieckiKrotkowlosy; ?></h2>
                            <p><?php echo $translate->txt9; ?></p>
                        </div>
                    </div>
                    <div class="element">
                        <div>
                            <h2>Yuma</h2>
                            <p><?php echo $translate->txt10; ?></p>
                        </div>
                        <a href="/Images/yuma.jpg" data-lightbox="achivments-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/yuma.jpg" alt="yuma"/>
                        </a>
                    </div>
                    <div class="element">
                        <div>
                            <h2>Ars</h2>
                            <p><?php echo $translate->txt11; ?></p>
                        </div>
                        <a href="/Images/ars.jpg" data-lightbox="achivments-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/ars.jpg" alt="yuma"/>
                        </a>
                    </div>
                    <div class="element achivments">
                        <h2><?php echo $translate->osiagnieciaIRodowody; ?></h2>
                        <div>
                            <a href="/Images/yuma_rodowod.jpg" data-lightbox="achivments-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/yuma_rodowod.jpg" alt="yuma"/>
                            </a>
                            <a href="/Images/champion.png" data-lightbox="achivments-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/champion.png" alt="champion"/>
                            <a href="/Images/ars_rodowod.jpg" data-lightbox="achivments-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/ars_rodowod.jpg" alt="ars"/>
                            </a>
                        </div>
                        </a>
                    </div>
                </div>
            </section>
            <section class='gallery off'>
                <div class="container">
                    <h1><?php echo $translate->galeria; ?></h1>
                    <div class="galleryContainer">
                        <a href="/Images/photo_16.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_16.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_17.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_17.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_18.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_18.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_19.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_19.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_20.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_20.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_21.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_21.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_22.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_22.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_23.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_23.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_24.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_24.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_1.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_1.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_2.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_2.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_3.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_3.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_4.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_4.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_5.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_5.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_6.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_6.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_7.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_7.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_8.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_8.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_9.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_9.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_10.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_10.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_12.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_12.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_13.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_13.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_14.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_14.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/photo_15.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/photo_15.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/ars_1.png" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/ars_1.png" alt="dog_photo"/>
                        </a>
                        <a href="/Images/father_2.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/father_2.jpg" alt="dog_photo"/>
                        </a>
                        <a href="/Images/father_3.jpg" data-lightbox="example-set" data-title="Zmień zdjęcie używając strzałek"><img loading="lazy" src="Images/father_3.jpg" alt="dog_photo"/>
                        </a>
                    </div>
                </div>
            </section>
            <section class='contact off'>
                <div class="container">
                <h1><?php echo $translate->kontakt; ?></h1>
                <div class="contactData">
                    <div>
                        <div class="icon home">
                            <i class="fas fa-home"></i>
                        </div>
                        <p>08-400 Unin</p>
                    </div>
                    <div>
                        <div class="icon phone">
                            <i class="fas fa-phone"></i>
                        </div>
                        <a href="tel:+48 512 460 225"><p>+48 512 460 225</p></a>
                    </div>
                    <div>
                        <div class="icon meil">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <a href="meilto:jaroslaw.kozicki@adres.pl"><p>jaroslaw.kozicki@adres.pl</p></a>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39380.76776017045!2d21.666575328406534!3d51.910274249500105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4718b7e0648e510f%3A0x3e1a14a44f65da0c!2s08-400%20Unin!5e0!3m2!1spl!2spl!4v1631455637383!5m2!1spl!2spl"style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
            </div>
        </section>
        </main>
        <footer>
            <p>&copy Racjonalne Polowanie</p>
            <a href="https://addpattern.it/" target="_blank">
                <p>Projekt i opracowanie: AddPattern</p>
            </a>
        </footer>
    </div>
    <script src='include/lightbox-plus-jquery.js'></script>
    <script src='include/main.js'></script>
</body>
</html> -->
<?php
if(isset($_GET["lang"])){
    $lang = $_GET["lang"];
    switch($lang){
        case 'eng':
            echo "<script>console.log(switchLang('".$lang."'))</script>";
            break;
        default:
            echo "<script>console.log(switchLang('pl'))</script>";
    }
}
