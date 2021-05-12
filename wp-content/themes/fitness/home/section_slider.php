<?php /**/ ?>
<style>
	.carousel-caption h2, h3 {line-height: 0.1;}
	.carousel-caption h2 { color: #9BD12E; }
</style>
<section id="slider" class="p-0">
	<div id="carouselExampleIndicators" class="carousel slide  carousel-fade " data-ride="carousel" data-interval="10000">
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item">
    		    <img src="<?php bloginfo('template_url'); ?>/img/home/slider1.webp" alt="I WALK SLOWLY BUT I NEVER WALK BACKWORD." title="#slidecaption1">
    			<div class="carousel-caption">
					<h2 class="font-weight-bold px-5">FITNESS</h2>
					<h2 class="font-weight-bold px-5">Инстинкт</h2>
					<h3 class="font-weight-bold mb-5">Твой инстинкт совершенства!</h3>	

				</div>
			</div>
            <div class="carousel-item active">
    		    <img src="<?php bloginfo('template_url'); ?>/img/home/slider2.webp" alt="I WALK SLOWLY BUT I NEVER WALK BACKWORD." title="#slidecaption2">
    			<div class="carousel-caption">
					<h2 class="font-weight-bold px-5">FITNESS</h2>
					<h2 class="font-weight-bold px-5">Инстинкт</h2>
					<h3 class="font-weight-bold mb-5">Твой инстинкт совершенства!</h3>	
				</div>
			</div>
           
            <ol class="carousel-indicators hidden-sm-down">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
				
            </ol>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon prev_icon" aria-hidden="true"></span>
			<span class="sr-only"></span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon next_icon" aria-hidden="true"></span>
			<span class="control_icon_bgcolor"></span>
			<span class="sr-only"></span>
		</a>
	</div>
	<div class="clearfix"></div>
</section>
