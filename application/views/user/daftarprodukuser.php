<div class="container">
    <h2 class="mt-4" style="font-family: Boldonse, system-ui;">Daftar Produk</h2>
    <input id="searchBox" class="form-control mt-3 mb-2" type="text" placeholder="Cari produk..." style="border-radius: 5px;">

    <!-- Search Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#searchBox").on("keyup", function() {
                var keyword = $(this).val().toLowerCase();
                $(".card").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(keyword) > -1);
                });
            });

            $(".btn-beli").click(function() {
                let nama = $(this).data('nama');
                let keterangan = $(this).data('keterangan');
                let harga = $(this).data('harga');
                let stok = $(this).data('stok');
                let gambar = $(this).data('gambar');

                $("#modalNama").text(nama);
                $("#modalKeterangan").text(keterangan);
                $("#modalHarga").text("Rp " + harga.toLocaleString('id-ID'));
                $("#modalStok").text(stok);
                $("#modalGambar").attr("src", gambar);
                $('#exampleModal').modal('show');
            });
        });
    </script>

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
                        <p class="card-text"><?= $item->keterangan ?></p>
                        <p class="card-text"><strong>Harga:</strong> Rp <?= number_format($item->harga, 0, ',', '.') ?></p>
                        <p class="card-text"><strong>Stok:</strong> <?= $item->stok ?></p>
                        <button 
                            class="btn btn-primary btn-beli"
                            data-id="<?= $item->id_item ?>"
                            data-nama="<?= $item->nama_item ?>"
                            data-keterangan="<?= $item->keterangan ?>"
                            data-harga="<?= $item->harga ?>"
                            data-stok="<?= $item->stok ?>"
                            data-gambar="<?= base_url('images/' . $item->gambar) ?>">
                            Beli
                        </button>


                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="text-center">Tidak ada produk tersedia.</p>
        <?php endif; ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= base_url('Order/simpan') ?>" method="post">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Detail Produk</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img id="modalGambar" src="" alt="Gambar Produk" class="img-fluid mb-3">
          <h5 id="modalNama"></h5>
          <p id="modalKeterangan"></p>
          <p><strong>Harga:</strong> <span id="modalHarga"></span></p>
          <p><strong>Stok Tersisa:</strong> <span id="modalStok"></span></p>

          <!-- Hidden Inputs -->
          <input type="hidden" id="inputIdItem" name="id_item">
          <input type="hidden" id="inputNamaItem" name="nama_item">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-success">Lanjutkan Pembelian</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>