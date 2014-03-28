<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('You can not access this page directly!'); ?>  
<?php endif; ?>

<?php if(!empty($post->post_password)) : ?>
  	<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
	<div class="span4">
		<div class="entry drop-shadow curved margin-bottom">
			<p>This post is password protected. Enter the password to view comments.</p>
			<div class="stripes"></div>
		</div>
	</div>
  	<?php endif; ?>
<?php endif; ?>

<?php if($comments) : ?>
  	<ol class="comment-list">
    	<?php foreach($comments as $comment) : ?>
  		<li id="comment-<?php comment_ID(); ?>">
  			<div class="span4">
  			<div class="entry drop-shadow curved margin-bottom">
  				<div class="avatar">
					<?php echo get_avatar( '', 50, '', '' ); ?> 
				</div>
  				<div class="comment-meta">
					<h6><?php comment_author_link(); ?></h6>
					<p><?php echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
				</div>			
	  			<div class="comment-body">
	  			<?php if ($comment->comment_approved == '0') : ?>
	  				<p>Your comment is awaiting approval</p>
	  			<?php endif; ?>
	  			<?php comment_text(); ?>
	  			</div>
	  			<div class="stripes"></div>
  			</div>
  			</div>
  		</li>
		<?php endforeach; ?>
	</ol>
<?php else : ?>
	<div class="span4">
		<div class="entry drop-shadow curved margin-bottom">
			<p>No comments yet</p>
			<div class="stripes"></div>
		</div>
		
	</div>
<?php endif; ?>

<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
		<div class="respond span4">
			<h3 class="heading">LEAVE A COMMENT</h3>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				<?php if($user_ID) : ?>
					<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
				<?php else : ?>
				<div class="row-fluid">
					<div class="span6 margin-bottom">
						<label for="author">
							<strong>Name</strong>
							<?php if($req) echo "(required)"; ?>
						</label>
						<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
					</div>
					
					<div class="span6">
						<label for="email">
							<strong>Email</strong>
							<?php if($req) echo "(required)"; ?>
						</label>
						<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
					</div>
				</div>
				<div class="row-fluid margin-bottom">
					<div class="span12">
						<label for="url">
							<strong>Website</strong>
							<?php if($req) echo "(required)"; ?>
						</label>
						<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
					</div>
				</div>
				<?php endif; ?>
				<div class="row-fluid">
					<div class="span12">
						<label for="comment">
							<strong>Message</strong>
							<?php if($req) echo "(required)"; ?>
						</label>
						<p><textarea name="comment" id="comment" rows="10" tabindex="4"></textarea></p>
						<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
						<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
						<?php do_action('comment_form', $post->ID); ?>
					</div>
				</div>
			</form>
		</div>
	<?php endif; ?>
<?php else : ?>
	<div class="span8">
		<p>The comments are closed.</p>
	</div>
<?php endif; ?>
