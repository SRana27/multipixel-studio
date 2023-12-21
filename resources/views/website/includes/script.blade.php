

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}website-assets/lib/wow/wow.min.js"></script>
<script src="{{asset('/')}}website-assets/lib/easing/easing.min.js"></script>
<script src="{{asset('/')}}website-assets/lib/waypoints/waypoints.min.js"></script>
<script src="{{asset('/')}}website-assets/lib/owlcarousel/owl.carousel.min.js"></script>
<!-- Template Javascript -->
<script src="{{asset('/')}}website-assets/js/main.js"></script>
<script src="{{asset('/')}}website-assets/js/sweetalert.mim.js"></script>


<script>
    const activePage=window.location.href;
     console.log(`${activePage}`);
    const navLinks =document.querySelectorAll('.nav-link').
    forEach(link => {
        if(link.href.includes(`${activePage}`)){
            link.classList.add('active').siblings().removeClass('active');
        }
    })

</script>
<script>
    const activePage=window.location.href;
    console.log(`${activePage}`);
    const dropdown =document.querySelectorAll('.dropdown-item').
    forEach(link => {
        if(link.href.includes(`${activePage}`)){
            link.classList.add('active').siblings().removeClass('active');
        }
    })
    </script>
<script>
    $('#submit').click(function () {
      var name=$('#name').val();
      var email=$('#email').val()
        var subject=$('#subject').val()
        var message=$('#message').val()

        function IsEmail(email) {
            const regex = /([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            }
            else {
                return true;
            }
        }

         if( name == '' || email == '' || subject == '' || message ==''){
             swal("Empty field!", "please fill the empty field ","error");
             return false;
         }else
        if(IsEmail(email) === false) {
             swal("Invalid email!", "please enter valid email","error");
            return false;

        }else if(IsEmail(email) === true) {
            swal("success!", "send message successfully ","success");


        }


    })
</script>


