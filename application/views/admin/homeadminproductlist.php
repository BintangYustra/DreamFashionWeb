<div class="container">
    <h2 class="mt-4" style="font-family: Boldonse, system-ui;">Product List</h2>
    <input id="searchBox" class="form-control mt-2 mb-2" type="text" placeholder="Cari produk..." style="border-radius: 5px;">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#searchBox").on("keyup", function() {
                var keyword = $(this).val().toLowerCase();
                $(".card").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(keyword) > -1);
                });
            });
        });
    </script>
</form><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#add_item"><i class="fas fa-plus fa-sm"></i>+ Tambah Data</button>
    <div class="row">
        <?php if (!empty($items)) : ?>
            <?php foreach ($items as $item) : ?>
    <div class="card" style="width: 18rem; margin: 10px;">
        <img src="<?= base_url('images/' . $item->gambar) ?>" 
             class="card-img-top" 
             alt="<?= $item->nama_item ?>"
             style="max-height: 250px; object-fit: cover;">
        <div class="card-body">
            <h5 class="card-title"><?= $item->nama_item ?></h5>
            <p class="card-text">Kategori: <?= $item->kategori ?></p>
            <p class="card-text"><?= $item->keterangan ?></p>
            <p class="card-text"><strong>Stok:</strong> <?= $item->stok ?></p>
            <p class="card-text"><strong>Harga: </strong> Rp <?= number_format($item->harga, 0, ',', '.') ?></p>
            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#update_<?= $item->id_item ?>">
                <i class="fas fa-edit fa-sm"></i> Update
            </button>
        </div>
    </div>

    <!--Modal Update-->
    <div class="modal fade" id="update_<?= $item->id_item ?>" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('OurProduct/UpdateProduct') ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_item" value="<?= $item->id_item ?>">

                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_item" class="form-control" value="<?= $item->nama_item ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="<?= $item->keterangan ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Kategori</label>
                            <input type="text" name="kategori" class="form-control" value="<?= $item->kategori ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" class="form-control" value="<?= $item->harga ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="text" name="stok" class="form-control" value="<?= $item->stok ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Gambar Produk</label>
                            <input type="file" name="gambar" class="form-control">
                            <small>*Biarkan kosong jika tidak ingin mengganti gambar</small>
                            <br>
                            <img src="<?= base_url('images/' . $item->gambar) ?>" width="100" alt="Current Image">
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>

        <?php else : ?>
            <p class="text-center">Tidak ada produk tersedia.</p>
        <?php endif; ?>
    </div>

</main>
</div>

    <!--Modal Add-->
<div class="modal fade" id="add_item" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url()?>OurProduct/AddProduct" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input type="text" name="nama_item" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" name="kategori" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" name="harga" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Stok</label>
                    <input type="text" name="stok" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Gambar Produk</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
        </div>
    </div>
    </div>


<div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>