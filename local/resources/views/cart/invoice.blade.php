<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style>
		.page-break {
  	  		page-break-after: always;
		}
		table, td, th {
			text-align: left;
			vertical-align: bottom;
			
		}
		td, th{
			padding: 15px;
			border-bottom: 1px solid #ddd;
		}

		table {
			width: 100%;
		}

		th {
			height: 50px;
		}
	</style>
</head>

<body>
	<div style="background-color: #000; display: inline-block;">
		<img src="{{ asset('img/logo.png') }}" alt="Cheetah Store">
	</div>
	<div>
		<div style="width: 500px; float: left;">
			<h4>Cheetah Store</h4>
			<p>590 CMT8 st., Ward 11, District 3, HCMC</p>
			<p>Phone: +84 969 258 968</p>
			<p>Email: cheetahstore2019@gmail.com</p>
		</div>
		<div style="width: 500px; float: left;">
			<h1>INVOICE</h1>
			<p>Invoice No.: {{strtotime("now")}}</p>
			<p>Date: {{ date('d/m/Y'),strtotime(now()) }}</p>
		</div>
	</div>

	<div style="float: none;">
		<p>********************</p>
		<h5><i>BILL TO</i></h5>
		<b>{{Auth::user()->name}}</b>
		<p>{{Auth::user()->address}}</p>
		<p>Phone: {{Auth::user()->phone_number}}</p>
		<p>Email: {{Auth::user()->email}}</p>
	</div>
	
	<hr/>
	<div style="float: none;">
		<table>
			<thead>
				<tr>
					<th>Product's name</th>
					<th>Quantity</th>
					<th>Unit_Price</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cart as $item)
					<tr>
						<td>{{$item->name}}</td>
						<td>{{$item->qty}}</td>
						<td>{{number_format($item->price)}} VND</td>
						<td>{{number_format($item->price*$item->qty,0,'.',',')}} VND</td>
					</tr>
				@endforeach
					<tr>
						<td><i>Thank you for your business!</i></td>
						<td></td>
						<td><b>Subtotal: </b></td>
						<td align="right"><b>{{ ($total) }} VND</b></td>
					</tr>
			</tbody>
		</table>
	</div>
	<hr>
	<br><br>
	<div style="text-align: center;">
		<i>If you have any questions about this invoice, please contact</i><br>
		<small>Cheetah Store</small><br>
		<small>Phone: +84 969 258 968</small><br>
		<small>Email: cheetahstore2019@gmail.com</small>
	</div>

</body>
</html>