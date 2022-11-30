<?php
    include "Controller/infoC.php";
    $controller = new infoC();
    $tab = $controller->get_info();
    foreach($tab as $t){
        $id= $t['id'];
        $adress=$t['Adress'];
        $tel=$t['phone'];
        $email=$t['Email'];
        $about = $t['About'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Cool&Bnin - Register</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        /*** modified now ***/
.loginform{
    width:80%;
    margin:1% auto;
    height:auto;
 
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    
}
.loginform input{
display:block;
width:50%;
border-radius:5px;
outline:none;

margin-bottom: 1%;
padding:0.5rem 0.25rem;

}
.loginform input::placeholder{
    color:#999;
    font-size:14px;
}

.loginform button{
    width:25%;
    background:#fea116;
    color:white;
    transition:all .4s ease-in-out;
    border-radius:5px;
    outline:0;
    padding:5px;
    border-color:#fea116;
}
.loginform button:hover{
background:transparent;
color:#FEA116;
}
.loginform a:hover{
    color:#bbb;
}
.div-for-a>a{
    margin-left:30%;
    text-indent: 2px;
}
.bkngtobe{
    display:block;
    margin:10% auto;
}

    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Cool&Bnin</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.php" class="dropdown-item">Booking</a>
                                <a href="team.php" class="dropdown-item">Our Team</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="login.php" class="btn btn-primary py-2 px-4 ">Login</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Welcome!</h1>
    
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Register</h5>
                    <h1 class="mb-5">We Are Happy To Have You</h1>
                </div>
                <!-- <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary bkngtobe">Booking</h5>
                               
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Technical</h5>
                             
                            </div>
                        </div>
                    </div> -->
                   
                    <div class="col-md-12">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <!-- <form>
                                <div class="">
                                    <div class="">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form> -->
                            <form class="loginform" action="senduserinfo.php" METHOD="POST" enctype="multipart/form-data" id="myf">
                                <div class="">
                                    <h5 class="section-title ff-secondary fw-normal text-primary bkngtobe">FirstName</h5>
                                </div>
                                <input type="text" placeholder="First Name" id="firstname" onkeyup="verif_firstname()" name="Firstname" required>
                                <h3 id="firstname_"></h3>

                                <div class="">
                                    <h5 class="section-title ff-secondary fw-normal text-primary bkngtobe">LastName</h5>
                                </div>
                                <input type="text" placeholder="Last Name" id="last_name" onkeyup="verif_lastname()" name="Lastname" required>
                                <h3 id="last_name_"></h3>

                                <div class="">
                                    <h5 class="section-title ff-secondary fw-normal text-primary bkngtobe">Email</h5>
                                </div>
                                <input type="text" placeholder="Email" id="myemail" onkeyup="verif_email()" name="Email" required>
                                <h3 id="myemail_"></h3>

                                <div class="">
                                    <h5 class="section-title ff-secondary fw-normal text-primary bkngtobe">Phone</h5>
                                </div>
                                <input type="number" placeholder="phone" id="mynum" onkeyup="verif_phone()" name="phone" required>
                                <h3 id="mynumber"></h3>


                                <div class="">
                                    <h5 class="section-title ff-secondary fw-normal text-primary bkngtobe">Password</h5>
                                </div>
                                <input type="password" placeholder="password" id="mypass" onkeyup="ispassword_strong()" name="password" required>
                                <h3 id="mypassword_orig"></h3>

                                <div class="">
                                    <h5 class="section-title ff-secondary fw-normal text-primary bkngtobe">Confirm Password</h5>
                                </div>
                                <input type="password" placeholder="Confirm your password" onkeyup="verifpwd()" id="mypassconfirm" name="confirm_password" required>
                                <h3 id="mypassword_correct"></h3>

                                
                                <div class="">
                                    <h5 class="section-title ff-secondary fw-normal text-primary bkngtobe">Your Photo</h5>
                                </div>
                               
                                <input style="margin-left:25%;" type="file" id="myFile" name="photo">
                                
                               
                                <button type="submit">Register</button>
            
                               
                            </form>
                            <div class="div-for-a"><a href="index.html">Go Back To Main Page</a></div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $adress?></p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo $tel ?></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $email ?></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Restoran</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							<!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        function verifpwd(){
    let input =  document.getElementById("mypass").value;
    let input_c = document.getElementById("mypassconfirm").value;
    console.log("mypass = ", input);
    console.log("myconfirm pass = ",input_c);
    var pass_confirm = false;
    if(input === input_c){           
        document.getElementById("mypassword_correct").innerHTML = "<h6 style = 'color: red;'></h6>"; 
        pass_confirm = true;           

    }else{
        document.getElementById("mypassword_correct").innerHTML = "<h6 style = 'color: red;'>Password Don't Match</h6>";            }
        pass_confirm = false
    }
    var pass_strong = false;
    function ispassword_strong(){
        let password =  document.getElementById("mypass").value;
         
    var lettre_maj = 0;
    var lettre_min = 0;
    var num_number = 0;
for(var i = 0 ; i < password.length ; i++){
if((password[i].charCodeAt() >= 97 && password[i].charCodeAt() <= 122)){
    lettre_min ++;
}else if((password[i].charCodeAt() >= 65 && password[i].charCodeAt() <= 90)){
    lettre_maj ++;
}else if((password[i].charCodeAt() >= 48 && password[i].charCodeAt() <= 57)){
    num_number ++;
}
}

if(password.length>=10 && lettre_maj>=1 && lettre_min >=1 && num_number >=1){
document.getElementById("mypassword_orig").innerHTML = "<h6 style = 'color: green;'>Strong Password</h6>";
pass_strong = true;
}else {
if(password.length === 0){
    document.getElementById("mypassword_orig").innerHTML = "<h6 style = 'color: red;'>Password Required</h6>";
    pass_strong = false;
}else
document.getElementById("mypassword_orig").innerHTML = "<h6 style = 'color: Orange;'>Weak Password</h6>";
pass_strong = false;
}

    }
 var phone_valid = false;
    function verif_phone(){
        let input =  document.getElementById("mynum").value;
        if(input ===""){
            document.getElementById("mynumber").innerHTML = "<h6 style = 'color: red;'>Phone Required</h6>";
        }else{
            if(input.length==8){
                document.getElementById("mynumber").innerHTML = "<h6 style = 'color: green;'>Valid</h6>";
                phone_valid = true;
            }else{
                document.getElementById("mynumber").innerHTML = "<h6 style = 'color: red;'>Not Valid</h6>";
                phone_valid = false;
            }
        }
}
var verif_emaile = false;
function verif_email(){
    input = document.getElementById("myemail").value;
    if(input == ""){
        document.getElementById("myemail_").innerHTML = "<h6 style = 'color: red;'>Email Required</h6>";
    }else{
        let pos_alt = -1;
        let alt_there = false;
        let pos_pt = -1;
            for(let i = 0 ; i < input.length ; i++){
                if(input[i] === "@"){
                    pos_alt = i;
                    alt_there = true;
                }
                if(input[i] === "."){
                    pos_pt = i;
                }
            }
            if(pos_pt > pos_alt && alt_there == true){
                document.getElementById("myemail_").innerHTML = "<h6 style = 'color: green;'>Valid</h6>";
                verif_emaile = true;
            }else{
                document.getElementById("myemail_").innerHTML = "<h6 style = 'color: red;'>Unvalid</h6>";
                verif_emaile = false;

            }
    }
    
}
var valid_firstname = false;
function verif_firstname(){
    input = document.getElementById("firstname").value;
    if(input.length > 3){
        document.getElementById("firstname_").innerHTML = "<h6 style = 'color: green;'>Valid</h6>";
        valid_firstname = true;
    }else{
        document.getElementById("firstname_").innerHTML = "<h6 style = 'color: red;'>Unvalid</h6>";
        valid_firstname = false;
    }
}
var valid_lastname = false;
function verif_lastname(){
    input = document.getElementById("last_name").value;
    if(input.length > 3){
        document.getElementById("last_name_").innerHTML = "<h6 style = 'color: green;'>Valid</h6>";
        valid_lastname = true;
    }else{
        document.getElementById("last_name_").innerHTML = "<h6 style = 'color: red;'>Unvalid</h6>";
        valid_lastname = false;
    }
}


    let form = document.getElementById('myf');
    form.addEventListener('submit',(e)=>{
        if(valid_lastname && valid_firstname && verif_emaile && phone_valid && pass_strong && pass_confirm ){

        }else{
        e.preventDefault();
        console.log("i prevented !");
        }
    })

    </script>
</body>

</html>