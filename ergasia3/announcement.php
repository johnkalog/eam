<?php
  if ( isset($_GET['login']) ){
    $for_login = "?login=";
    $for_login .= $_GET['login'];
  }
  else{
    $for_login = "";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Εύδοξος</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="500ms">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="index.php<?php echo $for_login; ?>"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Search & Login Area -->
                        <div class="search-login-area d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="search.php<?php echo $for_login; ?>" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Αναζήτηση">
                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!-- Login Area -->
                            <div class="login-area">
                              <?php
                                if ( isset($_GET['login']) ){
                              ?>
                                <a href="profil.php?login=<?php echo $_GET['login']; ?>"><span><?php echo $_GET['login'] ?></span> <i class="fa fa-lock" aria-hidden="true"></i></a>
                              <?php
                                } else{
                              ?>
                                <a href="login.php"><span>Είσοδος / Εγγραφή</span> <i class="fa fa-lock" aria-hidden="true"></i></a>
                              <?php
                              }
                              ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="egames-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="egamesNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#">Φοιτητής</a>
                                        <ul class="dropdown">
                                            <li><a href="dhlwsh.php<?php echo $for_login; ?>">Δήλωση Συγγραμμάτων</a></li>
                                            <li><a href="#">Εύδοξος +</a></li>
                                            <li><a href="map.php<?php echo $for_login; ?>">Σημεία Διανομής</a></li>
                                            <li><a href="#">Παράδοση Συγγραμμάτων</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Γραμματεία</a>
                                        <ul class="dropdown">
                                          <li><a href="insertbook.php<?php echo $for_login; ?>">Προσθήκη Βιβλίου</a></li>
                                            <li><a href="#">Διαχείριση Συγγραμμάτων</a></li>
                                            <li><a href="#">Διαχείριση Γραμματείας</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Εκδότης</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Διαχείριση Συγγραμμάτων</a></li>
                                            <li><a href="#">Υπηρεσία Ταχυμεταφοράς</a></li>
                                            <li><a href="#">Κοστολόγηση</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#l">Βιβλιοπωλείο</a>
                                        <ul class="dropdown">
                                          <li><a href="#">Διαχείριση Συγγραμμάτων</a></li>
                                          <li><a href="#">Παράδοση Συγγραμμάτων</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="announcement.php<?php echo $for_login; ?>">Ανακοινώσεις</a></li>
                                    <li><a href="contact.php<?php echo $for_login; ?>">Επικοινωνία</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>

                  <ul class="breadcrumb">
        						<li><a href="index.php<?php echo $for_login; ?>">Αρχική</a></li>
        						<li>  »  <li>
                    <li><a href="announcement.php<?php echo $for_login; ?>">Ανακοινώσεις</a></li>
        					</ul>
                </div>
            </div>
        </div>

    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Articles Area Start ##### -->
    <section class="articles-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Articles Post Area -->
                <div class="col-12 col-lg-8">
                    <div class="mt-100">

                        <!-- *** Single Articles Area *** -->
                        <div class="single-articles-area d-flex flex-wrap mb-30">
                          <div class="article-content">
                            <a href="#" class="post-title">Έναρξη Δήλωσης και Διανομής Συγγραμμάτων Χειμερινής Περιόδου 2018-19</a>
                            <div class="post-meta">
                              <a href="#" class="post-date">Οκτώμβριος 23, 2018</a>
                            </div>
                            <p>Οι δηλώσεις διδακτικών συγγραμμάτων από τους φοιτητές θα ξεκινήσουν την Τετάρτη 24
                              Οκτωβρίου 2018 και θα πρέπει να έχουν ολοκληρωθεί έως την Παρασκευή 21 Δεκεμβρίου 2018. Η διανομή των διδακτικών συγγραμμάτων θα ξεκινήσει την Τετάρτη 24 Οκτωβρίου
                              2018 και θα ολοκληρωθεί την Παρασκευή 11 Ιανουαρίου 2019. Στο ίδιο χρονικό διάστημα θα πρέπει να
                              ολοκληρωθεί και η διαδικασία παράδοσης από τους εκδοτικούς οίκους των παραγγελθέντων από τις
                              βιβλιοθήκες διδακτικών συγγραμμάτων.</p>
                          </div>
                        </div>

                        <!-- *** Single Articles Area *** -->
                        <div class="single-articles-area d-flex flex-wrap mb-30">
                          <div class="article-content">
                            <a href="single-post.html" class="post-title">Νέα Παράταση Περιόδου Διανομής Συγγραμμάτων</a>
                            <div class="post-meta">
                              <a href="#" class="post-date">Μάιος 31, 2018</a>
                            </div>
                            <p>Παρατείνεται εκ νέου η προθεσμία για τη διανομή των συγγραμμάτων στους φοιτητές
                              έως την Παρασκευή 8 Ιουνίου 2018. Η ανωτέρω προθεσμία ισχύει και για τη διανομή συγγραμμάτων στις
                              βιβλιοθήκες.</p>
                          </div>
                        </div>

                        <!-- *** Single Articles Area *** -->
                        <div class="single-articles-area d-flex flex-wrap mb-30">
                          <div class="article-content">
                            <a href="single-post.html" class="post-title">Παράταση Περιόδου Δηλώσεων και Διανομής Συγγραμμάτων</a>
                            <div class="post-meta">
                              <div class="post-meta">
                                <a href="#" class="post-date">Μάιος 3, 2018</a>
                              </div>
                            </div>
                            <p>Παρατείνεται η προθεσμία δηλώσεων διδακτικών βιβλίων από τους φοιτητές για το τρέχον εαρινό
                              εξάμηνο έως και την Παρασκευή 18 Μαΐου 2018. Επίσης, ως νέα καταληκτική ημερομηνία για τη διανομή
                              των συγγραμμάτων στους φοιτητές ορίζεται η Παρασκευή 1 Ιουνίου 2018. Οι ανωτέρω προθεσμίες
                              ισχύουν και για την δήλωση-διανομή συγγραμμάτων στις βιβλιοθήκες.
                            </p>
                          </div>
                        </div>

                        <!-- ### Pagination Area ### -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination mt-100">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Articles Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="300ms">
                            <div class="widget-title">
                                <h4>Φοιτητής</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="info_foithth.php<?php echo $for_login; ?>">Πως να δηλώσω σύγγραμμα;</a></li>
                                        <li><a href="info_foithth.php<?php echo $for_login; ?>">Γιατί να ανταλλάξω βιβλία;</a></li>
                                        <li><a href="info_foithth.php<?php echo $for_login; ?>">Πως να κάνω ανταλλαγή;</a></li>
                                        <!-- <li><a href="#">God of war</a></li>
                                        <li><a href="#">Persona 5</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="300ms">
                            <div class="widget-title">
                                <h4>Γραμματεία</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="info_grammateias.php<?php echo $for_login; ?>">Ποιές είναι οι αρμοδιότητές μου;</a></li>
                                        <li><a href="info_grammateias.php<?php echo $for_login; ?>">Πως να διαχειριστώ συγγράμματα;</a></li>
                                        <li><a href="info_grammateias.php<?php echo $for_login; ?>">Πως να διαχειριστώ μαθήματα;</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="500ms">
                            <div class="widget-title">
                                <h4>Εκδότης</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="#">Ποιές είναι οι ενέργειές μου;</a></li>
                                        <li><a href="#">Τι μου προσφέρει ο Εύδοξος;</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="700ms">
                            <div class="widget-title">
                                <h4>Βιβλιοπωλείο</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="#"></a></li>
                                        <li><a href="#">Ποιές είναι οι αρμοδιότητές μου;</a></li>
                                        <li><a href="#">Πως να προσθέσω βιβλία;</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
