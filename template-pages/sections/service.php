<section class="service">
	<div class="wrapper">
		<h3 class="title"><?=get_sub_field('title');?></h3>

        <?php
        if( get_sub_field('tabs') ):

        echo '<ul class="service-nav">';

        while ( has_sub_field('tabs') ) :

        if( get_row_layout() === 'carts' ): ?>
            <li class="service-nav__item">
                <div class="service-nav__box service-nav__box-js">
                    <div class="service-nav__img">
                        <i class="icon-22"></i>
                    </div>
                    <div class="service-nav__text"><?=get_sub_field('tab_name');?></div>
                </div>
            </li>
        <?php endif;

        if( get_row_layout() === 'tables' ): ?>
            <li class="service-nav__item">
                <div class="service-nav__box service-nav__box-js">
                    <div class="service-nav__img">
                        <i class="icon-21"></i>
                    </div>
                    <div class="service-nav__text"><?=get_sub_field('tab_name');?></div>
                </div>
            </li>
        <?php endif;

        if( get_row_layout() === 'sliders' ): ?>
            <li class="service-nav__item active">
                <div class="service-nav__box service-nav__box-js">
                    <div class="service-nav__img">
                        <i class="icon-20"></i>
                    </div>
                    <div class="service-nav__text"><?=get_sub_field('tab_name');?></div>
                </div>
            </li>
        <?php endif;

        endwhile;

        echo '</ul>';

        endif;

        if( get_sub_field('tabs') ):

        echo '<ul class="service-d__list">';

        while ( has_sub_field('tabs') ) :

        if( get_row_layout() === 'carts' ): ?>
            <li class="service-d__item">
                <div class="service-text"><?=get_sub_field('desc');?></div>
                <?php if(get_sub_field('cart')):?>
                <ul class="offers__list">
                    <?php while(has_sub_field('cart')):?>
                    <li class="offers__item">
                        <div class="offers__item-wrap">
                            <div class="offers-pic"><img class="js-img-lazy" data-src="<?=get_sub_field('img')['url'];?>" src="/" alt="<?=get_sub_field('img')['alt'];?>"></div>
                            <h4><?=get_sub_field('title');?></h4>
                        </div>
                        <div class="offers__item-wrap">
                            <div class="offers-price">
                                <div>Ценат от:</div>
                                <div><?=get_sub_field('price');?> <i class="icon-rub"></i></div>
                            </div>
                            <a href="#nav-form" class="btn-green">Подробнее</a>
                        </div>
                    </li>
                    <?php endwhile;?>
                </ul>
                <?php endif;?>
            </li>
        <?php endif;

        if( get_row_layout() === 'tables' ): ?>

            <li class="service-d__item">
                <div class="service-text"><?=get_sub_field('desc');?></div>
                <div class="tarifs">
                    <div class="tarif-table-wrap tarif-table-wrap_mod-styled">
                        <?php
                        $table = get_sub_field( 'table' );

                        if ( ! empty ( $table ) ) {

	                        echo '<table class="tarif-table tarif-table_mod">';

	                        if ( ! empty( $table['header'] ) ) {

		                        echo '<thead>';

		                        echo '<tr>';

		                        foreach ( $table['header'] as $th ) {

			                        echo '<th class="rate-table__th"><span>';
			                        echo $th['c'];
			                        echo '</span></th>';
		                        }

		                        echo '</tr>';

		                        echo '</thead>';
	                        }

	                        echo '<tbody>';

	                        foreach ( $table['body'] as $tr ) {

		                        echo '<tr>';

		                        $count = 0;

		                        foreach ( $tr as $td ) {

                                    echo ($count === 0) ? '<td class="rate-table__th">' : '<td class="rate-table__td">';
			                        echo str_replace( ' Р', '<i class="icon-rub"></i>', $td['c']);
			                        echo '</td>';

			                        $count++;
		                        }

		                        echo '</tr>';
	                        }

	                        echo '</tbody>';

	                        echo '</table>';
                        }
                        ?>
                    </div>
                </div>
                <?php if( get_sub_field('pages') ): ?>
                <ul class="connect-list">
                    <?php
                    while( has_sub_field('pages') ):

                    $page = get_sub_field('page');
                    $img = get_sub_field('img');
                    ?>
                    <li class="connect-list__item">
                        <a href="<?=$page['url'];?>" class="connect-list__link" style="background-image: url('<?=$img['url'];?>');" target="<?=$page['target'];?>">
                            <span><?=$page['title'];?></span>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </li>

        <?php endif;

        if( get_row_layout() === 'sliders' ): ?>

            <li class="service-d__item active">
                <div class="service-text"><?=get_sub_field('desc');?></div>
                <div class="service-description">
                    <?php
                    $blockLeft = get_sub_field('block_left');
                    $blockCenter = get_sub_field('block_center');
                    $blockRight = get_sub_field('block_right');
                    ?>
                    <div class="service-description__box">
                        <?php if( $blockLeft['imgs'] ): ?>
                        <ul class="service-description__list service-description__list-js">
                            <?php foreach ( $blockLeft['imgs'] as $imgs ): ?>
                            <li class="service-description__item">
                                <a href="javascript:void(0);" class="service-description__wrapper">
                                    <img class="js-img-lazy" data-src="<?=$imgs['img']['url'];?>" src="/" alt="<?=$imgs['img']['alt'];?>">
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <div class="service-description__block">
                        <?php if( $blockCenter ): ?>
                        <div class="service-block__left">
                            <div class="service-block__title"><?=$blockCenter['title'];?></div>
                            <div class="service-block__price"><?=$blockCenter['price'];?></div>
                            <div class="service-block__price"><?=$blockCenter['price2'];?></div>
                            <div class="service-block__text"><?=$blockCenter['desc'];?></div>
                        </div>
                        <?php endif; ?>
                        <div class="service-block__right">
                            <?php if( $blockRight ): ?>
                            <ul class="service-block__list">
                            <?php foreach( $blockRight['list'] as $list ): ?>
                                <li class="service-block__item"><?=$list['title'];?></li>
                            <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </li>

        <?php endif;

        endwhile;

        echo '</ul>';

        endif; ?>
	</div>
</section>