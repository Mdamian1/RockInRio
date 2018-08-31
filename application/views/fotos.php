<script src="../assets/library/jquery.min.js"></script>
<script src="../assets/library/bootstrap.min.js"></script>
<link rel="stylesheet" href="../assets/library/bootstrap.min.css">
<link rel="stylesheet" href="../assets/fotos/css/style.css">
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
    <!-- The Modal
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div> -->


<div class='modal_fotos'>
    <div class='box_image'>
        <img src="" alt="" class='img'>
    </div>

</div>

<script>
// // Get the modal
// var modal = document.getElementById('myModal');

// // Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = $('.myImg');
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// img.onclick = function(){
//     modal.style.display = "block";
//     modalImg.src = this.src;
//     captionText.innerHTML = this.alt;
// }

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() { 
//     modal.style.display = "none";
// }


$(document).ready(function(){
    $('.myImg').on('click', function() {
        $('.modal_fotos').fadeIn();
        $('.img').attr('width', '1000px');
        $('.img').attr('src', $(this).attr('src'));
    })

    $('.modal_fotos').click(function() {
        $(this).fadeOut();
        
    })

});
    

</script>
</article>