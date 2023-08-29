<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="blog-listing gray-bg">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-12 m-2px-tb">
                <?php $this->load->view($folder_themes .'/commons/main_menu') ?>
                    <div class="jumbotron">
                        <figure class="avatar-150 mx-auto center">
                            <img src="http://cimenyan.desa.id/desa/themes/denatra/assets/image/kabbandung.gif" width="150" alt="">
                        </figure>
                        <a style="text-shadow: 3px 2px 5px #000;-webkit-text-stroke: 1px transparent; color: #ffffff; font-size: 25px; font-weight:bold; font-family: 'Arizonia'">Selamat  Datang  di  Website  Resmi</a>
                        <div class="col-12 col-sm text-center mt-3 text-sm-center text-white">
                            <a style="text-shadow: 3px 2px 5px #000;-webkit-text-stroke: 1px transparent; font-size: 56px; font-weight:bold; font-family: 'Arizonia'">Desa  Cimenyan<a class="small text-hide-xs" <a style="text-shadow: 3px 2px 5px #000;-webkit-text-stroke: 1px transparent; font-size: 56px; font-weight:bold; font-family: 'Arizonia'">, <span class="auto-input"></span></a><br></br>
                        </div>
                        <div class="text-hide-xs">
                            <a style="text-shadow: 3px 2px 5px #000;-webkit-text-stroke: 1px transparent; color: white; font-size: 27px; font-weight:bold; font-family: 'Arizonia'"Desa  Cimenyan Jl. Terusan Padasuka Kp. Cimenyan <br>Kecamatan Cimenyan - Kabupaten Bandung</a><br></br>
                            <br><h4 style="text-shadow: 3px 2px 5px #000;-webkit-text-stroke: 1px transparent; color:white; font-weight:bold; font-family: 'Arizonia'"">
                            Jl. Terusan Padasuka Kp. Cimenyan<br>                            
                                <i class="fa-solid fa-square-phone" style="color:white;"></i> 71520576
                                <i class="fa-solid fa-envelope" style="color:white;"></i> desacimenyan1892@gmail.com
                            </h4>
                            
                        </div><br>
                        <div class="row align-items-center">
                        <div class="col-4 container mt-1 main-container-center">
                            <form method=get action="https://www.cimenyan.desa.id/#artikel">
                                <div class="text-hide-xs input-group mb-0"> 
                                    <input type="text" name="cari" class="form-control xm-2" style="width: 150px; border: 0.5px solid white; height: 30px; border-radius:20px 00px 0px 20px; font-size: 11px;" value="" placeholder="Mencari sesuatu? " aria-label="Cari Artikel">
                                    <div class="input-group-append">
                                       <button style="border-radius: 0px 20px 20px 0px; height: 30px; color:#ffffff; border: 0.5px solid white;" class="btn btn-outline fa fa-search" type="submit"></button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div><br>
                        <p class="small d-md-none d-lg-none d-xl-none">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i> </a>    <i class="fa fa-instagram" aria-hidden="true"></i> cimenyan.desa.id</a> | <i class="fa fa-envelope" aria-hidden="true"></i> desacimenyan1892@gmail.com</a>
                        

                        <!-- <h1 class="display-4">Hello, world!</h1>
                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
                        <div class="card mb-1 z-index-1">
                            <marquee onmouseover="this.stop()" onmouseout="this.start()">
                                <div class="teks_berjalan">
                                    <span class="teks small">SELAMAT DATANG DI WEBSITE DESA CIMENYAN KECAMATAN CIMENYAN KABUPATEN BANDUNG/KANTOR DESA CIMENYAN MEMBUKA PELAYANAN PUBLIK SETIAP HARI SENIN - JUM'AT PUKUL 08.00 WIB - 15.00 WIB<a href="https://cimenyan.desa.id/artikel/" rel="noopener noreferrer" title="Baca Selengkapnya"></a></span>
                                </div>
                            </marquee>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-8 m-15px-tb">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="https://www.bootdey.com/image/400x200/CCCCCCCC/000000" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.bootdey.com/image/400x200/CCCCCCCC/000000" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.bootdey.com/image/400x200/CCCCCCCC/000000" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                            </div>
                          </div>
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
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">
                                        <span>04</span>
                                        <label>FEB</label>
                                    </div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">
                                        <span>04</span>
                                        <label>FEB</label>
                                    </div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/D3D3D3/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">
                                        <span>04</span>
                                        <label>FEB</label>
                                    </div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/87CEFA/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">
                                        <span>04</span>
                                        <label>FEB</label>
                                    </div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/D3D3D3/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">
                                        <span>04</span>
                                        <label>FEB</label>
                                    </div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/E0FFFF/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">
                                        <span>04</span>
                                        <label>FEB</label>
                                    </div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/FFF0F5/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 m-15px-tb blog-aside">
                    <div class="d-flex justify-content-between" >
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

                    <!-- Trending Post -->
                    <div class="widget widget-post">
                        <div class="widget-title">
                            <h3>Trending Now</h3>
                        </div>
                        <div class="widget-body">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://www.bootdey.com/image/200x250/CCCCCCCC/000000" alt="First slide">
                                    <center>
                                        <b>Nama</b><br>
                                        Jabatan<br>
                                        <h5><span class="badge badge-secondary">Status Kehadiran</span></h5>
                                    </center>
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="https://www.bootdey.com/image/200x250/CCCCCCCC/000000" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="https://www.bootdey.com/image/200x250/CCCCCCCC/000000" alt="Third slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                        </div>
                    </div>
                    <!-- End Trending Post -->

                    <!-- Latest Post -->
                    <div class="widget widget-latest-post">
                        <div class="widget-title">
                            <h3>Latest Post</h3>
                        </div>
                        <div class="widget-body">
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="name" href="#">
                                            Rachel Roth
                                        </a>
                                        <a class="date" href="#">
                                            26 FEB 2020
                                        </a>
                                    </div>
                                </div>
                                <div class="lpa-right">
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/E6E6FA/000000" title="" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="name" href="#">
                                            Rachel Roth
                                        </a>
                                        <a class="date" href="#">
                                            26 FEB 2020
                                        </a>
                                    </div>
                                </div>
                                <div class="lpa-right">
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/FFA07A/000000" title="" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="name" href="#">
                                            Rachel Roth
                                        </a>
                                        <a class="date" href="#">
                                            26 FEB 2020
                                        </a>
                                    </div>
                                </div>
                                <div class="lpa-right">
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/FFF0F5/000000" title="" alt="">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Latest Post -->

                    <!-- widget Tags -->
                    <div class="widget widget-tags">
                        <div class="widget-title">
                            <h3>Latest Tags</h3>
                        </div>
                        <div class="widget-body">
                            <div class="nav tag-cloud">
                                <a href="#">Design</a>
                                <a href="#">Development</a>
                                <a href="#">Travel</a>
                                <a href="#">Web Design</a>
                                <a href="#">Marketing</a>
                                <a href="#">Research</a>
                                <a href="#">Managment</a>
                            </div>
                        </div>
                    </div>
                    <!-- End widget Tags -->
                </div>
                <div class="col-lg-12 m-2px-tb">                 
                    
                </div>
            </div>
        </div>
        
    </section>
    

<!-- <div class="container mt-5">
    <p>Selamat Datang di Halaman Starter Bootstrap 4.4.1</p>
    <p>Ini adalah halaman awal untuk memulai proyek Anda dengan Bootstrap 4.4.1.</p>
</div> -->

<?php $bg_header = $latar_website ? base_url($latar_website) : base_url($this->theme_folder.'/'.$this->theme .'/assets/images/header-bg.jpg') ?>

<div class="container md:px-4 lg:px-5">
  <header style="background-image: url(<?= $bg_header ?>);" class="bg-center bg-cover bg-no-repeat relative text-white">
    <div class="absolute bg-gray-800 bg-opacity-60 top-0 left-0 right-0 h-full">
    </div>
    
    <?php $this->load->view($folder_themes .'/commons/category_menu') ?>

    <section class="relative z-10 text-center space-y-2 mt-3 px-3 lg:px-5">
      <a href="<?= site_url() ?>">
        <figure>
          <img src="<?= gambar_desa($desa['logo']) ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="h-16 mx-auto pb-2">
        </figure>
        <span class="text-h2 block"><?= NAMA_DESA ?></span>
        <p><?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?>
          <?= ucwords($desa['nama_kecamatan']) ?>,
          <?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?>
          <?= ucwords($desa['nama_kabupaten']) ?>,
          Provinsi 
          <?= ucwords($desa['nama_propinsi']) ?>
        </p>
      </a>
      <?php if($w_gal) : ?>
        <marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="4" class="block w-10/12 lg:w-1/4 mx-auto">
          <div class="grid grid-flow-col gap-3 shadow-lg pt-2">
            <?php foreach($w_gal as $album) : ?>
              <?php if(is_file(LOKASI_GALERI . 'kecil_' . $album['gambar'])) : ?>
                <?php $link = site_url('first/sub_gallery/'.$album['id']) ?>
                <a href="<?= $link ?>" class="block w-32 h-20" title="<?= $album['nama'] ?>">
                  <img src="<?= AmbilGaleri($album['gambar'], 'kecil') ?>" alt="<?= $album['nama'] ?>" class="w-32 h-20 object-cover">
                </a>
              <?php endif ?>
            <?php endforeach ?>
          </div>
        </marquee>
      <?php endif ?>
    </section>
    <?php if($teks_berjalan) : ?>
      <div class="block px-3 bg-white text-white bg-opacity-20 py-1.5 text-xs mt-6 mb-0 z-20 relative">
        <marquee onmouseover="this.stop();" onmouseout="this.start();" class="block divide-x-4 relative">
          <?php foreach($teks_berjalan as $marquee) : ?>
            <span class="px-3">
              <?= $marquee['teks'] ?>
              <?php if(trim($marquee['tautan']) && $marquee['judul_tautan']) : ?>
              <a href="<?= $marquee['tautan'] ?>" class="hover:text-link"><?= $marquee['judul_tautan']?></a>
              <?php endif ?>
            </span>
          <?php endforeach ?>
        </marquee>
      </div>
    <?php endif ?>
  </header>
  <?php $this->load->view($folder_themes .'/commons/mobile_menu') ?>
</div>
