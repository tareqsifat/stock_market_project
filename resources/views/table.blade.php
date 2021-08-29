
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Stock Market Data</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('contents/website') }}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('contents/website') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('contents/website') }}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('contents/website') }}/css/main.css">
<!--===============================================================================================-->
</head>
<body>    
	<h1>Stock Market Data</h1>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">

				<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th scope="col">#</th>
                                    <th class="text-right" scope="col">low</th>
                                    <th class="text-right" scope="col">date</th>
                                    <th class="text-right" scope="col">high</th>
                                    <th class="text-right" scope="col">open</th>
                                    <th class="text-right" scope="col">close</th>
                                    <th class="text-right" scope="col">volume</th>
                                    <th scope="col">trade_code</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                                @foreach ($data as $key=> $item)
                                    <tr class="row100 body">
                                        <th scope="col">{{ $key+1 }}</th>
                                        <th scope="col">{{ $item['low'] }}</th>
                                        <th class="text-left" scope="col">{{ $item['date'] }}</th>
                                        <th class="text-left" scope="col">{{ $item['high'] }}</th>
                                        <th class="text-left" scope="col">{{ $item['open'] }}</th>
                                        <th class="text-center" scope="col">{{ $item['close'] }}</th>
                                        <th scope="col">{{ $item['volume'] }}</th>
                                        <th scope="col">{{ $item['trade_code'] }}</th>  
                                    </tr>
                                @endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="{{ asset('contents/website') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('contents/website') }}/js/main.js"></script>

</body>
</html>