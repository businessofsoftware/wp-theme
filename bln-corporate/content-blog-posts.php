
<article class="post excerpt">

	<?php
		if(has_post_thumbnail($post->ID) || get_field('blog_excerpt_image', $post->ID)) {
			get_template_part('content', 'blog-excerpt-thumbnail');
		} else if(has_excerpt($post->ID)) {
			get_template_part('content', 'blog-excerpt-quote');
		} else {
			get_template_part('content', 'blog-excerpt-plain');
		}
	?>

</article>

<div class="boilerplate" style="border-bottom: solid 10px rgb(238,94,48);">
	<h2 style="font-size: 28px; padding: 10px; margin:0 0 20px 0;">Subscribe for new talks and events</h2>

	<form action="https://businessofsoftware.org/2021/06/iterating-less-and-achieving-more/" method="POST" data-drip-embedded-form="71192469" data-drip-id="71192469">
	<div style="padding:0 10px;">
		<input type="email" id="drip-email" name="fields[email]" placeholder="Email address" style="padding: 10px; font-weight: bold;"><input type="submit" value="Get Updates" data-drip-attribute="sign-up-button" style="padding: 10px 20px; cursor:pointer;">
	</div>
	<input type="hidden" name="time_zone" value="Europe/London"><input type="hidden" name="url" value="https://businessofsoftware.org/2021/06/iterating-less-and-achieving-more/"><input type="hidden" name="page_title" value="Iterating less and achieving more - Business of Software"><input name="cleantalk_hidden_action" type="hidden" value="https://www.getdrip.com/forms/71192469/submissions"><input name="cleantalk_hidden_method" type="hidden" value="post"></form>

</div>