
<div class="container"><h1>СТАТЬИ</h1></div>
<div id="full-width-blog">
	<div class="container">
    	<div class="middle-align row" id="content-vw">




	<?php 
			global $post;
			$postslist = get_posts( array( 'posts_per_page' => getMaxQueryReacords(), 'category'=>'blog' ) );
			foreach ( $postslist as $post ):
  				setup_postdata($post);
  				if(isArticle($post)):
  	?>
  			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="postbox">

					<div class="postpic">
						<?php the_post_thumbnail();   /*- выводит превью новости - картинку */  ?> 
						<div class="posticon-1">
							<div class="date_div p-1 mb-1">
						<?php the_date(); /* выводит дату новости    */ ?>  
							</div>
						</div>	
					</div>

					<div class="postbox-content">
						<h4 class="posttitle"><a href="<?php echo the_permalink(); ?>"><?php the_title();?></a></h4>
						<div class="posttext mt-3">
							<p><?php the_excerpt();?></p>
						</div>
					</div>	
					<div class="read_more">
							<a class="theme_orange_button py-2 px-3 mt-3" href="<?php echo the_permalink(); ?>">Подробнее...</a>
					</div>
				</div>
			</div>		

	<?php
			
			endif;	   
		endforeach; 
			wp_reset_postdata(); 
	?>

			<div class="navigation"></div>
			<div class="clearfix"></div>


		</div>
        <div class="clearfix"></div>
	</div><!-- EOF CONTAINER -->



</div>



<!-- спасение:    https://qna.habr.com/q/319387 -->

