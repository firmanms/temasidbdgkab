<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    <?php if($transparansi) $this->load->view($folder_themes .'/partials/apbdesa', $transparansi) ?>
</div>
<div class="footer mt-auto text-center">
    <span id="bottom"><br>
        <div class="d-flex justify-content-between" style="padding-left: 10px; padding-right:10px;">
            <p><a href="https://diskominfo.bandungkab.go.id">BandungKab <?= THEME_VERSION ?></a> - <a href="https://opensid.my.id">OpenSID <?= ambilVersi() ?></a> -</p>
            <?php 
                $social_media = [
                    'facebook' => [
                        'color' => 'bg-blue-600',
                        'icon' => 'fa-facebook-f'
                    ],
                    'twitter' => [
                        'color' => 'bg-blue-400',
                        'icon' => 'fa-twitter'
                    ],
                    'instagram' => [
                        'color' => 'bg-pink-500',
                        'icon' => 'fa-instagram'
                    ],
                    'telegram' => [
                        'color' => 'bg-blue-500',
                        'icon' => 'fa-telegram'
                    ],
                    'whatsapp' => [
                        'color' => 'bg-green-500',
                        'icon' => 'fa-whatsapp'
                    ],
                    'youtube' => [
                        'color' => 'bg-red-500',
                        'icon' => 'fa-youtube'
                    ]
                ];
            ?>

            <?php foreach($sosmed as $social) : ?>
                <?php if($social['link']) : ?>  
                    <?php $social_media[strtolower($social['nama'])]['link'] = $social['link']; ?>
                <?php endif ?>
            <?php endforeach ?>
            <p>
            <?php foreach($social_media as $sm) : ?>
                <?php if($link = $sm['link']) : ?>
                <a href="<?= $link ?>"><i class="fab fa-lg <?= $sm['icon'] ?>"></i></a>
                <?php endif ?>
            <?php endforeach ?>
           </p>
        </div>  
        <?php if (setting('tte')): ?>
            <div class="space-x-1">
                <img src="<?=asset('assets/images/bsre.png?v', false); ?>" alt="Bsre" class="img-responsive" style="width: 185px;" />
            </div>
        <?php endif ?>       
    </span>
</div>


<?php $this->load->view($folder_themes .'/commons/back_to_top') ?>