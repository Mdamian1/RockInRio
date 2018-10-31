<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rock in Rio</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/template/css/style.css')?>">
</head>
<body>
    <header>
        <div class="topo">
            <div class="topoInterior">
                <a href="<?php echo base_url('/')?>"><img src="<?php echo base_url('assets/template/css/logo_rio.png')?>" alt=""></a>
                <div class="menu">
                    <ul>
                        <a class="opcaoMenu" href="<?php echo base_url('welcome/fotos')?>"><li class="opcaoMenu">FOTOS</li></a>
                        <a class="opcaoMenu" href="<?php echo base_url('welcome/videos')?>"><li class="opcaoMenu">VÍDEOS</li></a>
                        <a class="opcaoMenu" href="<?php echo base_url('welcome/musica')?>"><li class="opcaoMenu">MÚSICAS</li></a>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main id="centro">
        <?php $this->load->view($ViewName);?>
    </main>

        <div class="rodape">
            <div class="rodapeInterior"></div>
        </div>
                <!-- Footer -->
        <footer class="page-footer font-small teal pt-4 ">

        <!-- Footer Text -->
        <div class="container-fluid text-center text-md-left rodape">

        <!-- Grid row -->
        <div class="row rodapeInterior">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

            <!-- Content -->
            <h5 class="text-uppercase font-weight-bold">Footer text 1</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae harum esse fugiat. Itaque, culpa?</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-6 mb-md-0 mb-3">

            <!-- Content -->
            <h5 class="text-uppercase font-weight-bold">Footer text 2</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id excepturi hic.</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        </div>
        <!-- Footer Text -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>