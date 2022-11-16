$(function(){

	$('.box-plan-select > ul > li').on('click', function(event) {
		$('.box-plan-select > ul > li').removeClass('active');
		$(this).addClass('active');
		var plan=Number($(this).attr('rel'));
		var data = sw(plan);
		var amount=data.min;
		$('.calculate-amount').val(amount);
		$('.p_before_amout').animate({'width': '0'},400);
		$(".drag").animate({'left': '0px'},400);
		calc(data,amount);
	});

	$('ul.currs-select > li').on('click',function() {
		$('ul.currs-select > li').removeClass('active');
		$(this).addClass('active');
		var plan = Number($('.box-plan-select > ul > li.active').attr('rel'));
		var data = sw(plan);
		$('.calculate-amount').val(data.min);
		$('.p_before_amout').animate({'width': '0'},400);
		$(".drag").animate({'left': '0'},400);
		calc(data,data.min);
	});

	$('.calculate-amount').on('change keyup', function()
	{
		var plan = Number($('.box-plan-select > ul > li.active').attr('rel'));
		var amount=Number($(this).val()*Math.pow(10, 8))/Math.pow(10, 8);
		var data = sw(plan);

		if (amount>data.max) 
		{
			amount=data.max;
			$(this).val(amount);
		}

		var position=Math.round((amount-data.min)*($( ".drag" ).parent().width()-$(".drag" ).width())/(data.max-data.min));
		if (position<0) position=0;
		$('.p_before_amout').animate({'width': position},400);
		$(".drag").animate({'left': position+'px'},400);
		calc(data, amount);
	}).on('keypress', isNumberKey);

	$( ".drag" ).draggable({cursor: "e-resize", axis: "x" ,containment: "parent", drag: function(event, ui)
		{
			var plan = Number($('.box-plan-select > ul > li.active').attr('rel'));
			var data = sw(plan);

			var c=ui.position.left;
			var e=parseFloat(data.min)+c*(data.max-data.min)/($(this).parent().width()-$(this).width()-4);
			var output=Math.round(e*Math.pow(10, data.pow)).toFixed(0)/Math.pow(10, data.pow);
			var days=parseFloat($('.calculate-days').val());
			$('.p_before_amout').css({'width': c});
			$('.calculate-amount').val(output);
			calc(data,output);
			
		}
	});


	function calcCurrs(data) {
			curr=Number($('ul.currs-select  > li.active').data('curr'));
			data.pow=Number($('ul.currs-select  > li.active').data('pow'));
			data.label = $('ul.currs-select > li.active').data('label');
			data.min=pow1(data.min/curr, data.pow);
			data.max=pow1(data.max/curr, data.pow);
			
			$('.min > abbr').html(data.min);
			$('.max > abbr').html(data.max);
			return data;
	}

	function calc(data, amount) {
		if (jQuery.isEmptyObject(data))
		{
			data = sw();
			amount = data.min;
			$('.calculate-amount').val(data.min);
			calculate(amount, data.daily, data.percent, data.duration, data.pow, data.label);
		}
		
		calculate(amount, data.daily, data.percent, data.duration, data.pow, data.label);
	}

	function calculate(amount, daily, percent, duration, pow, label) {
		var sum=Number(amount);
		var daily=Number(daily);
		var days = Number(duration);
		var percent=Number(percent);
		var duration=Number(duration);
		
		var daily_value=pow1((sum)*daily/100,2);
		var total_value=pow1((sum)*days*daily/100,2);
		$('.result-data-1').html(daily_value+' <small>'+label+'</small>');
		$('.result-data-2').html(total_value+' <small>'+label+'</small>');
		$('.calc-result-icon').html(label);
	}


	function isNumberKey(event) {
		var charCode = (event.which) ? event.which : event.keyCode;
		
		if (charCode==46) return true;
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}

	function sw(plan) {
		data=[];
		data.min=30;
		data.max=100000;
		data.daily=5;
		data.duration=34;
		data.percent=170;
		switch (plan) {
			case 1:
				data.min=30;
				data.max=100000;
				data.daily=5;
				data.duration=34;
				data.percent=170;
			break;
			case 2:
				data.min=250;
				data.max=100000;
				data.daily=8;
				data.duration=18;
				data.percent=144;
			break;
			case 3:
				data.min=500;
				data.max=100000;
				data.daily=10;
				data.duration=12;
				data.percent=120;
			break;
		}
		data=calcCurrs(data);
		console.log(data);
		return data;
	}

	function pow1(amount,pow) {
		return Math.round(amount*Math.pow(10, pow)).toFixed(0)/Math.pow(10, pow);
	}
});