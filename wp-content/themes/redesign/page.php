<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id='maincol'>
	<a id='phone' href='quote'><img src='<?php bloginfo('template_directory'); ?>/images/phone.gif'/></a>
	<div id='promo'>
		<img src='http://ambientcontrol.org.s13398.gridserver.com/wp-content/uploads/downtown_night.jpg' />
	</div>


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="content" id="page-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>


</div>
<div class='clear'></div>
<?php get_footer(); ?>
