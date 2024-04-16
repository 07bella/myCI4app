<?= $this->extend ('pegawai/template');?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card-header">
        <h3>Tambah Data Pegawai</h3>
    </div>
    <div class="card-body">
        <?php if(!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <h4>Periksa Elemen Form</h4>
        </hr />
        <?php echo session()->getFlashdata('error'); ?>
        <button type="button" class="close" data-dismissi="alert" aria-label="Close" >
            <span arial-hidden="true">&times;</span>
        </button>
            </div>
            <?php endif; ?>
            <form action="<?=base_url('pegawai/store') ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama') ?>">
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                </select>
            </div>

            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= old('no_telp') ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= old('email') ?>">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" value="<?= old('alamat') ?>"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Simpan" />
            </div>
        </form>
    </div>
</div>
<?= $this->endSection('content'); ?>