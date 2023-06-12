<?php
include 'sesija.php';
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Saska</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body class="main-layout">

      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>

      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/saska.png" width="200px" height="150px" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                    <?php include 'meni.php';?>
                  </div>
                  <div class="col-md-2">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>

      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner1" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="images/banner_ing.jpg" alt="#"/>
                           </div>
                           <div class="col-md-6">
                              <span>01/02</span>
                              <h1>Prodaja kozmetike Saska</h1>
                              <p>Ovde mozete pronaci ponudu mnogih proizvoda</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="images/banner_ing.jpg" alt="#"/>
                           </div>
                           <div class="col-md-6">
                               <span>02/02</span>
                               <h1>Prodaja kozmetike Saska</h1>
                               <p><i>Imamo najbolje brendove na svetu</i></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </section>

      <div class="we_do slin">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Administracija</h2>
                      <p id="poruka"></p>
                  </div>
               </div>
            </div>
            <div class="row">
                <div class="col-4">

                    <label for="naziv">Naziv</label>
                    <input type="text" id="naziv" class="form-control">

                    <label for="opis">Opis</label>
                    <input type="text" id="opis" class="form-control">

                    <label for="vrste">Izaberite vrstu</label>
                    <select id="vrste" class="form-control">

                    </select>

                    <label for="brendovi">Izaberite brend</label>
                    <select id="brendovi" class="form-control">

                    </select>
                    <label for="cena">Cena</label>
                    <input type="text" id="cena" class="form-control">

                    <hr>
                    <button onclick="unesi()" class="btn btn-dark">Unesi</button>
                </div>

             <div class="col-4">
                 <label for="proizvodiIzmena">Izaberite proizvod</label>
                 <select id="proizvodiIzmena" class="form-control">

                 </select>

                 <label for="cenaIzmena">Cena</label>
                 <input type="text" id="cenaIzmena" class="form-control">
                 <hr>
                 <button onclick="izmeni()" class="btn btn-success">Promeni cenu</button>
             </div>

             <div class="col-4">
                 <label for="proizvodiBrisanje">Izaberite proizvod</label>
                 <select id="proizvodiBrisanje" class="form-control">

                 </select>

                 <hr>
                 <button onclick="obrisi()" class="btn btn-danger">Obrisi proizvod</button>
             </div>

            </div>
         </div>
      </div>

      <footer>
         <div class="footer">
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>© 2023 All Rights Reserved. Design by Saska</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>

      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>

    <script>
        function vratiBrendove(){
            $.ajax({
                url: 'server/brendovi.php',
                success: function (data){
                    $("#brendovi").html(data);
                }
            });
        }
        function vratiVrste(){
            $.ajax({
                url: 'server/vrste.php',
                success: function (data){
                    $("#vrste").html(data);
                }
            });
        }
        function vratiProizvode(){
            $.ajax({
                url: 'server/proizvodi.php',
                success: function (data){
                    $("#proizvodiIzmena").html(data);
                    $("#proizvodiBrisanje").html(data);
                }
            });
        }
        vratiBrendove();
        vratiVrste();
        vratiProizvode();

        function unesi(){
            $.ajax({
                url: 'server/unesi.php',
                method : 'post',
                data: {
                    naziv: $("#naziv").val(),
                    opis: $("#opis").val(),
                    brend: $("#brendovi").val(),
                    vrsta: $("#vrste").val(),
                    cena: $("#cena").val(),
                },
                success: function (data){
                    $("#poruka").html(data);
                    vratiProizvode();
                }
            });
        }

        function izmeni(){
            $.ajax({
                url: 'server/izmeni.php',
                method : 'post',
                data: {
                    proizvod: $("#proizvodiIzmena").val(),
                    cena: $("#cenaIzmena").val(),
                },
                success: function (data){
                    $("#poruka").html(data);
                    vratiProizvode();
                }
            });
        }

        function obrisi(){
            $.ajax({
                url: 'server/obrisi.php',
                method : 'post',
                data: {
                    proizvod: $("#proizvodiBrisanje").val()
                },
                success: function (data){
                    $("#poruka").html(data);
                    vratiProizvode();
                }
            });
        }
    </script>

   </body>
</html>

