<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
<main>
		<center>
			<div class="tradingview-widget-container">
				<div class="tradingview-widget-container__widget"></div>
				<script type="text/javascript"
					src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
						{
							"symbols": [
								{
									"proName": "FOREXCOM:SPXUSD",
									"title": "S&P 500"
								},
								{
									"proName": "FOREXCOM:NSXUSD",
									"title": "Nasdaq 100"
								},
								{
									"description": "NIFTY 50",
									"proName": "NSE:NIFTY"
								},
								{
									"description": "SENSEX",
									"proName": "BSE:SENSEX"
								},
								{
									"description": "NIFTY BANK",
									"proName": "NSE:BANKNIFTY"
								},
								{
									"description": "DOW JONES",
									"proName": "DJCFD:DJI"
								},
								{
									"description": "ATX",
									"proName": "INDEX:ATX"
								},
								{
									"description": "BOSVESPA",
									"proName": "BMFBOVESPA:IBOV"
								},
								{
									"description": "DAX",
									"proName": "XETR:DAX"
								},
								{
									"description": "EURO STOXX 50",
									"proName": "CURRENCYCOM:EU50"
								},
								{
									"description": "NIKKEI 225",
									"proName": "TVC:NI225"
								},
								{
									"description": "SMI",
									"proName": "SIX:SMI"
								}
							],
								"showSymbolLogo": true,
									"colorTheme": "dark",
										"isTransparent": false,
											"displayMode": "adaptive",
												"locale": "in"
						}
					</script>
			</div>
			<!--https://data.indianexpress.com/iframes/stockal/popular-stocks-desktop.html // US STOCKS-->
			<div class="iframefirst">
				<h2 class="red-text" style="color: black;">NIFTY50 CHART</h2>
				<iframe frameborder="0" scrolling="no"
					src="https://tvc4.forexpros.com/init.php?family_prefix=tvc4&pair_ID=17940&interval=60&width=1150&height=650&lang_ID=1&timezone_ID=20"
					style="background-color: white; border: solid 1px #00B4FF; color: black; padding-top: 8px;"
					height="565" width="100%"></iframe>
	</main>
</div>



<div class="container">
	<script>
		const https = require('https');

const options = {
    hostname: 'financialmodelingprep.com',
    port: 443,
    path: 'https://financialmodelingprep.com/api/v3/search?query=AA&apikey=7bf74a8dba916bf23d0d3a0a05abf3f6',
    method: 'GET'
} 

[
	{
		"symbol": "PRAA",
		"name": "PRA Group, Inc.",
		"currency": "USD",
		"stockExchange": "NasdaqGS",
		"exchangeShortName": "NASDAQ"
	},
	{
		"symbol": "PAAS",
		"name": "Pan American Silver Corp.",
		"currency": "USD",
		"stockExchange": "NasdaqGS",
		"exchangeShortName": "NASDAQ"
	}
]

        
const req = https.request(options, (res) => {
    res.on('data', (d) => {
        process.stdout.write(d)
    })
})

req.on('error', (error) => {
    console.error(error)
})

req.end()
	</script> 
</div>











<div class="container">



<iframe
referrerpolicy="origin"
width="100%"
height="470"
style="background: #FFFFFF; padding: 10px; border: none; border-radius: 5px; box-shadow: 0 2px 4px 0 rgba(0,0,0,.2)"
src="https://jika.io/embed/area-chart?symbol=TATAMOTORS.NS&selection=one_year&closeKey=close&boxShadow=true&graphColor=1652f0&textColor=161c2d&backgroundColor=FFFFFF&fontFamily=Nunito"
></iframe>
</div>
</body>
</html>