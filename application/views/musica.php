<!DOCTYPE html>
<html>
    <head>
        <title>Tag Audio HTML5</title>
        <script src="../assets/library/jquery.min.js"></script>
        <script src="../assets/library/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url('assets/library/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/musicas/css/style.css')?>">
    </head>
<body>
 
<div class="container-fluid centro">
    <?php
        $musicas = array(
            'All_Or_Nothing' => base_url('assets/musicas/01 - All Or Nothing.mp3'),
            'Fight_Till_You_Die' => base_url('assets/musicas/02 - Fight Till You Die.mp3'),
            'Greed' => base_url('assets/musicas/03 - Greed.mp3'),
            'Knocked_Down' => base_url('assets/musicas/04 - Knocked Down.mp3'),
            'catch_me_running_round' => base_url('assets/musicas/05 - no fun at all - catch me running round.mp3'),
            'master_celebrator' => base_url('assets/musicas/06 - no fun at all - master celebrator.mp3'),
            'Peaceful_Day' => base_url('assets/musicas/07 - Peaceful Day.mp3'),
            'Time_Marches_On' => base_url('assets/musicas/08 - Time Marches On.mp3'),
            'Celestial_Q&A' => base_url('assets/musicas/09 - Celestial Q&A.mp3'),
            'Day_To_Daze' => base_url('assets/musicas/10 - Day To Daze.mp3'),
        )
    ?>

    <ul class="list-group col-sm-4">
        <?php foreach($musicas as $chave => $valor): ?>
        <li id="box-audio-title_<?php echo $chave?>" class="list-group-item">
            <p><?php echo str_replace('_',' ',$chave)?></p>
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
    </ul>
</body>
</html>