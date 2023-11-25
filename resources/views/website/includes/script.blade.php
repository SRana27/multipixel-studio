

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}website-assets/lib/wow/wow.min.js"></script>
<script src="{{asset('/')}}website-assets/lib/easing/easing.min.js"></script>
<script src="{{asset('/')}}website-assets/lib/waypoints/waypoints.min.js"></script>
<script src="{{asset('/')}}website-assets/lib/owlcarousel/owl.carousel.min.js"></script>
<!-- Template Javascript -->
<script src="{{asset('/')}}website-assets/js/main.js"></script>

<script>
    const activePage=window.location.href;
     // console.log(`${activePage}`);
    const navLinks =document.querySelectorAll('.nav-link').
    forEach(link => {
        if(link.href.includes(`${activePage}`)){
            link.classList.add('active').siblings().removeClass('active');
        }
    })
</script>
