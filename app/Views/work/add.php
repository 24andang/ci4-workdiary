<?= $this->extend('/layout/template') ?>

<?= $this->section('content') ?>

<h1>Form Tambah Daftar Kegiatan</h1>
<!-- -------------------------------------------------------------------------------- -->
<form method="POST" action="/work/insert">
    <div class="row mb-3">
        <label for="kegiatan" class="col-sm-2 col-form-label">Kegiatan</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="kegiatan" name="kegiatan"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-2">
            <input type="date" class="form-control" id="tanggal" name="tanggal"></input>
        </div>
    </div>
    <div class="row mb-3">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
    <a href="/work/index" class="btn btn-warning">Cancel</a>
</form>
<!-- -------------------------------------------------------------------------------- -->

<?= $this->endSection() ?>