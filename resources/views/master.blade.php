<!DOCTYPE html>
<html lang="en">

 @include('partials.head')

<body class="fix-header fix-sidebar card-no-border">


   
    <div id="main-wrapper">

      @include('partials.header')
  
       @include('partials.navigation')



        <div class="page-wrapper">
         
            <div class="container-fluid">
                @yield('content')

                   @if(! isset(Auth::user()->email))
                  
                      <script>window.location="/login"</script>
                    

                   @endif
              
      



            </div>
  
            <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
         
        </div>
    
    </div>
 
   @include('partials.js')
</body>

</html>