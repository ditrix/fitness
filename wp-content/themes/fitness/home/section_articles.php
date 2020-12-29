<?php /* section_articles.php */ ?>

<!-- blog section -->
<section id="our_blog" class="section_bg_scroll" style="margin-top: 7%;">
  	<div class="innerlightbox">
    	<div class="container">
			<h2 class="pricing_brd">Статьи</h2>
			<div class="row">


				
    <?php   $home_postslist = get_posts( array( 'posts_per_page' => getMaxQueryReacords(), 'category'=>'blog' ) );
        foreach ( $home_postslist as $home_post ): ?>

        <?php 

              if(isArticle($home_post)):  ?>



        	<?php setup_postdata($home_post); ?>    
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="postbox">
						
					<div class="postpic">
						<div  class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
							<?php echo get_the_post_thumbnail( $home_post->ID) ?>
						</div>
						<div class="postbox-content">
							<h4 class="posttitle"><a href="<?php echo $home_post->guid; ?>"><?php echo $home_post->post_title;?></a></h4>
				      		
				       		<div class="posttext mt-3">
								<?php echo $home_post->post_excerpt; ?>
							</div>
							<div>
							</div>
					        <div class="read_more">
								<a class="theme_orange_button py-2 px-3 mt-3" href="<?php echo $home_post->guid; ?>">Подробнее...</a>
							</div>						      
					    </div>
				 	</div>
				 </div>

			</div>
		<?php 
			endif;
              $cnt++;
              if($cnt > getArticlesPerHome()){
                 break;
              }
		?>
    <?php endforeach; ?>
                   


			</div>
		</div>
	</div>
</section><!-- Template to show the content of page editor -->

