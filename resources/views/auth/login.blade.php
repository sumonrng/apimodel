


<!doctype html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>COINEX | Responsive Bootstrap 5 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
      <link rel="stylesheet" href="../../assets/css/core/libs.min.css">
      <link rel="stylesheet" href="../../assets/css/coinex.min.css?v=1.0.0">
      <link rel="stylesheet" href="../../assets/css/custom.min.css?v=1.0.0">  </head>
  <body class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
      <div style="background-image: url('../../assets/images/auth/01.png')" >  
        <div class="wrapper">
<section class="vh-100 bg-image">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="auth-form">
                                <h2 class="text-center mb-4">Sign In</h2>
                                <x-form action={{}} method="POST">
                                    <div class="form-floating mb-3">
                                        <x-text-input type="text" id="floatingInput" placeholder="name@example.com"/>
                                        <x-input-label for="floatingInput" :value="__('Email')"/>
                                    </div>
                                     <div class="form-floating mb-2">
                                        <x-text-input type="passport" id="Password" placeholder="Password"/>
                                        <x-input-label for="Password" :value="__('Password')"/>
                                    </div>
                                    <div class="d-flex justify-content-between  align-items-center flex-wrap">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"  id="Remember">
                                                <label class="form-check-label" for="Remember">Remember me?</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="#page-forgot-password.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <x-button type="button" :value="__('Sign In')"/>
                                    </div>
                                    <div class="text-center mt-3">
                                        <p>or sign in with others account?</p>
                                    </div>
                                     <div class="d-flex justify-content-center ">
                                        <ul class="list-group list-group-horizontal   list-group-flush">
                                            <li class="list-group-item bg-transparent border-0">
                                            <a href="#"><img src="../../assets/images/brands/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img60"></a>
                                            </li>
                                            <li class="list-group-item bg-transparent border-0">
                                            <a href="#"><img src="../../assets/images/brands/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="gm"></a>
                                            </li>
                                            <li class="list-group-item bg-transparent border-0">
                                            <a href="#"><img src="../../assets/images/brands/03.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="im"></a>
                                            </li>
                                            <li class="list-group-item bg-transparent border-0">
                                            <a href="#"><img src="../../assets/images/brands/04.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="li"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </x-form>
                                <div class="new-account mt-3 text-center">
                                    <p>Don't have an account? <a class="" href="{{route('register')}}">Click
                                            here to Sign up</a></p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
      </div>
      
    
    <!-- Backend Bundle JavaScript -->
    <script src="../../assets/js/core/libs.min.js"></script>
    <script src="../../assets/js/core/external.min.js"></script>
    
    <!-- widgetchart JavaScript -->
    <script src="../../assets/js/charts/widgetcharts.js"></script>
    
    <!-- GSAP Animation JS-->
    <script src="../../assets/vendor/gsap/gsap.min.js"></script>
    <script src="../../assets/vendor/gsap/ScrollTrigger.min.js"></script>
    
    <!-- fslightbox JavaScript -->
    <script src="../../assets/js/fslightbox.js"></script>
    
    <!-- Mapchart JavaScript -->
    <script src="../../assets/js/charts/vector-chart.js"></script>
    <script src="../../assets/js/charts/dashboard.js"></script>
    
    <!-- app JavaScript -->
    <script src="../../assets/js/coinex.js"></script>
    
    <!-- apexchart JavaScript -->
    <script src="../../assets/js/charts/apexcharts.js"></script>
    
    <!-- Gsap Animation Init -->
    <script src="../../assets/js/gsap.js"></script>  </body>
</html>