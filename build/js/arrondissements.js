(function() {
	
	$(".m-section__search").bind('touchstart mousedown', function(e) {
		e.preventDefault();

		if ($(this).hasClass('unfolded')){

		} else {

			$(".arrondissements-list").fadeToggle(function(){
				(this).show();	
			});
		}

		close();

	});

	$(".m-section__search").hover(function() {

		$(this).toggleClass('unfolded');
		
		$(".arrondissements-list").fadeToggle(function(){
			(this).show;	
		});

		close();

	});

	$(".list-item").hover(function(){
		switch(this.id) {

			case "a-one":
			$(".one").toggleClass('highlighted');
			break;

			case "a-two":
			$(".two").toggleClass('highlighted');
			break;

			case "a-three":
			$(".three").toggleClass('highlighted');
			break;

			case "a-four":
			$(".four").toggleClass('highlighted');
			break;

			case "a-five":
			$(".five").toggleClass('highlighted');
			break;

			case "a-six":
			$(".six").toggleClass('highlighted');
			break;

			case "a-seven":
			$(".seven").toggleClass('highlighted');
			break;

			case "a-eight":
			$(".eight").toggleClass('highlighted');
			break;

			case "a-nine":
			$(".nine").toggleClass('highlighted');
			break;

			case "a-ten":
			$(".ten").toggleClass('highlighted');
			break;

			case "a-eleven":
			$(".eleven").toggleClass('highlighted');
			break;

			case "a-eleven":
			$(".eleven").toggleClass('highlighted');
			break;

			case "a-twelve":
			$(".twelve").toggleClass('highlighted');
			break;

			case "a-thirtteen":
			$(".thirtteen").toggleClass('highlighted');
			break;

			case "a-fourteen":
			$(".fourteen").toggleClass('highlighted');
			break;

			case "a-fifteen":
			$(".fifteen").toggleClass('highlighted');
			break;

			case "a-sixteen":
			$(".sixteen").toggleClass('highlighted');
			break;

			case "a-seventeen":
			$(".seventeen").toggleClass('highlighted');
			break;

			case "a-eighteen":
			$(".eighteen").toggleClass('highlighted');
			break;

			case "a-nineteen":
			$(".nineteen").toggleClass('highlighted');
			break;

			case "a-twenty":
			$(".twenty").toggleClass('highlighted');
			break;
		}
	});

	$(".list-item").bind('touchstart mousedown', function(e) {
		e.preventDefault();

		$(".m-arron-num").removeClass('highlighted'),
		$(".m-crime-text").css("display", "none");

		switch(this.id) {
			
			case "a-one":
			$(".one").show().siblings().toggleClass('highlighted');	
			break;

			case "a-two":
			$(".two").show().siblings().toggleClass('highlighted');
			break;

			case "a-three":
			$(".three").show().siblings().toggleClass('highlighted');
			break;

			case "a-four":
			$(".four").show().siblings().toggleClass('highlighted');
			break;

			case "a-five":
			$(".five").show().siblings().toggleClass('highlighted');
			break;

			case "a-six":
			$(".six").show().siblings().toggleClass('highlighted');
			break;

			case "a-seven":
			$(".seven").show().siblings().toggleClass('highlighted');
			break;

			case "a-eight":
			$(".eight").show().siblings().toggleClass('highlighted');
			break;

			case "a-nine":
			$(".nine").show().siblings().toggleClass('highlighted');
			break;

			case "a-ten":
			$(".ten").show().siblings().toggleClass('highlighted');
			break;

			case "a-eleven":
			$(".ten").show().siblings().toggleClass('highlighted');
			break;

			case "a-twelve":
			$(".twelve").show().siblings().toggleClass('highlighted');
			break;

			case "a-thirtteen":
			$(".thirtteen").show().siblings().toggleClass('highlighted');
			break;

			case "a-fourteen":
			$(".fourteen").show().siblings().toggleClass('highlighted');
			break;

			case "a-fifteen":
			$(".fifteen").show().siblings().toggleClass('highlighted');
			break;

			case "a-sixteen":
			$(".sixteen").show().siblings().toggleClass('highlighted');
			break;

			case "a-seventeen":
			$(".seventeen").show().siblings().toggleClass('highlighted');
			break;

			case "a-eighteen":
			$(".eighteen").show().siblings().toggleClass('highlighted');
			break;

			case "a-nineteen":
			$(".nineteen").show().siblings().toggleClass('highlighted');
			break;

			case "a-twenty":
			$(".twenty").show().siblings().toggleClass('highlighted');
			break;
		}
	});

	$(".m-arron-num").bind('touchstart mousedown', function(e) {
		e.preventDefault();

		$(".m-arron-num").removeClass('highlighted'),
		$(".m-crime-text").hide();
		
		$(this).addClass('highlighted').siblings().fadeIn(500);
		//footer();
		close();
			
	});

	function close() {
		$(".close").on('touchstart mousedown', function(e){
			$(".m-crime-text").fadeOut(200);
			$(".m-arron-num").removeClass('highlighted');
		});
	}

})();




