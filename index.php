

<?php
ob_start();
session_start();
require_once 'baglan.php';

$ksorgu=$db->prepare("SELECT * from kullanicilar where k_adi=:k_adi");
$ksorgu->execute(array('k_adi' => $_SESSION['k_adi']));
/* Kullandığım siteler ve udemy kursunun adı
https://www.mobilhanem.com/php-dersleri-require-ve-require_once/
https://www.udemy.com/course/sifirdan-ileri-seviye-web-programlama-html-php-pdo-mysql/
*/
$kbul=$ksorgu->fetch(PDO::FETCH_ASSOC);

?>



<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="formenu.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Anasayfa</title>
  <div class="container"><!– https://getbootstrap.com/ –> 
   <!– https://getbootstrap.com/docs/4.0/components/navbar/ –> 
   <nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom:10px; background-color:#34383d;">
    <a href="index.php"><img style="width: 80px;border: none;border-radius: 20px; margin-right: 20px;" src="logo.png" alt="..."></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link rt text-white" href="index.php">Anasayfa<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="text-white nav-link dropdown-toggle rt" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Hakkımda
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item rt" href="ozgecmis.php">Özgeçmiş</a>
          <a class="dropdown-item rt" href="vizyon.php">Vizyon ve Misyon</a>
          
        </li>
        <li class="nav-item dropdown">
          <a class="text-white nav-link dropdown-toggle rt" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Galeri
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!– https://getbootstrap.com/ –> 
            <a class="dropdown-item rt" href="magazafoto.php">Mağazamız</a>
            <a class="dropdown-item rt" href="yolfoto.php">Yol Fotoğrafları</a>
            <a class="dropdown-item rt" href="geziler.php">Geziler </a>

          </li>
          <li class="nav-item dropdown">
            <a class="text-white nav-link dropdown-toggle rt" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Sosyal Medya
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="https://www.facebook.com/MOTOMAR-1012592255564691/" style="margin-left: 45px;    font-size: 40px;"class="fa fa-facebook"></a><br>
            <a href="https://twitter.com/motomar_srl" style="margin-left: 45px;    font-size: 40px;"class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/motomar.honda/?hl=tr" style="margin-left: 45px;    font-size: 40px;"class="fa fa-instagram"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link rt text-white" href="iletisim.php">İletişim</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">


          <?php 
          if (!isset($_SESSION['k_adi'])) { ?>
            <a href="login.php" style="margin-right: 15px;font-size: 13px;" class="btn btn-outline-light" role="button">Giriş Yap</a>
          <?php    } else { ?>
            <!– 
            https://books.google.com.tr/books?id=uNreDwAAQBAJ&pg=PA222&lpg=PA222&dq=!isset($_SESSION%5B%27k_adi%27%5D&source=bl&ots=WoDhkeK4k3&sig=ACfU3U2Dqx50CDpKl6u2SVe0KrRaEQ0pFA&hl=tr&sa=X&ved=2ahUKEwjUkfX205_qAhVUA2MBHU76CjwQ6AEwAHoECAoQAQ#v=onepage&q=!isset(%24_SESSION%5B'k_adi'%5D&f=false  
            –> 
            <a href="#" style="margin-right: 40px;" class="text-white">Kullanici: <?php echo $_SESSION['k_adi'] ?></a>
          <?php } ?>

          <a href="donus.php" style="margin-right: 5px; font-size: 13px;;" class="btn btn-outline-light" role="button">Çıkış Yap</a>                                     



          <input class="form-control mr-sm-2" type="search" placeholder="Ara" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0 rt" type="submit">Arama</button>
        </form> 

      </div>
    </nav>
  </div>
</head>
<body 
style="
/* margin: 30px 0px; */
background-color: #dfd7d759;
padding: 20px;
"
">  


<div class="container">  <!– https://getbootstrap.com/ –> 
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-bottom:30px;">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="111.jpg" class="w-100" alt="..." >
      </div>
      <div class="carousel-item">
        <img src="222.jpg" class="w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="333.jpg" class="w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>  
  </div>

  <div class="row" style="margin-bottom:10px;">
    <div class="col-md-6" > <!– https://getbootstrap.com/ –> 
      <h3 class="rt bta">Motosiklet Felsefesi</h3>
      <h6 class="rt">Motorcular vardır, ulaşımlarını motosikletle sağlayanlar vardır. <br> Bir hedefe ulaşmak için motosiklet kullananlar vardır hedef seçmeden nereye olursa olsun yeter ki motora binsin şeklinde kullananlar vardır.

      Elbette motoru bir ekonomik ulaşım vasıtası olduğu için kullananları küçümsemiyoruz. Esasen bunların çoğu da mikrobu kapar ve sonunda gerçek motorcu olup çıkarlar.</h6>
    </div>
    <div class="col-md-6 cerceve" style="margin-bottom:20px;">
      <div class="embed-responsive embed-responsive-16by9 cerceve">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/zwBJ0G51_Os" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <img class="cerceve" src="444.jpg" alt="..."> <!– https://getbootstrap.com/ –> 

    </div>
    <div class="col-md-6">
      <h3 class="rt bta">Motosiklet Nedir ?</h3>
      <h6 class="rt">Yani motosiklet felsefesi denince belli bir tanım koymak aslında kolay değildir. Çok değişik zevkler ve beklentiler vardır.

        Özgürlükten bahsedilir. Saf, tavizsiz bireysellikten bahsedilir ama çoğu bir sürüyü takip etmektedir. Olsun herkese yer var… Mevlana'nın dediği gibi gel, gel ne olursan ol yine gel.

      Bazıları grupla gezmeyi tercih eder, bazıları yalnız. Bazıları ekonomik olduğundan motora biner bazıları hız için...</h6>
    </div>
  </div>
</div>

<br><br>
<footer style="background-image:url(footer-graphic.png)" class="page-footer font-small blue pt-4" >
  <div class="container">
    <div class="row">
      <div class="col-md-4">
       <h3 class="rt">İletişim</h3><br>

       <h5 class="rt"> Tel: 0 232 486 64 64</h5>
       <h5 class="rt">Tel: 0 544 486 64 64<h5>
         <h5 class="rt">motomar@gmail.com</h5>

       </div>
       <div class="col-md-4" >
        <h3 class="rt">Tasarlayan</h3><br>
        <h5 class="rt">Oğuzhan Yıldırım</h5>
        <h5 class="rt">MOTOMAR<h5>

        </div>
        <div class="col-md-4">
         <h3 class="rt">Konum</h3>
         <div class="mapouter"><div class="gmap_canvas"><iframe width="380" height="344" id="gmap_canvas" src="https://maps.google.com/maps?q=g%C3%B6ztepe%20kad%C4%B1k%C3%B6y&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2torrentz.net">torrent</a></div><style>.mapouter{position:relative;text-align:right;height:344px;width:380px;}.gmap_canvas {overflow:hidden;background:none!important;height:344px;width:380px;}</style></div>
       </div>
     </div>
   </footer>

   <a id="button"></a>






   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src=”https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js”></script>
   <Script>

     jQuery(document).ready(function() {

       var btn = $('#button');

       $(window).scroll(function() {
         if ($(window).scrollTop() > 300) {
           btn.addClass('show');
         } else {
           btn.removeClass('show');
         }
       });

       btn.on('click', function(e) {
         e.preventDefault();
         $('html, body').animate({scrollTop:0}, '300');
       });

     });

   </script>
 </body>
 </html>
