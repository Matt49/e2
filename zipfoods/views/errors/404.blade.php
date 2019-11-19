@extends('templates.master')

@section('title')
Product Not Found
@endsection

@section('content')
<h2>Product {{ $id }} not found</h2>
<?php //dump($id);
?>
<div id='product-index'>
	<p>Uh oh - we were not able to find the product you were looking for.</p>
	<a href='/products'>Please check out our other products...</a>
</div>

@endsection