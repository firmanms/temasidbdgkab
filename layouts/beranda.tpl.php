<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
  $title = (!empty($judul_kategori))? $judul_kategori: 'Artikel Terkini';
  $slug = 'terkini';
  if(is_array($title)){
    $slug = $title['slug'];
    $title = $title['kategori'];
  }
?>
<section class="blog-listing gray-bg">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb">
                    <!-- Tampilkan slider hanya di halaman awal. Tidak tampil pada daftar artikel di halaman kategori atau halaman selanjutnya serta halaman hasil pencarian -->
                    <?php if(empty($cari AND count($slider_gambar) > 0) AND $this->uri->segment(2) != 'kategori' AND ($this->uri->segment(2) !== 'index' AND $this->uri->segment(1) !== 'index')) : ?>
                    <?php $this->load->view($folder_themes .'/partials/slider') ?>
                    <?php endif; ?>
                    <!--Headline-->
                    <?php if(empty($cari AND count($slider_gambar) > 0) AND $this->uri->segment(2) != 'kategori' AND ($this->uri->segment(2) !== 'index' AND $this->uri->segment(1) !== 'index')) : ?>
                    <?php $this->load->view($folder_themes .'/partials/headline') ?>
                    <?php endif; ?>
                    <!--Artikel-->                    
                    <div class="row">
                    <?php if($artikel) : ?>
                    <?php foreach($artikel as $post) : ?>
                        <?php $data['post'] = $post ?>
                        <?php $this->load->view($folder_themes .'/partials/article_list', $data) ?>
                    <?php endforeach ?>
                    </div>
                    <?php $data['paging_page'] = ($paging_page && IS_PREMIUM && $this->uri->segment(2) === 'kategori') ? $paging_page : 'first/'.$paging_page ?>
                    <!-- <div class="pagination space-y-1 flex-wrap w-full"> -->
                    <div class="col-12">
                        <?php $this->load->view($folder_themes .'/commons/paging', $data) ?>
                    </div>
                    <?php else : ?>
                        <?php $data['title'] = $title ?>
                        <?php $this->load->view($folder_themes .'/partials/empty_article', $data) ?>
                    <?php endif ?>

                </div>
                <div class="col-lg-4 m-15px-tb blog-aside">
                  <div class="d-flex justify-content-between" style="padding-top: 15px;">
                      <button class="btn-info btn-sm">Layanan Mandiri <i class="fa-solid fa-person-walking-arrow-right"></i></button>
                      <button class="btn-success btn-sm">Login Admin <i class="fa-solid fa-person-walking-arrow-right"></i></button>
                  </div>
                  <!-- Author -->
                  <div class="widget widget-author">
                    <div class="widget-title">
                        <h3>Author</h3>
                    </div>
                    <div class="widget-body">
                        <div class="media align-items-center">
                            <div class="avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" title="" alt="">
                            </div>
                            <div class="media-body">
                                <h6>Hello, I'm<br> Rachel Roth</h6>
                            </div>
                        </div>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores</p>
                    </div>
                  </div>
                  <!-- End Author -->
                  <?php $this->load->view($folder_themes .'/partials/sidebar') ?>
                </div>
        </div>
</section>
<div class="container mx-auto lg:px-5 px-3 flex flex-col lg:flex-row my-5 gap-3 lg:gap-5 justify-between text-gray-600">
  <main class="lg:w-2/3 w-full overflow-hidden space-y-5">
    

    <!-- Judul Kategori / Artikel Terkini -->
    <div class="flex justify-between items-center w-full">
      <h3 class="text-h4 text-primary-200"><?= $title ?></h3>
      <a href="<?= site_url('arsip') ?>" class="text-sm hover:text-primary-100">Indeks <i class="fas fa-chevron-right ml-1"></i></a>
    </div>

    <?php if(empty($cari AND count($slider_gambar) > 0) AND $this->uri->segment(2) != 'kategori' AND ($this->uri->segment(2) !== 'index' AND $this->uri->segment(1) !== 'index')) : ?>
      <?php $this->load->view($folder_themes .'/partials/headline') ?>
    <?php endif; ?>

    <?php if($artikel) : ?>
      <?php foreach($artikel as $post) : ?>
        <?php $data['post'] = $post ?>
        <?php $this->load->view($folder_themes .'/partials/article_list', $data) ?>
      <?php endforeach ?>
      <?php $data['paging_page'] = ($paging_page && IS_PREMIUM && $this->uri->segment(2) === 'kategori') ? $paging_page : 'first/'.$paging_page ?>
      <div class="pagination space-y-1 flex-wrap w-full">
        <?php $this->load->view($folder_themes .'/commons/paging', $data) ?>
      </div>
      <?php else : ?>
        <?php $data['title'] = $title ?>
        <?php $this->load->view($folder_themes .'/partials/empty_article', $data) ?>
    <?php endif ?>
  </main>

  <!-- Bagian sidebar / widget -->
  <div class="lg:w-1/3 w-full">
    <?php $this->load->view($folder_themes .'/partials/sidebar') ?>
  </div>
</div>