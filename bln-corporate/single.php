<?php

/*
 * Template for displaying all single posts
 */

get_header();

if(have_posts())
{
	while(have_posts())
	{
		the_post();
		get_template_part( 'content',  get_post_type());
	}
}

get_footer();

