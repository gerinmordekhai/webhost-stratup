<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Admin Panel</h1>
  <form action="<?= base_url('a/tambah_paket'); ?>">
    <button type="submit" class="btn btn-primary btn-lg btn-block mt-4">Tambahkan Paket</button>
  </form>
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
        <a href="<?= base_url('admin/editPaket/' . $datadisplay->id_hosting); ?>" class="btn btn-lg btn-block btn btn-outline-success" role="button">Update</a>
        <a href="<?= base_url('admin/hapusPaket/' . $datadisplay->id_hosting); ?>" class="btn btn-lg btn-block btn-outline-danger" role="button">Delete</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>