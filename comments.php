<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
// Do not delete these lines 

    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
 
    if ( post_password_required() ) { ?>
 نوشته دارای کلمه عبور می باشد و دیدگاه ها بسته شده است
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
<?php _e('<div class="comment-family">دیدگاه شما پس از تائید منتشر میشود ...</div>') ?>
<?php endif; ?>
<div class="comment-content">
<?php comment_text(); ?>
</div>
<p class="comment-answer"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></p>
</div>
</div>
<?php
}
?>

<?php if ( have_comments() ) : ?>

<?php previous_comments_link() ?>
<?php next_comments_link() ?>
  
<?php wp_list_comments('type=comment&avatar_size=30&callback=custom_comment_fun'); ?>
<?php else : // this is displayed if there are no comments so far ?>
<?php if ('open' == $post->comment_status) : ?>
<?php else : // comments are closed ?>
<div class="comment-family">در حال حاضر دیدگاه ها برای این نوشته بسته شده است</div>
<?php endif; ?>
<?php endif; ?>
 
<?php if ('open' == $post->comment_status) : ?>
<div align="center" id="respond">
<?php cancel_comment_reply_link(); ?>
</div>
 
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<div class="comment-family">
برای ارسال دیدگاه باید وارد نام کاربری خود شوید.
</div>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
<div class="comment-family"><br>
از طریق فرم زیر دیدگاه خود را ارسال نمایید :
</div>
<?php else : ?><br>
<div class="comment-family">
شما وارد نشده اید. لطفا وارد شوید یا از طریق فرم زیر دیدگاه خود را ارسال نمایید :
    </div>
<div class="form-group">
    <br>
    <input type="text" name="author" class="form-control" id="author" placeholder="نام و نام خانوادگی" dir="rtl" tabindex="1"><br> 
    <input type="email" name="email" class="form-control" id="email" placeholder="ایمیل" dir="rtl" tabindex="2"> <br>
</div>
<?php endif; ?>
<br>
<textarea class="form-control" rows="3" maxlength="1000" name="comment" id="comment" tabindex="3" placeholder="دیدگاه خود را اینجا بنویسید ...."></textarea><br>
<div class="comment-family">
<button name="submit" type="submit" id="submit" tabindex="4" class="btn btn-success">ارسال دیدگاه</button>
</div>
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>

</form>
<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>