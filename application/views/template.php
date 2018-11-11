<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rock in Rio</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/template/css/style.css')?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="topo">
            <div class="topoInterior">
                <a href="<?php echo base_url('/')?>"><img src="<?php echo base_url('assets/template/css/logo_rio.png')?>" alt=""></a>
                <div class="menu">
                    <ul>
                        <a class="a" href="<?php echo base_url('welcome/fotos')?>">
                            <li class="opcaoMenu">FOTOS</li>
                        </a>
                        <a class="a" href="<?php echo base_url('welcome/videos')?>">
                            <li class="opcaoMenu">VÍDEOS</li>
                        </a>
                        <a class="a" href="<?php echo base_url('welcome/musica')?>">
                            <li class="opcaoMenu">MÚSICAS</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main id="centro">
        <?php $this->load->view($ViewName);?>
    </main>

    <footer>
        <div class="container-fluid rodape">
            <div class="row justify-content-center align-items-center rodapeInterior">
            <div class="text-center texto">
               <p>Disciplina: Multimidia web</p>
                <p>
                    Alunos: Matheus Damian Pereira TSI-17 <br>
                            Dionathan de Cordova TSI-17
                </p>
            </div>
            </div>
        </div>
    </footer>

</body>
</html>