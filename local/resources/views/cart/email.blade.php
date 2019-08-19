<!DOCTYPE html>
<html>
<head>
	<style>
		table, td, th {
			text-align: left;
			vertical-align: bottom;
			
		}
		td, th{
			padding: 15px;
			border-bottom: 1px solid #ddd;
		}

		table {
			width: 60%;
		}

		th {
			height: 50px;
		}
	</style>
</head>

<body>
	<div>
		<div style="float: left; width: 400px;">
			<p>Form</p>
			<b>Cheetah Store</b>
			<p>590 CMT8 st., Ward 11, District 3, HCMC</p>
			<p>Phone: +84 969 258 968</p>
			<p>Email: cheetahstore2019@gmail.com</p>
		</div>
		<div style="float: left; width: 400px;">
			<p>To</p>
			<b>{{ $info['name'] }}</b>
			<p>{{ $info['add'] }}</p>
			<p>Phone: {{ $info['phone'] }}</p>
			<p>Email: {{ $info['email'] }}</p>
		</div>
		<div style="float: left; width: 400px;">
			<p>Invoice: {{strtotime("now")}}</p>
			<p>Date: {{ date('d/m/Y'),strtotime(now()) }}</p>
		</div>
		<hr>
	</div>
	<hr>
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
						<td></td>
						<td><b>Subtotal: </b></td>
						<td></td>
						<td align="right"><b>{{ ($total) }} VND</b></td>
					</tr>
			</tbody>
		</table>
	</div>
	<hr>
	<br><br>
	<div>
		<h3 style="color: red;">You have successfully ordered!</h3>

		<p>- Your purchase invoice has been sent to the email address in our Customer Information section.</p>

		<p>- Your products will be shipped to the address in our Customer Information section after 2 to 3 days from this time.</p>

		<p>- Delivery staff will contact you by phone number 24 hours before delivery.</p>

		<p>- Head office: 590 CMT8 st., Ward 11, District 3, HCMC</p>

		<p>- Thank you for using our Cheetah's products!</p>
	</div>

</body>
</html>
