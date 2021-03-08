

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
	$('input[name=sort]:checked').val("speaker");
}


function refresh()
{
	var query = "";

	var topics = get_topics();
	if (topics != "") {
		query += ((query != "") ? "&" : "") + "topics=" + topics;
	}
	
	var sort = get_sort();
	if (sort != "speaker") {
		query += ((query != "") ? "&" : "") + "sort=" + sort;
	}

	window.location.href = window.location.protocol + "//" + window.location.host + "/speakers/" + ((query != "") ? "?" : "") + query;
}


$(document).ready(function() {

	$("#filters .events").change(function() {
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


