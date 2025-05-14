<div class="container" style="margin-top: 20px; margin-bottom: 20px; font-family: Boldonse, system-ui;">
    <h1>Our Best Collection</h1>
    <p>Browse our many collection</p>
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
</div>

<div class="container">
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
                        <a href="<?php base_url()?>Login" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="text-center">Tidak ada produk tersedia.</p>
        <?php endif; ?>
    </div>
</div>
