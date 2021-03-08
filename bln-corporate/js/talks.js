


function get_event()
{
	return $("#filters .events").val();
}
function reset_events()
{
	$("#filters .events").val("all");
}


function get_year()
{
	return $("#filters .year").val();
}
function reset_year()
{
	$("#filters .year").val("all");
}




function get_speaker()
{
	return $("#filters .speakers").val();
}
function reset_speakers()
{
	$("#filters .speakers").val("all");
}



function get_topics()
{
	var topics = "";
	$('input[type=checkbox]').each(function () {
		if ($(this).is(':checked')) {
			topics += $(this).attr('id') + ",";
		}
	});
	return topics.slice(0,-1);
}
function reset_topics()
{
	$('#filters input[type=checkbox]').each(function () {
		if ($(this).is(':checked')) {
			$(this).removeAttr('checked');
		}
	});
}



function get_sort()
{
	return $('input[name=sort]:checked').val();
}
function reset_sort()
{
	$('input[name=sort]:checked').val("talkdate");
}




function refresh()
{
	var query = "";

	var evnt = get_event();
	if (evnt != "all") {
		query += "evnt=" + evnt;
	}
	
	var yr = get_year();
	if (yr != "all") {
		query += ((query != "") ? "&" : "") + "yr=" + yr;
	}

	var spkr = get_speaker();
	if (spkr != "all") {
		query += ((query != "") ? "&" : "") + "spkr=" + spkr;
	}

	var topics = get_topics();
	if (topics != "") {
		query += ((query != "") ? "&" : "") + "topics=" + topics;
	}
	
	var sort = get_sort();
	if (sort != "talkdate") {
		query += ((query != "") ? "&" : "") + "sort=" + sort;
	}

	window.location.href = window.location.protocol + "//" + window.location.host + "/talks/" + ((query != "") ? "?" : "") + query;
}




$(document).ready(function()
{
	$("#filters .events").change(function() {
		reset_year();
		reset_speakers();
		reset_topics();
		reset_sort();
		refresh();
	})

	$("#filters .year").change(function() {
		reset_speakers();
		reset_topics();
		reset_sort();
		refresh();
	})

	$("#filters .speakers").change(function() {
		reset_topics();
		reset_sort();
		refresh();
	})

	$("#clear-topics").click(function() {
		$("#clear-topics").fadeOut(500);
		reset_topics();
		refresh();
	})

	$("#filters input:checkbox").change(function() {
		refresh();
	})

	$("#filters input[name=sort]").change(function() {
		refresh();
	})
});




