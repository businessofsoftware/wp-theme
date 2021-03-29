<?php
	global $num_programmes;

	$date = date("l jS F Y", strtotime(get_field('programme_date')));
?>

<section class="programme">

	<?php
		if($num_programmes > 1) {
			echo '<h1 class="bk-0 beak beak-0"><span class="title">'.get_the_title().' &ndash; </span><span class="date">'.$date.'</span></h1>';
		}
	?>

	<div class="container-inner overflow bk-white">
		<div class="content-main">
			<?php
				$session_ids = get_field('programme_sessions');
				
				if($session_ids) {
					foreach($session_ids as $session_id) {
						
						$post = get_post($session_id);
				 		setup_postdata($post);

				 		get_template_part('content', 'programme-session');
					}
					wp_reset_postdata();
				}
			?>
		</div>
	</div>
</section>
