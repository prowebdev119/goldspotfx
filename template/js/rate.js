$(function(){
	getCurr();
	setInterval( getCurr,30000);
	function getCurr()
	{
		$.get( "https://api.cryptonator.com/api/ticker/btc-usd", function( response )
		{
			$('.btc-usd').find('.price').html(parseFloat(response.ticker.price).toFixed(2));
			$('.btc-usd').find('.price').html(response.ticker.price);
			console.log(response.ticker.change.indexOf('-'));
			if((response.ticker.change.indexOf('-')+1))
			{
				$('.btc-usd').find('.change').addClass('minus');
			}

			$('.btc-usd').find('.change').html(response.ticker.change);
		}, "json" );
	}
});


