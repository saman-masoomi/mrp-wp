<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
// Do not delete these lines
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
 
    if ( post_password_required() ) { ?>
در حال حاضر نوشته دارای کلمه عبور می باشد و دیدگاه ها بسته شده است
<?php
        return;
    }
?>
<?php
function custom_comment_fun($comment, $args, $depth) {
$GLOBALS['comment'] = $comment;
if ($comment->user_id == 1)
$oddcomment = "";
else
$oddcomment = "comment";
?><div class="comment-post">
<div class="<?php echo $oddcomment; ?><?php if ($comment->user_id == 1) { echo 'acomment'; } ?>">
<div id="comment-<?php comment_ID() ?>">
<p class="comment-author"><?php comment_author(); ?></p>
</div>
<?php if ($comment->comment_approved == '0') : ?>
<?php _e('دیدگاه شما در حال بررسی نویسنده نوشته می باشد. صبور باشید...') ?>
<?php endif; ?>
<div class="comment-content">
<?php comment_text(); ?>
</div>
<p class="comment-answer"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></p>
</div>
</div>
<?php
  // Do not include the </div> tag.
}
?>

<?php if ( have_comments() ) : ?>

<?php previous_comments_link() ?>
<?php next_comments_link() ?>
  
<?php wp_list_comments('type=comment&avatar_size=30&callback=custom_comment_fun'); ?>
<?php else : // this is displayed if there are no comments so far ?>
<?php if ('open' == $post->comment_status) : ?>
<?php else : // comments are closed ?>
در حال حاضر دیدگاه ها برای این نوشته بسته شده است
<?php endif; ?>
<?php endif; ?>
 
<?php if ('open' == $post->comment_status) : ?>
<div align="center" id="respond">
<?php cancel_comment_reply_link(); ?>
</div>
 
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
شما باید برای ارسال دیدگاه به این نوشته در سایت یا بلاگ وردپرس ثبت نام کرده باشید
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
شرایط ارسال دیدگاه برای کاربران عضو سایت یا بلاگ وردپرس
<?php else : ?>
شرایط ارسال دیدگاه برای کاربران غیرعضو سایت یا بلاگ وردپرس
<div align="center">
<input type="text" align="center" name="author" id="author" dir="rtl" placeholder=" نام و نام خانوادگی " tabindex="1">
<input type="text" align="center" name="email" id="email" dir="ltr" placeholder=" E-mail " tabindex="2">
<input type="text" align="center" name="url" id="url" dir="ltr" placeholder=" http:// " tabindex="3">
</div>
<?php endif; ?>
<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
 
 
<textarea rows="7" align="center" maxlength="1000" name="comment" id="comment" placeholder=" دیدگاه را اینجا بنویسید ... " tabindex="4"></textarea>
</br>
<input name="submit" type="submit" id="submit" tabindex="5" value=" ارسال دیدگاه ... ">
 
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>
 
</form>
<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>