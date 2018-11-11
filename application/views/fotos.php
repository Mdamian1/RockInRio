<script src="../assets/library/jquery.min.js"></script>
<script src="../assets/library/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/library/bootstrap.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fotos/css/style.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fotos/css/modal_fotos.css')?>">
<article>
    <div class="centro">
        <p class="titulo">FOTOS</p>
        <div class="container">
            <div class="col-sm-12">
                <?php for($i = 1 ; $i <= 9; $i++):?>
                    <div class="fotos col-sm-4 text-center">
                        <img class="myImg" src="<?php echo base_url('/assets/fotos/css/'). $i .'.jpg'?>">
                        <p>Lorem Ipsum é simplesmente</p>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>

<div class='modal_fotos'>
    <span class="close">&times;</span>
    <div class='box_image'>
        <img src="" alt="" class='img'>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>

$(document).ready(function(){
    $('.myImg').on('click', function() {
        $('.modal_fotos').fadeIn();
        $('.img').attr('src', $(this).attr('src'));
    })
    $('.modal_fotos').click(function() {
        $(this).fadeOut();
        
    })
    $('.close').click(function() {
        $('.modal_fotos').fadeOut();
        
    })

});

</script>
</article>