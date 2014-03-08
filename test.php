<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
require('./wordpress/wp-blog-header.php');
?>

<?php
$posts = get_posts('numberposts=10&order=ASC&orderby=post_title');
foreach ($posts as $post) : setup_postdata( $post ); ?>
<?php the_date(); echo "<br />"; ?>
<?php the_title(); ?>    
<?php the_excerpt(); ?> 
<?php
endforeach;
?>

<!--To insert a post-->
<?php wp_insert_post( $post, $wp_error ); ?> 

</body>
</html>