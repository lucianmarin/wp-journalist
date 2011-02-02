<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content">

<h2>Archives</h2>

<div class="main">

<p>Complete archive of the blog's posts.</p>

<h3>Monthly:</h3>
<ul>
<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
</ul>

<h3>Topic:</h3>
<ul>
<?php wp_list_categories('orderby=name&show_count=1&title_li='); ?>
</ul>

<h3>Tag:</h3>
<?php wp_tag_cloud('order=ASC&orderby=name&number=0'); ?>

</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
