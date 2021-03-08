
<?php

	$title_org = trim(get_field('speaker_title').', '.get_field('speaker_org'), ", ");

	$speaker_id = get_the_ID();
	$args = array(
		'post_type'	=> 'talk',
		'meta_query' => array(
			array(
				'key' => 'talk_speaker', 
				'value' => '"' . $speaker_id . '"',
				'compare' => 'LIKE'
			)
		)
	);

	$talks = new WP_Query($args);
	$num_talks = $talks->found_posts;

	if($num_talks == 0) {
		$num_speaker_talks = "";
		$link_text = "View profile";
	} else if($num_talks == 1) {
		$num_speaker_talks = "1 talk";
		$link_text = "View profile & talk";
	} else {
		$num_speaker_talks = $num_talks." talks";
		$link_text = "View profile & talks";
	}

	$image = wp_get_attachment_image_src(get_field('speaker_image', $speaker_id), 'thumbnail');
?>

<div class="fancy-item overflow">
	<a id="<?php echo $post->ID; ?>"></a>

	<div class="container-right">
		<p class="bk-2 beak beak-2"><?php the_title(); ?></p>
		
		<div class="right overflow">
			<div class="right-inner">
				<p class="dark"><strong><?php echo $title_org; ?></strong></p>
				<p class="dark"><strong><?php echo $num_speaker_talks; ?></strong></p>
				<p><a href="<?php the_permalink(); ?>"><?php echo $link_text; ?></a></p>
			</div>
		</div>
		<div class="left">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
			</a>
		</div>
	</div>

	<div class="container-left">
		<a href="<?php the_permalink(); ?>">
			<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
		</a>
	</div>

</div>
