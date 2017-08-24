<?php /* Template Name: Reservations */ ?>
<?php include(TEMPLATEPATH."/header.php");?>


<main>			

  <div class="postarea_l">

	<?php /*?>

	<?php include(TEMPLATEPATH."/breadcrumb.php");?><?php */?>

     	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

     	<h1><?php the_title(); ?></h1>

      	<?php the_content(__('Read more'));?>

      	<?php endwhile; else: ?>

      	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

	
</div>



     <?php include(TEMPLATEPATH."/sidebar.php");?>



  <!-- The main column ends  -->

</main>

<?php get_footer(); ?>