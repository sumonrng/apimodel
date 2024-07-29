
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('page_title')</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/core/libs.min.css">
      <link rel="stylesheet" href="../assets/css/coinex.min.css?v=1.0.0">
      <link rel="stylesheet" href="../assets/css/custom.min.css?v=1.0.0">  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
    <aside class="sidebar sidebar-default navs-rounded ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="../dashboard/index.html" class="navbar-brand dis-none align-items-center">
                <img src="../assets/images/logo.svg" class="img-fluid"  alt="logo"><h4 class="logo-title m-0">OINEX</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body p-0 data-scrollbar">
            <div class="navbar-collapse pe-3" id="sidebar">
                <ul class="navbar-nav iq-main-menu">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="./index">
                            <i class="icon">
                            <svg width="22" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.15722 20.7714V17.7047C9.1572 16.9246 9.79312 16.2908 10.581 16.2856H13.4671C14.2587 16.2856 14.9005 16.9209 14.9005 17.7047V17.7047V20.7809C14.9003 21.4432 15.4343 21.9845 16.103 22H18.0271C19.9451 22 21.5 20.4607 21.5 18.5618V18.5618V9.83784C21.4898 9.09083 21.1355 8.38935 20.538 7.93303L13.9577 2.6853C12.8049 1.77157 11.1662 1.77157 10.0134 2.6853L3.46203 7.94256C2.86226 8.39702 2.50739 9.09967 2.5 9.84736V18.5618C2.5 20.4607 4.05488 22 5.97291 22H7.89696C8.58235 22 9.13797 21.4499 9.13797 20.7714V20.7714" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>                            
                            </i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-special" role="button" aria-expanded="false" aria-controls="sidebar-special">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M13.3051 5.88243V6.06547C12.8144 6.05584 12.3237 6.05584 11.8331 6.05584V5.89206C11.8331 5.22733 11.2737 4.68784 10.6064 4.68784H9.63482C8.52589 4.68784 7.62305 3.80152 7.62305 2.72254C7.62305 2.32755 7.95671 2 8.35906 2C8.77123 2 9.09508 2.32755 9.09508 2.72254C9.09508 3.01155 9.34042 3.24276 9.63482 3.24276H10.6064C12.0882 3.2524 13.2953 4.43736 13.3051 5.88243Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.164 6.08279C15.4791 6.08712 15.7949 6.09145 16.1119 6.09469C19.5172 6.09469 22 8.52241 22 11.875V16.1813C22 19.5339 19.5172 21.9616 16.1119 21.9616C14.7478 21.9905 13.3837 22.0001 12.0098 22.0001C10.6359 22.0001 9.25221 21.9905 7.88813 21.9616C4.48283 21.9616 2 19.5339 2 16.1813V11.875C2 8.52241 4.48283 6.09469 7.89794 6.09469C9.18351 6.07542 10.4985 6.05615 11.8332 6.05615C12.3238 6.05615 12.8145 6.05615 13.3052 6.06579C13.9238 6.06579 14.5425 6.07427 15.164 6.08279ZM10.8518 14.7459H9.82139V15.767C9.82139 16.162 9.48773 16.4896 9.08538 16.4896C8.67321 16.4896 8.34936 16.162 8.34936 15.767V14.7459H7.30913C6.90677 14.7459 6.57311 14.4279 6.57311 14.0233C6.57311 13.6283 6.90677 13.3008 7.30913 13.3008H8.34936V12.2892C8.34936 11.8942 8.67321 11.5667 9.08538 11.5667C9.48773 11.5667 9.82139 11.8942 9.82139 12.2892V13.3008H10.8518C11.2542 13.3008 11.5878 13.6283 11.5878 14.0233C11.5878 14.4279 11.2542 14.7459 10.8518 14.7459ZM15.0226 13.1177H15.1207C15.5231 13.1177 15.8567 12.7998 15.8567 12.3952C15.8567 12.0002 15.5231 11.6727 15.1207 11.6727H15.0226C14.6104 11.6727 14.2866 12.0002 14.2866 12.3952C14.2866 12.7998 14.6104 13.1177 15.0226 13.1177ZM16.7007 16.4318H16.7988C17.2012 16.4318 17.5348 16.1139 17.5348 15.7092C17.5348 15.3143 17.2012 14.9867 16.7988 14.9867H16.7007C16.2885 14.9867 15.9647 15.3143 15.9647 15.7092C15.9647 16.1139 16.2885 16.4318 16.7007 16.4318Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Special Pages</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-special" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/special-pages/portfolio.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>                                 
                                    </i>
                                    <i class="sidenav-mini-icon">P </i>
                                    <span class="item-name">Portfolio</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/special-pages/academy.html">
                                   <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>                           
                                    </i>
                                   <i class="sidenav-mini-icon">A </i>
                                   <span class="item-name">Academy</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/special-pages/trading.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>                          
                                    </i>
                                    <i class="sidenav-mini-icon"> T </i>
                                    <span class="item-name">Trading</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/special-pages/watchlist.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>                          
                                    </i>
                                    <i class="sidenav-mini-icon"> W </i>
                                    <span class="item-name">Watchlist</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/special-pages/list.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>                         
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">List</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-auth" role="button" aria-expanded="false" aria-controls="sidebar-user">
                            <i class="icon">
                                 <svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9846 21.606C11.9846 21.606 19.6566 19.283 19.6566 12.879C19.6566 6.474 19.9346 5.974 19.3196 5.358C18.7036 4.742 12.9906 2.75 11.9846 2.75C10.9786 2.75 5.26557 4.742 4.65057 5.358C4.03457 5.974 4.31257 6.474 4.31257 12.879C4.31257 19.283 11.9846 21.606 11.9846 21.606Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M9.38574 11.8746L11.2777 13.7696L15.1757 9.86963" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </i>
                            <span class="item-name">Authentication</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-auth" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/sign-in.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">Login</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/sign-in-1.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">Login 1</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/sign-up.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg> 
                                    </i>
                                    <i class="sidenav-mini-icon"> R </i>
                                    <span class="item-name">Register</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/sign-up-1.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> R </i>
                                    <span class="item-name">Register 1</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/confirm-mail.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg> 
                                    </i>
                                    <i class="sidenav-mini-icon"> C </i>
                                    <span class="item-name">Confirm Mail</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/confirm-mail-1.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> C </i>
                                    <span class="item-name">Confirm Mail 1</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/lock-screen.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">Lock Screen</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/lock-screen-1.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">Lock Screen 1</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/recoverpw.html">
                                   <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> R </i>
                                    <span class="item-name">Recover password</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/recoverpw-1.html">
                                   <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> R </i>
                                    <span class="item-name">Recover password 1</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-user" role="button" aria-expanded="false" aria-controls="sidebar-user">
                            <i class="icon">
                            <svg width="22" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.9849 15.3462C8.11731 15.3462 4.81445 15.931 4.81445 18.2729C4.81445 20.6148 8.09636 21.2205 11.9849 21.2205C15.8525 21.2205 19.1545 20.6348 19.1545 18.2938C19.1545 15.9529 15.8735 15.3462 11.9849 15.3462Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M11.9849 12.0059C14.523 12.0059 16.5801 9.94779 16.5801 7.40969C16.5801 4.8716 14.523 2.81445 11.9849 2.81445C9.44679 2.81445 7.3887 4.8716 7.3887 7.40969C7.38013 9.93922 9.42394 11.9973 11.9525 12.0059H11.9849Z" stroke="currentColor" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round"></path> </svg>                            
                            </i>
                            <span class="item-name">Users</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-user" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/app/user-profile.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>                          
                                    </i>
                                    <i class="sidenav-mini-icon"> U </i>
                                    <span class="item-name">User Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/app/user-add.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> U </i>
                                    <span class="item-name">User Edit</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/app/user-list.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg> 
                                    </i>
                                    <i class="sidenav-mini-icon"> U </i>
                                    <span class="item-name">User List</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#utilities-error" role="button" aria-expanded="false" aria-controls="utilities-error">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M11.9912 18.6215L5.49945 21.864C5.00921 22.1302 4.39768 21.9525 4.12348 21.4643C4.0434 21.3108 4.00106 21.1402 4 20.9668V13.7087C4 14.4283 4.40573 14.8725 5.47299 15.37L11.9912 18.6215Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89526 2H15.0695C17.7773 2 19.9735 3.06605 20 5.79337V20.9668C19.9989 21.1374 19.9565 21.3051 19.8765 21.4554C19.7479 21.7007 19.5259 21.8827 19.2615 21.9598C18.997 22.0368 18.7128 22.0023 18.4741 21.8641L11.9912 18.6215L5.47299 15.3701C4.40573 14.8726 4 14.4284 4 13.7088V5.79337C4 3.06605 6.19625 2 8.89526 2ZM8.22492 9.62227H15.7486C16.1822 9.62227 16.5336 9.26828 16.5336 8.83162C16.5336 8.39495 16.1822 8.04096 15.7486 8.04096H8.22492C7.79137 8.04096 7.43991 8.39495 7.43991 8.83162C7.43991 9.26828 7.79137 9.62227 8.22492 9.62227Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Utilities</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="utilities-error" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/errors/error404.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <span class="item-name">Error 404</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/errors/error500.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <span class="item-name">Error 500</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/errors/maintenance.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg> 
                                    </i>
                                    <span class="item-name">Maintence</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui" role="button" aria-expanded="false" aria-controls="utilities-error">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                
                                    <path opacity="0.4" d="M2 11.0786C2.05 13.4166 2.19 17.4156 2.21 17.8566C2.281 18.7996 2.642 19.7526 3.204 20.4246C3.986 21.3676 4.949 21.7886 6.292 21.7886C8.148 21.7986 10.194 21.7986 12.181 21.7986C14.176 21.7986 16.112 21.7986 17.747 21.7886C19.071 21.7886 20.064 21.3566 20.836 20.4246C21.398 19.7526 21.759 18.7896 21.81 17.8566C21.83 17.4856 21.93 13.1446 21.99 11.0786H2Z" fill="currentColor"></path>                                <path d="M11.2451 15.3843V16.6783C11.2451 17.0923 11.5811 17.4283 11.9951 17.4283C12.4091 17.4283 12.7451 17.0923 12.7451 16.6783V15.3843C12.7451 14.9703 12.4091 14.6343 11.9951 14.6343C11.5811 14.6343 11.2451 14.9703 11.2451 15.3843Z" fill="currentColor"></path>                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.211 14.5565C10.111 14.9195 9.762 15.1515 9.384 15.1015C6.833 14.7455 4.395 13.8405 2.337 12.4815C2.126 12.3435 2 12.1075 2 11.8555V8.38949C2 6.28949 3.712 4.58149 5.817 4.58149H7.784C7.972 3.12949 9.202 2.00049 10.704 2.00049H13.286C14.787 2.00049 16.018 3.12949 16.206 4.58149H18.183C20.282 4.58149 21.99 6.28949 21.99 8.38949V11.8555C21.99 12.1075 21.863 12.3425 21.654 12.4815C19.592 13.8465 17.144 14.7555 14.576 15.1105C14.541 15.1155 14.507 15.1175 14.473 15.1175C14.134 15.1175 13.831 14.8885 13.746 14.5525C13.544 13.7565 12.821 13.1995 11.99 13.1995C11.148 13.1995 10.433 13.7445 10.211 14.5565ZM13.286 3.50049H10.704C10.031 3.50049 9.469 3.96049 9.301 4.58149H14.688C14.52 3.96049 13.958 3.50049 13.286 3.50049Z" fill="currentColor">
                                    </path>
                                </svg>
                            </i>
                            <span class="item-name">UI Elements</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="ui"  data-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-avatars.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> A</i>
                                    <span class="item-name">Avatars</span>
                                </a>
                            </li>
                                <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-alerts.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> A </i>
                                    <span class="item-name">Alerts</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-badges.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> B </i>
                                    <span class="item-name">Badge</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-breadcrumb.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> B </i>
                                    <span class="item-name">Breadcrumb</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-buttons.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> B </i>
                                    <span class="item-name">Buttons</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-buttons-group.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> B </i>
                                    <span class="item-name">Buttons Group</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-boxshadow.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> B </i>
                                    <span class="item-name">Box Shadow</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-color.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> C</i>
                                    <span class="item-name">Colors</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-cards.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> C </i>
                                    <span class="item-name">Cards</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-carousel.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> C </i>
                                    <span class="item-name">Carousel</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-grid.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> G </i>
                                    <span class="item-name">Grid</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-helper-classes.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> H </i>
                                    <span class="item-name">Helper classes</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-images.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> I </i>
                                    <span class="item-name">Images</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-list-group.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">List Group</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-modal.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> M </i>
                                    <span class="item-name">Modal</span>
                                </a>
                            </li>
                                <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-notifications.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> N </i>
                                    <span class="item-name">Notifications</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-pagination.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> P </i>
                                    <span class="item-name">Pagination</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-popovers.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> P </i>
                                    <span class="item-name">Popovers</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-typography.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> T </i>
                                    <span class="item-name">Typography</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-tabs.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> T </i>
                                    <span class="item-name">Tabs</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-tooltips.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> T </i>
                                    <span class="item-name">Tooltips</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/ui-elements/ui-embed-video.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> V </i>
                                    <span class="item-name">Video</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-widget" role="button" aria-expanded="false" aria-controls="sidebar-widget">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M21.25 13.4764C20.429 13.4764 19.761 12.8145 19.761 12.001C19.761 11.1865 20.429 10.5246 21.25 10.5246C21.449 10.5246 21.64 10.4463 21.78 10.3076C21.921 10.1679 22 9.97864 22 9.78146L21.999 7.10415C21.999 4.84102 20.14 3 17.856 3H6.144C3.86 3 2.001 4.84102 2.001 7.10415L2 9.86766C2 10.0648 2.079 10.2541 2.22 10.3938C2.36 10.5325 2.551 10.6108 2.75 10.6108C3.599 10.6108 4.239 11.2083 4.239 12.001C4.239 12.8145 3.571 13.4764 2.75 13.4764C2.336 13.4764 2 13.8093 2 14.2195V16.8949C2 19.158 3.858 21 6.143 21H17.857C20.142 21 22 19.158 22 16.8949V14.2195C22 13.8093 21.664 13.4764 21.25 13.4764Z" fill="currentColor"></path>
                                    <path d="M15.4303 11.5887L14.2513 12.7367L14.5303 14.3597C14.5783 14.6407 14.4653 14.9177 14.2343 15.0837C14.0053 15.2517 13.7063 15.2727 13.4543 15.1387L11.9993 14.3737L10.5413 15.1397C10.4333 15.1967 10.3153 15.2267 10.1983 15.2267C10.0453 15.2267 9.89434 15.1787 9.76434 15.0847C9.53434 14.9177 9.42134 14.6407 9.46934 14.3597L9.74734 12.7367L8.56834 11.5887C8.36434 11.3907 8.29334 11.0997 8.38134 10.8287C8.47034 10.5587 8.70034 10.3667 8.98134 10.3267L10.6073 10.0897L11.3363 8.61268C11.4633 8.35868 11.7173 8.20068 11.9993 8.20068H12.0013C12.2843 8.20168 12.5383 8.35968 12.6633 8.61368L13.3923 10.0897L15.0213 10.3277C15.2993 10.3667 15.5293 10.5587 15.6173 10.8287C15.7063 11.0997 15.6353 11.3907 15.4303 11.5887Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">widget</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-widget" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/widget/widgetbasic.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> W </i>
                                    <span class="item-name">Widget Basic</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/widget/widgetchart.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> W </i>
                                    <span class="item-name">Widget Chart</span>
                                </a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link " href="../dashboard/widget/widgetcard.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> W </i>
                                    <span class="item-name">Widget Card</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-maps" role="button" aria-expanded="false" aria-controls="sidebar-maps">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z" fill="currentColor"></path>
                                    <ellipse opacity="0.4" cx="12" cy="21" rx="5" ry="1" fill="currentColor"></ellipse>
                                </svg>
                            </i>
                            <span class="item-name">Maps</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-maps" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/maps/google.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> G </i>
                                    <span class="item-name">Google</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/maps/vector.html">
                                   <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> V </i>
                                    <span class="item-name">Vector</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-form" role="button" aria-expanded="false" aria-controls="sidebar-form">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Form</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-form" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/form/form-element.html">
                                   <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                   <i class="sidenav-mini-icon"> E </i>
                                   <span class="item-name">Elements</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/form/form-wizard.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> W </i>
                                    <span class="item-name">Wizard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/form/form-validation.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> V </i>
                                    <span class="item-name">Validation</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-table" role="button" aria-expanded="false" aria-controls="sidebar-table">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z" fill="currentColor" stroke="currentColor"/>
                                    <path d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20" stroke="currentColor"/>
                                </svg>
                            </i>
                            <span class="item-name">Table</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-table" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/table/bootstrap-table.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> B </i>
                                    <span class="item-name">Bootstrap Table</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/table/table-data.html">
                                   <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                   <i class="sidenav-mini-icon"> D </i>
                                   <span class="item-name">Datatable</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-icons" role="button" aria-expanded="false" aria-controls="sidebar-icons">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8 10.5378C8 9.43327 8.89543 8.53784 10 8.53784H11.3333C12.4379 8.53784 13.3333 9.43327 13.3333 10.5378V19.8285C13.3333 20.9331 14.2288 21.8285 15.3333 21.8285H16C16 21.8285 12.7624 23.323 10.6667 22.9361C10.1372 22.8384 9.52234 22.5913 9.01654 22.3553C8.37357 22.0553 8 21.3927 8 20.6832V10.5378Z" fill="currentColor"/>
                                    <rect opacity="0.4" x="8" y="1" width="5" height="5" rx="2.5" fill="currentColor"/>
                                </svg>
                            </i>
                            <span class="item-name">Icons</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-icons" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/icons/solid.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> S </i>
                                     <span class="item-name">Solid</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/icons/outline.html">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> O </i>
                                     <span class="item-name">Outlined</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/icons/dual-tone.html">
                                   <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> D </i>
                                     <span class="item-name">Dual Tone</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>        </div>        
            <div id="sidebar-footer" class="position-relative sidebar-footer">
                <div class="card mx-4">
                    <div class="card-body">
                        <div class="sidebarbottom-content">
                            <div class="image">
                                <img src="../assets/images/coins/13.png" alt="User-Profile" class="img-fluid">
                            </div>
                            <p class="mb-0">Be more secure with Pro Feature</p>
                            <button type="button" class="btn btn-primary mt-3">Upgrade Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>    <main class="main-content">
      <div class="position-relative">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar border-bottom pb-lg-3  pt-lg-3 ">
          <div class="container-fluid navbar-inner">
            <a href="../dashboard/index.html" class="navbar-brand">
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                 <svg width="20px" height="20px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
                </i>
            </div>
              <h4 class="title">
                Dashboard
              </h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <span class="navbar-toggler-bar bar1 mt-2"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto navbar-list mb-2 mb-lg-0 align-items-center">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="search-drop" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                          </svg>
                    </a>
                    <ul class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="search-drop">
                      <li class="">
                          <div class="p-3 card-header justify-content-between border-bottom rounded-top">
                            <div class="header-title">
                                <div class="iq-search-bar device-search  position-relative">
                                      <form action="#" class="searchbox">
                                        <input type="text" class="text search-input form-control bg-soft-primary" placeholder="Search here...">
                                        <a class="d-lg-none d-flex" href="javascript:void(0);">
                                            <span class="material-symbols-outlined">search</span>
                                        </a>
                                      </form>
                                </div>
                            </div>
                          </div>
                          <div class="p-0 card-body all-notification">
                            <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                  <div class="flex-shrink-0">
                                      <img src="../assets/images/avatars/01.png" class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                  </div>
                                  <div class="d-flex flex-column ms-3 w-100">
                                      <a href="javascript:void(0);" class="h6 mb-1">Paige Turner</a>
                                      <small>Paige001</small>
                                  </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                <div class="flex-shrink-0">
                                  <img src="../assets/images/avatars/02.png" class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                </div>
                                <div class="d-flex flex-column ms-3 w-100">
                                  <a href="javascript:void(0);" class="h6 mb-1">Monty Carlo</a>
                                  <small>Carlo.m</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center search-hover py-2 px-3 border-bottom">
                                <div class="flex-shrink-0">
                                  <img src="../assets/images/avatars/03.png" class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                </div>
                                <div class="d-flex flex-column ms-3 w-100">
                                  <a href="javascript:void(0);" class="h6 mb-1">Paul Molive</a>
                                  <small>Paul.45</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                <div class="flex-shrink-0">
                                  <img src="../assets/images/avatars/04.png" class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                </div>
                                <div class="d-flex flex-column ms-3 w-100">
                                  <a href="javascript:void(0);" class="h6 mb-1">Monty Carlo</a>
                                  <small>Carlo.m</small>
                                </div>
                            </div>
                          </div> 
                      </li>  
                    </ul>  
                </li>
                <li class="nav-item dropdown">
                  <a href="#"  class="nav-link" id="notification-drop" data-bs-toggle="dropdown" >
                    <svg width="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 17.8476C17.6392 17.8476 20.2481 17.1242 20.5 14.2205C20.5 11.3188 18.6812 11.5054 18.6812 7.94511C18.6812 5.16414 16.0452 2 12 2C7.95477 2 5.31885 5.16414 5.31885 7.94511C5.31885 11.5054 3.5 11.3188 3.5 14.2205C3.75295 17.1352 6.36177 17.8476 12 17.8476Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.3889 20.8572C13.0247 22.3719 10.8967 22.3899 9.51953 20.8572" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>                            
                    <span class="bg-danger dots"></span>
                  </a>
                  <div class="sub-drop dropdown-menu iq-noti dropdown-menu-end p-0" aria-labelledby="notification-drop">
                      <div class="card shadow-none m-0">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                              <p class="fs-6 ">New notifications.</p>
                            </div>
                            <div class="header-title">
                              <p class="fs-6">Mark all</p>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex">
                                  <img src="../assets/images/utilities/05.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img51"><div class="ms-3 w-100">
                                    <h6 class="mb-0 ">Successfull transaction og 0.01 BTC</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">15 mins ago</p>
                                        </div>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img src="../assets/images/utilities/03.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img52">
                                  </div>
                                  <div class="ms-3 w-100">
                                    <h6 class="mb-0 ">4 of Pending Transactions!</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">30 mins ago</p>
                                        
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <img src="../assets/images/utilities/04.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img53"><div class="ms-3 w-100">
                                    <h6 class="mb-0 ">Cancelled order of 2000 ICO</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">55 mins ago</p>
                                        
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <img src="../assets/images/utilities/05.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img54"><div class="w-100 ms-3">
                                    <h6 class="mb-0 ">Great speed notify of 1.34 LTC</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">14 Mar</p>
                                        
                                    </div>
                                  </div>
                              </div>
                            </a>
                        </div>
                      </div>
                  </div>
                </li>
                <li class="nav-item dropdown" >
                  <a href="#" class="nav-link" id="mail-drop" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                    <svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.9028 8.85107L13.4596 12.4641C12.6201 13.1301 11.4389 13.1301 10.5994 12.4641L6.11865 8.85107" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>                            
                    <span class="bg-primary count-mail"></span>
                  </a>
                  <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="mail-drop">
                      <div class="card shadow-none m-0">
                        <div class="card-header d-flex justify-content-between py-3">
                            <div class="header-title">
                              <p class="mb-0 text-white">Our Latest News</p>
                            </div>
                        </div>
                        <div class="card-body p-0 ">
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex ">
                                  <div class="">
                                    <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-50 avatar-rounded" alt="img55">
                                  </div>
                                  <div class=" w-100 ms-3">
                                    <h6 class="mb-0 ">Bitcoin</h6>
                                    <small class="float-left font-size-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex">
                                  <div class="">
                                    <img src="../assets/images/coins/03.png" class="img-fluid avatar avatar-50 avatar-rounded" alt="img56">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Ethereum</h6>
                                    <small class="float-left font-size-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex">
                                  <div class="">
                                    <img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-50 avatar-rounded" alt="img57">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Litecoin</h6>
                                    <small class="float-left font-size-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                  </div>
                              </div>
                            </a>
                        </div>
                      </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../assets/images/avatars/01.png" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded">
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li class="border-0"><a class="dropdown-item" href="../dashboard/app/user-profile.html">Profile</a></li>
                    <li class="border-0"><a class="dropdown-item" href="../dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>
                    <li class="border-0"><hr class="m-0 dropdown-divider"></li>
                    <li class="border-0"><a class="dropdown-item" href="../dashboard/auth/sign-in.html">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>        <!--Nav End-->
      </div>
      <div class="container-fluid content-inner pb-0">
<div class="row mb-4">
   <div class="col-lg-12">
         <div class="row align-items-center">
            <div class="col-xl-9 d-none d-md-block">
               <div class="card mb-0">
                  <div class="card-body ">
                     <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex">
                           <img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-40 avatar-rounded" alt="img8">
                           <div class="dropdown mt-2 ms-2">
                              <a href="#" class="text-white" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 <span class="mt-2">Litecoin</span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                 </svg>
                              </a>
                              <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img71"> 561,511 Btc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img72"> 561,511 Ltc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/03.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img73"> 561,511 Eth</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/08.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img74"> 561,511 Xmr</a></li>
                              </ul>
                           </div>                    
                           <div class="dropdown mt-2 ms-2">
                              <a href="#" class="text-white" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                 <span class="mt-2 ">BTC/USD</span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                 </svg>
                              </a>
                              <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton2">
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img71"> 561,511 Btc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img72"> 561,511 Ltc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/03.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img73"> 561,511 Eth</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/08.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img74"> 561,511 Xmr</a></li>
                              </ul>
                           </div> 
                        </div>
                        <div class="d-none d-lg-block w-50">
                           <div class="d-flex justify-content-evenly flex-1">
                              <span class=" text-primary">
                                 37,390.00<br>
                                 <small>$37,390.00</small>
                              </span>
                              <span class=" text-primary">
                                 129.51+0.8%<br>
                                 <small>24th changes</small>
                              </span>
                              <span class="">
                                 37,440.01<br>
                                 <small>24th high</small>
                              </span>
                              <span class="">
                                 37,327.30<br>
                                 <small>24th low</small>
                              </span>
                              <span class="d-none">
                                 37,390.00<br>
                                 <small>24th volume(BTC)</small>
                              </span>                     
                           </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                           <span class="">
                              <svg width="32" height="32" viewBox="0 0 34 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect x="6" width="1" height="53" rx="0.5" fill="white"/>
                              <rect x="0.5" y="9.5" width="12" height="34" rx="1.5" fill="#202022"/>
                              <rect x="0.5" y="9.5" width="12" height="34" rx="1.5" stroke="white"/>
                              <rect x="27" width="1" height="53" rx="0.5" fill="white"/>
                              <rect x="21.5" y="13.5" width="12" height="25" rx="1.5" fill="#202022"/>
                              <rect x="21.5" y="13.5" width="12" height="25" rx="1.5" stroke="white"/>
                              </svg>
                           </span>
                           <a href="#" class="bg-secondary rounded-1 p-2 ms-2">
                              <svg width="26" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M26.3875 14.1244L16.8484 23.7653L5.99906 16.9795C4.44458 16.0069 4.76794 13.6457 6.5262 13.1315L32.2854 5.58795C33.8954 5.11605 35.3876 6.62138 34.9093 8.23666L27.2885 33.9779C26.7664 35.7387 24.4187 36.0533 23.4553 34.4921L16.8433 23.767" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>     
            </div>      
            <div class="col-xl-3">
               <div class="d-grid grid-3-auto gap-card">
                  <div class="dropdown">
                     <button class="btn btn-primary w-100" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                        Buy / Sell
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <li class="cardbuysell mb-0">
                           <div class="card-body iq-extra">
                              <div class="d-flex justify-content-between">
                                 <div class="header-title">
                                    <p class="fs-6 ">Buy</p>
                                 </div>
                                 <div class="header-title">
                                    <p class="fs-6">Sell</p>
                                 </div>
                              </div>
                              <select class="form-select mb-3" aria-label="Default select example">
                                 <option>561,511 Btc</option>
                                 <option>561,511 Btc</option>
                                 <option>561,511 Ltc</option>
                              </select>
                              <div class="d-flex justify-content-between">
                                 <h6>Amount(USD)</h6>
                                 <h6 class="mt-3 text-warning">USD</h6>
                              </div>
                              <p>$5.696.24</p>
                              <div class="d-flex justify-content-between">
                                 <h6>Amount(BTC)</h6>
                                 <h6 class="mt-3 text-warning">BTC</h6>
                              </div>
                              <p>$5.696.24</p>             
                              <div class="d-grid">
                                 <button class="btn btn-primary" type="button">Buy BTC</button>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>            
                  <div class="dropdown">
                     <button class="btn btn-primary w-100" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                        + Add Crypto
                     </button>
                     <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton4">
                        <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img71"> 561,511 Btc</a></li>
                        <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img72"> 561,511 Ltc</a></li>
                        <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/03.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img73"> 561,511 Eth</a></li>
                        <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/08.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img74"> 561,511 Xmr</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
   </div>
</div>
<div class="row pt-2">
   <div class="col-lg-8">
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="col-lg-4">
                  <div class="card shining-card">
                     <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                           <div class="d-flex align-items-center gap-2">
                              <img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img60"> 
                              <span class="fs-5 me-2">Bitcoin</span>
                              <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#1aa053" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#1aa053" stroke="#1aa053"/>
                              </svg>
                           </div>
                           <div class="dropdown">
                              <a href="#" class="text-gray" id="dropdownMenuButton36" data-bs-toggle="dropdown" aria-expanded="true">
                                 <svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="#B3B3B7"></path>
                                 </svg>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton36" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 23px);" data-popper-placement="bottom-end">
                              <li><a class="dropdown-item" href="#">This Week</a></li>
                              <li><a class="dropdown-item" href="#">This Month</a></li>
                              <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                           
                        </div>                    
                        <div class="pt-3">
                           <h4 class="counter" style="visibility: visible;">$34.850,10</h4>
                           <div class="pt-3">
                              <small class="text-success">+ 0.8%</small>
                              <small class="ms-2">(BTC/USDT)</small>
                           </div>
                        </div>
                     </div>            
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card shining-card">
                     <div class="card-body">                    
                        <div class="d-flex justify-content-between align-items-center">
                           <div class="d-flex align-items-center gap-2">
                              <img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img60"> 
                              <span class="fs-5 me-2">Dash</span>
                              <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#1aa053" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#1aa053" stroke="#1aa053"/>
                              </svg>
                           </div>
                           <div class="dropdown">
                              <a href="#" class="text-gray" id="dropdownMenuButton36" data-bs-toggle="dropdown" aria-expanded="true">
                                 <svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="#B3B3B7"></path>
                                 </svg>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton36" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 23px);" data-popper-placement="bottom-end">
                              <li><a class="dropdown-item" href="#">This Week</a></li>
                              <li><a class="dropdown-item" href="#">This Month</a></li>
                              <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                           
                        </div>  
                        <div class="progress-detail pt-3">
                           <h4 class="counter" style="visibility: visible;">$2,138.87</h4>
                           <div class="pt-3">
                              <small class="text-success">+ 0.8%</small>
                              <small class="ms-2">(LTC/USDT)</small>
                           </div>
                        </div>
                     </div>            
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card shining-card">
                     <div class="card-body">                    
                        <div class="d-flex justify-content-between align-items-center">
                           <div class="d-flex align-items-center gap-2">
                              <img src="../assets/images/coins/03.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img60"> 
                              <span class="fs-5 me-2">Etherum</span>
                              <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#1aa053" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#1aa053" stroke="#1aa053"/>
                              </svg>
                           </div>
                           <div class="dropdown">
                              <a href="#" class="text-gray" id="dropdownMenuButton36" data-bs-toggle="dropdown" aria-expanded="true">
                                 <svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="#B3B3B7"></path>
                                 </svg>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton36" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 23px);" data-popper-placement="bottom-end">
                              <li><a class="dropdown-item" href="#">This Week</a></li>
                              <li><a class="dropdown-item" href="#">This Month</a></li>
                              <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                           
                        </div>
                        <div class="progress-detail pt-3">
                           <h4 class="counter" style="visibility: visible;">$34.850,10</h4>
                           <div class="pt-3">
                              <small class="text-success">+ 0.8%</small>
                              <small class="ms-2">(ETH/USDT)</small>
                           </div>
                        </div>
                     </div>            
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between flex-wrap">
                        <div class="header-title ">
                           <h4 class="card-title">Quick Trade</h4>        
                        </div>
                        <div class="d-flex">
                           <div class="dropdown p-0">
                              <button class="btn btn-soft-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                                 <img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img5">
                                 561,511 btc
                              </button>
                              <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton5">
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img75"> 561,511 Btc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img76"> 561,511 Ltc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/03.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img77"> 561,511 Eth</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/08.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img78"> 561,511 Xmr</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <form class="col-lg-12">
                           <div class="form-group mb-3">
                              <div class="input-group pt-1">
                                 <span class="input-group-text" id="basic-addon3">BTC</span>
                                 <input type="text" class="form-control col-lg-8" placeholder="0,000000" aria-label="Recipient's username" aria-describedby="basic-addon3">
                              </div>
                           </div>
                           <div class="form-group mb-3">
                              <div class="input-group pt-2">
                                 <span class="input-group-text" id="basic-addon4">BPL</span>
                                 <input type="text" class="form-control col-lg-8" placeholder="0,000000" aria-label="Recipient's username" aria-describedby="basic-addon3">
                              </div>
                              
                           </div>
                           <div class="form-group mb-3">
                              <div class="input-group pt-2">
                                 <span class="input-group-text" id="basic-addon6">Total</span>
                                 <input type="text" class="form-control col-lg-8" placeholder="0,000000" aria-label="Recipient's username" aria-describedby="basic-addon3">
                              </div>
                           </div>
                           <div class="">
                              <div class="d-grid gap-card grid-cols-2">
                                 <button class="btn btn-success" type="button">
                                    <span>BUY</span>
                                    <svg class="rotate-45" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.75 11.7256L4.75 11.7256" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.7002 5.70124L19.7502 11.7252L13.7002 17.7502" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                 </button>
                                 <button class="btn btn-danger" type="button">
                                    <span>SELL</span>
                                    <svg class="rotate-45" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>                                          
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="card">
                     <div class="card-header">
                        <div class="header-title ">
                           <h4 class="card-title">Account Summary</h4>        
                        </div>
                     </div>
                     <div class="card-body text-left">
                        <div class="row">
                        <div class="col-md-6"> 
                           <div class="card bg-soft-secondary align-items-start shadow-none mb-lg-0 pt-4 ps-4 pe-4">
                              <div class="avatar bg-secondary p-2 mb-2">
                                 <svg width="64" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M33.4767 40.8511H12.997C12.5855 40.8511 12.3502 40.3818 12.5963 40.052L34.1225 11.207C34.4103 10.8214 35.0233 11.0249 35.0233 11.506V30.7766C35.0233 31.0527 35.2471 31.2766 35.5233 31.2766H55.9584C56.3779 31.2766 56.6109 31.762 56.3486 32.0893L34.8669 58.8895C34.5714 59.2581 33.9767 59.0492 33.9767 58.5768V41.3511C33.9767 41.0749 33.7529 40.8511 33.4767 40.8511Z" stroke="white"/>
                                 </svg>
                              </div>
                              <small class="pt-4 mb-0 pb-1">This Week </small>                  
                              <div class="pt-2">
                                 <h3 class="counter" style="visibility: visible;">$3.45K
                                    <span>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="green">
                                       <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                       </svg>
                                    </span>
                                 </h3>
                                 <div class="pb-3 pt-3">
                                       <small>+ 64%</small>  
                                 </div> 
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6"> 
                           <div class="card bg-soft-secondary align-items-start pt-4 shadow-none mb-0  ps-4 pe-4">
                              <div class="avatar bg-secondary p-2 mb-2">
                                 <svg width="64" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7 41V16C7 15.4477 7.44772 15 8 15H35" stroke="white" stroke-linecap="round"/>
                                 <path d="M63.3612 39.8457C63.5522 39.6462 63.5452 39.3297 63.3457 39.1388C63.1462 38.9478 62.8297 38.9548 62.6388 39.1543L63.3612 39.8457ZM49.804 53.2893L49.4427 52.9436L49.804 53.2893ZM48.4021 53.3317L48.7418 52.9649L48.4021 53.3317ZM62.6388 39.1543L49.4427 52.9436L50.1652 53.635L63.3612 39.8457L62.6388 39.1543ZM48.7418 52.9649L7.33969 14.6331L6.66031 15.3669L48.0624 53.6986L48.7418 52.9649ZM49.4427 52.9436C49.254 53.1408 48.9421 53.1503 48.7418 52.9649L48.0624 53.6986C48.6632 54.2549 49.5991 54.2266 50.1652 53.635L49.4427 52.9436Z" fill="white"/>
                                 </svg>
                              </div>
                              <small class="pt-4 mb-0 pb-1">This Month </small>                  
                              <div class="pt-2">
                                 <h3 class="counter" style="visibility: visible;">$3.45K
                                    <span>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="red">
                                       <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                       </svg>
                                    </span>
                                 </h3>
                                 <div class="pt-3 pb-3">
                                    <small>- 31%</small>
                                 </div>
                              </div>
                           </div>
                        </div>              
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between flex-wrap gap-3">
                  <div class="header-title">
                     <h4 class="card-title mb-3">Market Overview</h4> 
                     <div class="d-flex align-items-center  flex-wrap gap-3">
                     <div class="d-flex align-items-center">
                        <div class="form-check active" >
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                           <label class="form-check-label" for="flexRadioDefault1">ETH
                           </label>
                        </div>
                     </div>
                     <div class="d-flex align-items-center">
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                           <label class="form-check-label" for="flexRadioDefault2">XMR
                           </label>
                        </div>
                     </div>
                     <div class="d-flex align-items-center">
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                           <label class="form-check-label" for="flexRadioDefault3">LTC
                           </label>
                        </div>
                     </div>
                     <div class="d-flex align-items-center">
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                           <label class="form-check-label" for="flexRadioDefault4">XMR
                           </label>
                        </div>
                     </div>
                  </div>        
                  </div>
                  <div class="dropdown">
                  <a class="btn btn-primary dropdown-toggle mt-2" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                     Weekly (2020)
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <li><a class="dropdown-item" href="#">Weekly (2020)</a></li>
                     <li><a class="dropdown-item" href="#">Monthly (2020)</a></li>
                     <li><a class="dropdown-item" href="#">Today (2020)</a></li>
                  </ul>
               </div>
               </div>
               
               
               <div class="card-body">
                  <div id="apex-candlestick-chart"></div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="card card-block card-stretch custom-scroll">
               <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                  <div class="caption">
                     <h4 class="font-weight-bold mb-2">Recent Trading Activities</h4>
                  </div>
                  <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                     <input type="checkbox" class="btn-check" id="btncheck1">
                     <label class="btn btn-sm btn-secondary active rounded-start" for="btncheck1">Monthly</label>

                     <input type="checkbox" class="btn-check" id="btncheck2">
                     <label class="btn btn-sm btn-secondary " for="btncheck2">Weekly</label>

                     <input type="checkbox" class="btn-check" id="btncheck3">
                     <label class="btn btn-sm btn-secondary rounded-end" for="btncheck3">Today</label>
                  </div>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table data-table mb-0">
                        <thead>
                           <tr>
                              <th scope="col">Name</th>
                              <th scope="col">Price</th>
                              <th scope="col">24h %</th>
                              <th scope="col">7d %</th>
                              <th scope="col">Market Cap</th>
                              <th scope="col">Volume(24th)</th>
                              <th scope="col">Circulating</th>
                              <th scope="col">Last 7 Days</th>
                           </tr>
                        </thead>
                           <tbody>
                              <tr class="white-space-no-wrap">
                                 <td>
                                    <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                    Bitcoin BTC<a href="#" class="button btn-primary badge ms-2" >Buy</a>
                                 </td>
                                 <td class="pe-2">$40,501.87</td>
                                 <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                    </svg>
                                    6.93%
                                 </td>
                                 <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                    </svg>
                                    4.58%
                                 </td>
                                 <td>$123,456,789,159</td>
                                 <td>$373,359,580,155<br>
                                    <small class="ms-5">635,237 BTC</small>
                                 </td>
                                 <td class="ms-5">18,777,768 BTC</td>
                                 <td>
                                    <div class="d-flex justify-content-between">
                                       <div id="sparklinechart-1"></div>             
                                       <div class="dropdown ms-4">
                                          <svg xmlns="http://www.w3.org/2000/svg" role="tablist" width="20" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                          </svg>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                             <li><a class="dropdown-item" href="#">View Charts</a></li>
                                             <li><a class="dropdown-item" href="#">View Markets</a></li>
                                             <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="white-space-no-wrap">
                                 <td>
                                       <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                       Ethereum ETH<a href="#" class="button btn-primary badge ms-2">Buy</a>
                                 </td>
                                 <td class="pe-2">$2,796.60</td>
                                 <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                    </svg>
                                    3.33%
                                 </td>
                                 <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                    </svg>
                                    15.45%
                                 </td>
                                 <td>$123,456,789,159</td>
                                 <td>$373,359,580,155<br>
                                    <small class="ms-5">635,237 BTC</small>
                                 </td>
                                 <td class="ms-5">18,777,768 BTC</td>
                                 <td>
                                    <div class="d-flex justify-content-between">
                                       <div id="sparklinechart-2"></div>             
                                       <div class="dropdown ms-4">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" role="tablist" id="dropdownMenuButton8" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                          </svg>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton8">
                                             <li><a class="dropdown-item" href="#">View Charts</a></li>
                                             <li><a class="dropdown-item" href="#">View Markets</a></li>
                                             <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="white-space-no-wrap">
                                 <td>
                                       <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                       Monero XMR<a href="#" class="button btn-primary badge ms-2">Buy</a>
                                 </td>
                                 <td class="pe-2">$1.00</td>
                                 <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                    </svg>
                                    0.01%
                                 </td>
                                 <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                    </svg>
                                    0.02%
                                 </td>
                                 <td>$123,456,789,159</td>
                                 <td>$373,359,580,155<br>
                                    <small class="ms-5">635,237 BTC</small>
                                 </td>
                                 <td class="ms-5">18,777,768 BTC</td>
                                 <td>
                                    <div class="d-flex justify-content-between">
                                       <div id="sparklinechart-3"></div>             
                                       <div class="dropdown ms-4">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" role="tablist" id="dropdownMenuButton9" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                          </svg>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton9">
                                             <li><a class="dropdown-item" href="#">View Charts</a></li>
                                             <li><a class="dropdown-item" href="#">View Markets</a></li>
                                             <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="white-space-no-wrap">
                                 <td>
                                       <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                       Litecoin LTC<a href="#" class="button btn-primary badge ms-2" >Buy</a>
                                 </td>
                                 <td class="pe-2">$40,501.87</td>
                                 <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                    </svg>
                                    6.93%
                                 </td>
                                 <td class="text-success">
                                    <svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                    </svg>
                                    4.58%
                                 </td>
                                 <td>$123,456,789,159</td>
                                 <td>$373,359,580,155<br>
                                    <small class="ms-5">635,237 BTC</small>
                                 </td>
                                 <td class="ms-5">18,777,768 BTC</td>
                                 <td>
                                    <div class="d-flex justify-content-between">
                                       <div id="sparklinechart-4"></div>             
                                       <div class="dropdown ms-4">
                                          <svg xmlns="http://www.w3.org/2000/svg" role="tablist" width="20" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                          </svg>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                             <li><a class="dropdown-item" href="#">View Charts</a></li>
                                             <li><a class="dropdown-item" href="#">View Markets</a></li>
                                             <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="white-space-no-wrap">
                                 <td>
                                       <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                       Bitcoin BTC<a href="#" class="button btn-primary badge ms-2">Buy</a>
                                 </td>
                                 <td class="pe-2">$40,501.87</td>
                                 <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                    </svg>
                                    6.93%
                                 </td>
                                 <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                    </svg>
                                    4.58%
                                 </td>
                                 <td>$123,456,789,159</td>
                                 <td>$373,359,580,155<br>
                                    <small class="ms-5">635,237 BTC</small>
                                 </td>
                                 <td class="ms-5">18,777,768 BTC</td>
                                 <td>
                                    <div class="d-flex justify-content-between">
                                       <div id="sparklinechart-5"></div>             
                                       <div class="dropdown ms-4">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" id="dropdownMenuButton11" role="tablist" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                          </svg>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                             <li><a class="dropdown-item" href="#">View Charts</a></li>
                                             <li><a class="dropdown-item" href="#">View Markets</a></li>
                                             <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              
                           </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-4">
      <div class="row">
         <div class="col-lg-12">
               <div class="card">
                  <div class="card-body d-flex align-items-center justify-content-center">
                     <img src="../assets/images/coins/14.png" class="img-fluid p-0 img-right-banner-top" alt="img60">
                  </div>
               </div>
         </div>
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <div class="header-title">
                        <h4 class="card-title">History</h4>
                  </div>
               </div>
               <div class="card-body">
                  <ul class="list-inline m-0 p-0">
                     <li class="d-flex  align-items-center pt-3">
                        <div class="d-flex justify-content-between rounded-pill gap-3 flex-wrap flex-md-nowrap"><img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-40 avatar-rounded" alt="img6">
                           <div class="flex-grow-1">
                           <h5 class="mb-2 d-inline-block">Bitcoin</h5>
                           <p class=" text-success mb-2 d-inline-block ms-1">+$10,00</p>
                           <p class="fs-6">Bitcoins Evolution™. 234000 Satisfied Customers From 107 Countries.</p>
                           </div>
                           <div class="">
                              <p>11/02/21</p>
                           </div>
                        </div>
                     </li>
                     <li class="d-flex  align-items-center pt-3">
                        <div class="d-flex justify-content-between rounded-pill gap-3 flex-wrap flex-md-nowrap"><img src="../assets/images/coins/09.png" class="img-fluid avatar avatar-40 avatar-rounded" alt="img7">
                           <div class="flex-grow-1">
                           <h5 class="mb-2 d-inline-block">Ethereum</h5>
                           <p class=" text-danger mb-2 d-inline-block ms-1">-$50,00</p>
                           <p class="fs-6">Ethereum is a decentralized, blockchain with smart contract functionality</p>
                           </div>
                           <div class="">
                              <p>11/02/21</p>
                           </div>
                        </div>
                     </li>
                     <li class="d-flex  align-items-center pt-3">
                        <div class="d-flex justify-content-between rounded-pill gap-3 flex-wrap flex-md-nowrap"><img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-40 avatar-rounded" alt="img8">
                           <div class="flex-grow-1">
                           <h5 class="mb-2 d-inline-block">Litecoin</h5>
                           <p class=" text-danger mb-2 d-inline-block ms-1">-$50,00</p>
                           <p class="fs-6">Litecoin is a peer-to-peer cryptocurrency and open-source software</p>
                           </div>
                           <div class="">
                              <p>11/02/21</p>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between flex-wrap">
                  <div class="header-title">
                     <h4 class="card-title">Quick Transfer</h4>          
                  </div>
               </div>
               <div class="card-body">
                  <div class= "d-grid grid-cols-5 gap-card mb-4">
                     <div class="">
                        <img src="../assets/images/avatars/02.png" class="img-fluid avatar avatar-30px avatar-rounded" alt="img36">
                     </div>
                     <div class="">
                        <img src="../assets/images/avatars/03.png" class="img-fluid avatar avatar-30px avatar-rounded" alt="img37">
                     </div>
                     <div class="">
                        <img src="../assets/images/avatars/04.png" class="img-fluid avatar avatar-30px avatar-rounded" alt="img38">
                     </div>
                     <div class="">
                        <img src="../assets/images/avatars/05.png" class="img-fluid avatar avatar-30px avatar-rounded" alt="img39">
                     </div>
                     <div class="">
                        <img src="../assets/images/avatars/06.png" class="img-fluid avatar avatar-30px avatar-rounded" alt="img40">
                     </div>
                  </div>
                  <div class="input-group mb-4">
                     <span class="input-group-text" id="basic-addon7">Amount</span>
                     <input type="text" class="form-control col-lg-8" placeholder="126.5" aria-label="Recipient's username" aria-describedby="basic-addon3">
                  </div>  
                  <div class="d-grid grid-cols-1 gap-card justify-content-between">
                  <div>
                     <button type="button" class="btn btn-primary w-100">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M8.74074 8.25926L2 6.7037L16 1M8.74074 8.25926L10.8148 15L16 1M8.74074 8.25926L16 1" stroke="white"/>
                        </svg>
                        <span class="ms-2">Transfer Now</span>
                     </button>
                  </div>
               </div>
               </div>
            </div>
      </div>
      <div class="col-md-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-3">
               <div class="header-title">
                  <h4 class="card-title">Earnings</h4>            
               </div>   
               <div class="dropdown">
                  <a href="#" class="btn btn-primary dropdown-toggle " id="dropdownMenuButton12" data-bs-toggle="dropdown" aria-expanded="false">
                     This Week
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton12">
                     <li><a class="dropdown-item" href="#">This Week</a></li>
                     <li><a class="dropdown-item" href="#">This Month</a></li>
                     <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
               </div>
            </div>
            <div class="card-body">
               <div class="d-flex flex-wrap align-items-center justify-content-between">
                  <div id="multiple-radialbar-chart" class="col-md-8 col-lg-8 multiple-radialbar-chart"></div>
                  <div class="d-grid gap col-md-4 col-lg-4">
                     <div class="d-flex align-items-start">
                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#00EC42">
                           <g>
                              <circle cx="12" cy="12" r="8" fill="#00EC42"></circle>
                           </g>
                        </svg>
                        <div class="ms-3">
                           <span class="text-light">Bitcoin</span>
                        </div>
                     </div>
                     <div class="d-flex align-items-start">
                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#FF2E2E">
                           <g>
                              <circle cx="12" cy="12" r="8" fill="#FF2E2E"></circle>
                           </g>
                        </svg>
                        <div class="ms-3">
                           <span class="text-light">Litecoin</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </div>
</div>

      </div>
      <footer class="footer">
          <div class="footer-body">
              <ul class="left-panel list-inline mb-0 p-0">
                  <li class="list-inline-item"><a href="../dashboard/extra/privacy-policy.html" class="text-white">Privacy Policy</a></li>
                  <li class="list-inline-item"><a href="../dashboard/extra/terms-of-service.html" class="text-white">Terms of Use</a></li>
              </ul>
              <div class="right-panel">
                  ©<script>document.write(new Date().getFullYear())</script> COINEX, Made with
                  <span class="text-gray">
                      <svg width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                      </svg>
                  </span> by <a href="https://iqonic.design/" target="_blank">IQONIC Design</a>.
              </div>
          </div>
      </footer>    </main>
     
    <!-- Wrapper End-->
    <!-- offcanvas start -->

    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/core/libs.min.js"></script>
    <script src="../assets/js/core/external.min.js"></script>
    
    <!-- widgetchart JavaScript -->
    <script src="../assets/js/charts/widgetcharts.js"></script>
    
    <!-- GSAP Animation JS-->
    <script src="../assets/vendor/gsap/gsap.min.js"></script>
    <script src="../assets/vendor/gsap/ScrollTrigger.min.js"></script>
    
    <!-- fslightbox JavaScript -->
    <script src="../assets/js/fslightbox.js"></script>
    
    <!-- Mapchart JavaScript -->
    <script src="../assets/js/charts/vector-chart.js"></script>
    <script src="../assets/js/charts/dashboard.js"></script>
    
    <!-- app JavaScript -->
    <script src="../assets/js/coinex.js"></script>
    
    <!-- apexchart JavaScript -->
    <script src="../assets/js/charts/apexcharts.js"></script>
    
    <!-- Gsap Animation Init -->
    <script src="../assets/js/gsap.js"></script>  </body>
</html>