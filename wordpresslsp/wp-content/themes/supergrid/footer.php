<!-- Load more pagination
================================================== -->
<!-- When this link is clicked, the blog will load this content dynamically -->

<nav id="page_nav">
   	<?php posts_nav_link(); ?>
</nav>

<!-- Footer
================================================== -->
<!-- Copyright & Social Buttons -->
 
	 <div class="footer">
	 	<ul>
			<li class="left"><?php the_field('copyright_text', 'option')?></li>	
				<?php if(get_field('footer_icons', 'option')) { ?>
					<?php while(has_sub_field('footer_icons', 'option')) { ?>
						
						<li class="social-button right"><a href="<?php the_sub_field('footer_icon_link')?>" rel="alternate" data-original-title="<?php the_sub_field('footer_icon_title')?>"><img height="24" src="<?php echo get_template_directory_uri(); ?>/img/icons/<?php the_sub_field('footer_icon')?>" alt="" /></a></li>
			
					<?php } ?>
				<?php } ?>
	 	</ul>
	 </div>

    <?php wp_footer(); ?> 
  </body>
</html>
