    <!-- BEGIN FOOTER -->

    <footer>

        <div class="header-bottom">
            <div class="header-bottom__wrapper">
            <?php

            if( get_field('footer-sub', 'option') ):

            $logo = get_field('logo','option');

            if( $logo ){
                $content = '<a href="'.get_home_url().'" class="header-bottom__logo">';
                $content .= '<img class="js-img-lazy" data-src="'.$logo['logo_footer']['url'].'" src="/" alt="'.$logo['logo_footer']['alt'].'">';
                $content .= '</a>';
                echo $content;
            }

            wp_nav_menu(array(
                'theme_location'    => 'main',
                'container'     => false,
                'menu_id'           => 'menu-main-footer',
                'menu_class'        => 'header-bottom__list',
                'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ));

            $callback = get_field('callback','option');


            echo '<div class="header-bottom__box">';

            if($callback && $callback['show']):

                $content = '<div class="header-bottom__call">';
                    $content .= ' <div class="header-call__img">';
                        $content .= '<i class="icon-tel"></i>';
                    $content .= '</div>';
                    $content .= '<div class="header-call__text">'.$callback['title'];
                        $content .= '<a href="tel:+'.set_clear_phone( $callback['phone'] ).'" class="header-call__tel">'.$callback['phone'].'</a>';
                    $content .= '</div>';
                $content .= '</div>';

                echo $content;

            endif;

            $working_hours = get_field('working_hours','option');

            if($working_hours && $working_hours['show']):

                $content = '<div class="header-bottom__workday">';
                $content .= '<b>'.$working_hours['time'].'</b>'.$working_hours['text'];
                $content .= '</div>';
                $content .= '<a href="#modal21" data-fancybox="modal" class="btn-white header-bottom__btn">Заказать звонок</a>';

                echo $content;

            endif;

            echo '</div>';

            endif;

            ?>
            </div>
        </div>
        <?php

        if( get_field('add_phone_region','option') && get_field('footer-phone', 'option') ):

	        $content = '<div class="footer-phones">';
	        $content .= '<div class="header-top__wrapper">';
	        $content .= '<ul>';

	        while( has_sub_field('add_phone_region','option') ):

		        $region = get_sub_field('region');
	            $phone = get_sub_field('phone');

                $content .= '<li><div>'.$region.'</div><a href="tel:+'.set_clear_phone($phone) .'">'.$phone.'</a></li>';

            endwhile;

	        $content .= '</ul></div></div>';

	        echo $content;

        endif;

        ?>
        <div class="header-top">
            <div class="header-top__wrapper">
                <div class="footer-text">
                    ДОМ-ИНТЕРНЕТ © <?= date("Y"); ?> <br>
                    Все права защищены.
                </div>
                <?php

                if(get_field('footer-social', 'option')):
                clean_custom_menus('header-1', 0, 0, 'header-top__menu', 0, 'header-menu__item', 0, 'header-menu__link');

                if( get_field('socials','options') ):

	                $content = '<ul class="social-list">';

	                $svg = '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                </svg>';

	                while( has_sub_field( 'socials', 'options') ):

		                if ( get_sub_field('choose') === 'viber' ) $icon = '<i class="icon-viber"></i>';
		                if ( get_sub_field('choose') === 'whatsapp' ) $icon = '<i class="icon-union"></i>';
		                if ( get_sub_field('choose') === 'tg' ) $icon = '<i class="icon-telegram"></i>';
		                if ( get_sub_field('choose') === 'skype' ) $icon = '<i class="icon-skype"></i>';
		                if ( get_sub_field('choose') === 'Instagram' ) $icon = $svg;
		                if ( get_sub_field('choose') === 'vk' ) $icon = '<i class="icon-vk"></i>';
		                if ( get_sub_field('choose') === 'fb' ) $icon = '<i class="icon-fb"></i>';

		                $content .= '<li class="social-list__item">';
		                $content .= '<a href="'.get_sub_field('link').'" class="social-list__link">';
		                $content .= $icon;
		                $content .= '</a>';
		                $content .= '</li>';

	                endwhile;

	                $content .= '</ul>';
	                echo $content;

                endif;

                endif;

                ?>
                <div class="footer-design">
                    Дизайн и разработка <br> <a href="http://sliceplanet.com/">«Slice Planet»</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- FOOTER EOF   -->


</div>

<div class="icon-load"></div>

<!-- BODY EOF   -->
<?php wp_footer(); ?>
</body>

</html>