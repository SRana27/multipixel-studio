<!-- Spinner Start -->
<div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-multipixeldeep" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid header-text py-1 d-none d-md-flex ">
    <div class="container">
        <div class="d-flex justify-content-between topbar">
            <div class="top-info" style="font-family:'Roboto Thin';font-size: 15px;padding-top: 7px">
                <small class="me-3 text-white"><a href="#"><i class="fas fa-map-marker-alt me-2 text-multipixel"></i></a>23 Ranking Street, New York</small>
                <small class="me-3 text-white"><a href="#"><i class="fas fa-envelope me-2 text-multipixel"></i></a>Email@Example.com</small>
            </div>
            <div id="note" class="text-white d-none d-xl-flex pt-1"><small> We help you to Grow your Business</small></div>
            <div class="top-link">
                <a href="https://discord.gg/p4uZfP7sRx" title="discord" class=" nav-fill btn btn-sm-square rounded-circle"><i class="bi bi-discord text-multipixel"></i></a>
                <a href="https://www.facebook.com/multipixelstudiousa"  title="facebook" class=" nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-multipixel"></i></a>
                <a href="https://www.linkedin.com/company/multipixelstudio?trk=public_jobs_topcard-org-name" title="linkedIn" class=" nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-linkedin-in text-multipixel"></i></a>
                <a href="https://www.instagram.com/multipixelstudio/?igsh=MTJidGFqbXN0M2dtZA%3D%3D"  title="instagram"  class=" nav-fill btn btn-sm-square rounded-circle  me-0"><i class="fab fa-instagram text-multipixel"></i></a>

            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid bg-multipixel-nav sticky-lg-top">
    <div class="container ">
        <nav class="navbar  navbar-expand-lg py-0 ">
            <a href="{{route('home')}}" class="navbar-brand">
                <img src="{{asset('/')}}website-assets/img/logo.png" alt="logo" height="50px" width="150px">
            </a>
            <button type="button" class="navbar-toggler me-0 "  data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
               <span><i class="fa fa-bars text-white"  aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <a href="{{route('home')}}" class="nav-item nav-link">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{route('service')}}" class="nav-item nav-link">Services</a>
                    <a href="{{route('project')}}" class="nav-item nav-link">Portfolio</a>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu  rounded ">
                            <a href="{{route('blog')}}" class=" dropdown-item">Our Blog</a>
                            <a href="{{route('team')}}" class=" dropdown-item">Our Team</a>
                            <a href="{{route('comment')}}" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-xl-flex flex-shirink-0">
                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                    <a href="" class="position-relative animated tada infinite">
                        <i class="fa fa-phone-alt text-white fa-1x"></i>
                        <div class="position-absolute" style="top: -14px; left: 12px;">
                            <span><i class="fa fa-comment-dots text-white"></i></span>
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column pe-4 border-end"style="font-family:'Roboto Thin';font-size: 14px">
                    <span class="text-white">Have any questions?</span>
                    <span class="text-white">Call: + 0123 456 7890</span>
                </div>
                <div class="d-flex align-items-center justify-content-center ms-4 ">
                    <a href=""><i class="bi bi-search text-white fa-1x"></i> </a>
                </div>

            </div>
        </nav>

    </div>
</div>
<!-- Navbar End -->

