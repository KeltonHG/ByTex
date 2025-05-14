<?php include 'templates/header.php'; ?>

<!-- Hero Banner -->
<section class="hero">
  <div class="overlay"></div>
  <div class="hero-content">
    <h2>Descubre tu Belleza Interior</h2>
    <p>Pruébalos ahora y transforma tu estilo</p>
    <a href="#featured" class="btn-primary">Pruébalos aquí</a>
  </div>
</section>

<!-- Featured Products Slider -->
<section id="featured" class="featured-products">
  <h3>Productos Destacados</h3>
  <div class="slider">
    <?php foreach ($featured as $prod): ?>
      <div class="slide">
        <img src="/img/<?php echo $prod['imagen']; ?>" alt="<?php echo $prod['nombre']; ?>">
        <h4><?php echo $prod['nombre']; ?></h4>
        <span class="price">S/<?php echo $prod['precio']; ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- All Products Grid -->
<section class="productos">
  <?php foreach ($productos as $producto): ?>
    <div class="producto">
      <img src="/img/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
      <h2><?php echo $producto['nombre']; ?></h2>
      <p><?php echo $producto['descripcion']; ?></p>
      <span class="precio">S/<?php echo $producto['precio']; ?></span>
    </div>
  <?php endforeach; ?>
</section>

<?php include 'templates/footer.php'; ?>


