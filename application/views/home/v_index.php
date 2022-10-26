<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Harga</h1>
  <p class="lead">Ciptakan website terbaik kamu dengan menggunakan berbagai layanan GoLive seperti web hosting, domain, ssl, jasa website bisnis/toko online dsb. <br> Temukan beragam promo pilihan paket layanan GoLive!

</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <?php foreach($harga as $datadisplay): ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?= $datadisplay->nama_hosting; ?></h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Rp.<?= hargaDisplay($datadisplay->harga); ?> <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>CPanel <?= fiturYesNo($datadisplay->has_cpanel); ?></li>
          <li>SSL <?= fiturYesNo($datadisplay->has_ssl); ?></li>
          <li><?= $datadisplay->has_subdomain; ?> Subdomain</li>
          <li><?= storageFormat($datadisplay->has_storage); ?> Penyimpanan</li>
          <li><?= $datadisplay->num_database; ?> Database</li>
        </ul>
        <a href="<?= base_url('home/pembelian/' . $datadisplay->id_hosting); ?>" class="btn btn-lg btn-block btn-outline-primary" role="button">Beli Sekarang</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Perbandingan Fitur</h1>
  </div>

  <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th></th>
            <?php foreach($harga as $datatabel): ?>
            <th><?= $datatabel->nama_hosting; ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">CPanel</th>
            <?php foreach($harga as $datatabel): ?>
            <td><?= fiturCeklis($datatabel->has_cpanel); ?></td>
            <?php endforeach; ?>
          </tr>
          <tr>
            <th scope="row" class="text-start">SSL</th>
            <?php foreach($harga as $datatabel): ?>
            <td><?= fiturCeklis($datatabel->has_ssl); ?></td>
            <?php endforeach; ?>
          </tr>
          <tr>
            <th scope="row" class="text-start">SubDomain</th>
            <?php foreach($harga as $datatabel): ?>
            <td><?= $datatabel->has_subdomain; ?></td>
            <?php endforeach; ?>
          </tr>
          <tr>
            <th scope="row" class="text-start">Storage</th>
            <?php foreach($harga as $datatabel): ?>
            <td><?= storageFormat($datatabel->has_storage); ?></td>
            <?php endforeach; ?>
          </tr>
          <tr>
            <th scope="row" class="text-start">Database</th>
            <?php foreach($harga as $datatabel): ?>
            <td><?= $datatabel->num_database; ?></td>
            <?php endforeach; ?>
          </tr>
        </tbody>
      </table>
    </div>

  
  