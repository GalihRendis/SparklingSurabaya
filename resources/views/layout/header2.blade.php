<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
  /*andorid*/
   @media screen and (max-width: 600px) {
        .navbar form {
            position: fixed;
            right: 10px;
            top:0px;
            margin-top: 0px;
          }
          #Kabar, #Ide, #Akomodasi, #Agenda, #Saran, #Transportasi{
            visibility: visible;
          }
          .footer-spasi{
            margin-top: 30px;
          }
          .spasi-img{
            margin-top: 30px;
          }
          .ukuran-search{
            width: 50%;
          }
  }
  /*android end*/

/*desktop*/

  @media screen and (min-width: 601px) {
        #Kabar, #Ide, #Akomodasi, #Agenda, #Saran, #Transportasi{
        visibility: hidden;
        }
        .ukuran-search{
            width: 30%;
        }
        
    }


    /*all device*/
    .text-surabaya{
          color: #ea5f00;
        }
        .bg-surabaya{
          background-color: #ea5f00; 
        }
    .has-search .form-control {
          padding-left: 2.375rem;
      }

      .has-search .form-control-feedback {
          position: absolute;
          z-index: 2;
          display: block;
          width: 2.375rem;
          height: 2.375rem;
          line-height: 2.375rem;
          text-align: center;
          pointer-events: none;
          color: #aaa;
      }
      .custom-toggler.navbar-toggler{
          border-color: rgb(234, 95, 0)
        } 
        .custom-toggler .navbar-toggler-icon {
          background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgb(234, 95, 0)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

   </style>
</head>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mb-5">
  <div class="container-fluid">
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
      <!-- <form class="form-inline my-2 my-lg-0">
        <div class="form-group has-search">
    <span class="fa fa-search form-control-feedback"></span>
    <input type="text" class="form-control" placeholder="Search">
  </div>
    </form> -->
    
    </div>
  </nav>
   <main class="py-4 main-container">
            @yield('content')
  </main>
   @include('layout.footer')

</body>
</html>