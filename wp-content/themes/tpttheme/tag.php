<?php 
get_header(); 
$args = array( 
	'tag' => "my tag" ,
	'order' => 'DESC',
    'orderby' => 'ID',
    'posts_per_page' => -1, 
);
$posttags = get_the_tags();
echo ('<pre>');
print_r($posttags);
echo ('</pre>');
?>
<section class="pad80">
    <div class="container">
        <div class="row">
        	<div class="col-md-12">
            <h1 class="archive-title" style="margin-bottom: 20px"><?php printf( __( 'Tag Archives: %s', 'pietergoosen' ), single_tag_title( '', false ) ); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="blog-post">
                <div class="col-md-6 col-xs-12">
                    <div class="blog-img">
                        <img src="/wp-content/themes/tpttheme/assets/images/blog/blog-large-1.jpg" class="img-responsive" alt="Blog Image">
                        <div class="img-overlay">
                            <a href="/blog-detail.php"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="post-content">
                        <div class="post-title">
                            <h3><a href="/blog-detail.php">Here's A Bunch Of Numbers</a></h3>
                        </div>
                        <div class="post-text">
                            <p>Concept of the number one, citizens of distant epochs. Intelligent beings Euclid not a sunrise but a galaxyrise, the sky calls to us intelligent beings Flatland, billions upon billions. With pretty stories for which there's little good evidence stirred by starlight, rogue circumnavigated! Tesseract Hypatia. Cambrian explosion, from which we spring. Cosmos another world hearts of the stars, radio telescope.</p>
                        </div>
                        <div class="post-footer">
                            <div class="post-meta">
                                
                            </div>
                            <div class="read-more">
                                <a href="/blog-detail.php" class="btn-read-more">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
