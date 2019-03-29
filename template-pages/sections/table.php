<section class="rate">
	<div class="wrapper">
		<div class="rate-top">
			<h3 class="title"><?=get_sub_field('title')?></h3>
		</div>
		<div class="tarif-table-wrap">
			<?php

			$table = get_sub_field('item');

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

					$count = 0;

					echo '<tr>';

					foreach ( $tr as $td ) {

						$count++;
						$i = ($count===1) ? "th" : "td";
						echo '<td class="rate-table__'.$i.'">';
						echo str_replace('Р', '<i class="icon-rub"></i>', $td['c']);
						echo '</td>';
					}

					echo '</tr>';
				}

				echo '</tbody>';

				echo '</table>';
			}

			?>
		</div>
<!--		</div>-->
	</div>
</section>