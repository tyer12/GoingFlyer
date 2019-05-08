<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

	<title>Comila HTML CSS Template</title>
<!--
Comila Template
http://www.templatemo.com/tm-490-comila
-->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- stylesheets css -->
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>">

  	<link rel="stylesheet" href="<?php echo e(asset('css/et-line-font.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">

  	<link rel="stylesheet" href="<?php echo e(asset('css/vegas.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

	<link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>

</head>
<body>

<!-- preloader section -->
<section class="preloader">
	<div class="sk-circle">
       <div class="sk-circle1 sk-child"></div>
       <div class="sk-circle2 sk-child"></div>
       <div class="sk-circle3 sk-child"></div>
       <div class="sk-circle4 sk-child"></div>
       <div class="sk-circle5 sk-child"></div>
       <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
       <div class="sk-circle8 sk-child"></div>
       <div class="sk-circle9 sk-child"></div>
       <div class="sk-circle10 sk-child"></div>
       <div class="sk-circle11 sk-child"></div>
       <div class="sk-circle12 sk-child"></div>
     </div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="home-thumb">
					<h1 class="wow fadeInUp" data-wow-delay="0.4s">Bem Vindo, ao GoingFlyer</h1>
          			<h3 class="wow fadeInUp" data-wow-delay="0.6s">Este programa foi realizado para ajudar jovems engenheiros aéronauticos com as suas reparações!</h3>
          			<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-lg btn-success smoothScroll wow fadeInUp" data-wow-delay="1.0s">Criar Conta</a>
        			<a href="#" data-toggle="modal" data-target="#modal2" class="btn btn-lg btn-success smoothScroll wow fadeInUp" data-wow-delay="1.0s">Login</a>
				</div>
			</div>

		</div>
	</div>		
</section>

<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">

      <div class="col-md-6 col-sm-12">
        <img src="<?php echo e(asset('images/about-img.png')); ?>" class="img-responsive wow fadeInUp" alt="About">
      </div>

			<div class="col-md-6 col-sm-12">
				<div class="about-thumb">
					<div class="section-title">
						<h1 class="wow fadeIn" data-wow-delay="0.2s">our company</h1>
						<h3 class="wow fadeInUp" data-wow-delay="0.4s">Comila Studio is based in Hong Kong</h3>
					</div>
					<div class="wow fadeInUp" data-wow-delay="0.6s">
						<p>Vivamus elit risus, porttitor id placerat ut, aliquet non quam. Pellentesque nulla metus, ornare et porttitor vel, consectetur vitae erat. Vestibulum tristique semper tellus vitae condimentum. Duis sed eros eget diam dictum posuere.</p>
						<p>Aliquam vel gravida ligula. Phasellus ut purus ac libero ultrices commodo commodo at quam. In vestibulum purus sit amet tempus euismod. Donec sed congue nisl.</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- feature section -->
<section id="feature">
  <div class="container">
    <div class="row">
      
      <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
        <path d="M0 0 L50 100 L100 0 Z"></path>
      </svg>

      <div class="col-md-4 col-sm-6">
        <div class="media wow fadeInUp" data-wow-delay="0.4s">
          <div class="media-object media-left">
            <i class="icon icon-laptop"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Responsive</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="media wow fadeInUp" data-wow-delay="0.8s">
          <div class="media-object media-left">
            <i class="icon icon-refresh"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Bootstrap</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-8">
        <div class="media wow fadeInUp" data-wow-delay="1.2s">
          <div class="media-object media-left">
            <i class="icon icon-chat"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Support</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut.</p>
          </div>
        </div>
      </div>

      <div class="clearfix text-center col-md-12 col-sm-12">
        <a href="#contact" class="btn btn-default smoothScroll">Talk to us</a>
      </div>

    </div>
  </div>
</section>

<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="section-title">
					<h1 class="wow fadeInUp" data-wow-delay="0.3s">Get in touch</h1>
					<p class="wow fadeInUp" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
				</div>
				<div class="contact-form wow fadeInUp" data-wow-delay="1.0s">
					<form id="contact-form" method="post" action="#">
                        <div class="col-md-6 col-sm-6">
                          	<input name="name" type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          	<input name="email" type="email" class="form-control" placeholder="Your Email" required>
                        </div>
           			  	<div class="col-md-12 col-sm-12">
				   			<textarea name="message" class="form-control" placeholder="Message" rows="6" required></textarea>
           			  	</div>
						<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
							<input name="submit" type="submit" class="form-control submit" id="submit" value="SEND MESSAGE">
						</div>
					</form>
				</div>
			</div>
	
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">

      <svg class="svgcolor-light" preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0 L50 100 L100 0 Z"></path>
      </svg>

      <div class="col-md-4 col-sm-6">
        <h2>comila</h2>
          <div class="wow fadeInUp" data-wow-delay="0.3s">
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut. Etiam a tellus magna.</p>
             <p class="copyright-text">Copyright &copy; 2016 Your Company <br>
             Designed by <a rel="nofollow" href="http://www.google.com/+templatemo" target="_parent">Templatemo</a></p>
          </div>
      </div>

      <div class="col-md-1 col-sm-1"></div>

      <div class="col-md-4 col-sm-5">
        <h2>Our Studio</h2>
        <p class="wow fadeInUp" data-wow-delay="0.6s">
          120-240 aliquam augue libero,<br>
          Convallis in vulputate 10220 <br>
          San Francisco, CA, USA
        </p>
        <ul class="social-icon">
          <li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.9s"></a></li>
          <li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="1.2s"></a></li>
          <li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="1.4s"></a></li>
          <li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="1.6s"></a></li>
        </ul>
      </div>

		</div>
	</div>
</footer>

<!-- modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title">criar Conta</h2>
          </div>
          <form action="#" method="post">
            <input name="name" type="text" class="form-control" id="name" value required autocomplete = "name" autofocus placeholder="Nome">
            <input name="email" type="email" class="form-control" id="email" value required autocomplete = "email" placeholder="Email Address">
            <input name="password" type="password" class="form-control" id="password" required autocomplete = "new-password" placeholder="Password">
            <input name="password_confirmation" type="password" class="form-control" id="password-confirm" required autocomplete = "new-password" placeholder="Confirm Password">
            <button type="submit" class="btn btn-primary"> Register </button>
          </form>
        </div>
    </div>
  </div>
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">Login</h2>
        </div>
        <form action="#" method="post">
          <input name="email" type="email" class="form-control" id="email" value required autocomplete = "email" autofocus placeholder="Email Address">
          <input name="password" type="password" class="form-control" id="password" required autocomplete = "current-password" placeholder="Password">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember">
            <label class="form-check-label" for="remember">
                <strong>Remember Me</strong>
            </label>
        </div>
          <button type="submit" class="btn btn-primary"> Login </button>
        </form>
        <a class="btn btn-link" href="http://127.0.0.1:8000/password/reset">
            Forgot Your Password?
        </a>
      </div>
  </div>
</div>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- javscript js -->
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

<script src="<?php echo e(asset('js/vegas.min.js')); ?>"></script>

<script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/smoothscroll.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\GoingFlyer\resources\views/index.blade.php ENDPATH**/ ?>