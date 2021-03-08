<?php	
	$sel_event = isset($_REQUEST["evnt"]) ? $_REQUEST["evnt"] : "all";
	$sel_topics = isset($_REQUEST["topics"]) ? explode(",", $_REQUEST["topics"]) : array();
	$sel_sort = isset($_REQUEST["sort"]) ? $_REQUEST["sort"] : "name";
?>


<form id="filters">

	<div class="title clearfloat">
		<h4 class="fg-0">Topics:</h4>
		<p class="clear"><a id="clear-topics" class="<?php echo (empty($sel_topics) ? 'hide' : 'show'); ?>" href="javascript:void(0)">Clear</a></p>
	</div>

	<ul class="fg-0">
	<?php
		$topics = get_speaker_topics($sel_event);
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
			<input type="radio" id="speaker" name="sort" value="speaker" <?php echo ($sel_sort == "name") ? "checked" : ""; ?>/>
			<label for="speaker"><strong>Speaker Name</strong></label>
		</li>

		<li class="fg-0">
			<input type="radio" id="newest" name="sort" value="newest" <?php echo ($sel_sort == "newest") ? "checked" : ""; ?>/>
			<label for="newest"><strong>Newest</strong></label>
		</li>
	</ul>

</form>


