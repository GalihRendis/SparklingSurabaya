<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Visit Surabaya</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <script src="{{ asset('js/app.js') }}"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style type="text/css">
   @media screen and (max-width: 600px) {
	.navbar form {
	    position: fixed;
	    right: 0px;
	    top:0px;
	    margin-top: 0px;
		}
		#Kabar, #Ide, #Akomodasi, #Agenda, #Saran, #Transportasi{
			visibility: visible;
		}
	}
	@media screen and (min-width: 601px) {
		#Kabar, #Ide, #Akomodasi, #Agenda, #Saran, #Transportasi{
		visibility: hidden;
	}
	
	}
   </style>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mb-5">
	<div class="container-fluid">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kabar_terkini"><i class="fas fa-bullhorn" id="Kabar"></i> Kabar Terkini</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ide_liburan"><i class="fas fa-lightbulb" id="Ide"></i> Ide Liburan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/akomodasi"><i class="fa fa-rocket" id="Akomodasi"></i> Akomodasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/transportasi"><i class="fas fa-bus" id="Transportasi"></i> Transportasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="agenda"><i class="fa fa-film" id="Agenda"></i> Agenda Event Kota</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="saran_kritik"><i class="fa fa-commenting" id="Saran"></i> Beri Masukan, Kritik/Saran</a>
      </li>
    </ul>
  </div>
	    <form class="form-inline my-2 my-lg-0">
	      <div class="input-group">
		    <input type="text" class="form-control" placeholder="Search">
		    <div class="input-group-append">
		      <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
		     </div>
		  </div>
	  </form>
	  </div>
	</nav>
	 <main class="main-container mt-5 mb-0">
            @yield('content')
     </main>
   @include('layout.footer')

</body>
</html>