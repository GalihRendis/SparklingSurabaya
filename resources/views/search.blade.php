@extends('layout.header2')

@section('content')
	<div id="app" class="mt-5">
	  <div class="form-group has-search d-flex justify-content-end mr-3">
	    <span class="fa fa-search form-control-feedback"></span>
	    <input type="text" class="form-control ukuran-search" placeholder="Search.." v-model="search">
	  </div>

	  <div class="container">
		  <h2>Card Image</h2>
		  <p>Image at the top (card-img-top):</p>
		  <div class="row">
		  	<div class="col-md-4 col-12 spasi-img" v-for="post in filteredList">
			  <div class="card" style="width:100%">
			    <img class="card-img-top" v-bind:src="post.url_img" alt="Card image" style="width:100%">
			    <div class="card-body">
			      <h4 class="card-title">@{{ post.title }}</h4>
			      <p class="card-text">@{{ post.deskripsi }}</p>
			      <p>@{{ post.harga }}</p>
			    </div>
			  </div>
			</div>
		 </div>
		</div>
	</div>

	<script type="text/javascript" src="/js/daftar.js"></script>
@Endsection