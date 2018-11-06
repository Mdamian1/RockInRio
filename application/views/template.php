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

    <footer>
        <div class="rodape">
            <div class="rodapeInterior"></div>
        </div>
    </footer>
</body>
</html>