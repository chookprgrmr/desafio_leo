<!doctype html>
<html lang="pt-BR">
  <head>  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LEO</title>
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
  
  <body>



    <!--preloader-->
        <!-- <div id="preloader" class="preloader">
            <div class="anim_path">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400.57 366.94">
                    <path id="motionPath"
                        d="M177.33,278l167-128.27s16.41-15.42,14.22-26.74S333.37,114,333.37,114L53.16,142.44s-21.32,2.69-23.3,15.38c-2.06,13.14,12.3,25.43,12.3,25.43,71.79,63.41,148,110,231.13,130.71,0,0,20.87,4.12,26.83-7.57s4.13-30.27,4.13-30.27A1062.34,1062.34,0,0,0,263.2,53s-7.06-22.93-20.86-22.93-24.34,17-24.34,17c-50.75,77.47-94.59,162.76-132.73,254.52,0,0-8.27,16.51-1.38,22.47,10.24,8.87,32.71-6.32,32.71-6.32Z"
                        fill="none" stroke="#dfdfdf" stroke-miterlimit="10" stroke-width="5" />
                </svg>
            </div>
            <div class="anim_logo">
                <img src="images/loader_logo.svg" alt="" />
            </div>
        </div> -->
    <!--preloader_end-->
    <div class="container-fluid bg-header">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-between py-3 border-bottom">
                <div class="col-6">
                    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <img src="images/logo-header.png" alt="logo">
                    </a>
                </div>
                
                <div class="col-6">
                    <div class="row justify-content-end">
                        <div class="col-6 separator-vert">
                            <input class="form-control form-control-lg rounded-pill search-input" type="text" placeholder="Pesquisar Cursos..." aria-label=".form-control-lg example">
                        </div>
                        
                        <div class="col-4">
                            <div class="row">
                                <div class="col-4">
                                    <img src="images/perfil-foto.jpg" class="rounded-circle" alt="..." width="50" height="50">
                                </div>

                                <div class="col-6 px-0">
                                    <div>
                                        <span>Seja Bem-vindo</span>
                                        <span class="d-block"><strong>John Doe</strong></span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
    
    <div class="container-fluid p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators rounded-pill">
                <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner1.jpg" class="d-block w-100" alt="...">
                    <div class="banner-text"></div>
                    <div class="carousel-caption d-none d-md-block carousel-alter">
                        <h1>LOREM IMPSUM</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur commodo ex, ut hendrerit est varius non. 
                            Aenean sagittis ex vel felis lacinia, vitae sagittis justo convallis. Suspendisse potenti.
                        </p>

                        <a href="" class="btn btn-white-outline btn-banner rounded-pill">Ver Cursos</a>
                    </div>
                
                </div>
                <div class="carousel-item">
                    <img src="images/banner2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block carousel-alter">
                        <h1>LOREM IMPSUM</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur commodo ex, ut hendrerit est varius non. 
                            Aenean sagittis ex vel felis lacinia, vitae sagittis justo convallis. Suspendisse potenti.
                        </p>
                        <a href="" class="btn btn-white-outline btn-banner rounded-pill">Ver Cursos</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="container my-5">
        <div class="row separator-hor">
            <h2><strong>MEUS CURSOS</strong></h2>
        </div>
        <div class="row my-5">
        <?php for($i=0; $i<= 6; $i++){?>
            
                <div class="col-3">
                    <div class="card rounded" style="width: 18rem;">
                        <img src="images/cursos.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Consectetur Adipiscing</h5>
                            <p class="card-text">Ut mauris neque, facilisis bibendum diam vitae, eleifend egestas magna.</p>
                            <a href="#" class="btn btn-success d-block rounded-pill">VER CURSO</a>
                        </div>
                    </div>
                </div>
                <?php if($i == 3){?>
                    </div>
                    <div class="row">
                <?php }; ?>    
        <?php }?>


            <div class="col-3">
                <div class="add-folder">
                    <div>
                        <img src="images/add-folder.png" alt="">
                        <strong class="d-block align-center">ADICIONAR <br>CURSO</strong>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <footer class="d-flex flex-wrap justify-content-between py-3">
        <div class="container-fluid footer">
            <div class="container justify-content-between">

                <div class="row">

                    <div class="col-6">
                        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none mt-5 mb-5">
                            <img src="images/logo-header.png" alt="logo">
                        </a>
                        <span class="d-block mt-2 mb-3">Ut mauris neque, facilisis bibendum diam vitae, <br>eleifend egestas magna.</span>
                    </div>

                    <div class="col-6 mt-5 mb-5">
                        <div class="row justify-content-end">
                            <div class="col-5">
                            <h4>//CONTATO</h4>
                            <strong>(21)9865-3434</strong>
                            <strong>contato@leolearning.com</strong>
                            </div>

                            <div class="col-4 sociais">
                                <h4>//REDES SOCIAIS</h4>
                                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                                    <img src="images/twitter.png" alt="twitter" width="40">
                                </a>
                                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                                    <img src="images/youtube.png" alt="youtube" width="40">
                                </a>
                                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                                    <img src="images/pinterest.png" alt="pinterest" width="40">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid pos-footer">
            <div class="bottom-footer container">
                <span>Copyright <?php echo date('Y');?>- All Rights Reserved.</span>
            </div>
        </div>
    </footer>