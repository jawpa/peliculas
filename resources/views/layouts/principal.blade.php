<!doctype html>
 
<html>
 
<head>
 
   @include('includes.head')
 
</head>
 
<body>
 
<div class="container">
 
   <header>
 
       @include('includes.header')
 
   </header>
 
   <main role="main">
           @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif 

          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
 
           @yield('content')
 
   </main>
 
   <footer class="text-muted">
 
       @include('includes.footer')
 
   </footer>
 
</div>
 
</body>
 
</html>