<script src="../assets/library/jquery.min.js"></script>
<script src="../assets/library/bootstrap.min.js"></script>
<link rel="stylesheet" href="../assets/library/bootstrap.min.css">
<link rel="stylesheet" href="../assets/fotos/css/style.css">
<article>
    <div class="centro">
        <p class="titulo">FOTOS</p>
        <div class="container">
            <div class="col-sm-12">
                <?php for($i = 1 ; $i <= 6; $i++):?>
                    <div class="fotos col-sm-4 text-center">
                        <img id="myImg" src="../assets/fotos/css/<?php echo $i ?>.jpg">
                        <p>Lorem Ipsum é simplesmente</p>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>
    <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
</article>