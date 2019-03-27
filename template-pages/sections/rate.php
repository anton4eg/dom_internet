<section class="rate">
	<div class="wrapper">
		<div class="rate-top">
			<h3 class="title"><?=get_sub_field('title');?></h3>
			<a href="" class="btn-white rate-top__btn rate-top__btn-js">
                <span class="rate-btn__box1">
                    <i class="icon-9"></i> <?=get_sub_field('btn1');?>
                </span>
				<span class="rate-btn__box2">
                    <i class="icon-arr-left"></i> <?=get_sub_field('btn2');?>
                </span>
			</a>
		</div>
		<?php if(get_sub_field('operators')): ?>
        <ul class="rate-list">
			<?php while(has_sub_field('operators')): $block = get_sub_field('block'); ?>
			<li class="rate-list__item">
				<a href="#" class="rate-list__link rate-list__link-js">
					<div class="follower-wrapper">
						<div class="follower-container">
							<div class="follower"></div>
						</div>
					</div>
					<div class="rate-list__img">
						<img class="js-img-lazy" data-src="<?=$block['icon']['url'];?>" src="/" alt="<?=$block['icon']['alt'];?>">
					</div>
					<?= ($block['name'])? '<div class="rate-list__name">'.$block['name'].'</div>':''; ?>
				</a>
			</li>
			<?php endwhile; ?>
        </ul>
        <ul class="rate-table__list">
	        <?php while(has_sub_field('operators')): $block_table = get_sub_field('block_table'); ?>
                <li class="rate-table__item">
	                <?php if( ! empty($block_table['color']) ): ?><div class="rate-table__name" style="background: <?=$block_table['color'];?>;"><?=$block_table['name'];?></div><?php endif;?>
                    <div class="rate-table__wrapper">
                   <?php

                    $table = $block_table['table'];

                    if ( ! empty ( $table ) ) {

                    echo '<table class="rate-table">';

                        if ( ! empty( $table['header'] ) ) {

                           echo '<thead>';

                           echo '<tr class="rate-table__tr">';

                           foreach ( $table['header'] as $th ) {

                               echo '<th class="rate-table__th">';
                               echo $th['c'];
                               echo '</th>';
                           }

                           echo '</tr>';

                           echo '</thead>';
                        }

                        echo '<tbody>';

                        foreach ( $table['body'] as $tr ) {

                           echo '<tr class="rate-table__tr">';

                           foreach ( $tr as $td ) {

                               echo '<td class="rate-table__td">';
                               echo str_replace('Р', '<i class="icon-rub"></i>', $td['c']);
                               echo '</td>';
                           }

                           echo '</tr>';
                        }

                        echo '</tbody>';

                        if( ! empty( $block_table['desc'] ) ){

                            echo '<tfoot>';
                                echo '<tr>';
                                    echo '<td colspan="4" class="tfoor-text">'.$block_table['desc'].'</td>';
                                echo '</tr>';
                           echo '</tfoot>';
                        }

                        echo '</table>';
                   }

                    ?>
                    </div>
                </li>
	        <?php endwhile; ?>
        </ul>
		<?php endif; ?>

		<?php

		$table = get_sub_field('table');

		if ( ! empty ( $table ) ) { $count = 1;

			echo '<div class="rate-all">';

			echo '<table class="rate-all__table">';

			if ( ! empty( $table['header'] ) ) {

				echo '<tr class="rate-all__tr tr1">';

				foreach ( $table['header'] as $th ) {

					echo '<th class="rate-all__th">';
					echo $th['c'];
					echo '</th>';
				}

				echo '</tr>';

			}

			foreach ( $table['body'] as $tr ) {

				echo '<tr class="rate-all__tr tr'.++$count.'">';

				$countFirst = 0;

				foreach ( $tr as $td ) {

					$countFirst++;

					echo '<td class="rate-all__td">';
					echo ($countFirst === 1) ? '<span>' : '';
					echo str_replace('Р', '<i class="icon-rub"></i>', $td['c']);
					echo ($countFirst === 1) ? '</span>' : '';
					echo '</td>';
				}

				echo '</tr>';
			}

			echo '</table>';

			echo '</div>';
		}

		?>
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
        <?php if( get_sub_field('choose_desc') ): ?><div class="special-text mod"><?=get_sub_field('description');?></div><?php endif; ?>
	</div>
</section>