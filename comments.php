<?php

$comment_form_args = array(
  'title_reply' => __( 'Write a response' ),
	'comment_field' =>
  '<div id="comments" class="form-group">
    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
  </div>',
  'fields' => array(
    'author' =>
    '<div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Your email address">
      <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone else.</small>
    </div>',
  'email' =>
    '<div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="author" name="author" aria-describedby="nameHelp" placeholder="Your name">
    </div>'),
  'class_submit' => 'btn btn-primary',
);

  comment_form($comment_form_args, get_the_ID());

?>

<?php if ( have_comments() ) : ?>
<div class="comment-list">
  <h3>Comments</h3>
  <?php
    wp_list_comments( array(
      'style' => 'div',
    ) );
  ?>
</div>
<?php endif ?>
