<?php 

	include("../../db/config/conexion.php");
    include("../../db/collector/col_getProductos.php");

    $cnn= conectar();
	$id=1;
    $productos = getProductoByID($cnn,$id);
    desconectar($cnn);

?>
<!DOCTYPE HTML>
<html>
<head>
<title>FarmaGermain</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
     <!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->	
</head>
<body>
	
	<?php require 'componentes/header.php';?>

	<?php foreach($productos as $producto): ?>
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row">
				<div class="col-md-9 single_left">
				   <div class="single_image">
					     <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="../../image/farmacos/<?php echo $producto['IMAGE']?>" />
									<img class="etalage_source_image" src="../../image/farmacos/<?php echo $producto['IMAGE']?>" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="../../image/farmacos/<?php echo $producto['IMAGE']?>" />
								<img class="etalage_source_image" src="../../image/farmacos/<?php echo $producto['IMAGE']?>" />
							</li>
						</ul>
					    </div>
				        <!-- end product_slider -->
				        <div class="single_right">
				        	<h3><?php echo $producto['NOMBRE'];?></h3>
				        	<p class="m_10">Codigo de producto: <?php echo $producto['CODIGO'];?></p>

							<div class="btn_form">
							   <form>
								 <input type="submit" value="Comprar" title="">
							  </form>
							</div>
							<ul class="add-to-links">
    			              <li><img src="images/wish.png" alt=""><a href="#">Añadir a tu lista</a></li>
    			            </ul>
							<div class="social_buttons">
								<h4>95 Items</h4>
								<button type="button" class="btn1 btn1-default1 btn1-twitter" onclick="">
					              <i class="icon-twitter"></i> Tweet
					            </button>
					            <button type="button" class="btn1 btn1-default1 btn1-facebook" onclick="">
					              <i class="icon-facebook"></i> Share
					            </button>
					             <button type="button" class="btn1 btn1-default1 btn1-google" onclick="">
					              <i class="icon-google"></i> Google+
					            </button>
					            <button type="button" class="btn1 btn1-default1 btn1-pinterest" onclick="">
					              <i class="icon-pinterest"></i> Pinterest
					            </button>
					        </div>
				        </div>
				        <div class="clear"> </div>
				</div>
				<div class="col-md-3">
				  <div class="box-info-product">
					<p class="price2">$<?php echo $producto['PRECIO'];?></p>
					       <ul class="prosuct-qty">
								<span>Cantidad:</span>
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
							</ul>
							<button type="submit" name="Submit" class="exclusive">
							   <span>Añadir al carrito</span>
							</button>
				   </div>
			   </div>
			</div>		
			<div class="desc">
			   	<h4>Descripcion</h4>
			   	<p><?php echo $producto['DESCRIPCION'];?></p>
			</div>
			<div class="row">
				<h4 class="m_11">Productos Relacionados</h4>
				<?php include 'componentes/destacados.php';?>
			</div>	
	     </div>
	   </div>
	  </div>
	  <?php endforeach; ?>

	  <?php require 'componentes/footer.php';?>
</body>	
</html>