<?php   /* меню сайта*/ ?>
<!-- navigation -->
<?php 



$itemId = get_the_ID(); 
	
	//echo $itemId; 


//	$catId = get_cat_ID();

//	echo $catId; 

?>
<div class="innermenubox">
	<div class="menu-box">
		<div class="headerbar">
			<div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger pl-1" id="open_nav">
				<i class="fas fa-bars"></i>
			</div>
		</div>
		<div class="main-header">
			<div class="side-navigation p-0 mt-4">
				<div class="menu-main-container">
					<ul id="menu-main" class="primary-menu">
					
					<?php if (is_home()): ?>	
					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item  current_page_item">
					<?php else: ?>
					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item">
					<?php endif;?>
						<a href="/" aria-current="page">ГЛАВНАЯ</a>
					</li>

					<?php if($itemId == '23'):?>
					<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item  current_page_item">
					<?php else:?>
					<li class="menu-item menu-item-type-post_type menu-item-object-page">
					<?php endif;?>	
						<a href="/?page_id=23">О НАС</a>
					</li>

					<?php if($itemId == '26'):?>
					<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item  current_page_item">
					<?php else:  ?>
					<li class="menu-item menu-item-type-post_type menu-item-object-page">
					<?php endif; ?>	
						<a href="/?page_id=26">СТАТЬИ</a>
					</li>
					
					<?php if($itemId == '28'):?>
					<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item  current_page_item">
					<?php else: ?>
					<li class="menu-item menu-item-type-post_type menu-item-object-page">
					<?php endif; ?>	
						<a href="/?page_id=28">КОНТАКТЫ</a>
					</li>
					</ul>
				</div>                  
			</div>
		</div>
  <amp-sidebar id="sidebar1" layout="nodisplay" side="left" class="delay-20 animated jackInTheBox">

		<div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0" class="close-sidebar mr-3 mt-2" id="close_nav">
			<i class="fas fa-times"></i>
		</div>
		<div class="side-navigation">
			<div class="menu-main-container">
				<ul id="menu-main-1" class="primary-menu">
					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item current_page_item">
						<a href="/" aria-current="page">ГЛАВНАЯ</a>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page">
						<a href="/?page_id=23">О НАС</a>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page">
						<a href="/?page_id=35">СТАТЬИ</a>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page">
						<a href="/?page_id=28">КОНТАКТЫ</a>
					</li>
				</ul>
			</div>
		</div>
  	</amp-sidebar>
	</div>
	<div class="clearfix"></div>
</div>

<!-- #navigation -->
