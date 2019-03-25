<?php

$template = get_field('template');

if( $template === 'Пустой' ):

    get_template_part( 'template-pages/content-tpl-none', get_post_type() );

elseif( !get_field('sections') ):

	get_template_part( 'template-pages/content-none', get_post_type() );

else:

    switch ($template){
        case "Главная":                           $template = ''; break;
	    case "Камеры наблюдения":                 $template = ' cctv'; break;
        case "Домашний интернет":                 $template = ' house-inet'; break;
        case "Интернет":                          $template = ' net'; break;
        case "Примеры работ":                     $template = ' examples'; break;
        case "ТВ Онлайн":                         $template = ' online-tv'; break;
        case "Цены и услуги":                     $template = ' price'; break;
        case "Регион":                            $template = ' video-dacha'; break;
        case "Усиление сотовой связи":            $template = ' price'; break;
        case "Тарифы":                            $template = ' tarifs'; break;
        case "В деревню":                         $template = ''; break;
        case "Видеонаблюдение для частного дома": $template = ' video-dacha'; break;
        case "В котедже":                         $template = ' vkotedji'; break;
    }

	echo '<div class="main-wrapper'.$template.'">';

	echo '<!-- BEGIN CONTENT -->';

	echo '<main class="content">';

	while ( has_sub_field('sections') ) :

		if( get_row_layout() == 'main-slider__wrapper' ):
            get_template_part('template-pages/sections/main-slider__wrapper');
		endif;

    endwhile;

	get_template_part('template-parts/popups/header-footer');
	get_template_part('template-parts/popups/main-screen');

	echo '</main>';

	echo '<!-- CONTENT EOF -->';


endif;

?>


<!--
            <section class="connect">
                <div class="wrapper">
                    <h3 class="title">
                        ПОДКЛЮЧИТЬ ИНТЕРНЕТ
                    </h3>
                    <ul class="connect-list">
                        <li class="connect-list__item ">
                            <a href="#" class="connect-list__link link1">
                                <span>
                                    В частный дом
                                </span>
                            </a>
                        </li>
                        <li class="connect-list__item ">
                            <a href="#" class="connect-list__link link2">
                                <span>На дачу</span>

                            </a>
                        </li>
                        <li class="connect-list__item ">
                            <a href="#" class="connect-list__link link3">
                                <span>В деревню</span>

                            </a>
                        </li>
                        <li class="connect-list__item ">
                            <a href="#" class="connect-list__link link4">
                                <span>В офис</span>

                            </a>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="rate">
                <div class="wrapper">
                    <div class="rate-top">
                        <h3 class="title">
                            ТАРИФЫ
                        </h3>
                        <a href="" class="btn-white rate-top__btn rate-top__btn-js">
                            <span class="rate-btn__box1">
                                <i class="icon-9"></i> Сравнение технологий  подключения интернет
                            </span>
                            <span class="rate-btn__box2">
                                <i class="icon-arr-left"></i> Вернуться к тарифам
                            </span>
                        </a>
                    </div>
                    <ul class="rate-list">
                        <li class="rate-list__item">
                            <a href="#" class="rate-list__link rate-list__link-js">
                                <div class="follower-wrapper">
                                    <div class="follower-container">
                                        <div class="follower"></div>
                                    </div>
                                </div>
                                <div class="rate-list__img">
                                    <img class="js-img-lazy" data-src="img/mts.svg" src="/" alt="">
                                </div>
                                <div class="rate-list__name">
                                    МТС
                                </div>
                            </a>
                        </li>
                        <li class="rate-list__item">

                            <a href="#" class="rate-list__link rate-list__link-js">
                                <div class="follower-wrapper">
                                    <div class="follower-container">
                                        <div class="follower"></div>
                                    </div>
                                </div>
                                <div class="rate-list__img">
                                    <img class="js-img-lazy" data-src="img/b.svg" src="/" alt="">
                                </div>
                                <div class="rate-list__name">
                                    Билайн
                                </div>
                            </a>
                        </li>
                        <li class="rate-list__item">
                            <a href="#" class="rate-list__link rate-list__link-js">
                                <div class="follower-wrapper">
                                    <div class="follower-container">
                                        <div class="follower"></div>
                                    </div>
                                </div>
                                <div class="rate-list__img">
                                    <img class="js-img-lazy" data-src="img/mega.svg" src="/" alt="">
                                </div>
                                <div class="rate-list__name">
                                    Мегафон
                                </div>
                            </a>
                        </li>
                        <li class="rate-list__item">
                            <a href="#" class="rate-list__link rate-list__link-js">
                                <div class="follower-wrapper">
                                    <div class="follower-container">
                                        <div class="follower"></div>
                                    </div>
                                </div>
                                <div class="rate-list__img">
                                    <img class="js-img-lazy" data-src="img/tele.svg" src="/" alt="">
                                </div>
                                <div class="rate-list__name">
                                    Tele2
                                </div>
                            </a>
                        </li>
                        <li class="rate-list__item">
                            <a href="#" class="rate-list__link rate-list__link-js">
                                <div class="follower-wrapper">
                                    <div class="follower-container">
                                        <div class="follower"></div>
                                    </div>
                                </div>
                                <div class="rate-list__img">
                                    <img class="js-img-lazy" data-src="img/wif.svg" src="/" alt="">
                                </div>
                                <div class="rate-list__name">
                                    Wi-Fire
                                </div>
                            </a>
                        </li>
                        <li class="rate-list__item">
                            <a href="#" class="rate-list__link rate-list__link-js">
                                <div class="follower-wrapper">
                                    <div class="follower-container">
                                        <div class="follower"></div>
                                    </div>
                                </div>
                                <div class="rate-list__img">
                                    <img class="js-img-lazy" data-src="img/rost.svg" src="/" alt="">
                                </div>
                                <div class="rate-list__name">
                                    РосТелеком
                                </div>
                            </a>
                        </li>
                        <li class="rate-list__item">
                            <a href="#" class="rate-list__link rate-list__link-js">
                                <div class="follower-wrapper">
                                    <div class="follower-container">
                                        <div class="follower"></div>
                                    </div>
                                </div>
                                <div class="rate-list__img">
                                    <img class="js-img-lazy" data-src="img/sp.svg" src="/" alt="">
                                </div>
                                <div class="rate-list__name">
                                    Спутниковый
                                </div>
                            </a>
                        </li>
                    </ul>
                    <ul class="rate-table__list">
                        <li class="rate-table__item">
                            <div class="rate-table__name">
                                МТС
                            </div>
                            <div class="rate-table__wrapper">
                                <table class="rate-table">
                                    <tr class="rate-table__tr">
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость услуг (руб/мес)
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Скорость
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость подключения
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Ограничения
                                            </span>
                                        </th>
                                    </tr>
                                    <tr class="rate-table__tr">
                                        <td class="rate-table__td">
                                            370 - 650 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            До 100 Мбит/с
                                        </td>
                                        <td class="rate-table__td">
                                            От 9800 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            Отсутствуют
                                        </td>
                                    </tr>                                                               
                                    <tfoot>
                                        <tr><td colspan="4" class="tfoor-text">При установке оборудования наша компания поможет вам подключить выгодные безлимитные интернет тарифы от МТС. В отличие от десятков предложений, размещенных на сайте оператора, вам не придется долго выбирать подходящий вариант. <br> <br>
                                        Все наши сим-карты можно установить в модем, планшет, смартфон и любой другой гаджет. При этом вы можете без ограничений раздавать сигнал по Wi-Fi или сетевому кабелю на другие устройства. Таким образом предоставляемые нами тарифы позволяют с помощью всего одной симки обеспечить стабильной связью всю семью или офис.</td></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </li>
                        <li class="rate-table__item beeline">
                            <div class="rate-table__name">
                                Билайн
                            </div>
                            <div class="rate-table__wrapper">
                                <table class="rate-table">
                                    <tr class="rate-table__tr">
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость услуг (руб/мес)
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Скорость
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость подключения
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Ограничения
                                            </span>
                                        </th>
                                    </tr>
                                    <tr class="rate-table__tr">
                                        <td class="rate-table__td">
                                            370 - 650 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            До 100 Мбит/с
                                        </td>
                                        <td class="rate-table__td">
                                            От 9800 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            Отсутствуют
                                        </td>
                                    </tr>                                                               
                                    <tfoot>
                                        <tr><td colspan="4" class="tfoor-text">При установке оборудования наша компания поможет вам подключить выгодные безлимитные интернет тарифы от МТС. В отличие от десятков предложений, размещенных на сайте оператора, вам не придется долго выбирать подходящий вариант. <br> <br>
                                        Все наши сим-карты можно установить в модем, планшет, смартфон и любой другой гаджет. При этом вы можете без ограничений раздавать сигнал по Wi-Fi или сетевому кабелю на другие устройства. Таким образом предоставляемые нами тарифы позволяют с помощью всего одной симки обеспечить стабильной связью всю семью или офис.</td></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </li>
                        <li class="rate-table__item megaphone">
                            <div class="rate-table__name">
                                Мегафон
                            </div>
                            <div class="rate-table__wrapper">
                                <table class="rate-table">
                                    <tr class="rate-table__tr">
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость услуг (руб/мес)
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Скорость
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость подключения
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Ограничения
                                            </span>
                                        </th>
                                    </tr>
                                    <tr class="rate-table__tr">
                                        <td class="rate-table__td">
                                            370 - 650 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            До 100 Мбит/с
                                        </td>
                                        <td class="rate-table__td">
                                            От 9800 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            Отсутствуют
                                        </td>
                                    </tr>                                                               
                                    <tfoot>
                                        <tr><td colspan="4" class="tfoor-text">При установке оборудования наша компания поможет вам подключить выгодные безлимитные интернет тарифы от МТС. В отличие от десятков предложений, размещенных на сайте оператора, вам не придется долго выбирать подходящий вариант. <br> <br>
                                        Все наши сим-карты можно установить в модем, планшет, смартфон и любой другой гаджет. При этом вы можете без ограничений раздавать сигнал по Wi-Fi или сетевому кабелю на другие устройства. Таким образом предоставляемые нами тарифы позволяют с помощью всего одной симки обеспечить стабильной связью всю семью или офис.</td></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </li>
                        <li class="rate-table__item tele2">
                            <div class="rate-table__name">
                                Tele2
                            </div>
                            <div class="rate-table__wrapper">
                                <table class="rate-table">
                                    <tr class="rate-table__tr">
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость услуг (руб/мес)
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Скорость
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость подключения
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Ограничения
                                            </span>
                                        </th>
                                    </tr>
                                    <tr class="rate-table__tr">
                                        <td class="rate-table__td">
                                            370 - 650 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            До 100 Мбит/с
                                        </td>
                                        <td class="rate-table__td">
                                            От 9800 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            Отсутствуют
                                        </td>
                                    </tr>                                                               
                                    <tfoot>
                                        <tr><td colspan="4" class="tfoor-text">При установке оборудования наша компания поможет вам подключить выгодные безлимитные интернет тарифы от МТС. В отличие от десятков предложений, размещенных на сайте оператора, вам не придется долго выбирать подходящий вариант. <br> <br>
                                        Все наши сим-карты можно установить в модем, планшет, смартфон и любой другой гаджет. При этом вы можете без ограничений раздавать сигнал по Wi-Fi или сетевому кабелю на другие устройства. Таким образом предоставляемые нами тарифы позволяют с помощью всего одной симки обеспечить стабильной связью всю семью или офис.</td></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </li>
                        <li class="rate-table__item wifire">
                            <div class="rate-table__name">
                                Wi-Fire
                            </div>
                            <div class="rate-table__wrapper">
                                <table class="rate-table">
                                    <tr class="rate-table__tr">
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость услуг (руб/мес)
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Скорость
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость подключения
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Ограничения
                                            </span>
                                        </th>
                                    </tr>
                                    <tr class="rate-table__tr">
                                        <td class="rate-table__td">
                                            370 - 650 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            До 100 Мбит/с
                                        </td>
                                        <td class="rate-table__td">
                                            От 9800 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            Отсутствуют
                                        </td>
                                    </tr>                                                               
                                    <tfoot>
                                        <tr><td colspan="4" class="tfoor-text">При установке оборудования наша компания поможет вам подключить выгодные безлимитные интернет тарифы от МТС. В отличие от десятков предложений, размещенных на сайте оператора, вам не придется долго выбирать подходящий вариант. <br> <br>
                                        Все наши сим-карты можно установить в модем, планшет, смартфон и любой другой гаджет. При этом вы можете без ограничений раздавать сигнал по Wi-Fi или сетевому кабелю на другие устройства. Таким образом предоставляемые нами тарифы позволяют с помощью всего одной симки обеспечить стабильной связью всю семью или офис.</td></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </li>
                        <li class="rate-table__item rostelecom">
                            <div class="rate-table__name">
                                РосТелеком
                            </div>
                            <div class="rate-table__wrapper">
                                <table class="rate-table">
                                    <tr class="rate-table__tr">
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость услуг (руб/мес)
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Скорость
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость подключения
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Ограничения
                                            </span>
                                        </th>
                                    </tr>
                                    <tr class="rate-table__tr">
                                        <td class="rate-table__td">
                                            370 - 650 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            До 100 Мбит/с
                                        </td>
                                        <td class="rate-table__td">
                                            От 9800 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            Отсутствуют
                                        </td>
                                    </tr>                                                               
                                    <tfoot>
                                        <tr><td colspan="4" class="tfoor-text">При установке оборудования наша компания поможет вам подключить выгодные безлимитные интернет тарифы от МТС. В отличие от десятков предложений, размещенных на сайте оператора, вам не придется долго выбирать подходящий вариант. <br> <br>
                                        Все наши сим-карты можно установить в модем, планшет, смартфон и любой другой гаджет. При этом вы можете без ограничений раздавать сигнал по Wi-Fi или сетевому кабелю на другие устройства. Таким образом предоставляемые нами тарифы позволяют с помощью всего одной симки обеспечить стабильной связью всю семью или офис.</td></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </li>
                        <li class="rate-table__item satellite">
                            <div class="rate-table__name">
                                Спутниковый
                            </div>
                            <div class="rate-table__wrapper">
                                <table class="rate-table">
                                    <tr class="rate-table__tr">
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость услуг (руб/мес)
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Скорость
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Стоимость подключения
                                            </span>
                                        </th>
                                        <th class="rate-table__th">
                                            <span>
                                                Ограничения
                                            </span>
                                        </th>
                                    </tr>
                                    <tr class="rate-table__tr">
                                        <td class="rate-table__td">
                                            370 - 650 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            До 100 Мбит/с
                                        </td>
                                        <td class="rate-table__td">
                                            От 9800 <i class="icon-rub"></i>
                                        </td>
                                        <td class="rate-table__td">
                                            Отсутствуют
                                        </td>
                                    </tr>                                                               
                                    <tfoot>
                                        <tr><td colspan="4" class="tfoor-text">При установке оборудования наша компания поможет вам подключить выгодные безлимитные интернет тарифы от МТС. В отличие от десятков предложений, размещенных на сайте оператора, вам не придется долго выбирать подходящий вариант. <br> <br>
                                        Все наши сим-карты можно установить в модем, планшет, смартфон и любой другой гаджет. При этом вы можете без ограничений раздавать сигнал по Wi-Fi или сетевому кабелю на другие устройства. Таким образом предоставляемые нами тарифы позволяют с помощью всего одной симки обеспечить стабильной связью всю семью или офис.</td></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </li>
                    </ul>
                    <div class="rate-all">
                        <table class="rate-all__table">
                            <tr class="rate-all__tr tr1">
                                <th class="rate-all__th">Операторы</th>
                                <th class="rate-all__th">WiFi77</th>
                                <th class="rate-all__th">Yota</th>
                                <th class="rate-all__th">Спутниковый</th>
                                <th class="rate-all__th">WiMAx</th>
                                <th class="rate-all__th">Радиорелейный</th>
                            </tr>
                            <tr class="rate-all__tr tr2">
                                <td class="rate-all__td"> <span>Стоимость услуг (руб/мес)</span> </td>
                                <td class="rate-all__td">370-650 <i class="icon-rub"></i> </td>
                                <td class="rate-all__td">1 400 <i class="icon-rub"></i> </td>
                                <td class="rate-all__td">5 000 <i class="icon-rub"></i> </td>
                                <td class="rate-all__td">2 500 <i class="icon-rub"></i></td>
                                <td class="rate-all__td">9 000 <i class="icon-rub"></i></td>
                            </tr>
                            <tr class="rate-all__tr tr3">
                                <td class="rate-all__td">Скорость</td>
                                <td class="rate-all__td">До 100 Мбит/с</td>
                                <td class="rate-all__td">
                                   2-20 Мбит/с
                                   <div>(загружена сеть)</div>
                               </td>
                               <td class="rate-all__td">

                                3-6 Мбит/с
                                <div>(влияние погоды)</div>
                            </td>
                            <td class="rate-all__td">3-8 Мбит/с</td>
                            <td class="rate-all__td">10 Мбит/с</td>
                        </tr>
                        <tr class="rate-all__tr tr4">
                            <td class="rate-all__td"><span>Стоимость карты без комплекта</span></td>
                            <td class="rate-all__td">От 9 800 <i class="icon-rub"></i></td>
                            <td class="rate-all__td"> 6 600 <i class="icon-rub"></i></td>
                            <td class="rate-all__td">27 000 <i class="icon-rub"></i></td>
                            <td class="rate-all__td">14 000 <i class="icon-rub"></i></td>

                            <td class="rate-all__td">90 000 <i class="icon-rub"></i></td>
                        </tr>
                        <tr class="rate-all__tr tr5">
                            <td class="rate-all__td">Ограничения</td>
                            <td class="rate-all__td">Отсутствуют</td>
                            <td class="rate-all__td">Ограничения <div>при загрузках</div> </td>
                            <td class="rate-all__td">Отсутствуют</td>
                            <td class="rate-all__td">Отсутствуют</td>
                            <td class="rate-all__td">Отсутствуют</td>
                        </tr>
                    </table>
                </div>
                <div class="rate-description__wrapper">
                    <ul class="rate-description__list">
                        <li class="main-slider__el">
                            <div class="main-slider__img">
                                <i class="icon-10"></i>
                            </div>
                            <div class="main-slider__text">
                                Скорость <br> интернета до 100 <br> Мбит и ВЫШЕ!
                            </div>
                        </li>
                        <li class="main-slider__el">
                            <div class="main-slider__img">
                                <i class="icon-11"></i>
                            </div>
                            <div class="main-slider__text">
                                Подбор <br> оптимального <br> пакета
                            </div>
                        </li>
                        <li class="main-slider__el">
                            <div class="main-slider__img">
                                <i class="icon-12"></i>
                            </div>
                            <div class="main-slider__text">
                                Установка в <br> день заказа
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="scheme">
            <div class="wrapper">
                <h3 class="title">
                    Схема работы
                </h3>
                <ul class="scheme-list">
                    <li class="scheme-list__item">
                        <div class="scheme-list__num">
                            1.
                            <i class="icon-arrow"></i>
                        </div>
                        <div class="scheme-list__box">
                            <div class="scheme-list__img">
                                <i class="icon-25"></i>
                            </div>
                            <h6 class="scheme-list__title">
                                ТЕСТ СИГНАЛА
                            </h6>
                            <div class="scheme-list__text">
                                Специалиты приезжают к вам <br> и замеряют <br> уровень сигнала
                            </div>

                        </div>
                    </li>
                    <li class="scheme-list__item">
                        <div class="scheme-list__num">
                            2.
                            <i class="icon-arrow"></i>
                        </div>
                        <div class="scheme-list__box">
                            <div class="scheme-list__img">
                                <i class="icon-26"></i>
                            </div>
                            <h6 class="scheme-list__title">
                                АНТЕННА
                            </h6>
                            <div class="scheme-list__text">
                                Снаружи дома устанавливается антена и направляется на вышку
                            </div>

                        </div>
                    </li>
                    <li class="scheme-list__item">
                        <div class="scheme-list__num">
                            3.
                            <i class="icon-arrow"></i>
                        </div>
                        <div class="scheme-list__box">
                            <div class="scheme-list__img">
                                <i class="icon-27"></i>
                            </div>
                            <h6 class="scheme-list__title">
                                УСТАНОВКА
                            </h6>
                            <div class="scheme-list__text">
                                Антенный блок крепится на фасад здания и без повреждения <br> отделки, проводится кабель в дом
                            </div>

                        </div>
                    </li>
                    <li class="scheme-list__item">
                        <div class="scheme-list__num">
                            4.
                            <i class="icon-arrow"></i>
                        </div>
                        <div class="scheme-list__box">
                            <div class="scheme-list__img">
                                <i class="icon-22"></i>
                            </div>
                            <h6 class="scheme-list__title">
                                WI-FI СЕТЬ
                            </h6>
                            <div class="scheme-list__text">
                                В доме устанавливается роутер и настраивается беспроводная сеть Wi&#8209;Fi
                            </div>
                        </div>

                    </li>
                    <li class="scheme-list__item">
                        <div class="scheme-list__num">
                            5.
                            <i class="icon-arrow"></i>
                        </div>
                        <div class="scheme-list__box">
                            <div class="scheme-list__img">
                                <i class="icon-29"></i>
                            </div>
                            <h6 class="scheme-list__title">
                                ПОДКЛЮЧЕНИЕ
                            </h6>
                            <div class="scheme-list__text">
                                Настраиваем личный кабинет, подключаем тарифный план
                            </div>
                        </div>

                    </li>
                </ul>
                <div class="scheme-box">
                    <div class="scheme-box__pict">

                    </div>
                    <form class="scheme-box__form">
                        <h5 class="scheme-form__title">
                            <span>ОСТАВЬТЕ ЗАЯВКУ НА ПОДКЛЮЧЕНИЕ К ИНТЕРНЕТУ!</span>
                            <i class="icon-13">
                                <span class="path2"></span>
                            </i>
                        </h5>
                        <div class="scheme-form__text">
                            Просто заполните форму, указав имя и контактные данные, нажмите кнопку и мы перезвоним в течении получаса
                        </div>
                        <div class="scheme-form__box">
                            <input type="text" placeholder="Имя*">
                        </div>
                        <div class="scheme-form__box">
                            <input type="tel" class="tel-js" placeholder='+7 (___) ___ - __ - __*'>
                        </div>
                        <div class="scheme-form__box">
                            <input type='email' placeholder="Email">
                        </div>
                        <div class="scheme-form__box">
                            <input type="text" placeholder="Населенный пункт*">
                        </div>
                        <div class="scheme-form__element">
                            *Поля обязательные для заполнения
                        </div>
                        <div class='scheme-form__checkbox'>
                            <input type="checkbox" id="check" name="check" />
                            <label for="check">
                                <span>
                                    Я принимаю
                                    <a href="" class="form-link">
                                        Условия политики конфиденциальности
                                    </a>
                                </span>
                            </label>
                        </div>
                        <button class="btn-green sheme-form__btn">Заказать обратный звонок</button>
                    </form>
                </div>
            </div>
        </section>
        <section class="equipment">

            <div class="wrapper">
                <h3 class="title">
                    НАШЕ ОБОРУДОВАНИЕ
                </h3>
                <ul class="equipment-list">
                    <li class="equipment-list__item">
                        <div class="equipment-list__block">
                            <div class="equipment-list__top">
                                СТАРТ
                            </div>
                            <div class="equipment-list__img">
                                <img class="js-img-lazy" data-src="img/img5.png" src="/" alt="">
                            </div>
                            <div class="equipment-list__dbi">
                                Усиление: до 12 dBi
                            </div>
                            <ul class="equipment-list__specifications">
                                <li class="equpment-specifications__item">
                                    Панельная антенна
                                </li>
                                <li class="equpment-specifications__item">
                                    Wi-Fi роутер Zyxel Keenetic LTE*
                                </li>
                                <li class="equpment-specifications__item">
                                    3/4G LTE модем
                                </li>
                                <li class="equpment-specifications__item">
                                    Комплект кабелей, креплений
                                </li>
                            </ul>
                            <div class="equipment-list__text">
                                Недорогой, но эффективный набор для снабжения загородного дома





                            </div>
                            <div class="equipment-list__text">
                                Высокоскоростным интернетом.
                                Применяется на расстоянии до 3 км. Цена данного комплекта в версии MIMO (для 4G) +200 руб.
                            </div>
                            <div class="equipment-list__text">
                                Скорость интернета 10-20 Мбит/с.
                            </div>
                            <a href="#nav-form" class="equipment-list__btn btn-green">
                                Цена под ключ: <b>9800</b> <i class="icon-rub"></i>
                            </a>
                        </div>
                    </li>
                    <li class="equipment-list__item">
                        <div class="equipment-list__block">
                            <div class="equipment-list__top green">
                                ОПТИМА
                            </div>
                            <div class="equipment-list__img">
                                <img class="js-img-lazy" data-src="img/img6.png" src="/" alt="">
                            </div>
                            <div class="equipment-list__dbi">
                                Усиление: до 16 dBi
                            </div>
                            <ul class="equipment-list__specifications">
                                <li class="equpment-specifications__item">
                                    Панельная антенна
                                </li>
                                <li class="equpment-specifications__item">
                                    Wi-Fi роутер Zyxel Keenetic LTE*
                                </li>
                                <li class="equpment-specifications__item">
                                    3/4G LTE модем
                                </li>
                                <li class="equpment-specifications__item">
                                    Комплект кабелей, креплений
                                </li>
                            </ul>
                            <div class="equipment-list__text">
                                Недорогой, но эффективный набор для снабжения загородного дома





                            </div>
                            <div class="equipment-list__text">
                                Высокоскоростным интернетом.
                                Применяется на расстоянии до 3 км. Цена данного комплекта в версии MIMO (для 4G) +200 руб.
                            </div>
                            <div class="equipment-list__text">
                                Скорость интернета 10-20 Мбит/с.
                            </div>
                            <a href="#nav-form" class="equipment-list__btn btn-green">
                                Цена под ключ: <b>9800</b> <i class="icon-rub"></i>
                            </a>
                        </div>
                    </li>
                    <li class="equipment-list__item">
                        <div class="equipment-list__block">
                            <div class="equipment-list__top">
                                ДРАЙВ
                            </div>
                            <div class="equipment-list__img">
                                <img class="js-img-lazy" data-src="img/img7.png" src="/" alt="">
                            </div>
                            <div class="equipment-list__dbi">
                                Усиление: до 20 dBi
                            </div>
                            <ul class="equipment-list__specifications">
                                <li class="equpment-specifications__item">
                                    Панельная антенна
                                </li>
                                <li class="equpment-specifications__item">
                                    Wi-Fi роутер Zyxel Keenetic LTE*
                                </li>
                                <li class="equpment-specifications__item">
                                    3/4G LTE модем
                                </li>
                                <li class="equpment-specifications__item">
                                    Комплект кабелей, креплений
                                </li>
                            </ul>
                            <div class="equipment-list__text">
                                Недорогой, но эффективный набор для снабжения загородного дома





                            </div>
                            <div class="equipment-list__text">
                                Высокоскоростным интернетом.
                                Применяется на расстоянии до 3 км. Цена данного комплекта в версии MIMO (для 4G) +200 руб.
                            </div>
                            <div class="equipment-list__text">
                                Скорость интернета 10-20 Мбит/с.
                            </div>
                            <a href="#nav-form" class="equipment-list__btn btn-green">
                                Цена под ключ: <b>9800</b> <i class="icon-rub"></i>
                            </a>
                        </div>
                    </li>
                    <li class="equipment-list__item">
                        <div class="equipment-list__block">
                            <div class="equipment-list__top green">
                                ЭКСТРИМ
                            </div>
                            <div class="equipment-list__img">
                                <img class="js-img-lazy" data-src="img/img8.png" src="/" alt="">
                            </div>
                            <div class="equipment-list__dbi">
                                Усиление: до 24 dBi
                            </div>
                            <ul class="equipment-list__specifications">
                                <li class="equpment-specifications__item">
                                    Панельная антенна
                                </li>
                                <li class="equpment-specifications__item">
                                    Wi-Fi роутер Zyxel Keenetic LTE*
                                </li>
                                <li class="equpment-specifications__item">
                                    3/4G LTE модем
                                </li>
                                <li class="equpment-specifications__item">
                                    Комплект кабелей, креплений
                                </li>
                            </ul>
                            <div class="equipment-list__text">
                                Недорогой, но эффективный набор для снабжения загородного дома





                            </div>
                            <div class="equipment-list__text">
                                Высокоскоростным интернетом.
                                Применяется на расстоянии до 3 км. Цена данного комплекта в версии MIMO (для 4G) +200 руб.
                            </div>
                            <div class="equipment-list__text">
                                Скорость интернета 10-20 Мбит/с.
                            </div>
                            <a href="#nav-form" class="equipment-list__btn btn-green">
                                Цена под ключ: <b>9800</b> <i class="icon-rub"></i>
                            </a>
                        </div>
                    </li>
                </ul>
                <div class="equipment-block show-more">
                    <div class="equipment-block__left">
                        <p>
                            Специалисты нашей компании обеспечат высокий сервис и помогут быстро подключить высокоскоростной безлимитный интернет там, где это необходимо. Наибольшую популярность наши услуги обрели в населенных пунктах, где уровень сигнала слаб, неустойчив или вовсе отсутствует, а проводные провайдеры недоступны.
                        </p>
                        <p>
                            И это очевидно, ведь в современном мире обойтись без качественного интернета практически невозможно, как жителям города - частный дом так и частный сектор. Для решения данной проблемы мы предлагаем обратится к нашим мастерам.
                        </p>
                    </div>
                    <div class="equipment-block__right">
                        <p>
                            В нашем арсенале различные виды решений для обустройства интернета - от комнатных пассивных антенн, до внешних направленных дальнобойных комплексов, актуальных в местах, где сигнал практически отсутствует. Для примера, если на модеме 2-5 Мбит/с, то с нашей правильно настроенной антенной это 20-60 Мбит/с.

                        </p>
                        <p>
                            К каждому комплекту оборудования, мы прилагаем SIM-карту МегаФон, МТС, Билайн, ТЕЛЕ2, Ростелеком с абсолютно безлимитным тарифом стоимостью от 370 - 650 руб/мес.
                        </p>
                    </div>

                </div>
                <a href="#" class="region-list__more show-more-js">
                    <span class="region-span-1">
                    Показать весь список</span>
                    <span class="region-span-2">
                    Скрыть весь список</span>
                    <i class="icon-arr-down"></i>
                </a>
            </div>
        </section>
        <section class="portfolio">
            <div class="wrapper">
                <h3 class="title">
                    Примеры наших работ
                </h3>

            </div>
            <ul class="protfolio-slider protfolio-slider-js">
                <li class="portfolio-slider__item">
                    <a href="#" class="portfolio-slider__box box1">
                        <div class="portfolio-slider__description">
                            <div class="portfolio-description__top">
                                <div class="portfolio-description__left">
                                    <div class="portfolio-description__icon">
                                        <i class="icon-15"></i>
                                    </div>
                                    <div class="portfolio-description__text">
                                        SPEEDTEST
                                        <div>
                                            @Speedtest by Ookla
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-description__right">
                                    <div class="portfolio-description__time">
                                        <span>11/11/2018</span>
                                        <span>8:14 AM GMT</span>

                                    </div>
                                    <div class="portfolio-description__wi-fi">
                                        <i class="icon-16"></i>
                                    </div>
                                </div>
                            </div>

                            <ul class="portfolio-description__list">
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-17 portfolio-icon icon1"></i>
                                        PING
                                    </div>
                                    <div class="portfolio-description__result">
                                        19<small>ms</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-18 portfolio-icon icon2"></i>
                                        DOWNLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        48.70<small>Mbps</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-19 portfolio-icon icon3"></i>
                                        UPLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        40.20<small>Mbps</small>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </a>
                    <a href="#" class="portfolio-slider__box box2">
                        <div class="portfolio-slider__description">
                            <div class="portfolio-description__top">
                                <div class="portfolio-description__left">
                                    <div class="portfolio-description__icon">
                                        <i class="icon-15"></i>
                                    </div>
                                    <div class="portfolio-description__text">
                                        SPEEDTEST
                                        <div>
                                            @Speedtest by Ookla
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-description__right">
                                    <div class="portfolio-description__time">
                                        <span>11/11/2018</span>
                                        <span>8:14 AM GMT</span>

                                    </div>
                                    <div class="portfolio-description__wi-fi">
                                        <i class="icon-16"></i>
                                    </div>
                                </div>
                            </div>

                            <ul class="portfolio-description__list">
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-17 portfolio-icon icon1"></i>
                                        PING
                                    </div>
                                    <div class="portfolio-description__result">
                                        19<small>ms</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-18 portfolio-icon icon2"></i>
                                        DOWNLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        48.70<small>Mbps</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-19 portfolio-icon icon3"></i>
                                        UPLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        40.20<small>Mbps</small>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </a>
                </li>
                <li class="portfolio-slider__item">
                    <a href="#" class="portfolio-slider__box box3">
                        <div class="portfolio-slider__description">
                            <div class="portfolio-description__top">
                                <div class="portfolio-description__left">
                                    <div class="portfolio-description__icon">
                                        <i class="icon-15"></i>
                                    </div>
                                    <div class="portfolio-description__text">
                                        SPEEDTEST
                                        <div>
                                            @Speedtest by Ookla
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-description__right">
                                    <div class="portfolio-description__time">
                                        <span>11/11/2018</span>
                                        <span>8:14 AM GMT</span>

                                    </div>
                                    <div class="portfolio-description__wi-fi">
                                        <i class="icon-16"></i>
                                    </div>
                                </div>
                            </div>

                            <ul class="portfolio-description__list">
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-17 portfolio-icon icon1"></i>
                                        PING
                                    </div>
                                    <div class="portfolio-description__result">
                                        19<small>ms</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-18 portfolio-icon icon2"></i>
                                        DOWNLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        48.70<small>Mbps</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-19 portfolio-icon icon3"></i>
                                        UPLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        40.20<small>Mbps</small>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </a>
                    <a href="#" class="portfolio-slider__box box4">
                        <div class="portfolio-slider__description">
                            <div class="portfolio-description__top">
                                <div class="portfolio-description__left">
                                    <div class="portfolio-description__icon">
                                        <i class="icon-15"></i>
                                    </div>
                                    <div class="portfolio-description__text">
                                        SPEEDTEST
                                        <div>
                                            @Speedtest by Ookla
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-description__right">
                                    <div class="portfolio-description__time">
                                        <span>11/11/2018</span>
                                        <span>8:14 AM GMT</span>

                                    </div>
                                    <div class="portfolio-description__wi-fi">
                                        <i class="icon-16"></i>
                                    </div>
                                </div>
                            </div>

                            <ul class="portfolio-description__list">
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-17 portfolio-icon icon1"></i>
                                        PING
                                    </div>
                                    <div class="portfolio-description__result">
                                        19<small>ms</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-18 portfolio-icon icon2"></i>
                                        DOWNLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        48.70<small>Mbps</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-19 portfolio-icon icon3"></i>
                                        UPLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        40.20<small>Mbps</small>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </a>
                </li>
                <li class="portfolio-slider__item">
                    <a href="#" class="portfolio-slider__box box5">
                        <div class="portfolio-slider__description">
                            <div class="portfolio-description__top">
                                <div class="portfolio-description__left">
                                    <div class="portfolio-description__icon">
                                        <i class="icon-15"></i>
                                    </div>
                                    <div class="portfolio-description__text">
                                        SPEEDTEST
                                        <div>
                                            @Speedtest by Ookla
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-description__right">
                                    <div class="portfolio-description__time">
                                        <span>11/11/2018</span>
                                        <span>8:14 AM GMT</span>

                                    </div>
                                    <div class="portfolio-description__wi-fi">
                                        <i class="icon-16"></i>
                                    </div>
                                </div>
                            </div>

                            <ul class="portfolio-description__list">
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-17 portfolio-icon icon1"></i>
                                        PING
                                    </div>
                                    <div class="portfolio-description__result">
                                        19<small>ms</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-18 portfolio-icon icon2"></i>
                                        DOWNLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        48.70<small>Mbps</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-19 portfolio-icon icon3"></i>
                                        UPLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        40.20<small>Mbps</small>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </a>
                    <a href="#" class="portfolio-slider__box box6">
                        <div class="portfolio-slider__description">
                            <div class="portfolio-description__top">
                                <div class="portfolio-description__left">
                                    <div class="portfolio-description__icon">
                                        <i class="icon-15"></i>
                                    </div>
                                    <div class="portfolio-description__text">
                                        SPEEDTEST
                                        <div>
                                            @Speedtest by Ookla
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-description__right">
                                    <div class="portfolio-description__time">
                                        <span>11/11/2018</span>
                                        <span>8:14 AM GMT</span>

                                    </div>
                                    <div class="portfolio-description__wi-fi">
                                        <i class="icon-16"></i>
                                    </div>
                                </div>
                            </div>

                            <ul class="portfolio-description__list">
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-17 portfolio-icon icon1"></i>
                                        PING
                                    </div>
                                    <div class="portfolio-description__result">
                                        19<small>ms</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-18 portfolio-icon icon2"></i>
                                        DOWNLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        48.70<small>Mbps</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-19 portfolio-icon icon3"></i>
                                        UPLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        40.20<small>Mbps</small>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </a>
                </li>
                <li class="portfolio-slider__item">
                    <a href="#" class="portfolio-slider__box box3">
                        <div class="portfolio-slider__description">
                            <div class="portfolio-description__top">
                                <div class="portfolio-description__left">
                                    <div class="portfolio-description__icon">
                                        <i class="icon-15"></i>
                                    </div>
                                    <div class="portfolio-description__text">
                                        SPEEDTEST
                                        <div>
                                            @Speedtest by Ookla
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-description__right">
                                    <div class="portfolio-description__time">
                                        <span>11/11/2018</span>
                                        <span>8:14 AM GMT</span>

                                    </div>
                                    <div class="portfolio-description__wi-fi">
                                        <i class="icon-16"></i>
                                    </div>
                                </div>
                            </div>

                            <ul class="portfolio-description__list">
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-17 portfolio-icon icon1"></i>
                                        PING
                                    </div>
                                    <div class="portfolio-description__result">
                                        19<small>ms</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-18 portfolio-icon icon2"></i>
                                        DOWNLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        48.70<small>Mbps</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-19 portfolio-icon icon3"></i>
                                        UPLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        40.20<small>Mbps</small>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </a>
                    <a href="#" class="portfolio-slider__box box4">
                        <div class="portfolio-slider__description">
                            <div class="portfolio-description__top">
                                <div class="portfolio-description__left">
                                    <div class="portfolio-description__icon">
                                        <i class="icon-15"></i>
                                    </div>
                                    <div class="portfolio-description__text">
                                        SPEEDTEST
                                        <div>
                                            @Speedtest by Ookla
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-description__right">
                                    <div class="portfolio-description__time">
                                        <span>11/11/2018</span>
                                        <span>8:14 AM GMT</span>

                                    </div>
                                    <div class="portfolio-description__wi-fi">
                                        <i class="icon-16"></i>
                                    </div>
                                </div>
                            </div>

                            <ul class="portfolio-description__list">
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-17 portfolio-icon icon1"></i>
                                        PING
                                    </div>
                                    <div class="portfolio-description__result">
                                        19<small>ms</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-18 portfolio-icon icon2"></i>
                                        DOWNLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        48.70<small>Mbps</small>
                                    </div>
                                </li>
                                <li class="portfolio-description__item">
                                    <div class="portfolio-description__element">
                                        <i class="icon-19 portfolio-icon icon3"></i>
                                        UPLOAD
                                    </div>
                                    <div class="portfolio-description__result">
                                        40.20<small>Mbps</small>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </a>
                </li>
            </ul>
            <div class="portfolio-slider__control">
                <a href="#" class="portfolio-arrow__prev portfolio-arrow__prev-1-js portfolio-arrow">
                    <i class="icon-arr-left"></i>
                </a>
                <a href="#" class="portfolio-arrow__next portfolio-arrow__next-1-js portfolio-arrow">
                    <i class="icon-arr-right"></i>
                </a>
            </div>
            <div class="portfolio-bottom">
                <div class="wrapper">
                    <div class="portfolio-bottom__pretitle">
                        Выезд специалиста, тест сигнала и монтаж
                    </div>
                    <h2 class="portfolio-bottom__title">

                        БЕСПЛАТНО
                    </h2>
                    <p>
                        Выбор оборудования для установки определяется: качеством покрытия сети, расстоянием до вышки связи и её мощности, высоты монтажа, особенностей местности. Стандартный монтаж оборудования и выход в интернет осуществляется в течении двух часов.
                    </p>
                    <div class="portfolio-bottom__img">
                        <img class="js-img-lazy" data-src="img/hand.jpg" src="/" alt="">
                    </div>
                    <div class="portfolio-bottom__box show-more">
                        <div class="portfolio-bottom__left">
                            <p>
                                Специалисты нашей компании обеспечат высокий сервис и помогут быстро подключить высокоскоростной безлимитный интернет там, где это необходимо. Наибольшую популярность наши услуги обрели в населенных пунктах, где уровень сигнала слаб, неустойчив или вовсе отсутствует, а проводные провайдеры недоступны.

                            </p>
                            <p>
                                И это очевидно, ведь в современном мире обойтись без качественного интернета практически невозможно, как жителям города - частный дом так и частный сектор. Для решения данной проблемы мы предлагаем обратится к нашим мастерам.
                            </p>
                        </div>
                        <div class="portfolio-bottom__right">
                            <p>
                                В нашем арсенале различные виды решений для обустройства интернета - от комнатных пассивных антенн, до внешних направленных дальнобойных комплексов, актуальных в местах, где сигнал практически отсутствует. Для примера, если на модеме 2-5 Мбит/с, то с нашей правильно настроенной антенной это 20-60 Мбит/с.


                            </p>
                            <p>
                                К каждому комплекту оборудования, мы прилагаем SIM-карту МегаФон, МТС, Билайн, ТЕЛЕ2, Ростелеком с абсолютно безлимитным тарифом стоимостью от 370 - 650 руб/мес.
                            </p>
                        </div>

                    </div>
                    <a href="#" class="region-list__more show-more-js">
                        <span class="region-span-1">
                        Показать весь список</span>
                        <span class="region-span-2">
                        Скрыть весь список</span>
                        <i class="icon-arr-down"></i>
                    </a>
                </div>
            </div>
        </section>
        <section class="service">
            <div class="wrapper">
                <h3 class="title">
                    ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ
                </h3>
                <ul class="service-nav">
                    <li class="service-nav__item">
                        <div class="service-nav__box service-nav__box-js">
                            <div class="service-nav__img">
                                <i class="icon-22"></i>
                            </div>
                            <div class="service-nav__text">
                                Расширение Wifi-зоны
                            </div>
                        </div>
                    </li>
                    <li class="service-nav__item">
                        <div class="service-nav__box service-nav__box-js">
                            <div class="service-nav__img">
                                <i class="icon-21"></i>
                            </div>
                            <div class="service-nav__text">
                                Установка Видеонаблюдения
                            </div>
                        </div>
                    </li>
                    <li class="service-nav__item active">
                        <div class="service-nav__box service-nav__box-js">
                            <div class="service-nav__img">
                                <i class="icon-20"></i>
                            </div>
                            <div class="service-nav__text">
                                Усиление GSM сигнала
                            </div>
                        </div>
                    </li>
                </ul>                
                <ul class="service-d__list">
                    <li class="service-d__item">
                      <div class="service-text">
                        Позволяют добиться покрытие интернетом всего дома и участка.
                    </div>
                    <ul class="offers__list">
                     <li class="offers__item">
                        <div class="offers__item-wrap">
                           <div class="offers-pic"><img class="js-img-lazy" data-src="img/services/1.jpg" src="/" alt="img"></div>
                           <h4>Розеточный повторитель wi-fi сигнала</h4>	
                       </div>		
                       <div class="offers__item-wrap">											
                           <div class="offers-price">
                              <div>Ценат от:</div>
                              <div>3 500 <i class="icon-rub"></i></div>
                          </div>
                          <a href="#nav-form" class="btn-green">Подробнее</a>
                      </div>	
                  </li>
                  <li class="offers__item">
                    <div class="offers__item-wrap">
                       <div class="offers-pic"><img class="js-img-lazy" data-src="img/services/2.jpg" src="/" alt="img"></div>
                       <h4>Профессиональные всепогодные точки доступа</h4>	
                   </div>		
                   <div class="offers__item-wrap">											
                       <div class="offers-price">
                          <div>Ценат от:</div>
                          <div>3 500 <i class="icon-rub"></i></div>
                      </div>
                      <a href="#nav-form" class="btn-green">Подробнее</a>
                  </div>	
              </li>
              <li class="offers__item">
                <div class="offers__item-wrap">
                   <div class="offers-pic"><img class="js-img-lazy" data-src="img/services/3.jpg" src="/" alt="img"></div>
                   <h4>Ubiquiti UniFi AC Mesh</h4>	
               </div>		
               <div class="offers__item-wrap">											
                   <div class="offers-price">
                      <div>Ценат от:</div>
                      <div>3 500 <i class="icon-rub"></i></div>
                  </div>
                  <a href="#nav-form" class="btn-green">Подробнее</a>
              </div>	
          </li>
          <li class="offers__item">
            <div class="offers__item-wrap">
               <div class="offers-pic"><img class="js-img-lazy" data-src="img/services/4.jpg" src="/" alt="img"></div>
               <h4>Розеточный повторитель wi-fi сигнала</h4>	
           </div>		
           <div class="offers__item-wrap">											
               <div class="offers-price">
                  <div>Ценат от:</div>
                  <div>3 500 <i class="icon-rub"></i></div>
              </div>
              <a href="#nav-form" class="btn-green">Подробнее</a>
          </div>	
      </li>
      <li class="offers__item">
        <div class="offers__item-wrap">
           <div class="offers-pic"><img class="js-img-lazy" data-src="img/services/2.jpg" src="/" alt="img"></div>
           <h4>Профессиональные всепогодные точки доступа</h4>	
       </div>		
       <div class="offers__item-wrap">											
           <div class="offers-price">
              <div>Ценат от:</div>
              <div>3 500 <i class="icon-rub"></i></div>
          </div>
          <a href="#nav-form" class="btn-green">Подробнее</a>
      </div>	
  </li>
  <li class="offers__item">
    <div class="offers__item-wrap">
       <div class="offers-pic"><img class="js-img-lazy" data-src="img/services/1.jpg" src="/" alt="img"></div>
       <h4>Розеточный повторитель wi-fi сигнала</h4>	
   </div>		
   <div class="offers__item-wrap">											
       <div class="offers-price">
          <div>Ценат от:</div>
          <div>3 500 <i class="icon-rub"></i></div>
      </div>
      <a href="#nav-form" class="btn-green">Подробнее</a>
  </div>	
</li>
<li class="offers__item">
    <div class="offers__item-wrap">
       <div class="offers-pic"><img class="js-img-lazy" data-src="img/services/4.jpg" src="/" alt="img"></div>
       <h4>Розеточный повторитель wi-fi сигнала</h4>	
   </div>		
   <div class="offers__item-wrap">											
       <div class="offers-price">
          <div>Ценат от:</div>
          <div>3 500 <i class="icon-rub"></i></div>
      </div>
      <a href="#nav-form" class="btn-green">Подробнее</a>
  </div>	
</li>
<li class="offers__item">
    <div class="offers__item-wrap">
       <div class="offers-pic"><img class="js-img-lazy" data-src="img/services/3.jpg" src="/" alt="img"></div>
       <h4>Ubiquiti UniFi AC Mesh</h4>	
   </div>		
   <div class="offers__item-wrap">											
       <div class="offers-price">
          <div>Ценат от:</div>
          <div>3 500 <i class="icon-rub"></i></div>
      </div>
      <a href="#nav-form" class="btn-green">Подробнее</a>
  </div>	
</li>
</ul>

</li>
<li class="service-d__item">
   <div class="service-text">
     Профессиональная установка видеонаблюдения для дачи, загородного дома, коттеджа, кафе, магазинов, офисов, стройки, стройплощадки, школы, сады, аптек, стоянок и парковок.
 </div>
 <div class="tarifs">
    <div class="tarif-table-wrap tarif-table-wrap_mod-styled">
    <table class="tarif-table tarif-table_mod">
        <thead>
            <tr>    
                <th class="rate-table__th">
                    <span>
                        Операторы
                    </span>
                </th>
                <th class="rate-table__th">
                    <span>
                        МТС
                    </span>
                </th>
                <th class="rate-table__th">
                    <span>
                        МЕГАФОН
                    </span>
                </th>   
                <th class="rate-table__th">
                    <span>
                        ТЕЛЕ2/РОСТЕЛЕКОМ
                    </span>
                </th>   
                <th class="rate-table__th">
                    <span>
                        WI-FIRE
                    </span>
                </th>                                                   
            </tr>   
        </thead>    
        <tbody>
            <tr>
                <td class="rate-table__th">
                    Стоимость услуг <br>(руб/мес)
                </td>
                <td class="rate-table__td">
                    300 <i class="icon-rub"></i> / мес.
                </td>
                <td class="rate-table__td">
                    650 <i class="icon-rub"></i> / мес.
                </td>
                <td class="rate-table__td">
                    300 <i class="icon-rub"></i> / мес.
                </td>
                <td class="rate-table__td">
                    650 <i class="icon-rub"></i> / мес.
                </td>
            </tr>   
            <tr>
                <td class="rate-table__th">
                    Скорость
                </td>
                <td class="rate-table__td">
                    До 300 Мбит/с
                </td>
                <td class="rate-table__td">
                    До 300 Мбит/с
                </td>
                <td class="rate-table__td">
                    До 100 Мбит/с
                </td>
                <td class="rate-table__td">
                    До 100 Мбит/с
                </td>
            </tr>   
            <tr>
                <td class="rate-table__th">
                    Стоимость карты без комплекта
                </td>
                <td class="rate-table__td">
                    Не продаётся
                </td>
                <td class="rate-table__td">
                    Не продаётся
                </td>
                <td class="rate-table__td">
                    1000 <i class="icon-rub"></i> / мес.
                </td>
                <td class="rate-table__td">
                    1000 <i class="icon-rub"></i> / мес.
                </td>
            </tr>       
            <tr>
                <td class="rate-table__th">
                    Примечания
                </td>
                <td class="rate-table__td"> &nbsp;                                                      
                </td>
                <td class="rate-table__td"> &nbsp;                                                              
                </td>
                <td class="rate-table__td">     &nbsp;                                                      
                </td>
                <td class="rate-table__td">     &nbsp;                                                  
                </td>
            </tr>   
        </tbody>                                    
    </table>
</div>       
</div>

<ul class="connect-list">
    <li class="connect-list__item ">
        <a href="#" class="connect-list__link link1">
            <span>
                В частный дом
            </span>
        </a>
    </li>
    <li class="connect-list__item ">
        <a href="#" class="connect-list__link link2">
            <span>На дачу</span>

        </a>
    </li>
    <li class="connect-list__item ">
        <a href="#" class="connect-list__link link3">
            <span>В деревню</span>

        </a>
    </li>
    <li class="connect-list__item ">
        <a href="#" class="connect-list__link link4">
            <span>В офис</span>

        </a>
    </li>
</ul>             
</li>
<li class="service-d__item active">
  <div class="service-text">
    Отличное качество связи в любой точке вашего дома!
</div>

<div class="service-description">
    <div class="service-description__box">
        <ul class="service-description__list service-description__list-js">
            <li class="service-description__item">
                <a href="#" class="service-description__wrapper">
                    <img class="js-img-lazy" data-src="img/sl1.png" src="/" alt="">
                </a>
            </li>
            <li class="service-description__item">
                <a href="#" class="service-description__wrapper">
                    <img class="js-img-lazy" data-src="img/sl1.png" src="/" alt="">
                </a>
            </li>
            <li class="service-description__item">
                <a href="#" class="service-description__wrapper">
                    <img class="js-img-lazy" data-src="img/sl1.png" src="/" alt="">
                </a>
            </li>
        </ul>

    </div>
    <div class="service-description__block">
        <div class="service-block__left">
            <div class="service-block__title">
                Цена комплекта под ключ:
            </div>
            <div class="service-block__price">
                Цена:
                <span>
                    11 000
                </span>
            </div>
            <div class="service-block__price">
                Монтаж и пуско-наладка:
                <span>
                    4 900
                </span>
            </div>
            <div class="service-block__text">
                Данный комплект позволяет добиться сильного, устойчивого сигнала GSM сотовых операторов. Если у Вас плохо ловит телефон в доме или на участке, то этот комплект для Вас!
            </div>
        </div>
        <div class="service-block__right">
            <ul class="service-block__list">
                <li class="service-block__item">
                    Активный усилитель GSM 900
                </li>
                <li class="service-block__item">
                    Наружная антенна YAGI
                </li>
                <li class="service-block__item">
                    Внутренняя антенна
                </li>
                <li class="service-block__item">
                    Кабельная сборка
                </li>
                <li class="service-block__item">
                    Подключение интернета
                </li>
            </ul>
        </div>
    </div>
</div>
</li>
</ul>
</div>
</section>
<section class="question">
    <div class="wrapper">
        <h3 class="title">
            ВОПРОС-ОТВЕТ
        </h3>
        <ul class="question-list">
            <li class="question-list__item ">
                <div class="question-list__name">
                    В чем преимущества систем видеонаблюдения, работающих по радиомосту?

                </div>
                <div class="question-list__answer">
                    Не следует, однако забывать, что дальнейшее развитие различных форм деятельности требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям.
                </div>
            </li>
            <li class="question-list__item">
                <div class="question-list__name">
                    Может ли частник зарегистрировать базовую станцию радиомоста?

                </div>
                <div class="question-list__answer">
                    Не следует, однако забывать, что дальнейшее развитие различных форм деятельности требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям.
                </div>
            </li>
            <li class="question-list__item">
                <div class="question-list__name">
                    Какую скорость передачи данных обеспечивает радиомост?

                </div>
                <div class="question-list__answer">
                    Не следует, однако забывать, что дальнейшее развитие различных форм деятельности требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям.
                </div>
            </li>
            <li class="question-list__item">
                <div class="question-list__name">
                    На каком максимальном расстоянии работает радиомост?

                </div>
                <div class="question-list__answer">
                    Не следует, однако забывать, что дальнейшее развитие различных форм деятельности требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям.
                </div>
            </li>
            <li class="question-list__item">
                <div class="question-list__name">
                    Может ли частник зарегистрировать базовую станцию радиомоста?

                </div>
                <div class="question-list__answer">
                    Не следует, однако забывать, что дальнейшее развитие различных форм деятельности требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям.
                </div>
            </li>
            <li class="question-list__item">
                <div class="question-list__name">
                    Какую скорость передачи данных обеспечивает радиомост?

                </div>
                <div class="question-list__answer">
                    Не следует, однако забывать, что дальнейшее развитие различных форм деятельности требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям.
                </div>
            </li>
            <li class="question-list__item">
                <div class="question-list__name">
                    На каком максимальном расстоянии работает радиомост?

                </div>
                <div class="question-list__answer">
                    Не следует, однако забывать, что дальнейшее развитие различных форм деятельности требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям.
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="region">
    <div class="wrapper">
        <h3 class="title">
            Регионы покдлючения
        </h3>
        <div class="region-pretitle">
            Список районов и городов уже подключенных к беспроводному безлимитному интернету
        </div>
        <form class='region-form'>
            <input type="text" class="region-form__inp" placeholder="Введите ваш город">
            <button class="region-form__btn"><i class="icon-24"></i></button>
        </form>
        <div class="region-block">


            <ul class="region-list">
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Апрелевка
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Бронницы
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Верея
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Видное
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Волоколамск
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Воскресенск
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Высоковск
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Голицыно
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Апрелевка
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Бронницы
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Верея
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Видное
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Волоколамск
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Воскресенск
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Высоковск
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Голицыно
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Апрелевка
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Бронницы
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Верея
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Видное
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Волоколамск
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Воскресенск
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Высоковск
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Голицыно
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Апрелевка
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Бронницы
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Верея
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Видное
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Волоколамск
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Воскресенск
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Высоковск
                    </a>
                </li>
                <li class="region-list__item">
                    <a href="#" class="region-list__link">
                        Голицыно
                    </a>
                </li>
            </ul>
            <a href="#" class="region-list__more region-list__more-js">
                <span class="region-span-1">
                Показать весь список</span>
                <span class="region-span-2">
                Скрыть весь список</span>
                <i class="icon-arr-down"></i>


            </a>
        </div>
    </div>
</section>
<section class="order" id='nav-form'>
    <div class="wrapper">
        <h3 class="title">
            Остались вопросы ? Задайте их нам!
        </h3>
        <div class="scheme-box">
            <div class="scheme-box__pict">

            </div>
            <form class="scheme-box__form">
                <h5 class="scheme-form__title">
                    <span>ОСТАВЬТЕ ЗАЯВКУ НА БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ!</span>
                    <i class="icon-13">
                        <span class="path2"></span>
                    </i>
                </h5>
                <div class="scheme-form__text">
                    Просто заполните форму, указав имя и контактные данные, нажмите кнопку и мы перезвоним в течении получаса
                </div>
                <div class="scheme-form__box">
                    <input type="text" placeholder="Имя*">
                </div>
                <div class="scheme-form__box">
                    <input type="tel" class="tel-js" placeholder='+7 (___) ___ - __ - __*'>
                </div>
                <div class="scheme-form__box">
                    <input type='email' placeholder="Email">
                </div>
                <div class="scheme-form__box">
                    <select class='order-form__select order-form__select-js' data-placeholder='Выбрать регион'>
                        <option></option>
                        <option>регион 1</option>
                        <option>регион 2</option>
                        <option>регион 3</option>
                        <option>регион 1</option>
                        <option>регион 2</option>

                    </select>
                </div>

                <div class='scheme-form__checkbox'>
                    <input type="checkbox" id="check2" name="check" />
                    <label for="check2">
                        <span>
                            Я принимаю
                            <a href="" class="form-link">

                                Условия политики конфиденциальности
                            </a>
                        </span>
                    </label>
                </div>
                <button class="btn-green sheme-form__btn">Оставить заявку</button>
            </form>
        </div>
    </div>
</section>
-->