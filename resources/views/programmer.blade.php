<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AllTech</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">


  </head>

  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">programmer</h2>
      <hr class="star-dark mb-5">
      <div class="row">

        <div class="col-md-1 col-lg-2">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/programmer.png" alt="">
          </a>
        </div>

      </div>
    </div>
  </section>
  <section id="contact">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Coment for best service</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name of company</label>
                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Bad comments</label>
                <input class="form-control" id="phone" type="tel" placeholder="Bad comments" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Good comments </label>
                <textarea class="form-control" id="message" rows="5" placeholder="Good comments" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>




</html>
