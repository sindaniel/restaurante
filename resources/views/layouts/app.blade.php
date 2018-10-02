<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="{{ asset('css/basestyle/style.css') }}" rel="stylesheet">
    

    @yield('header')

   
</head>
<body>
       

        <section class="wrapper">
     
  
        @include('includes.aside')

        <div class="content-area">
               
                @include('includes.header')
               
                <div class="content-wrapper">


                <div class="row">
					<div class="col-md-12">
						@if(Session::has('message'))
								<p class="alert alert-primary">{{ Session::get('message') }}</p>
						@endif
					</div>
                </div>
            
                        {{-- @include('includes.headercontent') --}}
                        @yield('content')
                    
                </div>

        </div>
    

    </section>

    

        

 
        <script src="{{ asset('js/lib/moment.min.js')}}"></script>
        <script src="{{ asset('js/lib/jquery.min.js')}}"></script>
        <script src="{{ asset('js/lib/popper.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/chosen-js/chosen.jquery.js')}}"></script>
        
        
   
        <script src="{{ asset('js/custom.js')}}"></script>
  
  
        @yield('scripts')

</body>
</html>
