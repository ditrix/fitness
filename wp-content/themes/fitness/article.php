<?php 

$curid = get_the_ID();

$current_post = get_post($curid);
setup_postdata($current_post);

?>
<div class="container">
	<h1><?php the_title(); ?></h1>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-7 middle-align">
			<div id="content-vw">
				<hr>
				<div class="feature-box">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="metabox py-1 my-1">
					<span class="entry-date"><?php the_date();?></span>
				</div>
				<hr>
				<?php the_content(); ?>
				<p>Te obtinuit ut adepto satis somno. Aliisque institoribus 
				iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad 
				diversorum peregrinorum in mane ut effingo ex contractus
				</p>
				<p>Te obtinuit ut adepto satis somno. Aliisque institoribus 
				iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad 
				diversorum peregrinorum in mane ut effingo ex contractus
				</p>
				<p>Te obtinuit ut adepto satis somno. Aliisque institoribus 
				iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad 
				diversorum peregrinorum in mane ut effingo ex contractus
				</p>
				<div class="row">
					<div class="col-lg-7 col-md-4 col-sm-12 col-12">
						<p class="font-weight-bold"></p>
						<div class="post_ctg font-weight-bold">
							<span class="mr-1">Вернуться: </span>
							<ul class="post-categories">
								<li><a href="/?page_id=26" rel="category tag">К списку статей</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-5 col-md-8 col-sm-12 col-12">
						<div class="share_icon p-0 m-0"> 
							<p class="socila_share p-0">
								<b>Поделиться: </b>
								<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</p>
						</div>
	               			 						
					</div>
				</div>
				<!-- comments -->				


			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-lg-4 col-md-5" id="sidebar">
			<aside id="recent-posts-2" class="widget widget_recent_entries">
				<h3 class="widget-title">Последние статьи</h3>
				<ul>
					<li><a href="article.html?no=1">лучшие упражнения для для тела</a></li>
					<li><a href="article.html?no=2">польза тренировок</a></li>
					<li><a href="article.html?no=3">как правильно питаться</a></li>
				</ul>
			</aside>
			<aside id="meta-2" class="widget widget_meta"><h3 class="widget-title">Метки</h3>
				<ul>
					<li><a href="#">Кардио</a></li>
					<li><a href="#">Бег</a></li>
					<li><a href="#">Прочее</a></li>
				</ul>
			</aside>	        
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- спасение  https://wp-kama.ru/function/get_post  -->

<?php





//echo $title; 
//print_r($post);


?>
