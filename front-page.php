<?php
get_header(); ?>

<div id="about">
<div class="inner">
<h2>Hello.</h2>
<h3>I am a <span class="upper">Boston-based</span></h3>
<h4>jack-of-all-trades type.</h4>
</div>
</div>

<div id="css">
<div class="inner">
<h2>I like to</h2>
<h3>make things</h3>
<h4>with</h4>
<h5>CSS</h5>
</div>
</div>

<div id="tech">
<div class="inner">
<h2>I'm proficient,</h2>
<h3>good, or great with:</h3>
<ul>
<li>
<div class="bar">
<div class="twelve-of-12">
HTML & CSS
</div>
</div>
</li>
<li>
<div class="bar">
<div class="six-of-12">
JavaScript
</div>
</div>
</li>
<li>
<div class="bar">
<div class="eight-of-12">
jQuery
</div>
</div>
</li>
<li>
<div class="bar">
<div class="ten-of-12">
SASS
</div>
</div>
</li>
<li>
<div class="bar">
<div class="eight-of-12">
Git
</div>
</div>
</li>
<li>
<div class="bar">
<div class="six-of-12">
JS Task Runners
</div>
</div>
</li>
<li>
<div class="bar">
<div class="eleven-of-12">
Wordpress
</div>
</div>
</li>
<li>
<div class="bar">
<div class="eight-of-12">
Hubspot
</div>
</div>
</li>
<li>
<div class="bar">
<div class="seven-of-12">
UX & UI
</div>
</div>
</li>
<li>
<div class="bar">
<div class="six-of-12">
Adobe CC
</div>
</div>
</li>
</ul>
</div>
</div>

<div id="made">
    <div class="head">
        <h2>Recent Projects</h2>
        <h3>(Hire me?)</h3>
    </div>
    <div class="cols">
    <?php
		$args = array( 'numberposts' => '9', 'post_status' => 'publish' );
		$recent_posts = wp_get_recent_posts( $args );
		foreach( $recent_posts as $recent ){
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($recent['ID']), false, '' );
			echo '<div class="col"><div class="homepost" style="background-image: url('. $src[0] .');"><div class="overlay"><div>';
			//echo '<div class="content">' . $recent["post_content"] . '</div>';
            echo '<div class="text"><h3>' . $recent["post_title"] .'</h3>';
            echo '<div class="excerpt">' . $recent["post_excerpt"] . '</div>';
			//echo '<span class="tiny">' . mysql2date('M j, Y', $recent["post_date"]) . '</span>';
			echo '</div></div></div></div></div>';
    } ?>
    </div>
</div>



<?php
get_footer(); ?>