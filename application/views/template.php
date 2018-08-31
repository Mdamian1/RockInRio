<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rock in Rio</title>
    <link rel="stylesheet" href="../assets/template/css/style.css">
</head>
<body>
    <header>
        <div class="topo">
            <div class="topoInterior">
                <img src="<?php echo base_url('assets/template/css/logo_rio.png')?>" alt="">
                <div class="menu">
                    <ul>
                        <a href="<?php echo base_url('welcome/fotos')?>"><li class="opcaoMenu">FOTOS</li></a>
                        <a href="<?php echo base_url('welcome/videos')?>"><li class="opcaoMenu">VÍDEOS</li></a>
                        <a href="<?php echo base_url('welcome/musicas')?>"><li class="opcaoMenu">MÚSICAS</li></a>
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