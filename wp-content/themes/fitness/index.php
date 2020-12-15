<?php get_header(); ?>

<?php if (is_home()): ?>
<section id="slider" class="p-0">
	<div id="carouselExampleIndicators" class="carousel slide  carousel-fade " data-ride="carousel" data-interval="10000">
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item">
    		    <img src="<?php bloginfo('template_url'); ?>/img/home/slider1.webp" alt="I WALK SLOWLY BUT I NEVER WALK BACKWORD." title="#slidecaption1">
    			<div class="carousel-caption">
					<p class="font-weight-bold mb-5">ДОБРО ПОЖАЛОВАТЬ В КЛУБ</p>
    			    <h2 class="font-weight-bold px-5">ОСНОВНОЙ ИНСТИНКТ</h2>
						
						<!--
						<a class="read-more font-weight-bold btn btn-primary py-3 px-3" href="#link">Подробнее...</a>
						-->
					<p class="font-weight-bold mb-5">мы работаем для Вас</p>	
				</div>
			</div>
            <div class="carousel-item active">
    		    <img src="<?php bloginfo('template_url'); ?>/img/home/slider2.webp" alt="I WALK SLOWLY BUT I NEVER WALK BACKWORD." title="#slidecaption2">
    			<div class="carousel-caption">
    			    <p class="font-weight-bold mb-5">ДОБРО ПОЖАЛОВАТЬ В КЛУБ</p>
    			    <h2 class="font-weight-bold px-5">ОСНОВНОЙ ИНСТИНКТ</h2>
					<p class="font-weight-bold mb-5">мі работаем для Вас</p>	
					<!--
    			    <a class="read-more font-weight-bold btn btn-primary py-3 px-3" href="#link">Подробнее...</a>
					-->
					
				</div>
			</div>
           <div class="carousel-item">
    		    <img src="<?php bloginfo('template_url'); ?>/img/home/slider3.webp" alt="I WALK SLOWLY BUT I NEVER WALK BACKWORD." title="#slidecaption3">
    			<div class="carousel-caption">
					<p class="font-weight-bold mb-5">ДОБРО ПОЖАЛОВАТЬ В КЛУБ</p>
    			    <h2 class="font-weight-bold px-5">ОСНОВНОЙ ИНСТИНКТ</h2>
					<p class="font-weight-bold mb-5">мі работаем для Вас</p>	
					<!--
    			    <a class="read-more font-weight-bold btn btn-primary py-3 px-3" href="#link">Подробнее...</a>
					-->
					
				</div>
			</div>
            <ol class="carousel-indicators hidden-sm-down">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
            </ol>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon prev_icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon next_icon" aria-hidden="true"></span>
			<span class="control_icon_bgcolor"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="clearfix"></div>
</section>
<section id="our-services" class="section_bg_scroll" style="">
    <div class="innerlightbox">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<div class="page-box" id="id-services-box-1">
						<div class="servc_bgcolr">
							<h4 class="mb-3 p-0"><a href="">ФИТНЕС</a></h4>
							<div class="box-image mb-3">
								<a href=""><img class="service-img" src="<?php bloginfo('template_url'); ?>/img/home/fitnessicon1.webp" alt=""></a>
							</div>
							<div class="row box-content text-center">
								<p class="mx-3 pb-3">Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita.</p>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<div class="page-box" id="id-services-box-2">
						<div class="servc_bgcolr">
							<h4 class="mb-3 p-0"><a href="">ЙОГА</a></h4>
							<div class="box-image mb-3">
								<a href=""><img class="service-img" src="<?php bloginfo('template_url'); ?>/img/home/fitnessicon2.webp" alt=""></a>
							</div>
							<div class="row box-content text-center">
								<p class="mx-3 pb-3">Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita.</p>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<div class="page-box" id="id-services-box-3">
							<div class="servc_bgcolr">
								<h4 class="mb-3 p-0"><a href="">ТРЕНАЖЕРЫ</a></h4>
								<div class="box-image mb-3">
									<a href=""><img class="service-img" src="<?php bloginfo('template_url'); ?>/img/home/fitnessicon3.webp" alt=""></a>
								</div>
								<div class="row box-content text-center">
									<p class="mx-3 pb-3">Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita.</p>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<div class="page-box" id="id-services-box-4">
						<div class="servc_bgcolr">
							<h4 class="mb-3 p-0"><a href="">МАССАЖ</a></h4>
							<div class="box-image mb-3">
								<a href=""><img class="service-img" src="<?php bloginfo('template_url'); ?>/img/home/fitnessicon4.webp" alt=""></a>
							</div>
							<div class="row box-content text-center">
								<p class="mx-3 pb-3">Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita.</p>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div><!-- eof row -->
		</div>
    </div>
</section>
<section id="about" class="section_bg_scroll" style="">
  	<div class="innerdarkbox" style="">
    	<div class="container">
      		<div class="row">
		      	<div class="col-md-8 col-sm-12 col-xs-12 abt_hdng">
		        	<h3 class="underline-small">О НАС</h3>
					<p class="abt_para mb-5">Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus</p>			
					<div class="row abt_img">				
						<div class="col-md-6 col-sm-12 col-xs-12">
							<img src="<?php bloginfo('template_url'); ?>/img/home/about1.webp" alt="">
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<img src="<?php bloginfo('template_url'); ?>/img/home/about2.webp" alt="">
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 abt_bg_clr">
		        	<h3>ГРАФИК РАБОТЫ</h3>
		        	<div class="days-box mt-2">
						<div class="row abt_brd mx-0">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<p class="abt_daybox_para">мы работаем для Вас по следующим дням</p>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 daybox_border my-2">
								<span class="day-title mb-1 schedule-day">ПОНЕДЕЛЬНИК</span> 
								<span class="day-time schedule-time">12:00-21:00</span>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 daybox_border my-2">
								<span class="day-title mb-1 schedule-day">ВТОРНИК</span> 
								<span class="day-time schedule-time">12:00-21:00</span>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 daybox_border my-2">
								<span class="day-title mb-1 schedule-day">СРЕДА</span> 
								<span class="day-time schedule-time">12:00-21:00</span>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 daybox_border my-2">
								<span class="day-title mb-1 schedule-day">ЧЕТВЕРГ</span> 
								<span class="day-time schedule-time">12:00-21:00</span>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 daybox_border my-2">
								<span class="day-title mb-1 schedule-day">ПЯТНИЦА</span> 
								<span class="day-time schedule-time">12:00-21:00</span>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 daybox_border my-2">
								<span class="day-title mb-1 schedule-day">СУББОТА</span> 
								<span class="day-time schedule-time">09:00-12:00</span>
							</div>
						</div>
		        	</div>
		    	</div>
		    </div>
    	</div>
  	</div>
</section>
<section id="gallery" class="section_bg_scroll" style="">
	<div class="innerlightbox">
		<div class="container">
			<h2 class="gall-brdr">ГАЛЕРЕЯ</h2>
			<p> </p>
			<div id="vw_gallery_963" class="vw_gallery_styling">
				<div class="vw_light_gallery">
					<ul class="vw_gallery_front">
						<li class="vw_gi_box">
							<div class="vw_gi_inner">
								<a class="item" href="img/home/services1.jpeg" rel="prettyPhoto[gallery_name]" title="services1"><img src="<?php bloginfo('template_url'); ?>/img/home/services1.jpeg" class="attachment-vw-gallery-image-medium size-vw-gallery-image-medium" alt="" loading="lazy" width="293" height="300">
									<div class="icon_overlay">
										<i class="fa fa-plus"></i>
									</div>
								</a>
							</div>
						</li>
						<li class="vw_gi_box">
							<div class="vw_gi_inner">
								<a class="item" href="img/home/services2.jpeg" rel="prettyPhoto[gallery_name]" title="services2"><img src="<?php bloginfo('template_url'); ?>/img/home/services2.jpeg" class="attachment-vw-gallery-image-medium size-vw-gallery-image-medium" alt="" loading="lazy" width="294" height="299">
									<div class="icon_overlay">
										<i class="fa fa-plus"></i>
									</div>
								</a>
							</div>
						</li>
						<li class="vw_gi_box">
							<div class="vw_gi_inner">
								<a class="item" href="img/home/services4.jpeg" rel="prettyPhoto[gallery_name]" title="services4"><img src="<?php bloginfo('template_url'); ?>/img/home/services4.jpeg" class="attachment-vw-gallery-image-medium size-vw-gallery-image-medium" alt="" loading="lazy" width="294" height="300">
									<div class="icon_overlay">
										<i class="fa fa-plus"></i>
									</div>
								</a>
							</div>
						</li>
						<li class="vw_gi_box">
							<div class="vw_gi_inner">
								<a class="item" href="img/home/services3.jpeg" rel="prettyPhoto[gallery_name]" title="services3"><img src="<?php bloginfo('template_url'); ?>/img/home/services3.jpeg" class="attachment-vw-gallery-image-medium size-vw-gallery-image-medium" alt="" loading="lazy" width="294" height="300">
									<div class="icon_overlay">
										<i class="fa fa-plus"></i>
									</div>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>				
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<section id="trainer" class="section_bg_scroll">
    <div class="innerdarkbox">
		<div class="container">
			<h2 class="trn_hdng pb-2">НАШИ ИНСТРУКТОРЫ</h2>
			<div class="clearfix"></div>
			<div class="row">
				<div class="video col-md-6 col-sm-12 col-xs-12">
				<iframe width="519" height="389" src="https://www.youtube.com/embed/rdzS43Pff1w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<!-- <embed src="<?php bloginfo('template_url'); ?>/img/home/rdzS43Pff1w.html" allowfullscreen="" width="100%" height="287"> -->
				</div>        	
				<div class="col-md-6 col-sm-12 col-xs-12 trainer-content">
					<div id="myCarousel" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
						<div class="carousel-inner">		
							<div class="carousel-item">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<img class="trainer-image" src="<?php bloginfo('template_url'); ?>/img/instructors/trainer2.jpg" alt="">
									</div>
									<div class="col-md-6 col-sm-6">
										<p>Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia</p>
										<h4>Иария Иванова</h4>
										<h6>Пилатес</h6>
										<div class="trainer-batch p-2">
											<a href="#">Подробнее...</a>
										</div>
										<div class="nav-box row p-1 my-3">
											<span data-slide="prev" class="btn-vertical-slider prev-tes">
												<span class="carousel-control-prev-icon trn_icon" aria-hidden="true"></span>
											</span> 
											<span data-slide="next" class="btn-vertical-slider next-tes">
												<span class="carousel-control-next-icon trn_icon" aria-hidden="true"></span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item active">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<img class="trainer-image" src="<?php bloginfo('template_url'); ?>/img/instructors/trainer1.jpg" alt="">
									</div>
									<div class="col-md-6 col-sm-6">
										<p>Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia</p>
										<h4>Иван Иванов</h4>
										<h6>Фитнес тренер</h6>
										<div class="trainer-batch p-2">
											<a href="trainer_1.html">ПОДРОБНЕЕ</a>
										</div>
										<div class="nav-box row p-1 my-3">
											<span data-slide="prev" class="btn-vertical-slider prev-tes">
												<span class="carousel-control-prev-icon trn_icon" aria-hidden="true"></span>
											</span> 
											<span data-slide="next" class="btn-vertical-slider next-tes">
												<span class="carousel-control-next-icon trn_icon" aria-hidden="true"></span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<img class="trainer-image" src="<?php bloginfo('template_url'); ?>/img/instructors/trainer3.jpg" alt="">
									</div>
									<div class="col-md-6 col-sm-6">
										<p>EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio.</p>
										<h4>Сергей Петров</h4>
										<h6>Gym Trainers</h6>
										<div class="trainer-batch p-2">
											<a href="trainer_3.html">ПОДРОБНЕЕ</a>
										</div>
										<div class="nav-box row p-1 my-3">
											<span data-slide="prev" class="btn-vertical-slider prev-tes">
												<span class="carousel-control-prev-icon trn_icon" aria-hidden="true"></span>
											</span> 
											<span data-slide="next" class="btn-vertical-slider next-tes">
												<span class="carousel-control-next-icon trn_icon" aria-hidden="true"></span>
											</span>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div><!-- eof trainers -->
    </div>
</section><!-- eof trainers section -->
<!-- prices section -->
<section id="pricing_plans" class="section_bg_scroll" style="">
  	<div class="innerlightbox">
    	<div class="container">
      		<h2 class="pricing_brd">ВЫБЕРИТЕ АБОНЕМЕНТ</h2>
      		<div class="plans-box">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="price-box">
							<div class="price-number">200</div>
							<div class="price-title">1 Месяц</div>
								<div class="box-content text-center price_subcontent">
									<p>Te obtinuit ut adepto satis somno.</p>
									<div class="clearfix"></div>
								</div>
								<div class="box-content text-center price_subcontent">
									<p>Te obtinuit ut adepto satis somno.</p>
									<div class="clearfix"></div>
								</div>
								<div class="box-content text-center price_subcontent">
									<p>Te obtinuit ut adepto satis somno.</p>
									<div class="clearfix"></div>
								</div>
								<div class="box-content text-center price_subcontent">
									<p>Te obtinuit ut adepto satis somno.</p>
									<div class="clearfix"></div>
								</div>
								<div class="read-moresec text-center mt-4">
									<div class="wow bounceInUp">
									<a class="r_button hvr-sweep-to-right" href="#link">ЗАКАЗАТЬ</a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
		                <div class="price-box">
			                <div class="price-number">400</div>
			                <div class="price-title">3 Месяца</div>
							<div class="box-content text-center price_subcontent">
						        <p>Te obtinuit ut adepto satis somno.</p>
						        <div class="clearfix"></div>
						    </div>
						    <div class="box-content text-center price_subcontent">
								<p>Te obtinuit ut adepto satis somno.</p>
								<div class="clearfix"></div>
						    </div>
						    <div class="box-content text-center price_subcontent">
						        <p>Te obtinuit ut adepto satis somno.</p>
						        <div class="clearfix"></div>
						    </div>
						    <div class="box-content text-center price_subcontent">
								<p>Te obtinuit ut adepto satis somno.</p>
						        <div class="clearfix"></div>
						    </div>
						    <div class="read-moresec text-center mt-4">
								<div class="wow bounceInUp">
									<a class="r_button hvr-sweep-to-right" href="#link">ЗАКАЗАТЬ</a>
								</div>
							</div>
		                  	<div class="clearfix"></div>
		                </div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
		                <div class="price-box">
			            	<div class="price-number">600</div>
			            	<div class="price-title">6 Месяцев</div>
						    <div class="box-content text-center price_subcontent">
						        <p>Te obtinuit ut adepto satis somno.</p>
						        <div class="clearfix"></div>
						    </div>
							<div class="box-content text-center price_subcontent">
								<p>Te obtinuit ut adepto satis somno.</p>
						        <div class="clearfix"></div>
						    </div>
							<div class="box-content text-center price_subcontent">
						        <p>Te obtinuit ut adepto satis somno.</p>
						        <div class="clearfix"></div>
						    </div>
							<div class="box-content text-center price_subcontent">
						        <p>Te obtinuit ut adepto satis somno.</p>
						        <div class="clearfix"></div>
						    </div>
							<div class="read-moresec text-center mt-4">
								<div class="wow bounceInUp">
									<a class="r_button hvr-sweep-to-right" href="#link">ЗАКАЗАТЬ</a>
								</div>
							</div>
							<div class="clearfix"></div>
		                </div>
		            </div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
		                <div class="price-box">
			            	<div class="price-number">1025</div>
			            	<div class="price-title">1 Год</div>
						    <div class="box-content text-center price_subcontent">
						        <p>Te obtinuit ut adepto satis somno.</p>
						        <div class="clearfix"></div>
						    </div>
							<div class="box-content text-center price_subcontent">
						        <p>Te obtinuit ut adepto satis somno.</p>
						        <div class="clearfix"></div>
						    </div>
							<div class="box-content text-center price_subcontent">
						        <p>Te obtinuit ut adepto satis somno.</p>
						        <div class="clearfix"></div>
						    </div>
							<div class="box-content text-center price_subcontent">
						        <p>Te obtinuit ut adepto satis somno.</p>
						        <div class="clearfix"></div>
						    </div>
							<div class="read-moresec text-center mt-4">
								<div class="wow bounceInUp">
									<a class="r_button hvr-sweep-to-right" href="#link">ЗАКАЗАТЬ</a>
								</div>
							</div>
		                	<div class="clearfix"></div>
		                </div>
		            </div>
				</div>
        		<div class="clearfix"></div>
      		</div>
    	</div>
  	</div>
</section><!-- eof prices section -->

<!-- reviews sevtion -->
<section id="clients" class="darkbox section_bg_scroll">
    <div class="innerdarkbox client_inner_box">
      	<div class="container">
	        <h2 class="pb-2">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h2>
			<div class="row">
				<div class="col-md-4 col-sm-6 testimonialwrapper-box mb-2">
					<div class="testimonial-box pb-2 mb-2">
						<blockquote>Все очень прекрасно. Я бодр, весел, здоров, силен и нагл. Ркомендую всем и каждому</blockquote>
					</div>
					<div class="row">
						<div class="col-md-4 col-6">
							<img class="client-img" src="<?php bloginfo('template_url'); ?>/img/home/client1.webp" alt="">
						</div>
						<div class="col-md-8 col-6 client-info">
							<div class="client_name">Иван Иванов</div>
							<div><small class="client-designation">Проект менеджер</small></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 col-sm-6 testimonialwrapper-box mb-2">
					<div class="testimonial-box pb-2 mb-2">
						<blockquote>Все очень прекрасно. Я бодр, весел, здоров, силен и нагл. Ркомендую всем и каждому</blockquote>
					</div>
					<div class="row">
						<div class="col-md-4 col-6">
							<img class="client-img" src="<?php bloginfo('template_url'); ?>/img/home/client2.webp" alt="">
						</div>
						<div class="col-md-8 col-6 client-info">
							<div class="client_name">Петр Иванов</div>
							<div><small class="client-designation">Менеджер продаж</small></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 col-sm-6 testimonialwrapper-box mb-2">
					<div class="testimonial-box pb-2 mb-2">
						<blockquote>Все очень прекрасно. Я бодр, весел, здоров, силен и нагл. Ркомендую всем и каждому</blockquote>
					</div>
					<div class="row">
						<div class="col-md-4 col-6">
							<img class="client-img" src="<?php bloginfo('template_url'); ?>/img/home/client3.webp" alt="">
						</div>
						<div class="col-md-8 col-6 client-info">
							<div class="client_name">Иван Сидорофф</div>
							<div><small class="client-designation">Супер менеджер</small></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
      	</div>
    </div>
</section><!-- eof reviews sevtion -->


<!-- calculate section -->
<section id="bmi" class="darkbox section_bg_scroll">
    <div class="innerdarkbox pb-0">
		<div class="container">
			<div class="row">
			  <div class="bmi-image col-md-1"></div> 
			  <div class="bmi-data col-md-10" style="; top: 9em;">
				<div class="row dhtmlgoodies_bmi_calculator">
					<div class="col-md-8 col-sm-8 calculator_form">
						<h2 class="h2n">КАЛЬКУЛЯТОР ИНДЕКСА МАССЫ</h2>
						<form name="bmi_calculator">
						  <div class="row bmi-calculator py-3">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<label for="bmi_weight">Вес (кг)</label>
								<input class="textInput" type="text" id="bmi_weight" name="bmi_weight" placeholder="значение...">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
							  <label for="bmi_height">Рост (см.)</label>
							  <input class="textInput" type="text" id="bmi_height" name="bmi_height" placeholder="значение...">
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12 text-center">
							  <input type="button" onclick="calculateBMI()" value="ИМТ КАЛЬКУЛЯТОР" class="bmi_button">
							</div>
							<div class="clearfix"></div>
						  </div>
						</form>
					</div>
					<div class="col-md-4 col-sm-4 bmi_result">ВАШ ИМТ
						<div id="bmi_results_graph">
							<div class="bmi_value">0.00</div>
							<p class="bmi_obese">(норм)</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clear"></div>
			  </div>
			</div>
		</div>
    </div>
</section><!-- eof  calculate section --> 

<!-- blog section -->
<section id="our_blog" class="section_bg_scroll" style="margin-top: 7%;">
  	<div class="innerlightbox">
    	<div class="container">
			<h2 class="pricing_brd">Статьи</h2>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="postbox">
						<div class="postpic">
				      		<img src="<?php bloginfo('template_url'); ?>/img/blog/blog1.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" width="600" height="400">
							<ul class="posticon-1">
								<li class="date_div p-1 mb-1">
									<span class="entry-date price pull-right">8 Sep</span>
								</li>
				      			<li class="comment_div">
									<span class="entry-comment price pull-right">0<i class="fa fa-comments ml-1"></i></span>
								</li>
							</ul>
				      	</div>
						<div class="postbox-content">
							<h4 class="posttitle"><a href="">ЛУЧШИЕ УПРАЖНЕНИЯ</a></h4>
				      		<ul class="meta_listing">
				          		<li class="auther mr-3"><i class="fa fa-user"></i>D@veloper</li>
				          	</ul>
				       		<div class="posttext mt-3">
								Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli
								 gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut 
								effingo ex contractus
							</div>
					        <div class="read_more">
								<a class="theme_orange_button py-2 px-3 mt-3" href="article.html?no=1">Подробнее...</a>
							</div>						      
					    </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="postbox">
					    <div class="postpic">
							<img src="<?php bloginfo('template_url'); ?>/img/blog/blog2.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" width="600" height="400">
							<ul class="posticon-1">
								<li class="date_div p-1 mb-1">
									<span class="entry-date price pull-right">8 Sep</span>
								</li>
					      		<li class="comment_div">
									<span class="entry-comment price pull-right">0<i class="fa fa-comments ml-1"></i></span>
								</li>
					        </ul>
					    </div>
					    <div class="postbox-content">
							<h4 class="posttitle"><a href="news.html">ЛУЧШИЕ КАРДИО УПРАЖНЕНИЯ</a></h4>
					      	<ul class="meta_listing">
					        	<li class="auther mr-3"><i class="fa fa-user"></i>D@veloper</li>
					        </ul>
					       	<div class="posttext mt-3">Te obtinuit ut adepto satis somno. 
								Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, 
								quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus
							</div>
							<div class="read_more">
								<a class="theme_orange_button py-2 px-3 mt-3" href="article.html?no=2">Подробнее...</a>
							</div>
					    </div>
					  </div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="postbox">
						<div class="postpic">
					    	<img src="<?php bloginfo('template_url'); ?>/img/blog/blog3.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" width="600" height="400">
							<ul class="posticon-1">
								<li class="date_div p-1 mb-1">
									<span class="entry-date price pull-right">8 Sep</span>
								</li>
					    		<li class="comment_div">
									<span class="entry-comment price pull-right">0<i class="fa fa-comments ml-1"></i></span>
								</li>
							</ul>
						</div>
						<div class="postbox-content">
							<h4 class="posttitle"><a href="news.html">ЛУЧШИЕ УПРАЖНЕНИЯ ДЛЯ ТЕЛА</a></h4>
					    	<ul class="meta_listing">
					      		<li class="auther mr-3"><i class="fa fa-user"></i>D@veloper</li>
					      	</ul>
					    	<div class="posttext mt-3">Te obtinuit ut adepto satis somno. 
								  Aliisque institoribus iter deliciae vivet vita. Nam exempli 
								  gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut 
								  effingo ex contractus
							</div>
							<div class="read_more"><a class="theme_orange_button py-2 px-3 mt-3" href="article.html?no=3">Подробнее...</a></div>						      
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- Template to show the content of page editor -->
<?php else:
	$postid = get_the_ID();
	switch ($postid) {
		case '23':
			$current_template = locate_template('about.php');
			break;
		case '26':
			$current_template = locate_template('statiy.php');
			break;		
		case '28':
			$current_template = locate_template('contact.php');
			break;			
		default:
			$current_template = locate_template('404.php');
			break;
	}
	
	load_template($current_template);		

 endif;?>

<?php get_footer(); ?>