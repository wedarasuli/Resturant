<!DOCTYPE html>
<html lang="en">

 @include('partials.head')

<body class="fix-header fix-sidebar card-no-border">

   
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
   
    <div id="main-wrapper">

      @include('partials.header')
  
       @include('partials.navigation')

        <div class="page-wrapper">
         
            <div class="container-fluid">

                   @if(! isset(Auth::user()->email))
                  
                      <script>window.location="/main"</script>
                    

                   @endif
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <a href="https://wrappixel.com/templates/materialpro/" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Upgrade to Pro</a>
                    </div>
                </div>
               
              
                <!-- Row -->
                
                <!-- Row -->
              
             
            </div>
   
            <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
         
        </div>
    
    </div>
 
   @include('partials.js')
</body>

</html>