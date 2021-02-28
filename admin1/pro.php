<?php
include "header.php";
?>
</br>
</br>
<section>
<?php
include "caurosal.php";
?>
</section>
<section id="popular">
 <div class="container">
  <div class="row">
   <div class="popular clearfix">
        <div class="row_1 clearfix">
            <div class="col-sm-9">
                <h2>
                    Popular Products</h2>
            </div>
            <div class="col-sm-3">
                <!-- Controls -->
                <div class="controls pull-right">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example" data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner"> 
                <div class="item  active">
                    <div class="row_1 clearfix" style="height=200px; width=200px;">
                        <?php
						include "demoo.php";
						
						?>
                        
                        
                    </div>
                </div>
                <div class="item">
                    <div class="row_1">
                        
                        
                        <?php
						include "demoo.php";
						
						?>
                       
                    </div>
                </div>
            </div>
        </div>
		
   </div>
  </div>
 </div>
</section>



<section id="popular_another">
 <div class="container">
  <div class="row">
   <div class="popular clearfix">
        <div class="row_1 clearfix">
            <div class="col-sm-9">
                <h2>
                    Popular Products</h2>
            </div>
            <div class="col-sm-3">
                <!-- Controls -->
                <div class="controls pull-right">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example_1" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example_1" data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example_1" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item  active">
                    <div class="row_1 clearfix">
                        
                       <div class="item  active">
                    <div class="row_1 clearfix">
                        <?php
						include "demooo.php";
						
						?>
                        
                        
                    </div>
                </div>
                        
                        
                    </div>
                </div>
                <div class="item">
                    <div class="row_1">
                        
                        <div class="item  active">
                    <div class="row_1 clearfix">
                        <?php
						include "demooo.php";
						
						?>
                        
                        
                    </div>
                </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
   </div>
  </div>
 </div>
</section>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>





</html>
<?php
include "footer.php";
?>