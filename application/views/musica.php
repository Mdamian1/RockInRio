<!DOCTYPE html>
<html>
    <head>
        <title>Tag Audio HTML5</title>
        <script src="../assets/library/jquery.min.js"></script>
        <script src="../assets/library/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url('assets/library/bootstrap.min.css')?>">
        <style>
            span{
                display:none;
            }
        </style>
    </head>
<body>
 
<div class="container">
    <?php
        $musicas = array(
            'teste1' => base_url('assets/musicas/Noah Guthrie - Whipping Post by The Allman Brothers.mp3'),
            'teste2' => base_url('assets/musicas/Noah Guthrie - Whipping Post by The Allman Brothers.mp3'),
            'teste3' => base_url('assets/musicas/Noah Guthrie - Whipping Post by The Allman Brothers.mp3'),
            'teste4' => base_url('assets/musicas/Noah Guthrie - Whipping Post by The Allman Brothers.mp3'),
            'teste5' => base_url('assets/musicas/Noah Guthrie - Whipping Post by The Allman Brothers.mp3'),
            'teste6' => base_url('assets/musicas/Noah Guthrie - Whipping Post by The Allman Brothers.mp3'),
        )
    ?>

    <ul class="list-group col-sm-4">
        <?php foreach($musicas as $chave => $valor): ?>
        <li class="list-group-item">
            <p id="box-audio-title_<?php echo $chave?>"><?php echo $chave?></p>
            <span class="box-audio_<?php echo $chave?>">
                <audio id='4' controls>
                    <source src="<?php echo $valor?>" type="audio/mpeg" /> 
                </audio>
            </span>
        </li>
        <script>
        $(document).ready(function() {
            $("#box-audio-title_<?php echo $chave?>").click(function() {
                $(".box-audio_<?php echo $chave?>").toggle();
            })
        });
        </script>
        <?php endforeach ?>
        <li class="list-group-item">Third item</li>
    </ul>
</body>
</html>