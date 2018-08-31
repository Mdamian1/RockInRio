<script src="../assets/library/jquery.min.js"></script>
<script src="../assets/library/bootstrap.min.js"></script>
<link rel="stylesheet" href="../assets/library/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/fotos/css/style.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fotos/css/modal_fotos.css')?>">
<article>
    <div class="centro">
        <p class="titulo">FOTOS</p>
        <div class="container">
            <div class="col-sm-12">
                <?php for($i = 1 ; $i <= 6; $i++):?>
                    <div class="fotos col-sm-4 text-center">
                        <img class="myImg" src="<?php echo base_url('/assets/fotos/css/'). $i .'.jpg'?>">
                        <p>Lorem Ipsum é simplesmente</p>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>

<div class='modal_fotos'>
    <div class='box_image'>
        <img src="" alt="" class='img'>
    </div>

</div>

<script>

$(document).ready(function(){
    $('.myImg').on('click', function() {
        $('.modal_fotos').fadeIn();
        $('.img').attr('src', $(this).attr('src'));
    })

    $('.modal_fotos').click(function() {
        $(this).fadeOut();
        
    })

});
    

</script>
</article>