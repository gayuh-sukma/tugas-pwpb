<div class="container mt-5">

<div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title"><?= $data['mhs']['nama']?></h5>
<p class="card-text"><?= $data['mhs']['image']; ?></p>
<p class="card-text"><?= $data['mhs']['email']; ?></p>
<p class="card-text"><?= $data['mhs']['sekolah']; ?></p>
<h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['jurusan']; ?></h6>
<a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
</div>
</div>

</div>