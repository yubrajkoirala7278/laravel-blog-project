<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blogs</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('favicon.png')}}" rel="icon">
  <link href="{{asset('favicon.png')}}" rel="apple-touch-icon">

  {{-- csrf token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- sweet alert --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">
  {{-- jquery --}}
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  {{-- alerts --}}
  <script src="https://cdn.lordicon.com/lordicon.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  {{-- font awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   {{-- toastify --}}
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  

  <!-- Bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
  {{-- CKEditor CDN --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

  {{-- combo select multiple select --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

  @yield('css')
  <!-- Customm css -->
  <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{route('admin.dashboard')}}" class="logo d-flex align-items-center">
        <img src="{{asset('favicon.png')}}" alt="">
        <span class="d-none d-lg-block fs-5">Blogs</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item  pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" >
            <img src="{{asset('frontend/images/mahesh.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block  ps-2">{{Auth::user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-gauge-high"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item ">
            <a class="nav-link collapsed" href="{{route('category.index')}}">
                <i class="fa-solid fa-list"></i>
                <span>Categories</span>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link collapsed" href="{{route('tag.index')}}">
              <i class="fa-solid fa-tags"></i>
                <span>Tags</span>
            </a>
        </li>

        <li class="nav-item ">
          <a class="nav-link collapsed" href="{{ route('posts.index') }}">
              <i class="fa-solid fa-user"></i>
              <span>Posts</span>
          </a>
      </li>
        <li class="nav-item ">
            <a class="nav-link collapsed" href="{{ route('logout') }}">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blogs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a  href="#" >Admin</a></li>
          <li class="breadcrumb-item active">Home</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      @yield('content')
    </section>

  </main><!-- End #main -->

  {{-- scroll to top button --}}
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


  {{-- toastify --}}
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '.show-alert-delete-box', function(event){
            var form =  $(this).closest("form");

            event.preventDefault();
            swal({
                title: "Are you sure you want to delete this record?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                type: "warning",
                buttons: ["Cancel","Yes!"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    });
</script>
  
{{-- display success message --}}
  @if(session('success'))
  <script>
      Toastify({
            text: {!! json_encode(session('success')) !!},
            duration: 3000,
            newWindow: true,
            close: true,
            color:"white",
            gravity: "bottom",
            position: 'right', 
            backgroundColor: "green",
            stopOnFocus: true, 
        }).showToast();
  </script>
  @endif

  {{-- display success message --}}
  @if(session('error'))
  <script>
      Toastify({
            text: {!! json_encode(session('error')) !!},
            duration: 3000,
            newWindow: true,
            close: true,
            color:"white",
            gravity: "bottom",
            position: 'right', 
            backgroundColor: "red",
            stopOnFocus: true, 
        }).showToast();
  </script>
  @endif


  @stack('script')

  {{-- sweet alert --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  {{-- multiple/combo select --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!-- custom js -->
  <script src="{{asset('admin/assets/js/main.js')}}"></script>

</body>

</html>