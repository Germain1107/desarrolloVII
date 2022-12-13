<?php
   
    include("../../db/config/conexion.php");
    include("../../db/collector/col_getProductos.php");

    $cnn= conectar();
    $productos = getProductosDestacados($cnn);
    desconectar($cnn);

?>

<div class="shop_top">
    <div class="container">
        
        <div class="row shop_box-top">

            <?php foreach($productos as $producto): ?>
                <div class="col-md-3 shop_box"><a href="single.html">
                    <img src="../../image/farmacos/<?php echo $producto['IMAGE']?>" class="img-responsive" alt=""/>
                    <span class="new-box">
                        <span class="new-label">New</span>
                    </span>
                    <span class="sale-box">
                        <span class="sale-label">Sale!</span>
                    </span>
                    <div class="shop_desc">
                        <h3><a href="#"><?php echo $producto['NOMBRE']?></a></h3>
                        <p><?php echo $producto['DESCRIPCION']?></p>
                        <span class="reducedfrom"><?php echo $producto['PRECIO']?></span>
                        <span class="actual">$12.00</span><br>
                        <ul class="buttons">
                            <li class="cart"><a href="#">Add To Cart</a></li>
                            <li class="shop_btn"><a href="#">Read More</a></li>
                            <div class="clear"> </div>
                        </ul>
                    </div>
                </a></div>
            <?php endforeach ?>
    </div>
    </div>