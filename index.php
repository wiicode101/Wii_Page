<?php
    include 'chatbot.php'; // Menyertakan file PHP eksternal jika diperlukan
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Stimulus HTML CSS Template</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/templatemo-style.css">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- PRE LOADER -->

<div class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>
     </div>
</div>


<!-- Navigation Section -->

<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
     <div class="container">

          <!-- navbar header -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="#" class="navbar-brand">Wiiarts-Page</a>
          </div>

          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">About Me</a></li>
                    <li><a href="galery.php">Gallery</a></li>
                    <li><a href="portofolio.php">Portofolio</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
               </ul>
          </div>

     </div>
</div>


<!-- Home Section -->

<section id="home" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="home-img"></div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="home-thumb">
                         <div class="section-title">
                              <h4 class="wow fadeInUp" data-wow-delay="0.3s">welcome to my website</h4>
                              <h1 class="wow fadeInUp" data-wow-delay="0.6s">Hello, perkenalkan nama saya <p> </p> <strong>Arif Putera Wijaya</strong>.</h1>
                              <p class="wow fadeInUp" data-wow-delay="0.9s">Saya membuat halaman ini untuk menjadi track kegiatan, sertifikat, maupun proyek mandiri yang saya lakukan selama ini.</p>
                              <a href="#about" class="wow fadeInUp smoothScroll section-btn btn btn-success" data-wow-delay="1.4s">Get Started</a>
                              
                         </div>
                    </div>
               </div>


          </div>
     </div>
</section>


<!-- About Section -->

<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="about-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.4s">
                              <h1>Tentang Saya</h1>
                              <p class="color-yellow">ARIF PUTERA WIJAYA, S.T.</p>
                         </div>
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <p>Saya seorang lulusan S1 Jurusan Teknik Informatika (TI) dari Universitas Hasanuddin. Saya bersemangat di bidang teknologi kecerdasan buatan (AI), terutama pada bidang Pemrosesan Bahasa Alami (NLP), Analisis Data, dan Visualisasi Data.</p>
                              <p>Saya sempat aktif di beberapa organisasi untuk memperluas hubungan, pengalaman, serta keterampilan interpersonal. Saya percaya bahwa keterampilan komunikasi yang baik, keinginan untuk belajar serta menjadi pribadi yang bertanggung jawab adalah kunci untuk berkembang menjadi seorang profesional.</p>
                         </div>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="background-image about-img"></div>
               </div>

               <div class="bg-yellow col-md-3 col-sm-6">
                    <div class="skill-thumb">
                         <div class="wow fadeInUp section-title color-white" data-wow-delay="1.2s">
                              <h1>My Skills</h1>
                              <p class="color-white">Data Visualisasi.Data Analisis.NLP</p>
                         
                                <div class=" wow fadeInUp skills-thumb" data-wow-delay="1.6s">
                                <h3 class="color-white">Tools & Language : </h3>
                                <strong>Python</strong>
                                    <span class="color-white pull-right">85%</span>
                                        <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                        </div>

                                <strong>R</strong>
                                    <span class="color-white pull-right">65%</span>
                                        <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                                        </div>

                                <strong>Spreadsheet</strong>
                                    <span class="color-white pull-right">70%</span>
                                        <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                        </div>

                                <strong>Google Colab</strong>
                                    <span class="color-white pull-right">90%</span>
                                        <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                        </div>
                                </div>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>


<!-- Service Section -->

<section id="service" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="bg-yellow col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="0.8s">
                         <i class="fa fa-lightbulb-o"></i>
                              <h3>Kecerdasan Buatan (AI)</h3>
                              <h3> </h3>
                             
                              <p class="color-white">Mempelajari dasar dasar AI semasa perkuliahan diantaranya Machine Learning (ML), Natural Language Processing (NLP), dan Computer Vision (CV).</p>
                              
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.2s">
                         <i class="fa fa-pie-chart"></i>
                              <h3>Visualisasi Data</h3>
                              <h3> </h3>
                              <p class="color-white">Membuat beberapa proyek Visualisasi data semasa kuliah dan magang menggunakan bahasa R dan Python, serta menggunakan Tools seperti Looker Studio, Tableu, dan R studio.</p>
                              
                    </div>
               </div>

               <div class="bg-dark col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.6s">
                         <i class="fa fa-comment"></i>
                              <h3>Natural Language Processing (NLP)</h3>
                              <p class="color-white">Membuat sistem kategorisasi fonem untuk korpus fonem bahasa Indonesia berformat Concatenation synthesizer agar pengucapan lebih natural mendekati bahasa Indonesia.</p>
                    </div>
               </div>

               <div class="bg-white col-md-3 col-sm-6">
                    <div class="wow fadeInUp service-thumb" data-wow-delay="1.8s">
                         <i class="fa fa-html5"></i>
                              <h3>Coding</h3>
                              <h3></h3>
                              <p>Mempelajari dasar dasar syntax coding untuk beberapa bahasa pemograman dan website, dengan course maupun semasa kuliah diantaranya Python, C, R, PHP, CSS, HTML.</p>
                              
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- Experience Section -->

<section id="experience" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="background-image experience-img"></div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="color-white experience-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.8s">
                              <h1>Pengalaman Saya</h1>
                              <p class="color-white">Kerja dan Magang</p>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Data Visualization Intern <small>Des 2022 - Mar 2023</small></h3>
                                   <p class="color-white">Di Balai Monitor SFR Kelas I Makassar, saya membantu instruktur dalam pengolahan data (acquisition, cleaning, transformation), bekerja sama dalam tim untuk membuat dashboard visualisasi laporan kinerja, pemeriksaan stasiun radio (ISR) tahun 2022, serta menyusun grafik data untuk majalah laporan kinerja.</p>
                              </div>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.6s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Cooming Soon<small>   Cooming Soon</small></h3>
                                   <p class="color-white">Cooming Soon.......</p>
                              </div>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>


<!-- Education Section -->

<section id="education" class="parallax-section">
     <div class="container">
          <div class="row">
               <div class="col-md-6 col-sm-6">
                    <div class="color-white education-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.8s">
                              <h1>Pendidikan Saya</h1>
                              <p class="color-white">Pendidikan Formal</p>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Universitas Hasanuddin <small> Februari 2024 </small></h3>
                                   <p class="color-white">Lulusan Teknik Informatika dengan fokus pada Artificial Intelligence, menyelesaikan skripsi berjudul "Implementasi Algoritma Knuth-Morris-Pratt dalam Pembuatan Korpus Bahasa Indonesia dan Integrasi Kategorisasi Fonem untuk Meningkatkan Akurasi Text-to-Speech". </p>
                              </div>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.6s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">SMK Negeri 2 Singkawang <small> Mei 2019</small></h3>
                                   <p class="color-white">Mengambil jurusan Multimedia, mempelajari dasar-dasar fotografi, editing foto dan video, serta coding sederhana.</p>
                              </div>
                         </div>

                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="background-image education-img"></div>
               </div>

          </div>
     </div>
</section>


<!-- Quotes Section -->

<section id="quotes" class="parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <i class="wow fadeInUp fa fa-star" data-wow-delay="0.6s"></i>
                    <h2 class="wow fadeInUp" data-wow-delay="0.8s">Life is so much easier when I allow myself to be myself and go with the flow. Whatever that looks like on a given day. If I can get quiet enough to truly check in with myself, I usually end up on the right track.</h2>
                    <p class="wow fadeInUp" data-wow-delay="1s">Taylor Schilling</p>
               </div>

          </div>
     </div>
</section>


<!-- Contact Section -->

<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="contact-form">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                              <h1 class="color-white">Tinggalkan Pesan</h1>
                              <p class="color-white">Berikan komentar/pesan untuk saya.</p>
                         </div>

                         <div id="contact-form">
                              <form id="contactForm" action="send-email.php" method="post">
                                   <div class="wow fadeInUp" data-wow-delay="1s">
                                        <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name" required>
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.2s">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.4s">
                                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="Write your message..." required></textarea>
                                   </div>
                                   <div class="wow fadeInUp col-md-6 col-sm-8" data-wow-delay="1.6s">
                                        <input name="submit" type="submit" class="form-control" id="submit" value="Send">
                                        </div>

                                        <!-- Modal -->
                                        <div id="maintenanceModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center; z-index: 1000;">
                                        <div style="background: white; padding: 20px; border-radius: 5px; text-align: center;">
                                             <p>Fitur ini sedang dalam maintenance.</p>
                                             <button id="closeModal" style="padding: 10px 20px; background: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">Tutup</button>
                                        </div>
                                        </div>

                                        <script>
                                        document.getElementById('submit').addEventListener('click', function (e) {
                                             e.preventDefault(); // Mencegah aksi default tombol
                                             document.getElementById('maintenanceModal').style.display = 'flex'; // Menampilkan modal
                                        });

                                        document.getElementById('closeModal').addEventListener('click', function () {
                                             document.getElementById('maintenanceModal').style.display = 'none'; // Menyembunyikan modal
                                        });
                                        </script>

                              </form>
                              <div id="responseMessage"></div>
                         </div>

                         <!-- Include jQuery -->
                         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                         <script>
                         $(document).ready(function(){
                              $("#contactForm").submit(function(event){
                                   event.preventDefault();  // Prevent default form submission

                                   var formData = $(this).serialize();  // Serialize form data

                                   $.ajax({
                                        url: "send-email.php",
                                        type: "POST",
                                        data: formData,
                                        success: function(response) {
                                             // Menampilkan pesan sukses atau error di bawah form
                                             $("#responseMessage").html(response);
                                        },
                                        error: function() {
                                             $("#responseMessage").html("There was an error sending your message.");
                                        }
                                   });
                              });
                         });
                         </script>



                         <!-- <div id="contact-form">
                              <form action="#template-mo" method="post">
                                   <div class="wow fadeInUp" data-wow-delay="1s">
                                        <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name">
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.2s">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.4s">
                                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="Write your message..."></textarea>
                                   </div>
                                   <div class="wow fadeInUp col-md-6 col-sm-8" data-wow-delay="1.6s">
                                        <input name="submit" type="submit" class="form-control" id="submit" value="Send">
                                   </div>
                              </form>
                         </div> -->

                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="background-image contact-img"></div>
               </div>

               <div class="bg-dark col-md-3 col-sm-6">
                    <div class="contact-thumb">
                         <div class="wow fadeInUp contact-info" data-wow-delay="0.6s">
                              <h3 class="color-white">Hubungi Saya Via</h3>
                              <p>Tinggal di Kota Singkawang</p>
                         </div>

                         <div class="wow fadeInUp contact-info" data-wow-delay="0.8s">
                              <h3 class="color-white">Contact.</h3>
                              <p><i class="fa fa-phone"></i> <a href="https://wa.me/+6282250016165">0822-5001-6165</a> </p>
                              <p><i class="fa fa-envelope-o"></i> <a href="mailto:arifputera2001@gmail.com">arifputera2001@gmail.com </a> </p>
                              <p><i class="fa fa-globe"></i> <a href="#">Wiiarts-page.com</a></p>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>


<!-- Footer Section -->

<footer>
	<div class="container">
		<div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="wow fadeInUp footer-copyright" data-wow-delay="1.8s">
                         <p>Copyright &copy; Wiiarts-page </p>
                    </div>
				<ul class="wow fadeInUp social-icon" data-wow-delay="2s">
                         <li><a href="https://www.facebook.com/profile.php?id=100008343195279" class="fa fa-facebook"></a></li>
                         <li><a href="https://mailto:arifputera2001@gmail.com" class="fa fa-google-plus"></a></li>
                         <li><a href="https://www.instagram.com/arif_putera_wijaya/" class="fa fa-instagram"></a></li>
                         <li><a href="https://www.linkedin.com/in/arif-200117ar/" class="fa fa-linkedin"></a></li>
                    </ul>
               </div>
			
		</div>
	</div>
</footer>

<!-- SCRIPTS -->
 

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>




</body>
</html>