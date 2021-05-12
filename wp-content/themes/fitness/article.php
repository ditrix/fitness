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
				<?php 
					$postslist = get_posts( array( 'posts_per_page' => getMaxQueryReacords(), 'category'=>'blog' ) );
					foreach ( $postslist as $post ):
						if(isArticle($post)):
  						setup_postdata($post);
				?>		
						<li><a href="<?php echo the_permalink(); ?>"><?php the_title();?></a></li>
				<?php 
						endif;	
					endforeach;
				?>
				</ul>


			</aside>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>

