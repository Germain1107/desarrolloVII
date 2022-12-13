<?php
   
    include("../../db/config/conexion.php");
    include("../../db/collector/col_getProductos.php");

    $cnn= conectar();
    $productos = getProductos($cnn);
    desconectar($cnn);

?>

<div class="shop_top">
    <div class="container">
        
        <div class="row shop_box-top">
            <br>
            <?php foreach($productos as $producto): ?>
                <div class="col-md-3 shop_box"><a href="single.html">
                    <img src="../../image/farmacos/<?php echo $producto['IMAGE']?>" class="img-responsive" alt=""/>
                    <span class="sale-box">
                        <span class="sale-label"><?php echo $producto['CODIGO']?></span>
                    </span>
                    <div class="shop_desc">
                        <h3><a href="#"><?php echo $producto['NOMBRE']?></a></h3>
                        <p><?php echo $producto['DESCRIPCION']?></p>
                        <span class="actual"><?php echo $producto['PRECIO']?></span><br>
                        <ul class="buttons">
                            <li class="cart"><a href="#">Añadir a carrito</a></li>
                            <li class="shop_btn"><a href="detalle.php">Leer más</a></li>
                            <div class="clear"> </div>
                        </ul>
                    </div>
                </a></div>
            <?php endforeach ?>
    </div>
    </div>