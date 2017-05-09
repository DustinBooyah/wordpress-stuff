<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?>
<main>
		<div class="postarea_l">
	
			
			<!--The blog page template is currently set to show 5 posts.  Change showposts=5 to whatever number of posts you want to display.-->
			<!--Replace cat=1 with the Category ID you want to display in this section. See the README file to learn how to locate the Category ID-->
				<article>
			<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("cat=1&showposts=5&paged=$page"); while ( have_posts() ) : the_post() ?>
			
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<span><strong><?php the_time('F j, Y'); ?></strong> by <?php the_author_posts_link(); ?> &nbsp;<?php edit_post_link('(Edit)', '', ''); ?> </span> 
			<br>
			<span>Filed Under: <strong><?php the_category(', ') ?></strong> | Tagged: <strong><?php the_tags('') ?></strong></span>
				<p><?php the_content(__('[Read more]'));?></p>
		
			<span class="comment"><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
		
			</article>
				<hr>
			<?php endwhile; ?>
		
			<h6 class="text-right"><?php posts_nav_link(); ?></h6>
		
		</div>

<?php include(TEMPLATEPATH."/sidebar.php");?>
		
<!-- The main column ends  -->
</main>
<?php get_footer(); ?>
