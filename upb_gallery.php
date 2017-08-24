<?php /* Template Name: upb_gallery */ ?>

<?php get_header(); ?>
	<main>
 <div class="postarea">
		<?php /*?>
<?php include(TEMPLATEPATH."/breadcrumb.php");?><?php */?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     <h1><?php the_title(); ?></h1>
      <?php the_content(__('Read more'));?>
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>

	</main>
<!-- The main column ends  -->

<?php get_footer(); ?>