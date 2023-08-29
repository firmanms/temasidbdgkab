<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container content">
    <div class="row gutters">
        <?php foreach($data_widget as $subdata_name => $subdatas) : ?>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="plan-card plan-one">
                <div class="pricing-header green">
                  <h4 class="plan-title"><?= ($subdatas['laporan'])?></h4>
                </div>
                    <ul class="plan-features">
                    <?php foreach($subdatas as $key => $subdata) : ?>
                      <?php if($subdata['judul'] != NULL and $key != 'laporan' and $subdata['realisasi'] != 0 or $subdata['anggaran'] != 0): ?>
                      <li>
                        <span class="text-sm font-bold"><?= ucwords(strtolower($subdata['judul'])) ?></span>
                          <div class="d-flex justify-content-between">
                            <span><?= rupiah24($subdata['realisasi']) ?></span>
                            <span><?= rupiah24($subdata['anggaran']) ?></span>
                          </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: <?= $subdata['persen'] ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><?= $subdata['persen'] ?>%</div>
                          </div>
                      </li>
                      <?php endif ?>
                    <?php endforeach ?>
                    </ul>
              </div>
            </div>
            <?php $index++ ?>
        <?php endforeach ?>
    </div>
</div>
