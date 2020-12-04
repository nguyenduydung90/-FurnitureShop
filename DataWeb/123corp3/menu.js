$(document).ready(function() {
	if(typeof mb_menus === "undefined") return false;

	$.each(mb_menus,function(el,position){
		var new_sidebar = "<nav id=\""+el+"\"><ul>", mm_label = $(".wm-module.wm-menu").find(".toggle-menu[href='#"+ el +"']").data("mn-title") || "Menu",
		sidebar_content = $(".wm-module.wm-menu").find(".data-menu-mobile[data-target='"+ el +"']").html();
		new_sidebar += sidebar_content + "</ul></nav>";
		$("body").prepend(new_sidebar);
		$(".wm-module.wm-menu" + el).find(".data-menu-mobile").remove();
		$("nav#"+el).mmenu({
			extensions	: [ 'effect-slide-menu', 'shadow-page', 'shadow-panels'/*, 'fullscreen' */],
			counters	: true,
			navbar 		: {
				title		: mm_label,
			},
			navbars		: [
				// {
				// 	position	: 'top',
				// 	content		: [ 'searchfield' ]
				// },
				{
					position	: 'top',
					content		: [
						'prev',
						'title',
						'close'
					]
				},
				// {
				// 	position	: 'bottom',
				// 	content		: [
				// 		'<a href="http://mmenu.frebsite.nl/wordpress-plugin.html" target="_blank">WordPress plugin</a>'
				// 	]
				// }
			]
		});
	});
});