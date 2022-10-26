<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Pembayaran</h1>
  <p class="lead">Ciptakan website terbaik kamu dengan menggunakan berbagai layanan GoLive seperti web hosting, domain, ssl, jasa website bisnis/toko online dsb. <br> Temukan beragam promo pilihan paket layanan GoLive!

</p>
</div>

<div class="container">
    <div class="card-deck mb-5 text-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-subtitle mb-2 text-muted">Cek Domain</h5>
                <p class="card-text">Cek domain anda terlebih dahulu sebelum melakukan pembayaran!</p>
                <form action="" method="GET">
                    <div class="form-group">
                        <input type="text" class="form-control" id="searchBar" name="domain" value="<?php if(isset($_GET['domain'])){ echo $_GET['domain']; } ?>">
                    </div>
                    <?php
                    error_reporting(0);
                    if(isset($_GET['domain'])){
                        $domain = $_GET['domain'];
                        if ( gethostbyname($domain) != $domain ) {
                            echo '<div class="alert alert-danger" role="alert">
                            Nama domain telah digunakan!
                        </div>';
                        }
                        else {
                            echo '<div class="alert alert-success" role="alert">
                            Nama domain tersedia!
                        </div>';
                        }
                    }
                    ?>
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Cek Domain</button>
                </form>
                <div>
                </div>
            </div>
        </div>
    </div>
  <div class="card-deck mb-3 text-center">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Orderan Saya</h5>
            <h6 class="card-subtitle mb-2 text-muted">processing in progress</h6>
            <p class="card-text">Silahkan untuk di cek kemabali orderan anda.</p>
            <form action="<?= base_url(); ?>home/pembelian" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Paket Hosting</label>
                    <input type="text" class="form-control" id="inputEmail4" name="nama_hosting" value="<?= $beli->nama_hosting; ?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">CPanel</label>
                    <input type="text" class="form-control" id="inputEmail4" name="has_cpanel" value="<?= fiturBeliYesNo($beli->has_cpanel); ?>" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Sub Domain</label>
                    <input type="text" class="form-control" id="inputEmail4" name="has_subdomain" value="<?= $beli->has_subdomain; ?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">SSL</label>
                    <input type="text" class="form-control" id="inputEmail4" name="has_ssl" value="<?= fiturBeliYesNo($beli->has_ssl); ?>" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Storage</label>
                    <input type="text" class="form-control" id="inputEmail4" name="has_storage" value="<?= storageFormat($beli->has_storage); ?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Database</label>
                    <input type="text" class="form-control" id="inputEmail4" name="num_database" value="<?= $beli->num_database; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Harga</label>
                    <input type="text" class="form-control" id="inputAddress2" name="harga" value="<?= rupiahFormat($beli->harga); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Domain</label>
                    <input type="text" class="form-control" id="inputAddress2" name="nama_domain">
                </div>
                <button type="submit" onclick="myalert()" class="btn btn-lg btn-block btn-outline-primary">Bayar</button>
                <script> 
                    function myalert() { 
                        alert("Pembahayan berhasil! domain berhasil di simpan"); 
                    } 
                </script>

            </form>
        </div>
    </div>
    
  </div>
  