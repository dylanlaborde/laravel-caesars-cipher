@extends('app')
<head>
	<title>Acceuil</title>
</head>

@section('content')
<div class="ui grid">
	<div class="six wide column"></div>
	<h1>Acceuil</h1>
</div>

<div class="ui grid">
	<div class="five wide column"></div>
	
	<table class="ui very padded inverted table">
		<thead>
			<tr>
				<th>id</th>
				<th>message</th>
				<th>clé de chiffrement</th>	
			</tr>
		</thead>
		<tbody>
			@foreach($messages as $key)
			<tr>
				<td>{{$key->id}}</td>
				<td>{{$key->message}}</td>
				<td>{{$key->chiffrement}}</td>
			</tr>
			@endforeach
			
		</tbody>
	</table>


</div>
@stop