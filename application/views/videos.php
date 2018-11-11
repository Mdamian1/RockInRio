<!DOCTYPE html>
 <html>
     <head>
         <title>Tag Audio HTML5</title>
         <script src="../assets/library/jquery.min.js"></script>
         <script src="../assets/library/bootstrap.min.js"></script>
         <link rel="stylesheet" href="<?php echo base_url('assets/library/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/videos/css/style.css')?>">
    </head>
<body>
 
<?php
        $musicas = array(
            'All_Or_Nothing' => base_url('assets/videos/All Or Nothing.mp4'),
            'Fight_Till_You_Die' => base_url('assets/videos/Fight Till You Die.mp4'),
            'Nothing_Else_Matters' => base_url('assets/videos/Nothing Else Matters.mp4'),
            'Knocked_Down' => base_url('assets/videos/Knocked Down.mp4'),
            'catch_me_running_round' => base_url('assets/videos/Catch Me Running Round.mp4'),
            'master_celebrator' => base_url('assets/videos/Master Celebrator.mp4'),
            'Peaceful_Day' => base_url('assets/videos/Peaceful Day Lyrics.mp4'),
            'Time_Marches_On' => base_url('assets/videos/Time Marches On.mp4'),
            'Celestial' => base_url('assets/videos/Celestial.mp4'),
            'Day_To_Daze' => base_url('assets/videos/Day to Daze.mp4'),
        )
?>
    <div class="container-fluid fundo">
        <div class="container fundo-interior">
            <div class="row no-gutters dentro" style="background-image: url('<?php echo base_url("assets/videos/imagem.jpg")?>')">
                <div class="col-sm-4 foto">
                </div>
                <div class="col-sm-8 lista">
                    <div>
                        <ul class="list-group">
                            <?php foreach($musicas as $chave => $valor): ?>
                            <li id="box-audio-title_<?php echo $chave?>" class="list-group-item">
                                <p id="box-audio-p_<?php echo $chave?>"><?php echo str_replace('_',' ',$chave)?></p>
                                <span class="box-audio_<?php echo $chave?>">
                                    <video id='4' controls style="width: 720px">
                                        <source src="<?php echo $valor?>" type="video/mp4">/>
                                    </video>
                                </span>
                            </li>
                            <script>
                            $(document).ready(function() {
                                $("#box-audio-p_<?php echo $chave?>").click(function() {
                                    $(".box-audio_<?php echo $chave?>").toggle();
                                })
                            });
                            </script>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 