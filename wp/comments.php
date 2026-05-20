
						<?php if ( have_comments() ) : ?>
						<a name="comments"></a>
						<div class="blog__comments">
							<h2><?php comments_number( '0 Comments', '1 Comment:', '% Comments:' ); ?></h2>
							<?php
								wp_list_comments( array(
									'style'			=>	'div',
									'per_page'		=>	5,
									'avatar_size'	=>	100
								) );
							?>
						</div><!--close .blog__comments-->
						<?php endif; ?>
						
						<div class="blog__comment-form">
							<?php
								$fields =  array(
								  'author' =>
									'<p class="clearfix"><label for="author">' . __( 'Full Name', 'domainreference' ) . '</label> ' .
									( $req ? '<span class="required"></span>' : '' ) .
									'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
									'" size="30"' . $aria_req . ' /></p>',

								  'email' =>
									'<p class="clearfix"><label for="email">' . __( 'Email Address', 'domainreference' ) . '</label> ' .
									( $req ? '<span class="required"></span>' : '' ) .
									'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
									'" size="30"' . $aria_req . ' /></p>',
								);
								$comments_args = array(
									'title_reply'				=> 'Leave a comment:',
									'fields' 					=> apply_filters('comment_form_default_fields',$fields),
									'comment_field'				=> '<p class="clearfix"><label for="comment">' . _x( 'Comments', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
									'label_submit'				=> 'Add Comment',
									'class_submit'				=> 'section__button hvr-sweep-to-top',
									'comment_notes_before'		=> '',
									'comment_notes_after'		=> ''
								);
								comment_form($comments_args);
							?>
						</div><!--close .blog__comment-form-->