$(function() {

	$(".datepicker").datepicker({format:'yyyy-mm-dd'});
	$('.time').clockface({format: 'HH:mm'});

	$.extend($.tablesorter.themes.bootstrap, {
		table      : 'table table-bordered',
		header     : 'bootstrap-header', // give the header a gradient background
		footerRow  : '',
		footerCells: '',
		icons      : '', // add "icon-white" to make them white; this icon class is added to the <i> in the header
		sortNone   : 'fa fa-sort',
		sortAsc    : 'fa fa-chevron-up',
		sortDesc   : 'fa fa-chevron-down',
		active     : '', // applied when column is sorted
		hover      : '', // use custom css here - bootstrap class may not override it
		filterRow  : '', // filter row class
		even       : '', // odd row zebra striping
		odd        : ''  // even row zebra striping
	});
	$(".tablesorter").tablesorter({
		theme : "bootstrap",
		widthFixed: true,

		headerTemplate : '{content} {icon}', 
		widgets : [ "uitheme", "filter", "zebra" ],
		widgetOptions : {
			zebra : ["even", "odd"],
			filter_reset : ".reset"
		},
		headers: {
	    }
	})
});

$(document).ready(function(){
	$('.textarea').wysihtml5({
		"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
		"emphasis": true, //Italics, bold, etc. Default true
		"lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
		"html": true, //Button which allows you to edit the generated HTML. Default false
		"link": true, //Button to insert a link. Default true
		"image": false, //Button to insert an image. Default true,
		"color": false //Button to change color of font  
	});
});