<div class="container my-2 p-6 bg-hero rounded">
    <div class="py-5 text-white">
        <p class="display-3 fw-bold">Galeri Foto Rafa</p>
        <p class="display-5 fw-bold">Perdamaian</p><p class="fs-4 col-md-8">mengacu pada keadaan ketenangan, harmoni, dan bebas dari konflik atau kekerasan. Hal ini tidak hanya mencakup tidak adanya perang atau permusuhan tetapi juga adanya kondisi yang meningkatkan kesejahteraan, keadilan, dan saling menghormati antar individu, komunitas, dan negara.
</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php 
        $tampil=mysqli_query($conn, "SELECT * FROM foto INNER JOIN user ON foto.UserID=user.UserID");
        foreach($tampil as $tampils):
        ?>
        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="uploads/<?= $tampils['LokasiFile'] ?>" class="object-fit-cover" style="aspect-ratio: 16/9;">
                <div class="card-body">
                    <h5 class="card-title"><?= $tampils['JudulFoto'] ?></h5>
                    <p class="card-text text-muted">by: <?= $tampils['Username'] ?></p>
                    <a href="?url=detail&&id=<?= $tampils['FotoID'] ?>" class="btn btn-secondary">Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>