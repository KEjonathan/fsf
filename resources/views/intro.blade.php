@extends('layouts.layout1')

@section('fsf-content')
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-11 d-flex align-items-center justify-content-between">
                    <h1 class="logo">
                        <a href="">
                            <img src="./Images/FSF-Logo.png" alt="" class="img-fluid" />
                            Family-S-Foundation</a>
                    </h1>


                    <nav id="navbar" class="navbar">
                        <ul>
                            <li>
                                <a class="nav-link scrollto active" href="#hero">Home</a>
                            </li>
                            <li><a class="nav-link scrollto" href="#about">About</a></li>
                            <li>
                                <a class="nav-link scrollto" href="#services">News Feed</a>
                            </li>
                            <li>
                                <a class="nav-link scrollto" href="#clients">Partners</a>
                            </li>
                            <li><a class="nav-link scrollto" href="#team">Team</a></li>
                            <li><a class="nav-link scrollto" href="/blog">Blog</a></li>
                            <li>
                                <a class="nav-link scrollto" href="#contact">Contact</a>
                            </li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav>
                    <!-- .navbar -->
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"
                        style="
                background-image: url(./Images/pexels-alex-green-5699775.jpg);
              ">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">
                                    Gender Based Violence
                                </h2>
                                <p class="animate__animated animate__fadeInUp">
                                    The organization strives to fight all forms of violence against girls and Women. This
                                    can beachieved through drawing interventions like Sensitization, empowerment, care and
                                    rehabilitation of violence victims, provision of post violence care and therapy
                                    addressing socio-cultural rigidities that promote gender based violence against women
                                    and girls
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="carousel-item"
                        style="
                background-image: url(./Images/group.jpg);
              ">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">
                                    Youth Stop One Centre
                                </h2>
                                <p class="animate__animated animate__fadeInUp">
                                    We have a youth centre set up specifically for the youth both boys and girls.This
                                    provides a number of integrated youth friendly services which include Health services
                                    and Information on health and general development. This is a place where youth come and
                                    get counselling, Peer support, rehabilitation, vocational trainings in survival and
                                    livelihood skills.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="carousel-item"
                        style="
                background-image: url(./Images/mcfayden-easing-money-stress-with-free-financial-empowerment-services.jpg);
              ">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">
                                    Economic Empowerment
                                </h2>
                                <p class="animate__animated animate__fadeInUp">
                                    Many women and girls continue to suffer violence due to economic and financial
                                    hardships. Through our different interventions like Setting up of Village Savings and
                                    Loaning Associations, (VSLAs). Livelihood skilling programs, Business incubation schemes
                                    thorough which they can afford the basic necessities.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="carousel-item"
                        style="
                background-image: url('./Images/pexels-caleb-oquendo-3038369.jpg');
              ">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">
                                    Family Centered Services
                                </h2>
                                <p class="animate__animated animate__fadeInUp">
                                    Young girls and women suffer gender injustices from homes. Hence engagement and
                                    involvement of homes and families is key in our interventions. The Family centered
                                    approach is used to involve parents and primary care givers in the fight against
                                    violence and creating an equitable environment where girls and women can thrive and live
                                    to their full potential.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="carousel-item"
                        style="
                background-image: url('./Images/community.jpg');
              ">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">
                                    Community Engagements
                                </h2>
                                <p class="animate__animated animate__fadeInUp">
                                    Community mobilization of all stakeholders on the protection and advancement of rights
                                    of girls and women is a strategy that we use in our interventions,Training and
                                    sensitization of all community stakeholders in issues of gender based violence and
                                    rights.
                                    Religious leaders, cultural leaders, political leaders, social administrators are all
                                    trained and equipped with skills on propagating the cause.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
        <!-- ======= Featured Services Section Section ======= -->
        <section id="featured-services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 box">
                        <i class="bi bi-briefcase"></i>
                        <h4 class="title"><a href="">Advocacy For Consultancy</a></h4>
                        <p class="description">
                            Advocacy is a key area that we have great interest in. We are using all channel available to
                            advocate for rights of women and girls and also speak up against violence and exploitation
                            generated towards girls and women.
                            Government agencies, partner organizations, Religious and cultural institutions, are all engaged
                            in our advocacy programs.
                        </p>
                    </div>

                    <div class="col-lg-4 box box-bg">
                        <i class="bi bi-card-checklist"></i>
                        <h4 class="title"><a href="">Sexual Reproductive Health</a></h4>
                        <p class="description">
                            Sexual reproductive health remains a key challenge of women and girls. Sexual reproductive
                            health issues remain very sacred in Uganda Africa. Hence all women and girls can have access to
                            information, Sexual reproductive health rights, sex and sexuality empowerment and access to
                            modern family planning options.Family Planning services. Are provided, HIV/AIDS prevention,
                            care, treatment, post abortion care, cancer screening, health information and general youth
                            friendly services are top on our agenda.
                        </p>
                    </div>

                    <div class="col-lg-4 box">
                        <i class="bi bi-binoculars"></i>
                        <h4 class="title">
                            <a href="">Orphaned and Volunerable Children</a>
                        </h4>
                        <p class="description">
                            This is a program that supports s orphaned and vulnerable children in our areas of operation.
                            These children are prone to violence, sexual manipulation, failure to go to school, inability to
                            get food and other basic necessities of life.
                            Through our interventions, we are able to provide services to selected families, though our
                            social work interventions, we are able to reach out to the most vulnerable families and support
                            their livelihood, fight violence and advocate for rights of women and girls in the selected
                            families.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>About Us</h3>
                    <p>
                        Family salvation Foundation is an NGO founded in 2021. With the
                        objectives of fighting and eliminating gender based violence
                        against girls and women and promotion of SRHR among young people
                        in Uganda and fully registered with Uganda Registration Service Bureau (URSB) with certificate
                        Number 80020003050749, located at Luzira Parish, Nakawa Division, Kampala-Uganda.
                    </p>
                </header>

                <div class="row about-cols">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-mission.jpg" alt="" class="img-fluid" />
                                <div class="icon"><i class="bi bi-bar-chart"></i></div>
                            </div>
                            <h2 class="title"><a href="">Our Mission</a></h2>
                            <p>
                                The mission of the organization is to create interventions
                                that protect women and girls against Gender Based rigidities
                                that make them vulnerable and less in societies. Therefore, we
                                can create a world that is free from Gender Based Violence and
                                Incapacitations.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-plan.jpg" alt="" class="img-fluid" />
                                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            </div>
                            <h2 class="title"><a href="">Our Plan</a></h2>
                            <p>
                                The organization works with cultural and religious
                                leaders in attitude change, knowledge professing and action
                                about SRHR ad GBV elimination, prevention and management of
                                GBV cases, livelihood skills training of beneficiaries to economically empower them and
                                reduce on vulnerabilities based on economic challenges.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-vision.jpg" alt="" class="img-fluid" />
                                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                            </div>
                            <h2 class="title"><a href="">Our Vision</a></h2>
                            <p>
                                A World where Women and Girls are empowered to have equitable
                                access to resources and opportunities in a Violence Free
                                Society
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">
                <header class="section-header wow fadeInUp">
                    <h3>News and Updates</h3>
                    <p>
                        We also bring to you the latest news and Updates regarding our latest programs and services.
                    </p>
                </header>

                <div class="row">
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class=""></i></div>
                        <h4 class="title"><a href="">Gender Based Violence</a></h4>
                        <p class="description">
                            To create interventions that fight and eliminate Gender-Based Violence against girls and women
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class=""></i></div>
                        <h4 class="title"><a href="">Economic Empowerment</a></h4>
                        <p class="description">
                            To undertake interventions that economically empower vulnerable communities to reduce
                            vulnerability
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class=""></i></div>
                        <h4 class="title"><a href="">Men and Boy Involvement</a></h4>
                        <p class="description">
                            Draw and implement programs that engage Men and Boys in the fight against GBV and engagement in
                            general health programs
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class=""></i></div>
                        <h4 class="title"><a href="">Sexual Reproductive Heath</a></h4>
                        <p class="description">
                            To create awareness and sensitisation about Sexual Health and reproductive issuesm
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class=""></i></div>
                        <h4 class="title"><a href="">Advocacy and Consultancy</a></h4>
                        <p class="description">
                            To engage in advocacy using the Family and Behavior Based approaches to instill values and
                            virtues into young people to achieve the desired Behavior Changeque
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class=""></i></div>
                        <h4 class="title"><a href="">Other Supporting Programs</a></h4>
                        <p class="description">
                            Community mobilization of all stakeholders on the protection and advancement of rights of girls
                            and women is a strategy that we use in our interventions.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container text-center" data-aos="zoom-in">
                <h3>Call To Action</h3>
                <p>
                    Alot of help is needed which icludes partnerships and volunteers towards our cause. For any
                    Partnerships, Donations and Volunteering, please follow the link.
                </p>
                <a href="https://form.jotform.com/222032589709056" class="cta-btn">For Donations</a>
                <a href="mailto:info@fsf-ug.org" class="cta-btn">For Volunteering</a>
            </div>
        </section>
        <!-- End Call To Action Section -->



        <!-- ======= Facts Section ======= -->
        <section id="facts">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>Facts</h3>
                    <p>
                        The Total accountability of what we are doing in regards to GBV, ME, SRH and more
                    </p>
                </header>

                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="76" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Cases of GBV handled</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Community outreaches performed</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="233" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Children we've Supported</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="38" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Donations made</p>
                    </div>
                </div>

                <div class="facts-img">
                    <img src="" alt="" class="img-fluid" />
                </div>
            </div>
        </section>
        <!-- End Facts Section -->

        <!-- ======= Portfolio Section ======= -->
        <!-- <section id="portfolio" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3 class="section-title">Our Projects</h3>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class=" col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Out Reaches</li>
                            <li data-filter=".filter-card">Sensitizations</li>
                            <li data-filter=".filter-web">Consultancy</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="Images/kids-workshop.jpg" class="img-fluid" alt="">
                                <a href="Images/kids-workshop.jpg" data-lightbox="portfolio" data-title="" class="link-preview"><i class="bi bi-eye"></i></a>
                                <a href="/skill-a-child" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="/skill-a-child">Skill a Child</a></h4>
                                <p>Carpentry & Farming</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="https://familysalvationfoundation.org/wp-content/uploads/2021/11/Kids-Sundayshcool.jpg" class="img-fluid" alt="">
                                <a href="https://familysalvationfoundation.org/wp-content/uploads/2021/11/Kids-Sundayshcool.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title=""><i class="bi bi-eye"></i></a>
                                <a href="/empower-girl" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="/empower-girl">Keep Pregnant Child in School</a></h4>
                                <p>Empower a Girl Child</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="https://familysalvationfoundation.org/wp-content/uploads/2021/11/donat.jpg" class="img-fluid" alt="">
                                <a href="https://familysalvationfoundation.org/wp-content/uploads/2021/11/donat.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title=""><i class="bi bi-eye"></i></a>
                                <a href="girl-support" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="/girl-support">Donate a Sanitary towel</h4>
                                <p>Young Girl Support</p>
                            </div>
                        </div>
                    </div>
                </div>

        </section> -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients">
            <div class="container" data-aos="zoom-in">
                <header class="section-header">
                    <h3>Our Partners</h3>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="{{ asset('Images/ourchildren.png') }}" class="img-fluid" alt="" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('Images/unpd.jpg') }}" class="img-fluid" alt="" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('Images/yadnet.jpg') }}" class="img-fluid" alt="" />
                        </div>
                        
                        <div class="swiper-slide">
                            <img src="{{ asset('Images/ydl.png') }}" class="img-fluid" alt="" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('Images/redcross.png') }}" class="img-fluid" alt="" />
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Our Clients Section -->


        <!-- ======= Team Section ======= -->
        <section id="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3>Team</h3>
                    <p>
                        Meet our briliant team that is doing all it best to change the lives of Ugandans through Family
                        salvation Foundation.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <img src="./Images/rev.jpg" class="img-fluid" alt="" />
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Rev Nathan Mugalu</h4>
                                    <span>Executive Director</span>
                                    <div class="social">
                                        <a href="http://twitter.com/MugaluNathan" target="_blank"><i
                                                class="bi bi-twitter"></i></a>
                                        <a href="" target="_blank"><i class="bi bi-facebook"></i></a>
                                        <a href="" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3>Contact Us</h3>
                    <p>

                    </p>
                </div>

                <div class="row contact-info">
                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <address>
                                Plot 28 Chorley Cresecent-Luzira, Green Leaves Building, UG
                            </address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Phone Numbers</h3>
                            <p><a href="tel:+256771843738">+256 771843738</a></p>
                            <p><a href="tel:+256752287489">+256 752287489</a></p>
                            <p><a href="tel:+256776687333">+256 776687333</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@ug-fsf.org">info@fsf-ug.org</a></p>
                        </div>
                    </div>
                </div>

    </main>
    <!-- End #main -->

    @include('layouts.footer1')
@endsection
