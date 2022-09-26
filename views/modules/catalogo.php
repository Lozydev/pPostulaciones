<?php
  $productos = new ProductoModel();
  $listaProductos = $productos->getProductos();
?>

<div>
    <h2 class="text-center-own mrt-5 blanco">
        Catalogo
    </h2>           
</div>

<div class="row">
  <?php foreach($listaProductos as $p): ?>
      <div class="column">
        <div class="card-container">
          <div class="d-flex-center">
            <img class="thumb-producto circle" src="../public/assets/Img/thumb-productos/<?php echo $p['img'] ?>" />
          </div>
          <div class="text-card">
            <h4 class="text-center-own" ><?php echo $p['nombre'] ?></h4>
            <h5 class="text-center-own">
            <?php echo "Precio: ".$p['precio'] ?>
            </h5>
            <h5 class="text-center-own">
            <?php echo "Categoria: ".$p['categoria']." | Stock: ".$p['stock'] ?>
            </h5> 
          </div>
        </div>
      </div>
  <?php endforeach; ?>
</div>
