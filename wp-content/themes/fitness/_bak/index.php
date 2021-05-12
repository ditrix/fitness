<?php get_header(); ?>
<div id="content">
	<?php if (have_posts()) :?>
		<?php $postCount=0; ?>
		<?php while (have_posts()) : the_post();?>
			<?php $postCount++;?>
	<div class="entry entry-<?php echo $postCount ;?>">
		<div class="entrytitle">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Ссылка на запись <?php the_title(); ?>"><?php the_title(); ?></a></h2> 
			<h3><?php the_time('d.m.Y') ?></h3>
		</div>
		<div class="entrybody">
			<?php the_content('Читать полностью &raquo;'); ?>
		</div>
		
		<div class="entrymeta">
		<div class="postinfo">
			<span class="postedby">Автор<a href="http://www.wptheme.us" title="Темы для Wordpress">:</a> <?php the_author() ?></span>
			<span class="filedto">Рубрики<a href="http://www.wptheme.us" title="Темы для Wordpress">:</a> <?php the_category(', ') ?> <?php edit_post_link('Редактировать', ' | ', ''); ?></span>
		</div>
		<?php comments_popup_link('Нет комментариев &#187;', '1 Комментарий &#187;', 'Комментарии (%) &#187;', 'commentslink'); ?>
		</div>
		
	</div>
	<div class="commentsblock">
		<?php comments_template(); ?>
	</div>
	<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Раньше') ?></div>
			<div class="alignright"><?php previous_posts_link('Позже &raquo;') ?></div>
		</div>
		
	<?php else : ?>

		<h2>Не найдено</h2>
		<div class="entrybody">Извините, но у нас нет того, что Вы здесь ищете.</div>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>