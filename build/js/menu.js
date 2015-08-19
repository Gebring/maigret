(function() {
	$("a.m-burger").bind('touchstart mousedown', function(e) {
		e.preventDefault();

		$(".o-global__nav--mobile").fadeToggle(200);
		$(this).toggleClass("selected");
	});
})();



	