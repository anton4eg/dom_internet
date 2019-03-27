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

		if( get_row_layout() == 'main-slider__wrapper' && get_sub_field('show') ):
                get_template_part('template-pages/sections/main-slider__wrapper');
		endif;

		if( get_row_layout() == 'main-picture-list' && get_sub_field('show') ):
	            get_template_part('template-pages/sections/main-picture-list');
		endif;

        if( get_row_layout() == 'connect' && get_sub_field('show') ):
	            get_template_part('template-pages/sections/connect');
        endif;

		if( get_row_layout() == 'rate' && get_sub_field('show') ):
			get_template_part('template-pages/sections/rate');
		endif;

		if( get_row_layout() == 'scheme' && get_sub_field('show') ):
			get_template_part('template-pages/sections/scheme');
		endif;

		if( get_row_layout() == 'callback' && get_sub_field('show') ):
			get_template_part('template-pages/sections/callback');
		endif;

		if( get_row_layout() == 'equipment' && get_sub_field('show') ):
			get_template_part('template-pages/sections/equipment');
		endif;

		if( get_row_layout() == 'portfolio' && get_sub_field('show') ):
			get_template_part('template-pages/sections/portfolio');
		endif;

		if( get_row_layout() == 'service' && get_sub_field('show') ):
			get_template_part('template-pages/sections/service');
		endif;

    endwhile;

	get_template_part('template-parts/popups/header-footer');
	get_template_part('template-parts/popups/main-screen');

	echo '</main>';

	echo '<!-- CONTENT EOF -->';


endif;

?>


<!--
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