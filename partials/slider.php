<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php foreach($slider_gambar['gambar'] as $data) : ?>
      <?php $img = $slider_gambar['lokasi'] . 'sedang_' . $data['gambar']; ?>
      <?php if(is_file($img)) : ?>
      <li data-target="#carouselExampleIndicators"></li>
      <?php endif ?>
      <?php endforeach ?>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block" src="<?= base_url($img) ?>" style="width:100%; height: 400px; object-fit: cover;" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h5><?= $data['judul'] ?></h5>
            
        </div>
      </div>
      <?php foreach($slider_gambar['gambar'] as $data) : ?>
      <?php $img = $slider_gambar['lokasi'] . 'sedang_' . $data['gambar']; ?>
      <?php if(is_file($img)) : ?>
      <div class="carousel-item">
        <img class="d-block" src="<?= base_url($img) ?>"  style="width:100%; height: 400px; object-fit: cover;" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h5><?= $data['judul'] ?></h5>
        </div>
      </div>
      <?php endif ?>
      <?php endforeach ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>