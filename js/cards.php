<?php
include '../zhiri.php';
?>
var Cards = (function() {
	
	var view 	= $('.view');
	var vw 		= view.innerWidth();
	var vh	 	= view.innerHeight();
	var vo 		= view.offset();
	var card 	= $('.card__item');
	var cardfull = $('.card__full');
	var cardfulltop = cardfull.find('.card__full-top');
	var arrow = cardfulltop.find('svg');
	var cardnum = cardfulltop.find('.card__full-num');
	var cardhandle = cardfull.find('.card__full-handle');
	var cardinfo = cardfull.find('.card__full-info');
	var w 		= $(window);
	
	var data = [
		{
			num: <?php echo date("j",strtotime("-1 day")) ?>,
			handle: '<?php echo zhiri(-1) ?>',
			info: '这一位是昨日的值日生'
		},
		{
			num: <?php echo date("j") ?>,
			handle: '<?php echo zhiri(0) ?>',
			info: '这一位是今日的值日生'
		},
		{
			num: <?php echo date("j",strtotime("+1 day")) ?>,
			handle: '<?php echo zhiri(1) ?>',
			info: '明天的值日生'
		},
		{
			num: <?php echo date("j",strtotime("+2 day")) ?>,
			handle: '<?php echo zhiri(2) ?>',
			info: '后天的值日生'
		},
		{
			num: <?php echo date("j",strtotime("+3 day")) ?>,
			handle: '<?php echo zhiri(3) ?>',
			info: '大后天的值日生'
		},
		{
			num: <?php echo date("j",strtotime("+4 day")) ?>,
			handle: '<?php echo zhiri(4) ?>',
			info: '四天后的值日生'
		}
	];
	
	var moveCard = function() {
		var self = $(this);
		var selfIndex = self.index();
		var selfO = self.offset();
		var ty = w.innerHeight()/2 - selfO.top -4;
		
		var color = self.css('border-top-color');
		cardfulltop.css('background-color', color);
		cardhandle.css('color', color);
		
		updateData(selfIndex);
		
		self.css({
			'transform': 'translateY(' + ty + 'px)'
		});
				
		self.on('transitionend', function() {
			cardfull.addClass('active');
			self.off('transitionend');
		});
		
		return false;
	};
	
	var closeCard = function() {
		cardfull.removeClass('active');
		cardnum.hide();
		cardinfo.hide();
		cardhandle.hide();
		cardfull.on('transitionend', function() {
			card.removeAttr('style');
			cardnum.show();
			cardinfo.show();
			cardhandle.show();
			cardfull.off('transitionend');
		});
	};
	
	var updateData = function(index) {
		cardnum.text(data[index].num);
		cardhandle.text(data[index].handle);
		cardinfo.text(data[index].info);
	};
	
	var bindActions = function() {
		card.on('click', moveCard);
		arrow.on('click', closeCard);
	};
	
	var init = function() {
		bindActions();
	};
	
	return {
		init: init
	};
	
}());

Cards.init();