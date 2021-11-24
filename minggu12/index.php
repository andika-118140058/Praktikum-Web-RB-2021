<?php
require 'fungsi.php';

//koneksi database
$koneksi = mysqli_connect("localhost", "root", "", 'minggu12');

//cek tombol submit
if(isset($_POST["submit"])){

    //cek data berhasil di kirim
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Berhasil');
                document.location.href = 'index.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Gagal');
                document.location.href = 'index.php';
            </script>
        ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>CV Genja Rizky Novianto</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <!--  STYLESHEETS  -->
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Owl Carousel -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.default.css" rel="stylesheet">
        <!-- Magnific popup -->
        <link href="css/magnific-popup.min.css" rel="stylesheet">
        <!-- Icons Fonts -->
        <link href="icons-fonts/style.css" rel="stylesheet">
        <!-- Preloader -->
        <link href="css/preloader.min.css" rel="stylesheet">
        <!-- Main styles -->
        <link href="css/styles.min.css" rel="stylesheet">
        <!-- Responsive styles -->
        <link href="css/responsive.min.css" rel="stylesheet">
        <!-- Font Awesome Icons -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Google Fonts -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800,700italic' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
        <!-- end Preloader -->
		
		<div class="right-br"></div>

		<div class="left-br"></div>
		<div class="fixed-left-contact">
			<p>+62&nbsp;812&nbsp;9355&nbsp;6329</p>
		</div>
		<div class="fixed-right-socials">
      <ul class="list-unstiled">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		<li><a href="#"><i class="fa fa-skype"></i></a></li>
		<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
		<li><a href="#"><i class="fa fa-behance"></i></a></li>
		<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
      </ul>
    </div>
        <!-- Sidebar -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-2 sidebar">
                    <div class="col-sm-2 sidebarWrapper">
                        <!-- Avatar -->
						<img class="user-pic" src="images/avatar1.jpeg" alt="">
						<div class="signature">
							<img class="img-responsive" alt="signature" src="images/GenjaRizky.png">
						</div>
                        <!-- Menu -->
                        <div class="menu">
                            <div class="toggle-btn">
                                <span class="lines"></span>
                            </div>
                            <ul class="nav">
                                <li class="active">
                                    <a href="#about">Tentangku</a>
                                </li>
                                <li>
                                    <a href="#services">Pengalaman</a>
                                </li>
                                <li>
                                    <a href="#portfolio">Portfolio</a>
                                </li>
                                <li>
                                    <a href="#resume">Riwayat Pendidikan</a>
                                </li>
                                <li>
                                    <a href="#blog">Blog</a>
                                </li>
                                <li>
                                    <a href="#testimonial">Testimonial</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div><!-- end Menu -->
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
        <!-- end Sidebar -->

        <!-- About section -->
        <section id="about">
            <div class="about-background">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3 aboutWrapper">
                            <!-- Section Title -->
							<div class="nav-extra hidden-xs">
								<!-- Button Contact Modal -->
								<a data-target="#callmeModal" data-toggle="modal" href="#" class="btn btn-default">
									<span aria-hidden="true" class="icon_phone"></span>
								</a>
								<!-- Button 'Hire me' -->
								<a href="#contact" class="btn btn-info">Hire me now</a>
							</div>
                            <div class="section-title">
                                <h2><span>01</span>Tentangku</h2>
							</div><!-- end Section Title -->
							<h1>Halo, Namaku <strong>Genja Rizky Novianto</strong> <br>Junior Web Developer and <span class="bg-color">Junior Mobile Apps Developer</span></h1>
							<p>Perkenalkan namaku Genja Rizky Novianto,Aku lahir di Jakarta,08 November 2001.Aku seorang mahasiswa tingkat 3 tepatnya semester 5 di Institut Teknologi Sumatera. Aku berusia 20 tahun dan aku merupakan anak tunggal. Aku berasal dari Kota Tangerang Selatan tepatnya di Citra Prima Serpong A3/12 ,Kecamatan Setu. Aku salah satu founder onlineshop di @mitrajayashop_id</p>
							
                            <div class="skills">
                                <!-- Skill 1 -->
                                <div class="skill-outer">
                                    <h4>HTML5 &amp; CSS3<span>60%</span></h4>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        </div>
                                    </div>
                                </div>
                                <!-- Skill 2 -->
                                <div class="skill-outer">
                                    <h4>Java<span>58%</span></h4>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%;">
                                        </div>
                                    </div>
                                </div>
                                <!-- Skill 3 -->
                                <div class="skill-outer">
                                    <h4>PHP<span>62%</span></h4>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;">
                                        </div>
                                    </div>
                                </div>
                                <!-- Skill 4 -->
                                <div class="skill-outer">
                                    <h4>Phyton<span>65%</span></h4>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                        </div>
                                    </div>
                                </div>
                                <!-- end Skill 4 -->
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>
        <!-- end About section -->

        <!-- Services section -->
        <section id="services">
            <div class="services-background">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3 servicesWrapper">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2><span>02</span>Pengalaman Bidang IT</h2>
                            </div><!-- end Section Title -->
                            <!-- Service box 1 -->
                            <div class="service-box">
                                <div>
                                    <i class="icon icon_globe"></i>
                                </div>
                                <div>
                                    <h3>Web Development</h3>
                                </div>
                            </div>
                            <!-- Service box 2 -->
                            <div class="service-box">
                                <div>
                                    <i class="icon icon_pens"></i>
                                </div>
                                <div>
                                    <h3>UX and UI Design</h3>
                                </div>
                            </div>
                            <!-- Service box 3 -->
                            <div class="service-box">
                                <div>
                                    <i class="icon icon_easel"></i>
                                </div>
                                <div>
                                    <h3>Data Analyst</h3>
                                </div>
                            </div>
                            <!-- Service box 4 -->
                            <div class="service-box">
                                <div>
                                    <i class="icon icon_globe-2"></i>
                                </div>
                                <div>
                                    <h3>Mobile Apps Development</h3>
                                </div>
                            </div>
                            <!-- end Service box 4 -->
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>
        <!-- end Services section -->

        <!-- Portfolio section -->
        <section id="portfolio">
            <div class="portfolio-background">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3 portfolioWrapper">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2 class="pull-left"><span>03</span>Portofolio</h2>
								<div class="portfolio-filter pull-right">
                                <ul>
                                    <li class="btn btn-default filter active" data-filter="all">Show All</li><!--
                                    --><li class="btn btn-default filter" data-filter=".category-1">Data Analyst</li><!--
                                    --><li class="btn btn-default filter" data-filter=".category-2">Websites</li>
                                </ul>
                            </div>
                            </div><!-- end Section Title -->
                            <div class="row">
                                <div id="mix-container">
                                    <!-- Image 1 -->
                                    <div class="col-xs-12 col-sm-4 mix category-1">
                                        <div class="imageWrapper">
                                            <a class="lightbox" href="#popup-1">
                                                <img src="images/portfolio-1.jpg" alt=""><!-- Image 1 source -->
                                                <div class="imageHover">
                                                    <div>
                                                        <h3>Project Title</h3>
                                                        <span>Data Analyst</span>
                                                    </div>
                                                </div>
                                            </a>
											<!-- popup content -->
                                            <div id="popup-1" class="mfp-hide popup-box">
                                                <img src="images/portfolio-1.jpg" alt=""><!-- Image 1 source -->
                                                <div>
                                                    <h3>Contoh Data Analyst 1</h3>
                                                    
                                                </div>
                                            </div>
                                            <!-- end popup content -->
                                        </div>
                                    </div>
                                    <!-- Image 2 -->
                                    <div class="col-xs-12 col-sm-4 mix category-2">
                                        <div class="imageWrapper">
                                            <a class="lightbox" href="#popup-2">
                                                <img src="images/portfolio-2.jpg" alt=""><!-- Image 2 source -->
                                                <div class="imageHover">
                                                    <div>
                                                        <h3>Project Title</h3>
                                                        <span>Websites</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- popup content -->
                                            <div id="popup-2" class="mfp-hide popup-box">
                                                <img src="images/portfolio-2.jpg" alt=""><!-- Image 2 source -->
                                                <div>
                                                    <h3>Contoh Websites 1</h3>
                                                </div>
                                            </div>
                                            <!-- end popup content -->
                                        </div>
                                    </div>
                                    <!-- Image 3 -->
                                    <div class="col-xs-12 col-sm-4 mix category-1">
                                        <div class="imageWrapper">
                                            <a class="lightbox" href="#popup-3">
                                                <img src="images/portfolio3.jpg" alt=""><!-- Image 3 source -->
                                                <div class="imageHover">
                                                    <div>
                                                        <h3>Project Title</h3>
                                                        <span>Data Analyst</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- popup content -->
                                            <div id="popup-3" class="mfp-hide popup-box">
                                                <img src="images/portfolio3.jpg" alt=""><!-- Image 3 source -->
                                                <div>
                                                    <h3>Contoh Data Analyst 2</h3>
                                                </div>
                                            </div>
                                            <!-- end popup content -->
                                        </div>
                                    </div>
                                    <!-- Image 4 -->
                                    <div class="col-xs-12 col-sm-4 mix category-2">
                                        <div class="imageWrapper">
                                            <a class="lightbox" href="#popup-4">
                                                <img src="images/portfolio-4.jpg" alt=""><!-- Image 4 source -->
                                                <div class="imageHover">
                                                    <div>
                                                        <h3>Project Title</h3>
                                                        <span>Websites</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- popup content -->
                                            <div id="popup-4" class="mfp-hide popup-box">
                                                <img src="images/portfolio-4.jpg" alt=""><!-- Image 4 source -->
                                                <div>
                                                    <h3>Contoh Websites 2</h3>

                                                </div>
                                            </div>
                                            <!-- end popup content -->
                                        </div>
                                    </div>
                                    <!-- Image 5 -->
                                    <div class="col-xs-12 col-sm-4 mix category-2">
                                        <div class="imageWrapper">
                                            <a class="lightbox" href="#popup-5">
                                                <img src="images/portfolio-5.jpg" alt=""><!-- Image 2 source -->
                                                <div class="imageHover">
                                                    <div>
                                                        <h3>Project Title</h3>
                                                        <span>Websites</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- popup content -->
                                            <div id="popup-5" class="mfp-hide popup-box">
                                                <img src="images/portfolio-5.jpg" alt=""><!-- Image 2 source -->
                                                <div>
                                                    <h3>Contoh Websites 3</h3>  
                                                </div>
                                            </div>
                                            <!-- end popup content -->
                                        </div>
                                    </div>
                                    <!-- Image 6 -->
                                    <div class="col-xs-12 col-sm-4 mix category-1">
                                        <div class="imageWrapper">
                                            <a class="lightbox" href="#popup-6">
                                                <img src="images/portfolio6.jpg" alt=""><!-- Image 3 source -->
                                                <div class="imageHover">
                                                    <div>
                                                        <h3>Project Title</h3>
                                                        <span>Data Analyst</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- popup content -->
                                            <div id="popup-6" class="mfp-hide popup-box">
                                                <img src="images/portfolio6.jpg" alt=""><!-- Image 3 source -->
                                                <div>
                                                    <h3>Contoh Data Analyst 3</h3>
                                                </div>
                                            </div>
                                            <!-- end popup content -->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end Inner row -->
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>
        <!-- end Portofolio section -->

        <!-- Riwayat Pendidikan section -->
        <section id="riwayat">
            <div class="riwayat-background">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3 riwayatWrapper">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2><span>04</span>Riwayat Pendidikan</h2>
                            </div><!-- end Section Title -->
                            <!-- Riwayat Pendidikan 1 -->
                            <div class="riwayat-box">
                                <div>
                                    <i class="icon_pencil"></i>
                                </div>
                                <div>
                                    <h3>SDN Muncul 01</h3>
                                    <span>2007 - 2013</span>
                                </div>
                            </div>
                            <!-- Riwayat Pendidikan 2 -->
                            <div class="riwayat-box">
                                <div>
                                    <i class="icon_toolbox_alt"></i>
                                </div>
                                <div>
                                    <h3>SMP Negeri 08 Kota Tangerang Selatan</h3>
                                    <span>2013 - 2016</span>
                                </div>
                            </div>
                            <!-- Riwayat Pendidikan  3 -->
                            <div class="riwayat-box">
                                <div>
                                    <i class="icon_genius"></i>
                                </div>
                                <div>
                                    <h3>SMA Negeri 12 Kota Tangerang Selatan</h3>
                                    <span>2016 - 2019</span>
                                </div>
                            </div>
                            <!-- Riwayat Pendidikan  4 -->
                            <div class="riwayat-box">
                                <div>
                                    <i class="icon_contacts_alt"></i>
                                </div>
                                <div>
                                    <h3>Institut Teknologi Sumatera</h3>
                                    <span>2019 - Sekarang</span>
                                </div>
                            </div>
                            <!-- end Riwayat Pendidikan  4 -->
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>
        <!-- end Riwayat Pendidikan section -->

        <!-- Blog section -->
        <section id="blog">
            <div class="blog-background">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3 blogWrapper">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2><span>05</span>Blog Posts</h2>
                            </div><!-- end Section Title -->
                            <!-- Blog Post 1 -->
                            <div class="blog-post row">
							<div class="col-sm-4">
								<div class="blog-img">
									<img src="images/priceskin.jpeg" alt="">
									<span class="card-title post-ver-date"><span class="icon_calendar" aria-hidden="true"></span> Form perhitungan Skin MJS.ID</span>
								</div>
								<div class="blog-dis">
									<h3>Form Perhitungan Belanja Skin MJS.ID</h3>
									<p>form untuk melakukan perhitungan sebelum pembelian Skin di MJS.ID</p>
									<a href="formbelanja.php" class="btn btn-default">Go !!!</a>
								</div>
							</div>
                            <div class="col-sm-4">
								<div class="blog-img">
									<img src="images/pricedm.jpeg" alt="">
									<span class="card-title post-ver-date"><span class="icon_calendar" aria-hidden="true"></span>Form perhitungan DM MJS.ID</span>
								</div>
								<div class="blog-dis">
									<h3>Form Perhitungan Belanja DM MJS.ID</h3>
									<p>form untuk melakukan perhitungan sebelum pembelian DM di MJS.ID</p>
									<a href="formbelanja2.php" class="btn btn-default">Go !!!</a>
								</div>
							</div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>
        <!-- end Blog section -->

        <!-- Testimonial section -->
        <section id="testimonial">
            <div class="testimonial-background">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3 testimonialWrapper">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2><span>06</span>Testimonial</h2>
                            </div><!-- end Section Title -->
                            <div class="testimonial-box">
                                <div id="testimonialSlider" class="owl-carousel">
                                    <!-- 1 -->
									<div class="testimonial">
										<div class="testimonial_content">
											<div class="testimonial_content_inner">
												<p> Senang Berbelanja di @mitrajayashop.id harga skinnya murah dibanding yang lain!!!</p>
											</div>
										</div>
										<div class="testimonial_author clearfix">
											<img alt="" src="images/client-1.jpg" class="testimonial_photo">
											<h3 class="testimonial_name">Heksa</h3>
											<div class="testimonial_position">Pro Player Mobile Legend EVOS Esport</div>
										</div>
									</div>
                                    <!-- 2 -->
                                    <div class="testimonial">
										<div class="testimonial_content">
											<div class="testimonial_content_inner">
												<p> Senang Berbelanja di @mitrajayashop.id harga DM murah dibanding yang lain!!!</p>
											</div>
										</div>
										<div class="testimonial_author clearfix">
											<img alt="" src="images/client-2.jpg" class="testimonial_photo">
											<h3 class="testimonial_name">Hafiz</h3>
											<div class="testimonial_position">Pro Player Free Fire RRQ Esport</div>
										</div>
									</div>
                                    <!-- 3 -->
                                    <div class="testimonial">
										<div class="testimonial_content">
											<div class="testimonial_content_inner">
												<p> Senang Berbelanja di @mitrajayashop.id harga murah dibanding yang lain dan pelayanan cepat!!! </p>
											</div>
										</div>
										<div class="testimonial_author clearfix">
											<img alt="" src="images/client-3.jpg" class="testimonial_photo">
											<h3 class="testimonial_name">Aan</h3>
											<div class="testimonial_position">Player Game Online</div>
										</div>
									</div>
                                    <!-- end 3 -->
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>
        <!-- end Testimonial section -->

        <!-- Contact section -->
        <section id="contact">
            <div class="contact-background">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3 contactWrapper">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2><span>07</span>Get In Touch</h2>
                            </div><!-- end Section Title -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 contact-form">
									<div class="widget">
                                    <form action="" method="post" id="contactform" enctype="multipart/form-data">
                                        <div class="input-style">
                                            <div>
                                                <input class="form-control" type="text" id="name" name="name" placeholder="Name">
                                            </div>
                                            <div>
                                              <input class="form-control" type="email" id="email" name="email" placeholder="E-Mail">
                                            </div>   
                                            <div>
                                                <input class="form-control" type="file" id="file" name="file" placeholder="File">
                                              </div> 
                                        </div>

                                        <div class="text-style">
                                            <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                                        </div>


                                        <input type="submit" id="submit" class="btn btn-info" name="submit" value="Send Message">
                                        <div class="submit-result">
                                            <p id="success">Your Message has been sent!</p>
                                            <p id="error">Something went wrong, go back and try again!</p>
                                        </div>
                                    </form>
									</div>
                                </div>
                                <div class="col-xs-12 col-sm-6 contact-info">
									<div class="widget">
                                    <ul>
                                        <li>
                                            <h3><span class="icon_pin" aria-hidden="true"></span> Alamat</h3>
                                            <p>Jalan Eboni TE 2 18, Sukarame , Bandar Lampung</p>
                                        </li>
                                        <li>
                                            <h3><span class="icon_phone" aria-hidden="true"></span> Phone</h3>
                                            <p>+(62) 812 9355 6329</p>
                                        </li>
                                        <li>
                                            <h3><span class="icon_mail" aria-hidden="true"></span> Email</h3>
                                            <p>genjanovianto@gmail.com</p>
                                        </li>
                                    </ul>
									</div>
                                </div>
                            </div><!-- end Inner row -->
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>
        <!-- end Contact section -->

        <!-- Footer -->
        <footer class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-9 col-sm-offset-3 footer-background">
                        <div class="row">
                        <div class="col-sm-6 text-left">
                            Copyright &copy; 2021 Lampung. IF ITERA 19 
                        </div>
                        <div class="col-sm-6 text-right">
                            Designed With <i class="fa fa-heart-o red"></i> By <a target="_blank" href="https://www.facebook.com/iamgurdeeposahan">Genja Rizky Novianto</a>
                        </div>
                    </div>
                      
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </footer>
        <!-- end Footer -->
		
	

        <!-- ##### JAVASCRIPTS ##### -->
        <!-- jQuery Library -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Retina Graphics -->
        <script src="js/retina.min.js"></script>
        <!-- Magnific popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Theme Plugins -->
        <script src="js/theme-plugins.min.js"></script>
        <!-- Custom Scripts -->
        <script src="js/scripts.min.js"></script>
    </body>
</html>