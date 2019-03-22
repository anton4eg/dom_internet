<!-- BEGIN HEADER -->

<header>
    <div class="header-top">
        <div class="header-top__wrapper">

            <?php
            $header1 = array(
	            'theme_location'  => 'header-1',
	            'menu'            => '',
	            'container'       => false,
	            'menu_class'      => 'header-top__menu',
	            'menu_id'         => 'header-top-social',
	            'echo'            => true,
	            'fallback_cb'     => '__return_empty_string',
	            'before'          => '',
	            'after'           => '',
	            'link_before'     => '',
	            'link_after'      => '',
	            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	            'depth'           => 0,
	            'walker'          => '',
            );
            ?>

            <?php //wp_nav_menu( $header1 );
            clean_custom_menus('header-1', 0, 0, 'header-top__menu', 0, 'header-menu__item', 0, 'header-menu__link');
            ?>

<!--            <ul class="header-top__menu">-->
<!--                <li class="header-menu__item">-->
<!--                    <a href="#" class="header-menu__link">-->
<!--                        Тарифы-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="header-menu__item">-->
<!--                    <a href="#" class="header-menu__link">-->
<!--                        Услуги и цены-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="header-menu__item">-->
<!--                    <a href="#" class="header-menu__link">-->
<!--                        О нас-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="header-menu__item">-->
<!--                    <a href="#" class="header-menu__link">-->
<!--                        Акции-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="header-menu__item">-->
<!--                    <a href="#" class="header-menu__link">-->
<!--                        Статьи-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->



            <ul class="social-list">
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <i class="icon-viber"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <i class="icon-union"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <i class="icon-telegram"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <i class="icon-skype"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5844 0H4.4153C1.98071 0 0 1.9808 0 4.4154V11.5845C0 14.0192 1.98071 15.9999 4.4153 15.9999H11.5844C14.0192 15.9999 15.9999 14.0191 15.9999 11.5845V4.4154C16 1.9808 14.0192 0 11.5844 0ZM14.5804 11.5845C14.5804 13.2364 13.2364 14.5803 11.5845 14.5803H4.4153C2.76347 14.5804 1.41959 13.2364 1.41959 11.5845V4.4154C1.41959 2.76356 2.76347 1.41959 4.4153 1.41959H11.5844C13.2363 1.41959 14.5803 2.76356 14.5803 4.4154V11.5845H14.5804Z" fill="black" />
                            <path d="M11.5844 0H4.4153C1.98071 0 0 1.9808 0 4.4154V11.5845C0 14.0192 1.98071 15.9999 4.4153 15.9999H11.5844C14.0192 15.9999 15.9999 14.0191 15.9999 11.5845V4.4154C16 1.9808 14.0192 0 11.5844 0ZM14.5804 11.5845C14.5804 13.2364 13.2364 14.5803 11.5845 14.5803H4.4153C2.76347 14.5804 1.41959 13.2364 1.41959 11.5845V4.4154C1.41959 2.76356 2.76347 1.41959 4.4153 1.41959H11.5844C13.2363 1.41959 14.5803 2.76356 14.5803 4.4154V11.5845H14.5804Z" fill="url(#paint0_linear)" />
                            <path d="M7.99997 3.87738C5.72664 3.87738 3.8772 5.72682 3.8772 8.00015C3.8772 10.2734 5.72664 12.1227 7.99997 12.1227C10.2733 12.1227 12.1227 10.2734 12.1227 8.00015C12.1227 5.72682 10.2733 3.87738 7.99997 3.87738ZM7.99997 10.703C6.50949 10.703 5.29679 9.49053 5.29679 8.00006C5.29679 6.50949 6.5094 5.29688 7.99997 5.29688C9.49054 5.29688 10.7031 6.50949 10.7031 8.00006C10.7031 9.49053 9.49044 10.703 7.99997 10.703Z" fill="black" />
                            <path d="M7.99997 3.87738C5.72664 3.87738 3.8772 5.72682 3.8772 8.00015C3.8772 10.2734 5.72664 12.1227 7.99997 12.1227C10.2733 12.1227 12.1227 10.2734 12.1227 8.00015C12.1227 5.72682 10.2733 3.87738 7.99997 3.87738ZM7.99997 10.703C6.50949 10.703 5.29679 9.49053 5.29679 8.00006C5.29679 6.50949 6.5094 5.29688 7.99997 5.29688C9.49054 5.29688 10.7031 6.50949 10.7031 8.00006C10.7031 9.49053 9.49044 10.703 7.99997 10.703Z" fill="url(#paint1_linear)" />
                            <path d="M12.2959 2.67365C12.0224 2.67365 11.7537 2.78437 11.5606 2.97838C11.3665 3.17145 11.2549 3.44022 11.2549 3.71468C11.2549 3.98828 11.3666 4.25696 11.5606 4.45097C11.7536 4.64403 12.0224 4.75571 12.2959 4.75571C12.5704 4.75571 12.8382 4.64403 13.0322 4.45097C13.2262 4.25696 13.3369 3.98818 13.3369 3.71468C13.3369 3.44022 13.2262 3.17145 13.0322 2.97838C12.8391 2.78437 12.5704 2.67365 12.2959 2.67365Z" fill="black" />
                            <path d="M12.2959 2.67365C12.0224 2.67365 11.7537 2.78437 11.5606 2.97838C11.3665 3.17145 11.2549 3.44022 11.2549 3.71468C11.2549 3.98828 11.3666 4.25696 11.5606 4.45097C11.7536 4.64403 12.0224 4.75571 12.2959 4.75571C12.5704 4.75571 12.8382 4.64403 13.0322 4.45097C13.2262 4.25696 13.3369 3.98818 13.3369 3.71468C13.3369 3.44022 13.2262 3.17145 13.0322 2.97838C12.8391 2.78437 12.5704 2.67365 12.2959 2.67365Z" fill="url(#paint2_linear)" />
                            <defs>
                                <linearGradient id="paint0_linear" x1="7.99995" y1="15.9533" x2="7.99995" y2="0.124274" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E09B3D" />
                                    <stop offset="0.3" stop-color="#C74C4D" />
                                    <stop offset="0.6" stop-color="#C21975" />
                                    <stop offset="1" stop-color="#7024C4" />
                                </linearGradient>
                                <linearGradient id="paint1_linear" x1="7.99997" y1="12.0987" x2="7.99997" y2="3.94142" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E09B3D" />
                                    <stop offset="0.3" stop-color="#C74C4D" />
                                    <stop offset="0.6" stop-color="#C21975" />
                                    <stop offset="1" stop-color="#7024C4" />
                                </linearGradient>
                                <linearGradient id="paint2_linear" x1="12.2959" y1="4.74965" x2="12.2959" y2="2.68982" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E09B3D" />
                                    <stop offset="0.3" stop-color="#C74C4D" />
                                    <stop offset="0.6" stop-color="#C21975" />
                                    <stop offset="1" stop-color="#7024C4" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <i class="icon-vk"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <i class="icon-fb"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header-bottom">
        <div class="header-bottom__wrapper">

            <a href="#" class="header-bottom__logo">
                <img class="js-img-lazy" data-src="<?=get_template_directory_uri();?>/assets/img/logo.svg" src="/" alt="">
            </a>
            <ul class="header-bottom__list">
                <li class="header-list__item">
                    <div class="header-list__box header-list__box-js">
                                <span class="header-list__img img1">
                                    <i class="icon-2"></i>

                                </span>
                        <span class="header-list__text">
                                    Интернет&nbsp;<i class="icon-arr-down"></i>
                                </span>
                        <ul class="header-list__drop">
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Частный дом</a>
                            </li>
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Дачу</a>
                            </li>
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Деревню</a>
                            </li>
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Офис</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="header-list__item">
                    <div class="header-list__box header-list__box-js">
                                <span class="header-list__img img2">
                                    <i class="icon-1"></i>

                                </span>
                        <span class="header-list__text">
                                    Видеонаблюдение&nbsp;<i class="icon-arr-down"></i>
                                </span>
                        <ul class="header-list__drop">
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Частный дом</a>
                            </li>
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Дачу</a>
                            </li>
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Деревню</a>
                            </li>
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Офис</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="header-list__item item2">
                    <a href="#" class="header-list__box">
                                <span class="header-list__img img3">
                                    <i class="icon-3"></i>
                                </span>
                        <span class="header-list__text">
                                    Онлайн-ТВ
                                </span>
                    </a>
                </li>
                <li class="header-list__item item2">
                    <a href="#" class="header-list__box">
                                <span class="header-list__img img4">
                                    <i class="icon-4"></i>
                                </span>
                        <span class="header-list__text">
                                    Усиление сотовой связи
                                </span>
                    </a>
                </li>
            </ul>
            <div class="header-bottom__box">
                <div class="header-bottom__call">
                    <div class="header-call__img">
                        <i class="icon-tel"></i>
                    </div>
                    <div class="header-call__text">
                        Свяжитесь с нами!
                        <a href="tel:+84996410306" class="header-call__tel">+8 (499) 641-03-06</a>
                    </div>
                </div>
                <div class="header-bottom__workday">
                    <b>С 9:00 до 21:00</b>
                    Без выходных и праздничных дней
                </div>
                <a href="#modal21" data-fancybox='modal' class="btn-white header-bottom__btn">
                    Заказать звонок
                </a>
                <a href="#" class="header-mobile__gamburger header-mobile__gamburger-js">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
    <div class="header-mobile__wrapper">


        <div class="header-mobile">
            <ul class="header-bottom__list">
                <li class="header-list__item">
                    <div class="header-list__box header-list__box-js">
                                <span class="header-list__img img1">
                                    <i class="icon-2"></i>

                                </span>
                        <span class="header-list__text">
                                    Интернет&nbsp;<i class="icon-arr-down"></i>
                                </span>
                        <ul class="header-list__drop">
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Частный дом</a>
                            </li>
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Дачу</a>
                            </li>
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Деревню</a>
                            </li>
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Офис</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="header-list__item">
                    <div class="header-list__box header-list__box-js">
                                <span class="header-list__img img2">
                                    <i class="icon-1"></i>

                                </span>
                        <span class="header-list__text">
                                    Видеонаблюдение&nbsp;<i class="icon-arr-down"></i>
                                </span>
                        <ul class="header-list__drop">
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Частный дом</a>
                            </li>
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Дачу</a>
                            </li>
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Деревню</a>
                            </li>
                            <li class="header-drop__item">
                                <a href="#" class="header-drop__link">Офис</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="header-list__item item2">
                    <a href="#" class="header-list__box">
                                <span class="header-list__img img3">
                                    <i class="icon-3"></i>
                                </span>
                        <span class="header-list__text">
                                    Онлайн-ТВ
                                </span>
                    </a>
                </li>
                <li class="header-list__item item2">
                    <a href="#" class="header-list__box">
                                <span class="header-list__img img4">
                                    <i class="icon-4"></i>
                                </span>
                        <span class="header-list__text">
                                    Усиление сотовой связи
                                </span>
                    </a>
                </li>
            </ul>
            <ul class="header-top__menu">
                <li class="header-menu__item">
                    <a href="#" class="header-menu__link">
                        Тарифы
                    </a>
                </li>
                <li class="header-menu__item">
                    <a href="#" class="header-menu__link">
                        Услуги и цены
                    </a>
                </li>
                <li class="header-menu__item">
                    <a href="#" class="header-menu__link">
                        О нас
                    </a>
                </li>
                <li class="header-menu__item">
                    <a href="#" class="header-menu__link">
                        Акции
                    </a>
                </li>
                <li class="header-menu__item">
                    <a href="#" class="header-menu__link">
                        Статьи
                    </a>
                </li>
            </ul>
            <ul class="social-list">
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <i class="icon-viber"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <i class="icon-union"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <i class="icon-telegram"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <i class="icon-skype"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5844 0H4.4153C1.98071 0 0 1.9808 0 4.4154V11.5845C0 14.0192 1.98071 15.9999 4.4153 15.9999H11.5844C14.0192 15.9999 15.9999 14.0191 15.9999 11.5845V4.4154C16 1.9808 14.0192 0 11.5844 0ZM14.5804 11.5845C14.5804 13.2364 13.2364 14.5803 11.5845 14.5803H4.4153C2.76347 14.5804 1.41959 13.2364 1.41959 11.5845V4.4154C1.41959 2.76356 2.76347 1.41959 4.4153 1.41959H11.5844C13.2363 1.41959 14.5803 2.76356 14.5803 4.4154V11.5845H14.5804Z" fill="black" />
                            <path d="M11.5844 0H4.4153C1.98071 0 0 1.9808 0 4.4154V11.5845C0 14.0192 1.98071 15.9999 4.4153 15.9999H11.5844C14.0192 15.9999 15.9999 14.0191 15.9999 11.5845V4.4154C16 1.9808 14.0192 0 11.5844 0ZM14.5804 11.5845C14.5804 13.2364 13.2364 14.5803 11.5845 14.5803H4.4153C2.76347 14.5804 1.41959 13.2364 1.41959 11.5845V4.4154C1.41959 2.76356 2.76347 1.41959 4.4153 1.41959H11.5844C13.2363 1.41959 14.5803 2.76356 14.5803 4.4154V11.5845H14.5804Z" fill="url(#paint0_linear)" />
                            <path d="M7.99997 3.87738C5.72664 3.87738 3.8772 5.72682 3.8772 8.00015C3.8772 10.2734 5.72664 12.1227 7.99997 12.1227C10.2733 12.1227 12.1227 10.2734 12.1227 8.00015C12.1227 5.72682 10.2733 3.87738 7.99997 3.87738ZM7.99997 10.703C6.50949 10.703 5.29679 9.49053 5.29679 8.00006C5.29679 6.50949 6.5094 5.29688 7.99997 5.29688C9.49054 5.29688 10.7031 6.50949 10.7031 8.00006C10.7031 9.49053 9.49044 10.703 7.99997 10.703Z" fill="black" />
                            <path d="M7.99997 3.87738C5.72664 3.87738 3.8772 5.72682 3.8772 8.00015C3.8772 10.2734 5.72664 12.1227 7.99997 12.1227C10.2733 12.1227 12.1227 10.2734 12.1227 8.00015C12.1227 5.72682 10.2733 3.87738 7.99997 3.87738ZM7.99997 10.703C6.50949 10.703 5.29679 9.49053 5.29679 8.00006C5.29679 6.50949 6.5094 5.29688 7.99997 5.29688C9.49054 5.29688 10.7031 6.50949 10.7031 8.00006C10.7031 9.49053 9.49044 10.703 7.99997 10.703Z" fill="url(#paint1_linear)" />
                            <path d="M12.2959 2.67365C12.0224 2.67365 11.7537 2.78437 11.5606 2.97838C11.3665 3.17145 11.2549 3.44022 11.2549 3.71468C11.2549 3.98828 11.3666 4.25696 11.5606 4.45097C11.7536 4.64403 12.0224 4.75571 12.2959 4.75571C12.5704 4.75571 12.8382 4.64403 13.0322 4.45097C13.2262 4.25696 13.3369 3.98818 13.3369 3.71468C13.3369 3.44022 13.2262 3.17145 13.0322 2.97838C12.8391 2.78437 12.5704 2.67365 12.2959 2.67365Z" fill="black" />
                            <path d="M12.2959 2.67365C12.0224 2.67365 11.7537 2.78437 11.5606 2.97838C11.3665 3.17145 11.2549 3.44022 11.2549 3.71468C11.2549 3.98828 11.3666 4.25696 11.5606 4.45097C11.7536 4.64403 12.0224 4.75571 12.2959 4.75571C12.5704 4.75571 12.8382 4.64403 13.0322 4.45097C13.2262 4.25696 13.3369 3.98818 13.3369 3.71468C13.3369 3.44022 13.2262 3.17145 13.0322 2.97838C12.8391 2.78437 12.5704 2.67365 12.2959 2.67365Z" fill="url(#paint2_linear)" />
                            <defs>
                                <linearGradient id="paint0_linear" x1="7.99995" y1="15.9533" x2="7.99995" y2="0.124274" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E09B3D" />
                                    <stop offset="0.3" stop-color="#C74C4D" />
                                    <stop offset="0.6" stop-color="#C21975" />
                                    <stop offset="1" stop-color="#7024C4" />
                                </linearGradient>
                                <linearGradient id="paint1_linear" x1="7.99997" y1="12.0987" x2="7.99997" y2="3.94142" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E09B3D" />
                                    <stop offset="0.3" stop-color="#C74C4D" />
                                    <stop offset="0.6" stop-color="#C21975" />
                                    <stop offset="1" stop-color="#7024C4" />
                                </linearGradient>
                                <linearGradient id="paint2_linear" x1="12.2959" y1="4.74965" x2="12.2959" y2="2.68982" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E09B3D" />
                                    <stop offset="0.3" stop-color="#C74C4D" />
                                    <stop offset="0.6" stop-color="#C21975" />
                                    <stop offset="1" stop-color="#7024C4" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <i class="icon-vk"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="#" class="social-list__link">
                        <i class="icon-fb"></i>
                    </a>
                </li>
            </ul>
            <div class="header-bottom__workday">
                <b>С 9:00 до 21:00</b>
                Без выходных и праздничных дней
            </div>
            <a href="#" class="btn-white header-bottom__btn">
                Заказать звонок
            </a>
        </div>
        <div class="header-mobile__overlay">

        </div>
    </div>
</header>

<!-- HEADER EOF   -->