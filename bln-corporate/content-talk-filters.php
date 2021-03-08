<?php
	$sel_event = isset($_REQUEST["evnt"]) ? $_REQUEST["evnt"] : "all";
	$sel_year = isset($_REQUEST["yr"]) ? $_REQUEST["yr"] : "all";
	$sel_speaker = isset($_REQUEST["spkr"]) ? $_REQUEST["spkr"] : "all";
	$sel_topics = isset($_REQUEST["topics"]) ? explode(",", $_REQUEST["topics"]) : array();
	$sel_sort = isset($_REQUEST["sort"]) ? $_REQUEST["sort"] : "talkdate";
?>

<form id="filters">

	<div class="title clearfloat">
		<h4 class="fg-0">Event:</h4>
	</div>
	<?php
		$tag = '<div class="select-style"><select class="events">';
		$tag.= '<option value="all">All events</option>';

		$events = get_events();
		foreach($events as $key => $val) {
			$sel = ($key == $sel_event) ? " selected" : "";
			$tag.= '<option value="'.$key.'"'.$sel.'>'.$val.'</option>';
		}

		$tag.= '</select></div>';
		echo $tag;
	?>


	<div class="order-by clearfloat">
		<h4 class="fg-0">Year:</h4>
	</div>
	<?php
		$tag = '<div class="select-style"><select class="year">';
		$tag.= '<option value="all">All years</option>';

		$years = get_talk_years($sel_event);
		foreach($years as $year) {
			$sel = ($year == $sel_year) ? " selected" : "";
			$tag.= '<option value="'.$year.'"'.$sel.'>'.$year.'</option>';
		}

		$tag.= '</select></div>';
		echo $tag;
	?>


	<div class="order-by clearfloat">
		<h4 class="fg-0">Speaker:</h4>
	</div>
	<?php
		$tag = '<div class="select-style"><select class="speakers">';
		$tag.= '<option value="all">All speakers</option>';

		$speakers = get_talk_speakers($sel_event, $sel_year);
		foreach($speakers as $speaker) {
			$sel = ($speaker["id"] == $sel_speaker) ? " selected" : "";
			$tag.= '<option value="'.$speaker["id"].'"'.$sel.'>'.$speaker["name"].'</option>';
		}

		$tag.= '</select></div>';
		echo $tag;
	?>


	<div class="order-by clearfloat">
		<h4 class="fg-0">Topics:</h4>
		<p class="clear"><a id="clear-topics" class="<?php echo (empty($sel_topics) ? 'hide' : 'show'); ?>" href="javascript:void(0)">Clear</a></p>
	</div>

	<ul class="fg-0">
	<?php
		$topics = get_talk_topics($sel_event, $sel_year, $sel_speaker);
		foreach($topics as $topic) {
			$sel = in_array($topic["id"], $sel_topics) ? " checked" : "";

			echo '<li class="fg-0">';
			echo '<input type="checkbox" id="'.$topic["id"].'" name="'.$topic["id"].'" value="'.$topic["id"].'"'.$sel.'/>';
			echo '<label for="'.$topic["id"].'"><strong>'.$topic["name"].'</strong> <span class="">('.$topic["count"].')</span></label>';
			echo '</li>';
		}
	?>
	</ul>


	<div class="order-by clearfloat">
		<h4 class="fg-0">Sort by:</h4>
	</div>
	<ul class="fg-0">
		<li class="fg-0">
			<input type="radio" id="talkdate" name="sort" value="talkdate" <?php echo ($sel_sort == "talkdate") ? "checked" : ""; ?>/>
			<label for="talkdate"><strong>Talk date</strong></label>
		</li>
		<li class="fg-0">
			<input type="radio" id="newest" name="sort" value="newest" <?php echo ($sel_sort == "newest") ? "checked" : ""; ?>/>
			<label for="newest"><strong>Newest</strong></label>
		</li>
		<li class="fg-0">
			<input type="radio" id="viewed" name="sort" value="viewed" <?php echo ($sel_sort == "viewed") ? "checked" : ""; ?>/>
			<label for="viewed"><strong>Most viewed</strong></label>
		</li>
	</ul>
 

</form>
