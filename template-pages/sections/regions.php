<section class="region">
	<div class="wrapper">
		<h3 class="title"><?=get_sub_field('title');?></h3>
		<div class="region-pretitle"><?=get_sub_field('desc');?></div>
		<div class="search">
            <form class="region-form" role="search" method="get" id="searchform" action="<?=home_url( '/' );?>">
                <input type="text" class="region-form__inp search-input" value="<?=get_search_query();?>" name="s" id="s" placeholder="Введите ваш город">
                <button class="region-form__btn"><i class="icon-24"></i></button>
            </form>


            <div class="region-block result-search">
                <div class="preloader ">
                    <div class="loader">
                        <img src="<?=get_bloginfo('template_directory');?>/assets/img/loader.gif"/>
                    </div>
                </div>
                <ul class="region-list result-search-list">
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
	</div>
</section>