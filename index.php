<?php $title = 'services'; ?>
<?php $index_link_css = 'frontend/css/style.css'; ?> 
<?php $index_link_js = 'frontend/js/caroussel.js'; ?>

<?php ob_start(); ?>

 <!-- navigation -->

 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="frontend/img/logo.jpg" width="30" height="30" alt="logo"> ORTFOLIO
        </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">ACCEUIL <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PORTFOLIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="frontend/about.php">A PROPOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="frontend/contact.php">CONTACT</a>
            </li>
            <li class="nav-item" >
            <a class="nav-link " href="#"><span type="button" class="fas fa-search fa-lg" data-toggle="modal" data-target="#exampleModal"></span></a> 
            </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal search -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recherche</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="recherche" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">recherche</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- header -->

<header 
    class="masthead">
        <div class="container">
            <div class="masthead-subheading">Bienvenue sur Portfolio</div>
            <div class="masthead-heading text-uppercase">RIDI OTOKO TEMPLATE</div>
            <a class="btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
</header>

<!-- body -->

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h1> Propulsé votre carrière avec portfolio</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ut dolorum ipsum reprehenderit distinctio nemo quod mollitia iste facere, repellendus reiciendis eveniet quisquam similique saepe cum! Aliquam praesentium quo architecto.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam hic voluptates maxime provident aliquam exercitationem adipisci dolores autem cum, perspiciatis sit, cupiditate eveniet dolor? Ab impedit ex at officiis illum.
            </p>
        </div class="col-sm-12 col-md-12 col-lg-12">
        <div>
            <h1>NOS SERVICES</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem ipsa doloribus a hic numquam quasi expedita aperiam placeat ducimus. Labore cumque suscipit similique fuga nobis sequi, consequuntur minima id harum!</p>
        </div>
    </div>
</div>

<!-- section services -->

<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4">
      <img src="frontend/img/design2.png" style="width: 16rem;" alt="illustration">
      <div>
        <h1></h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur nostrum, quis, quod magnam, omnis nulla delectus adipisci ad pariatur doloribus ullam reprehenderit repellat ducimus asperiores. Eligendi tempore fugiat quibusdam accusantium!</p>
      </div>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <img src="frontend/img/c6.png" style="width: 12rem;" alt="logo">
        <div>
          <h1></h1>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur nostrum, quis, quod magnam, omnis nulla delectus adipisci ad pariatur doloribus ullam reprehenderit repellat ducimus asperiores. Eligendi tempore fugiat quibusdam accusantium!</p>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <img src="frontend/img/logo.png" style="width: 18rem;" alt="maquette">
        <div>
          <h1></h1>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur nostrum, quis, quod magnam, omnis nulla delectus adipisci ad pariatur doloribus ullam reprehenderit repellat ducimus asperiores. Eligendi tempore fugiat quibusdam accusantium!</p>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- customers list -->

<div class="container">
  <div class="row">
      <div class="card col-sm-12 col-md-4 col-lg-4" style="width: 18rem;">
        <img src="frontend/img/a.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'frontend/template.php'; ?>