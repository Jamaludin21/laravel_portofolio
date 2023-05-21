 @extends('Layout.header')

 @section('title', 'Homepage')

 <body>

     <!-- ======= Mobile nav toggle button ======= -->
     <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

     <!-- ======= Header ======= -->
     <header id="header">
         <div class="d-flex flex-column">

             <div class="profile">
                 <img src="{{ asset('img/jamal.jpg') }} " alt="" class="img-fluid rounded-circle">
                 <h1 class="text-light text-center"><a href="{{ url('/') }}">Jamaludin Hakim Harsoyo</a></h1>
                 <h6 class="text-light text-center mt-4">Software Developers</h6>
                 <div class="social-links mt-3 text-center">
                     <a href="https://www.facebook.com/hakim.harsoyo" class="facebook" target="_blank"><i
                             class="bx bxl-facebook"></i></a>
                     <a href="https://www.instagram.com/jamaludin_hakim/" class="instagram" target="_blank"><i
                             class="bx bxl-instagram"></i></a>
                     <a href="https://github.com/Jamaludin21" class="google-plus" target="_blank"><i
                             class="bx bxl-github"></i></a>
                     <a href="https://www.linkedin.com/in/jamaludin-hakim-harsoyo-5a86a2240" class="linkedin"
                         target="_blank"><i class="bx bxl-linkedin"></i></a>
                 </div>
             </div>

             <nav id="navbar" class="nav-menu navbar">
                 <ul>
                     <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                             <span>Home</span></a></li>
                     <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
                     </li>
                     <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                             <span>Resume</span></a></li>
                     <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                             <span>Portfolio</span></a></li>
                     <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
                 </ul>
             </nav>
             <!-- .nav-menu -->
         </div>
     </header>
     <!-- End Header -->

     <!-- ======= Hero Section ======= -->
     <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
         <div class="hero-container" data-aos="fade-in">
             <h1>Jamaludin Hakim Harsoyo</h1>
             <p>I'm Software Developer <strong><span class="typed"
                         data-typed-items="Fullstack Developer,Mobile Developer,Web Developer"></span></strong><br>Welcome
                 to
                 My Bio & Porto Website!</p>
         </div>
     </section>
     <!-- End Hero -->

     <main id="main">

         <!-- ======= About Section ======= -->
         <section id="about" class="about">
             <div class="container">

                 <div class="section-title">
                     <h2>About Me</h2>
                     <p>I am study in University Bhayangkara Jakarta Raya at informatics. In this stage i learn C++ and
                         Java
                         basic with
                         algorithm and in next level i learn using Java Native with android studio to create a mobile
                         Application and i learn
                         about framework of web development too (in this time i am learn to use codeigniter 4) after
                         that i
                         use to join
                         internship as Flutter Mobile Developer in PT Menara Indonesia (M-Knows Consulting) to fulfill
                         subject of Work
                         Practice/Internship in semester 6.<br><br>

                         My work experience as developer first was at PT Menara Indonesia as Mobile Flutter Internship
                         and
                         second was at PT
                         Kognitif Skema Indonesia as Fullstack Developer, intern for Fullstack Developer at PT Citi Asia
                         Internasional for 3
                         month and the next experience as Backend Developer at PT Manajemen Dewarangga for 3 month and
                         latest experience as
                         Fullstack Developer at Iuris Internation Law Group.<br><br>

                         I like to study a new thing that make me interest and always learning from mistake. Hardworking
                         College Student seeking
                         employment. Adept in various social media platforms and office technology programs. Committed
                         to
                         utilizing my skills to
                         further the mission of a company. Bilingual, hardworking, and ready to join my next team.</p>
                 </div>

                 <div class="row">
                     <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left">
                         <div class="row">
                             <div class="col-lg-6">
                                 <ul>
                                     <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>20 May
                                             1999</span></li>
                                     <li><i class="bi bi-chevron-right"></i> <strong>Religion:</strong>
                                         <span>Islam</span>
                                     </li>
                                     <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                         <span>081514299690</span>
                                     </li>
                                     <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bekasi,
                                             Indonesia</span></li>
                                 </ul>
                             </div>
                             <div class="col-lg-6">
                                 <ul>
                                     <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>24</span></li>
                                     <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                         <span>Bachelor</span>
                                     </li>
                                     <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                         <span>jamaludinhakim21@gmail.com</span>
                                     </li>
                                     <li><i class="bi bi-chevron-right"></i> <strong>University:</strong>
                                         <span>University
                                             Bhayangkara Jakarta Raya</span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <!-- <p>
                            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia
                            repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
                        </p> -->
                     </div>
                 </div>

             </div>
         </section>
         <!-- End About Section -->

         <!-- ======= Skills Section ======= -->
         <section id="skills" class="skills section-bg">
             <div class="container">

                 <div class="section-title">
                     <h2>Skills</h2>
                     <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                        quidem hic quas.</p> -->
                 </div>

                 <div class="row skills-content">

                     <div class="col-lg-4" data-aos="fade-up">

                         <div class="progress">
                             <span class="skill">Web Basic(HTML,CSS,JS) + PHP</span>
                         </div>

                         <div class="progress">
                             <span class="skill">Laravel</span>
                         </div>

                         <div class="progress">
                             <span class="skill">Codeigniter 3</span>

                         </div>

                     </div>

                     <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                         <div class="progress">
                             <span class="skill">Java Native (Android)</span>

                         </div>

                         <div class="progress">
                             <span class="skill">Database MySQL & PotsgreSQL</span>

                         </div>

                         <div class="progress">
                             <span class="skill">Vue JS/React JS</span>

                         </div>
                     </div>
                     <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                         <div class="progress">
                             <span class="skill">Frontend Development</span>

                         </div>

                         <div class="progress">
                             <span class="skill">Backend Development</span>

                         </div>

                         <div class="progress">
                             <span class="skill">Server Configuration</span>

                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- End Skills Section -->

         <!-- ======= Resume Section ======= -->
         <section id="resume" class="resume">
             <div class="container">

                 <div class="section-title">
                     <h2>Resume</h2>
                     <p>Github : <a href="https://github.com/Jamaludin21" target="blank">Click Here</a> | Facebook :
                         <a href="https://www.facebook.com/hakim.harsoyo" target="blank">Click Here</a> | Instagram :
                         <a href="https://www.instagram.com/jamaludin_hakim/" target="blank">Click Here</a> | Linkedin
                         :
                         <a href="https://www.linkedin.com/in/jamaludin-hakim-harsoyo-5a86a2240" target="blank">Click
                             Here</a>
                     </p>
                 </div>

                 <div class="row">
                     <div class="col-lg-6" data-aos="fade-up">
                         <h3 class="resume-title">Sumary</h3>
                         <div class="resume-item pb-0">
                             <h4>Jamaludin Hakim Harsoyo</h4>
                             <p><em>I am study in University Bhayangkara Jakarta Raya at informatics and my work
                                     experience
                                     as developer first was at <strong>PT Menara Indonesia as Mobile Flutter
                                         Internship</strong> and second was at <strong>PT Kognitif Skema Indonesia as
                                         Fullstack Developer</strong> and the latest was
                                     at <strong>PT Sistem Manajemen Dewarangga as Backend Developer</strong>,
                                     I like to study a new thing that make me interest and always learning from mistake.
                                     Hardworking College Student seeking employment. Adept in various social media
                                     platforms
                                     and office technology programs. Committed to utilizing
                                     my skills to further the mission of a company. Bilingual, hardworking, and ready to
                                     join my next team.</em></p>
                             <ul>
                                 <li>Villa Indah Permai Blok H2 No.16 RT 001 RW 036, Bekasi 17121, Indonesia</li>
                                 <li>082111860613</li>
                                 <li>jamaludinhakim21@gmail.com</li>
                             </ul>
                         </div>
                         <h3 class="resume-title">Education</h3>
                         <div class="resume-item">
                             <h4>Bachelor of Informatics</h4>
                             <h5>2019 - Present</h5>
                             <p><em>Univeristy of Bhayangkara Jakarta Raya, Bekasi, Indonesia</em></p>
                         </div>
                     </div>
                     <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                         <h3 class="resume-title">Professional Experience</h3>
                         <div class="resume-item">
                             <h4>BACKEND DEVELOPER</h4>
                             <h5>January 2023 – April 2023</h5>
                             <p><strong>PT SISTEM MANAJEMEN DEWARANGGA</strong> <em>Cibubur,Bekasi Indonesia</em></p>
                             <ul>
                                 <li>Build backend Logic for Company Project.</li>
                                 <li>Create REST API for Frontend Consume Data</li>
                                 <li>Setup VPS for preparation of production/live application.</li>
                                 <li>Translate field data in figma to learn need of application in build Logic and Rest
                                     API
                                 </li>
                             </ul>
                         </div>
                         <div class="resume-item">
                             <h4>Fullstack Developer</h4>
                             <h5>Juny 2022 - September 2022</h5>
                             <p><strong>PT KOGNITIF SKEMA INDONESIA</strong> <em>Petojo Selatan. Jakarta Pusat,
                                     Indonesia</em></p>
                             <ul>
                                 <li>Handle development of modul E-Commerce in Project <a
                                         href="https://solotechnopark.id">Solotechnopark</a> & Mandiri .</li>
                                 <li>Develop mostly Frontend of the <a href="https://ecommerce.sensa.id">website</a>
                                     with
                                     use some of consume/fetch data from database MySql & Firebase.</li>
                                 <li>Collaborate with teams from each department to ensure campaign strategies are
                                     aligned
                                     with business values and goals.</li>
                             </ul>
                         </div>
                         <div class="resume-item">
                             <h4>Flutter Developer Internship</h4>
                             <h5>February 2022 - May 2022</h5>
                             <p><strong>PT MENARA INDONESIA</strong> <em>Kebayoran Baru, Jakarta Selatan, Indonesia</em>
                             </p>
                             <ul>
                                 <li>Knowing the Dart programming language and the Flutter framework.</li>
                                 <li>Doing Application Development on Android (Mobile)</li>
                                 <li>Implementing the Figma Prototype</li>
                                 <li>Activate the functions of the UI that has been created</li>
                                 <li>Collaborate with your team using Git</li>
                                 <li>API integration from WEB dept</li>
                             </ul>
                         </div>
                         <h3 class="resume-title">Other Experience</h3>
                         <div class="resume-item">
                             <h4>Co-Lead Frontend Division</h4>
                             <h5>October 2022 - Present</h5>
                             <p><strong>GOOGLE DEVELOPER STUDENT CLUB UBJ</strong> <em>Bekasi, Indonesia</em></p>
                             <ul>
                                 <li>Responsible to develop the member/student of division fronted with the lead
                                     division
                                     about basic to intermediate of Frontend Developer.</li>
                                 <li>Give the member a project with study case after basic knowledge to give them more
                                     image
                                     how frontend use in industry/real work project.</li>
                             </ul>
                         </div>
                         <div class="resume-item">
                             <h4>Kampus Mengajar (Kampus Merdeka)</h4>
                             <h5>August 2022 - December 2022</h5>
                             <p><strong>SMP YPII BUNGUR BEKASI</strong> <em>Bekasi, Indonesia</em></p>
                             <ul>
                                 <li>Responsible to create application E-Report with web developing.</li>
                                 <li>Create a library application with mobile developing.</li>
                                 <li>Help school to adaptive with a growth of tehcnology.</li>
                             </ul>
                         </div>
                     </div>
                 </div>

             </div>
         </section>
         <!-- End Resume Section -->

         <!-- ======= Portfolio Section ======= -->
         <section id="portfolio" class="portfolio section-bg">
             <div class="container">

                 <div class="section-title">
                     <h2>Portfolio</h2>
                 </div>

                 <div class="row" data-aos="fade-up">
                     <div class="col-lg-12 d-flex justify-content-center">
                         <ul id="portfolio-flters">
                             <li data-filter="*" class="filter-active">All</li>
                             <li data-filter=".filter-mobile">Mobile</li>
                             <li data-filter=".filter-web">Web</li>
                         </ul>
                     </div>
                 </div>

                 <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                     <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                         <div class="portfolio-wrap">
                             <img src={{ asset('img/portfolio/sensa1.png') }} class="img-fluid" alt="E-Commerce">
                             <div class="portfolio-links">
                                 <a href="{{ asset('img/portfolio/sensa1.png') }}" data-gallery="portfolioGallery"
                                     class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
                                 <a href="{{ url('/ecommerce') }}" title="More Details"><i
                                         class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>


                     <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
                         <div class="portfolio-wrap">
                             <img src={{ asset('img/portfolio/kg3.png') }} class="img-fluid" alt="Kampus Gratis">
                             <div class="portfolio-links">
                                 <a href={{ asset('img/portfolio/kg3.png') }} data-gallery="portfolioGallery"
                                     class="portfolio-lightbox" title="mobile 3"><i class="bx bx-plus"></i></a>
                                 <a href="{{ url('/kampus_gratis') }}" title="More Details"><i
                                         class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>

                     <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
                         <div class="portfolio-wrap">
                             <img src={{ asset('img/portfolio/perpus1.png') }} class="img-fluid" alt="Perpustakaan">
                             <div class="portfolio-links">
                                 <a href={{ asset('img/portfolio/perpus1.png') }} data-gallery="portfolioGallery"
                                     class="portfolio-lightbox" title="mobile 5"><i class="bx bx-plus"></i></a>
                                 <a href="{{ url('/perpustakaan') }}" title="More Details"><i
                                         class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>

                     <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                         <div class="portfolio-wrap">
                             <img src={{ asset('img/portfolio/eraport1.png') }} class="img-fluid" alt="Raport">
                             <div class="portfolio-links">
                                 <a href={{ asset('img/portfolio/eraport1.png') }} data-gallery="portfolioGallery"
                                     class="portfolio-lightbox" title="Web 6"><i class="bx bx-plus"></i></a>
                                 <a href="{{ url('/raport') }}" title="More Details"><i class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- End Portfolio Section -->
     </main>
     <!-- End #main -->



     <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
             class="bi bi-arrow-up-short"></i></a>

 </body>

 @extends('Layout.footer')
