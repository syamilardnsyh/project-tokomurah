<div class="row justify-content-center align-items-center" style="min-height: 425px;">
    <?php if ($user) : ?>
        <div class="col-lg-6">
            <div class="alert alert-info">
                Anda sudah login sebagai <?= $user['nama'] ?><br>
                pergi ke <a href="<?= base_url() ?>">halaman utama</a>
            </div>
        </div>
    <?php else : ?>
        <div class="col-lg-5">
            <?php if ($this->session->flashdata('error')) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('error') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php else : ?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    Silahkan daftar terlebih dahulu
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif ?>
            <div class="card">
                <div class="card-header">
                    <div class="card-title fs-4">
                        Register
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('register') ?>">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="nama" class="form-control" name="nama" placeholder="Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    <?php endif ?>
</div>