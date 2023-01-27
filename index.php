<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tzeezotje</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="js/jquery.js"></script>
    <script src="js/form.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
    <section class="main_page">
        <header class="header_nav">

            <div class="nav_logo">
                <img src="img/header_logo.png" alt="Site_logo" class="header_logo">
            </div>
            <div class="hamburger">
                <div class="menu-btn">
                    <span class="hamb_span"></span>
                    <span class="hamb_span"></span>
                    <span class="hamb_span"></span>
                </div>
            </div>


            <div class="navbar">
                <ul class="header_nav_bar">
                    <li class="nav_bar_li">
                        <a href="" class="nav_bar_text">À la carte</a>
                    </li>
                    <li class="nav_bar_li">
                        <a href="" class="nav_bar_text">Wijnkaart</a>
                    </li>
                    <li class="nav_bar_li"><a href="" class="nav_bar_text">Lunchmenu</a></li>
                    <li class="nav_bar_li"><a href="" class="nav_bar_text">Contact</a></li>
                </ul>


                <div class="header_number">
                    <div>
                        <img src="img/phone.png" alt="Phone">
                    </div>
                    <div>
                        <span class="header_number_text">+32 9 282 57 25</span>
                    </div>
                </div>
            </div>


        </header>

        <div class="main_page_content">
            <span class="content_text">OPEN EVERYDAY 6AM - 9PM</span>

            <span class="mainpage_h1"> A bad day with lunch is better than a good day without it.</span>

            <div class="btn_media">
                <a href="#openModal" class="btn_reserve">Reserve a table</a>
                <div class="media">
                    <a href="" class="media">
                        <img src="img/FB.png" alt="">
                    </a>

                    <a href="" class="media">
                        <img src="img/IG.png" alt="">
                    </a>

                    <a href="" class="media">
                        <img src="img/Tw.png" alt="">
                    </a>

                    <a href="" class="media">
                        <img src="img/Yt.png" alt="">
                    </a>
                </div>
            </div>

            <div id="openModal" class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Reserving a table</h3>
                            <a href="#close" title="Close" class="close">×</a>
                        </div>
                        <div class="modal-body">
                            <form action="/form1.php" class="reserve_form" method="post">
                                <div class="form_name_email">
                                    <div class="form_name">
                                        <label for="name">Name</label>
                                        <input type="text" class="name" name="name" placeholder="Вашe имя" required>
                                    </div>
                                    <div class="form_email">
                                        <label for="email">E-Mail</label>
                                        <input type="email" class="email" name="email" placeholder="Ваш E-mail"
                                            required>
                                    </div>
                                </div>
                                <div class="form_text">
                                    <label for="text">Speciale Request</label>
                                    <input type="text" class="text" name="text" placeholder="Ваши пожелания" required>
                                </div>

                                <div id="my_msg">
                                </div>

                                <button type="submit" class="btn_submit" id="reserve_form_send">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="week">
        <div class="week_position">
            <div class="days">
                <div class="week_day">
                    <span class="day_header">
                        Woensdag 12/01
                    </span>
                    <div class="day_content">
                        <span class="day_text">
                            Salade met Serrano
                        </span>

                        <span class="circle"> &#8226; </span>
                        <span class="circle"> &#8226; </span>
                        <span class="circle"> &#8226; </span>

                        <span class="day_text">
                            Steak Tartaar
                        </span>
                    </div>
                    <hr>
                </div>

                <div class="week_day">
                    <span class="day_header">
                        Donderdag 13/01
                    </span>
                    <div class="day_content">
                        <span class="day_text">
                            Toast Roquefort
                        </span>

                        <span class="circle"> &#8226; </span>
                        <span class="circle"> &#8226; </span>
                        <span class="circle"> &#8226; </span>

                        <span class="day_text">
                            Penne met Kip en Prei
                        </span>
                    </div>
                    <hr>
                </div>

                <div class="week_day">
                    <span class="day_header">
                        Vrijdag 14/01
                    </span>
                    <div class="day_content">
                        <span class="day_text">
                            Verrassing van de Chef
                        </span>

                        <span class="circle"> &#8226; </span>
                        <span class="circle"> &#8226; </span>
                        <span class="circle"> &#8226; </span>

                        <span class="day_text">
                            Penne met Kip en Prei
                        </span>
                    </div>
                    <hr>
                </div>

                <div class="week_day">
                    <span class="day_header">
                        Vrijdag 14/01
                    </span>
                    <div class="day_content">
                        <span class="day_text">
                            Verrassing van de Chef
                        </span>

                        <span class="circle"> &#8226; </span>
                        <span class="circle"> &#8226; </span>
                        <span class="circle"> &#8226; </span>

                        <span class="day_text">
                            Penne met Kip en Prei
                        </span>
                    </div>
                    <hr>
                </div>

                <div class="week_day">
                    <span class="day_header">
                        Vrijdag 14/01
                    </span>
                    <div class="day_content">
                        <span class="day_text">
                            Verrassing van de Chef
                        </span>

                        <span class="circle"> &#8226; </span>
                        <span class="circle"> &#8226; </span>
                        <span class="circle"> &#8226; </span>

                        <span class="day_text">
                            Penne met Kip en Prei
                        </span>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="week_pics">
                <img src="img/week_pic1.png" alt="" class="week_img1">
                <div class="rectangle">
                </div>
                <img src="img/week_pic2.png" alt="" class="week_img2">
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="reviews_slider swiper">
            <div class="reviews_slider_wrapper swiper-wrapper">

                <div class="reviews_slider_slide swiper-slide">
                    <img src="img/quotes.png" class="rev_quotes"></span>
                    <span class="rev_header">Goede service, lekker eten, toffe ambiance</span>
                    <span class="rev_text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                        et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
                    </span>
                    <span class="rev_author">ALAIN HEYNDRICKX</span>
                </div>

                <div class="reviews_slider_slide swiper-slide">
                    <img src="img/quotes.png" class="rev_quotes"></span>
                    <span class="rev_header">Goede service, lekker eten, toffe ambiance</span>
                    <span class="rev_text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                        et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
                    </span>
                    <span class="rev_author">ALAIN HEYNDRICKX</span>
                </div>

                <div class="reviews_slider_slide swiper-slide">
                    <img src="img/quotes.png" class="rev_quotes"></span>
                    <span class="rev_header">Goede service, lekker eten, toffe ambiance</span>
                    <span class="rev_text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                        et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
                    </span>
                    <span class="rev_author">ALAIN HEYNDRICKX</span>
                </div>

            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
