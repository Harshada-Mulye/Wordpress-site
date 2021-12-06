<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
            <div id="primary" class="col-xs-12 col-md-9">
            <h1>Blog</h1>
      
 <?php $the_query = new WP_Query( array( 'post_type' => 'post' ) );
// The Loop
if ( $the_query->have_posts() ) {
 while ( $the_query->have_posts() ) {
 $the_query->the_post();
?>
  <article id="<?php the_id(); ?>">
<img src="<?php echo get_the_post_thumbnail_url();?>" alt="picture1">
<h2 class="title">
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
 <?php echo '<ul class="meta">';
 echo ' <li>
     <i class="fa fa-calendar"></i>';
    the_date(); 
     echo ' </li>
 <li>
     <i class="fa fa-user"></i> <a href="#">';
     the_author();
     echo '</a>
 </li>
<li>
     <i class="fa fa-tag"></i>  </li>
     <li class="list-category"><a href="#"> ';
    the_category();
     echo '</a> </li>

</ul>';
echo '<p>';
 the_content();  
 echo '</article></p></br></br>';
 }
} else {
 // no posts found
} ?> 


<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
</div>
<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<label class="screen-reader-text">Sök efter:</label>
												<input type="text">
												<input type="submit" value="Sök">
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
                                    <?php dynamic_sidebar( 'primary' ); ?>
									</li>
								</ul>
							</div>
						</aside>
</div>
</div>
</section>
</main>
<?php get_footer ();?>