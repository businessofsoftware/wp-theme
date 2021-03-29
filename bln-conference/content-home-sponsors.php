<?php
	
	$event = get_event();

	$event_type = get_field("event_type", $event->ID);

	$g = get_field("event_gold_sponsors", $event->ID);
	$s = get_field("event_silver_sponsors", $event->ID);
	$b = get_field("event_bronze_sponsors", $event->ID);
	$m = get_field("event_media_sponsors", $event->ID);

	if(!empty($g) || !empty($s) || !empty($b) || !empty($m) ) {
		if(($event_type == 'bosuk') || ($event_type == 'bos')) {
			get_template_part('content', 'supporters');
		}
		else {
    		get_template_part('content', 'sponsors');
    	}
    }


?>

