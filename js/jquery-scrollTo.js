	var $chapters = $('#demo-stage').find('ul').children('li');
	var $chScrollPositions = new Array();
	
	// Cache Scroll Positions for Each Chapter
	$chapters.each(function(i){
		$chScrollPositions[i] = Math.round($(this).offset().top - $('#demo-stage').offset().top) - 10;
	});
	$chapters.eq(0).addClass('active'); // Set First Chapter Active on Start
	
	$('#demo-nav > nav > button').click(function(){
		var last = $chapters.parent().find('li.active').removeClass('active').index();
		var next;
		
		switch($(this).index()){
			case 1:	// Action - Next Chapter
				next = (last + 1 == $chapters.length) ? 0 : last + 1; // Loop around to first chapter
			break;
			case 2:	// Action - Last Chapter
				next = $chapters.length - 1;
			break;
			case 3:	// Action - First Chapter
				next = 0;
			break;
		}
		$chapters.eq(next).addClass('active'); // Set Next Chapter Active
		$('#demo-stage').scrollTo($chScrollPositions[next]);
	});
