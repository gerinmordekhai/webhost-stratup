<div class="container">
    
  <div class="card-deck mt-5 text-center">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h3 class="card-title">Tambah Paket</h3>
            <h6 class="card-subtitle mb-2 text-muted">untuk menambah paket hosting</h6>
            <p class="card-text">ketik 1 = YES, ketik 0 = NO</p>
            <form action="<?= base_url(); ?>admin/tambahPaket" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Paket Hosting</label>
                    <input type="text" class="form-control" id="inputEmail4" name="nama_hosting" value="">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">CPanel</label>
                    <input type="text" class="form-control" id="inputEmail4" name="has_cpanel" value="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Sub Domain</label>
                    <input type="text" class="form-control" id="inputEmail4" name="has_subdomain" value="">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">SSL</label>
                    <input type="text" class="form-control" id="inputEmail4" name="has_ssl" value="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Storage</label>
                    <input type="text" class="form-control" id="inputEmail4" name="has_storage" value="">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Database</label>
                    <input type="text" class="form-control" id="inputEmail4" name="num_database" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Harga</label>
                    <input type="text" class="form-control" id="inputAddress2" name="harga" value="">
                </div>
                <button type="submit" onclick="myalert()" class="btn btn-lg btn-block btn-primary">Tambah</button>
                <script> 
                    function myalert() { 
                        alert("Berhasil ditambahkan!"); 
                    } 
                </script>

            </form>
        </div>
    </div>
    
  </div>
  