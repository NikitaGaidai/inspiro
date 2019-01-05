<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Inspiro Web Studio">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--Яндекс.Табло--}}
    <meta name="yandex-tableau-widget" content="logo={{ asset('images/logos/brand_light_128.png') }}, color=#212529, feed={{ asset('feed.json') }}" />

    {{--Гугл Хром--}}
    <meta name="theme-color" content="#212529">

    {{--Иконка--}}
    <link rel="icon" href="{{ asset('images/icons/light/120_bg_t.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('front/fonts/font-awesome.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/morphext.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <title>{{ config('app.name') }}</title>

</head>
<body data-spy="scroll" data-target=".navbar" class="has-loading-screen">
<div class="page-wrapper" id="app">

    <div class="loading-screen"></div>
    <!--end loading-screen-->

    <!--*********************************************************************************************************-->
    <!--************ HERO ***************************************************************************************-->
    <!--*********************************************************************************************************-->
    <header id="hero">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#app">
                    <img src="{{ asset('images/logos/brand_light_128.png') }}" alt="">
                </a>
                <!--end navbar-brand-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--end navbar-toggler-->

                <navigation-wrapper></navigation-wrapper>
                <!--end collapse-->
            </div>
            <!--end container-->
        </nav>
        <!--end navbar-->

        <div class="container">
            <div class="row">
                <div class="hero__outer-wrapper">
                    <div class="hero__inner-wrapper align-middle">
                        <h1>
                            <span class="hero__title">Мы</span>
                            <a class="hero__title text-carousel" href="#our-works" >создаем, продвигаем, обслуживаем</a>
                            <br>
                            <span class="hero__title">сайты</span>
                        </h1>
                        <!--end h1-->
                        <a href="#what-we-do" class="hero__link align-items-center">
                            <figure class="mb-0 align-middle"></figure>
                            Узнать больше
                        </a>
                        <!--end hero__link-->
                    </div>
                    <!--end container-->
                </div>
                <!--end hero__inner-wrapper-->
            </div>
            <!--end row-->
        </div>
        <!--end hero__outer-wrapper-->

        <div class="hero__background skew-down-left">
            <div class="background-wrapper" data-parallax="scroll" data-parallax-speed="3" data-background-color="#000000" >
                <div class="background opacity-40">
                    <div class="owl-carousel hero__slider parallax-element" data-owl-items="1" data-owl-autoplay="1" data-owl-dots="0" data-owl-nav="1" data-owl-loop="1" data-owl-fadeout="1">
                        <div class="slide img-into-bg">
                            <img src="{{ asset('front/img/bg-01.jpg') }}" alt="">
                        </div>
                        <div class="slide img-into-bg">
                            <img src="{{ asset('front/img/bg-02.jpg') }}" alt="">
                        </div>
                        <div class="slide img-into-bg">
                            <img src="{{ asset('front/img/bg-03.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--end background-->
        </div>
    </header>
    <!--end hero-->

    <!--*********************************************************************************************************-->
    <!--************ CONTENT ************************************************************************************-->
    <!--*********************************************************************************************************-->
    <div id="content">

        <!--WHAT WE DO ******************************************************************************************-->

        <widget class="pb-0 block" id="what-we-do" name="Услуги">
            <div class="container">
                <div class="block__title">
                    <h2 class="reveal">Услуги</h2>
                </div>
                <!--end block-title-->

                <div class="row">

                    <div class="col-md-3">
                        <div class="box">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image">
                                        <img src="{{ asset('front/img/icon-screen.png') }}" class="" alt="">
                                    </div>
                                    <!--end box__image-->
                                    <h4 class="reveal">Web-дизайн</h4>
                                </div>
                                <!--end box__header-->
                                <div class="box__content">
                                    <p>Подберем нужный дизайн для Вашего проекта или создадим с нуля, решать Вам.</p>
                                </div>
                                <!--end box__content-->
                            </div>
                            <!--end box__wrapper-->
                        </div>
                        <!--end box-feature-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3">
                        <div class="box">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image">
                                        <img src="{{ asset('front/img/icon-code.png') }}" class="" alt="">
                                    </div>
                                    <!--end box__image-->
                                    <h4 class="reveal">Разработка</h4>
                                </div>
                                <!--end box__header-->
                                <div class="box__content">
                                    <p>Создадим необходимую для Вас систему, начиная от лендинга и заканчивая крупным интернет-магазином.</p>
                                </div>
                                <!--end box__content-->
                            </div>
                            <!--end box__wrapper-->
                        </div>
                        <!--end box-feature-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3">
                        <div class="box">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image">
                                        <img src="{{ asset('front/img/icon-thumb-up.png') }}" class="" alt="">
                                    </div>
                                    <!--end box__image-->
                                    <h4 class="reveal">Продвижение</h4>
                                </div>
                                <!--end box__header-->
                                <div class="box__content">
                                    <p>Поможем в создании рекламных кампаний и продвижении Вашего продукта на рынке.</p>
                                </div>
                                <!--end box__content-->
                            </div>
                            <!--end box__wrapper-->
                        </div>
                        <!--end box-feature-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3">
                        <div class="box">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image">
                                        <img src="{{ asset('front/img/icon-gears.png') }}" class="" alt="">
                                    </div>
                                    <!--end box__image-->
                                    <h4 class="reveal">Обслуживание</h4>
                                </div>
                                <!--end box__header-->
                                <div class="box__content">
                                    <p>По Вашему желанию будем поддерживать сайт в рабочем состоянии, обновлять и редактировать.</p>
                                </div>
                                <!--end box__content-->
                            </div>
                            <!--end box__wrapper-->
                        </div>
                        <!--end box-feature-->
                    </div>
                    <!--end col-md-3-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </widget>
        <!--end #what-we-do.block-->

        <!--OUR WORKS ********************************************************************************************-->

        <widget class="pb-0 block" id="our-works" name="Наши работы">
            <div class="container">
                <div class="block__title">
                    <h2 class="reveal">Наши работы</h2>
                </div>
                <!--end block-title-->
            </div>
            <!--end container-->

            <div class="gallery skew-down-left skew-up-right">
                <div class="container-fluid px-0">
                    <div class="row no-gutters">

                        {{--<div class="col-md-4">
                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="gallery__image video-popup">
                                <div class="gallery__caption">
                                    <h3>
                                        <i class="fa fa-play-circle"></i>
                                    </h3>
                                    <h5>Interior Design</h5>
                                    <h3 class="reveal">Bathroom Refresh</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="{{ asset('front/img/img-01.jpg') }}" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->--}}

                        <div class="col-md-4">
                            <a href="{{ asset('images/portfolio/inspiro.png') }}" class="gallery__image popup-image">
                                <div class="gallery__caption">
                                    <h5>Веб-студия</h5>
                                    <h3 class="reveal">Inspiro</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="{{ asset('images/portfolio/inspiro_blur.png') }}" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->

                        <div class="col-md-4">
                            <a href="{{ asset('images/portfolio/denika.png') }}" class="gallery__image popup-image">
                                <div class="gallery__caption">
                                    <h5>Хоум-стейджинг проект</h5>
                                    <h3 class="reveal">Denika</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="{{ asset('images/portfolio/denika_blur.png') }}" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->

                        <div class="col-md-4">
                            <a href="#our-works" class="gallery__image">
                                <div class="gallery__caption">
                                    <h5>Здесь пусто, но тут может оказаться</h5>
                                    <h3 class="reveal">Ваш проект</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="{{ asset('front/img/empty-project.jpg') }}" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->

                    </div>
                    <!--end row-->
                </div>
                <!--end container-fluid-->
            </div>
            <!--end gallery-->

            {{--<div class="my-2 text-center">
                <a href="#" class="btn btn-primary">Load More</a>
            </div>--}}
            <!--end button my-2 text-center-->
        </widget>
        <!--end #our-works.block-->

        <!--ABOUT US ********************************************************************************************-->

        <widget class="pt-4 block" id="about-us" name="О нас">
            <div class="container">
                <div class="block__wrapper">
                    <div class="block__title">
                        <h2 class="reveal">О нас</h2>
                    </div>
                    <!--end block-title-->

                    <div class="row">
                        <div class="col-md-7">
                            <p>
                                Мы - молодая веб-студия, только-только набирающая обороты, но имеющая большой потенциал,
                                благодаря соотношению цена/качество. Мы делаем качественные продукты, размещаем их у надежных хостеров,
                                либо на Ваших серверах, что гарантирует безопасность и целостность информации, по самой низкой цене во всём Рунете.
                                Мы работаем индивидуально с каждым клиентом, поэтому у нас нет прайс-листа. Подробнее о ценах Вы сможете узнать у нашего менеджера,
                                оставив заявку в нижней части страницы.
                            </p>
                            <a href="#contact" class="btn btn-default mb-4">Связаться с нами</a>
                        </div>
                        <!--end col-md-7-->
                        <div class="col-md-5">
                            <img class="width-100 shadow rounded-corners" src="{{ asset('front/img/img-07.jpg') }}" alt="">
                        </div>
                        <!--end col-md-5-->
                    </div>
                    <!--end row-->
                </div>
                <!--end block__wrapper-->
            </div>
            <!--end container-->
        </widget>
        <!--end #about-us.block-->

        <!--THE TEAM ********************************************************************************************-->

        {{--<widget class="pb-4 block skew-down-left skew-up-right" id="the-team" name="The Team">
            <div class="container">
                <div class="block__wrapper">
                    <div class="block__title">
                        <h2 class="reveal">The Team</h2>
                    </div>
                    <!--end block-title-->

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="person">
                                <h4 class="reveal">Jane Doe</h4>
                                <h5>Company CEO</h5>
                                <div class="person__image">
                                    <div class="person__social">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                    <div class="img-into-bg">
                                        <img src="{{ asset('front/img/person-01.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!--end person__image-->
                            </div>
                            <!--end person-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="person">
                                <h4 class="reveal">Suzane Sparks</h4>
                                <h5>Accountant</h5>
                                <div class="person__image">
                                    <div class="person__social">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                    <div class="img-into-bg">
                                        <img src="{{ asset('front/img/person-02.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!--end person__image-->
                            </div>
                            <!--end person-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="person">
                                <h4 class="reveal">John Peters</h4>
                                <h5>Head of Marketing</h5>
                                <div class="person__image">
                                    <div class="person__social">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                    <div class="img-into-bg">
                                        <img src="{{ asset('front/img/person-03.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!--end person__image-->
                            </div>
                            <!--end person-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="person">
                                <h4 class="reveal">Edward Palmer</h4>
                                <h5>SEO Expert</h5>
                                <div class="person__image">
                                    <div class="person__social">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                    <div class="img-into-bg">
                                        <img src="{{ asset('front/img/person-04.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!--end person__image-->
                            </div>
                            <!--end person-->
                        </div>
                        <!--end col-md-3-->
                    </div>
                    <!--end row-->
                </div>
                <!--end block__wrapper-->
            </div>
            <!--end container-->
            <div class="background-wrapper" data-background-color="#eeeeee">
                <div class="background background--image opacity-5 background--repeat-repeat">
                    <img src="{{ asset('front/img/pattern-topo.png') }}" alt="">
                </div>
            </div>
            <!--end background-->
        </widget>--}}
        <!--end #our-team.block-->

        <!--BLOG ************************************************************************************************-->

        {{--<widget class="pt-4 block" id="blog" name="Blog">
            <div class="container">
                <div class="block__wrapper">
                    <div class="block__title">
                        <h2 class="reveal">Blog</h2>
                    </div>
                    <!--end block-title-->

                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <a href="#" class="box box--image">
                                <div class="box__wrapper no-shadow">
                                    <div class="box__header">
                                        <div class="box__image img-into-bg">
                                            <img src="{{ asset('front/img/blog-01.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <!--end box__wrapper-->
                                    <div class="box__content px-0">
                                        <h5>02.03.2018</h5>
                                        <h4 class="reveal">How To Become More Creative</h4>
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id
                                            arcu iaculis, rutrum nunc ac, pellentesque risus. Vivamus hendrerit
                                        </p>
                                        <div class="additional-info">
                                            <figure>
                                                <i class="fa fa-comment"></i>
                                                <span>20</span>
                                            </figure>
                                            <figure>
                                                <i class="fa fa-heart"></i>
                                                <span>46</span>
                                            </figure>
                                        </div>
                                        <!--end additional-info-->
                                    </div>
                                    <!--end box__content-->
                                </div>
                                <!--end box__wrapper-->
                            </a>
                            <!--end box-->
                        </div>
                        <!--end col-xl-4-->

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <a href="#" class="box box--image">
                                <div class="box__wrapper no-shadow">
                                    <div class="box__header">
                                        <div class="box__image img-into-bg">
                                            <img src="{{ asset('front/img/blog-01.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <!--end box__header-->
                                    <div class="box__content px-0">
                                        <h5>02.03.2018</h5>
                                        <h4 class="reveal">10 Tips For Better Photography</h4>
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id
                                            arcu iaculis, rutrum nunc ac, pellentesque risus. Vivamus hendrerit
                                        </p>
                                        <div class="additional-info">
                                            <figure>
                                                <i class="fa fa-comment"></i>
                                                <span>20</span>
                                            </figure>
                                            <figure>
                                                <i class="fa fa-heart"></i>
                                                <span>46</span>
                                            </figure>
                                        </div>
                                        <!--end additional-info-->
                                    </div>
                                    <!--end box__content-->
                                </div>
                                <!--end box__wrapper-->
                            </a>
                            <!--end box-->
                        </div>
                        <!--end col-xl-4-->

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <a href="#" class="box box--image">
                                <div class="box__wrapper no-shadow">
                                    <div class="box__header">
                                        <div class="box__image img-into-bg">
                                            <img src="{{ asset('front/img/blog-03.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <!--end box__header-->
                                    <div class="box__content px-0">
                                        <h5>02.03.2018</h5>
                                        <h4 class="reveal">Refresh Your Mind and Body</h4>
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id
                                            arcu iaculis, rutrum nunc ac, pellentesque risus. Vivamus hendrerit
                                        </p>
                                        <div class="additional-info">
                                            <figure>
                                                <i class="fa fa-comment"></i>
                                                <span>20</span>
                                            </figure>
                                            <figure>
                                                <i class="fa fa-heart"></i>
                                                <span>46</span>
                                            </figure>
                                        </div>
                                        <!--end additional-info-->
                                    </div>
                                    <!--end box__content-->
                                </div>
                                <!--end box__wrapper-->
                            </a>
                            <!--end box-->
                        </div>
                        <!--end col-xl-4-->
                    </div>
                    <!--end row-->
                </div>
            </div>
            <!--end container-->
        </widget>--}}
        <!--end #blog.block-->

    </div>
    <!--end content-->

    <!--*********************************************************************************************************-->
    <!--************ FOOTER *************************************************************************************-->
    <!--*********************************************************************************************************-->
    <footer id="footer" class="skew-up-right">
        <div class="container">
            <div class="block__wrapper">
                <div class="block__title" id="contact">
                    <h2>Контакты</h2>
                </div>
                <!--end block-title-->
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            {{--Адрес--}}
                            {{--<div class="col-sm-6 col-lg-12">
                                <h4>Our Address</h4>
                                <address>
                                    3869 Shearwood Forest Drive
                                    <br>
                                    Glendale, NH 03246
                                    <br>
                                    United States
                                </address>
                            </div>--}}
                            <!--end col-sm-6 col-lg-12-->

                            <div class="col-sm-6 col-lg-12">
                                <div class="py-4">
                                    <figure>
                                        <i class="fa fa-phone width-20px"></i>
                                        <a href="tel:84950055694">+7 (495) 0055-694</a>
                                    </figure>
                                    <figure>
                                        <i class="fa fa-envelope width-20px"></i>
                                        <a href="mailto:support@inspiro.space">support@inspiro.space</a>
                                    </figure>
                                    <figure>
                                        <i class="fa fa-vk width-20px"></i>
                                        <a href="https://vk.com/inspiro_web" target="_blank">Веб-студия Inspiro</a>
                                    </figure>
                                </div>
                                <!--end py-4-->
                            </div>
                            <!--end col-sm-6 col-lg-12-->

                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-xl-5 col-lg-6 col-md-12 col-sm-12-->
                    <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                        <h4>Обратная связь</h4>

                        <form id="form-contact" method="post" class="form clearfix">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="form-contact-name">Ваше имя</label>
                                        <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Иван" required>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-6 col-sm-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="form-contact-email">Электронная почта</label>
                                        <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="mail@domain.ru" required>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-6 col-sm-6 -->
                            </div>
                            <!--end row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form-contact-message">Сообщение</label>
                                        <textarea class="form-control" id="form-contact-message" rows="8" name="message" placeholder="Введите текст сообщения..." required></textarea>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-12 -->
                            </div>
                            <!--end row -->
                            <div class="form-group clearfix">
                                <button type="submit" class="btn pull-right btn-default" id="form-contact-submit">Отправить сообщение</button>
                            </div>
                            <!--end form-group -->
                            <div class="form-contact-status"></div>
                        </form>
                        <!--end form-contact -->
                    </div>
                    <!--end col-xl-7-->
                </div>
                <!--end row-->
            </div>
            <!--end block__wrapper-->
        </div>
        <!--end container-->

        <hr class="hr-white opacity-10">
        <!--end hr-->

        <div class="container">
            <span>(C) Copyright 2018-{{ date('Y') }}, Все права защищены.</span>
        </div>
        <!--end container-->

        <div class="background-wrapper" data-background-color="#000000">
            <div class="background background--particles"></div>
        </div>
        <!--end background-->

    </footer>
    <!--end footer-->
</div>
<!--end page-->

{{--<script src="assets/js/jquery-3.2.1.min.js"></script>--}}
<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="assets/js/popper.min.js"></script>--}}
{{--<script src="assets/bootstrap/js/bootstrap.min.js"></script>--}}

<script src="{{ asset('front/js/isInViewport.jquery.js') }}"></script>
<script src="{{ asset('front/js/jquery.particleground.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/pace.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('front/js/jquery-validate.bootstrap-tooltip.min.js') }}"></script>
<script src="{{ asset('front/js/morphext.min.js') }}"></script>
<script src="{{ asset('front/js/custom.js') }}"></script>

</body>
</html>
