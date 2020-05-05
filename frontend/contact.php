<?php $title = 'contact'; ?>
<?php ob_start(); ?>
<?php require'menu.php';?>

<!-- header -->

<header 
    class="masthead">
        <div class="container">
            <div class="masthead-subheading">discutons de votre projet</div>
            <div class="masthead-heading text-uppercase">CONTACTEZ-NOUS</div>
            <a class="btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
</header>


<div class="container">
    <div class="row">
       <div class="col-sm-12 col-md-12 col-lg-12">
           <h1>Contactez-nous</h1>
           <p>Contactez-nous pour plus d'informations</p>
       </div> 
    </div>
</div>

    <!-- info -->

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <span class="fas fa-phone-alt fa-5x"></span>
            <div>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur nostrum, quis, quod magnam, omnis nulla delectus adipisci ad pariatur doloribus ullam reprehenderit repellat ducimus asperiores. Eligendi tempore fugiat quibusdam accusantium!</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <span class="fas fa-home fa-5x"></span>
            <div>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur nostrum, quis, quod magnam, omnis nulla delectus adipisci ad pariatur doloribus ullam reprehenderit repellat ducimus asperiores. Eligendi tempore fugiat quibusdam accusantium!</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <span class="fas fa-mail-bulk fa-5x"></span>
            <div>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur nostrum, quis, quod magnam, omnis nulla delectus adipisci ad pariatur doloribus ullam reprehenderit repellat ducimus asperiores. Eligendi tempore fugiat quibusdam accusantium!</p>
            </div>
       </div>
    </div>
</div>

   <!-- section message -->

<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Laissez nous un message</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="votre nom *" required="required" data-validation-required-message="Please enter your name." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="votre email *" required="required" data-validation-required-message="Please enter your email address." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" type="tel" placeholder="votre téléphoe *" required="required" data-validation-required-message="Please enter your phone number." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" placeholder="votre message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-danger btn-xl text-uppercase" id="sendMessageButton" type="submit">Enoyer le Message</button>
                </div>
        </form>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>