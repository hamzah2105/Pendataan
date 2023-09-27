@extends('layouts.index')

@section('content')

<style>
    body
	{
		background-image: url('https://image.ibb.co/iKgVxn/chumma.jpg');
        }
	h1
	{
		text-align: center;
		padding-top: 5%;
		color: white;
	}
	h2
	{
		text-align: center;
		padding-top: 1%;
		color: white;
	}
	.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
        box-shadow: 0 8px 18px 0;
        border-width: 0;
    background-color: none;
}
</style>
<h1>Coming Soon!</h1><h2>Your next real estate friend</h2> <br>
<div class="container">
	<div class="card" style="width:400px;">
  <img class="card-img-top" src="">
  <div class="card-body">
    <h6 class="card-title">Hello :)</h6>
    <h6><p class="card-text">WORLD</p></h6>
    <h6><a href="#">Visit us!</a></h6>
  </div>
</div>
</div>

@endsection
