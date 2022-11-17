<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  href="style.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>caise</title>
</head>
<body>




<div style="background-image: url('images/img2.jpeg'); " class="image-fluid d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom container-fluid">
  
<div style="margin-left:5% "><a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <label for="">Caise</label>
      </a></div>
<div style="margin-left:15%">
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a id="menu" href="#" class="nav-link fw-bold px-5 js-scroll-trigger">Home</a></li>
        <li><a id="menu" href="#prod" class="nav-link fw-bold px-5 ">Produit</a></li>
        <li><a id="menu" href="#contact" class="nav-link fw-bold px-5 ">Contactez-nous</a></li>
      </ul>
</div>
      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-light me-4">Commander ici</button>
        <button type="button" class="btn btn-success">Whatsapp</button>
      </div>

      <div id="header" class="container-fluid  ">
        
                <div class="row gx-5 justify-content-center ">
                
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">LOGICIEL DE CAISSE ENREGISTREUSE POUR CAFÉ</h1>
                            <p class="lead text-white mb-4">Le meilleur logiciel de caisse du marché pour le secteur des Café.</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">DEMANDER VOTRE DEVIS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
   
                <!-- ====================Debut Produit========================= -->

         
                <div id="prod" class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="d-flex flex-column align-items-start gap-2">
        <h3 class="fw-bold">Notre logiciel a été conçu spécialement pour vous, les professionnels du Cafe.</h3>
        <!-- IDEE DE PHOTO ICI + ANNIMATION EN JAVASCRIPT 'REACT-JS' -->
      </div>
      <div class="row row-cols-1 row-cols-sm-2 g-4">
        <div class="d-flex flex-column gap-2">
          <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#collection"></use>
            </svg>
          </div>
          <h4 class="fw-semibold mb-0">Description du produit</h4>
          <p class="text-muted">Paragraph of text beneath the heading to explain the heading.</p>
        </div>

        <div class="d-flex flex-column gap-2">
          <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#gear-fill"></use>
            </svg>
          </div>
          <h4 class="fw-semibold mb-0">Description du produit</h4>
          <p class="text-muted">Paragraph of text beneath the heading to explain the heading.</p>
        </div>

        <div class="d-flex flex-column gap-2">
          <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#speedometer"></use>
            </svg>
          </div>
          <h4 class="fw-semibold mb-0">Description du produit</h4>
          <p class="text-muted">Paragraph of text beneath the heading to explain the heading.</p>
        </div>

        <div class="d-flex flex-column gap-2">
          <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
          <img src="img.jpg" alt="" srcset="">  
           
          </div>
          <h4 class="fw-semibold mb-0">Description du produit</h4>
          <p class="text-muted">Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
    </div>
                   <!-- ====================fin Body========================= -->
                  

                   <!-- ====================Debut contactez-nous========================= -->

                   <section style="margin-left:15%" id="contact" class="contact section-bg">
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                      <div class="section-title">
                        <h2>Contact</h2>
                        <p>Pour plus d'information.</p>
                      </div>
                      <div class="row gx-5">
                      <div class="col-lg-3 col-md-6">
                        <div class="info-box mb-4"> 
                          <i class="bx bx-envelope"></i>
                          <h3>Email Us</h3><p>contact@example.com</p>
                        </div>
                      </div>
                      
                      <div class="col-lg-3 col-md-6">
                        <div class="info-box mb-4">
                           <i class="bx bx-phone-call"></i>
                           <h3>Call Us</h3>
                           <p>+1 5589 55488 55</p>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="row gx-5">
                        <div class="col-lg-6">
                          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                              <div class="col-md-6 form-group"> 
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                          </div>
                          <div class="col-md-6 form-group mt-3 mt-md-0"> 
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                        </div>
                        </div>
                        <div class="form-group mt-3">
                           <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                      </div>
                        <div class="form-group mt-3">
                          <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="my-3"><div class="loading">Loading</div>
                        <div class="error-message">
                        </div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-outline-primary me-4">Envoyer</button>
                      </div>
                    </form>
                  </div>
                </div>
              
            </section>




                   <!-- ====================fin contactez-nous========================= -->

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top container-fluid">
    
    <div class="col-md-4 d-flex align-items-center">
      <a href="" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="text-muted">© 2022 Company Caise,</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  
  </footer>

</body>



</body>
</html>