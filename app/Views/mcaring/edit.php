<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<table class="table">
    <tbody>

        <div class="P-4">
            <div class="row col-6 ms-3 mt-3">
                <form action="/update/<?= $detpel['id_pelanggan'] ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="gambarLama">
                    <div class="form-group mb-3">
                        <label for="nama">Nomor Jastel Pelanggan</label>
                        <input type="text" name="nomor_jastel" class="form-control" style="background-color: white;" id="nomor_jastel" value="<?= $detpel['nomor_jastel'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama">Nama Pelanggan</label>
                        <input type="text" name="nama" class="form-control" style="background-color: white;" id="nama" value="<?= $detpel['nama'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nohp">Kontak Telepon Pelanggan</label>
                        <input type="text" name="contact" class="form-control" style="background-color: white;" id="contact" value="<?= $detpel['contact'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="agen">Agen Pengelola</label>
                        <input type="text" name="agen_pengelola" class="form-control" style="background-color: white;" id="agen_pengelola" value="<?= $detpel['agen_pengelola'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="produk">Produk Pelanggan</label>
                        <input type="text" name="produk" class="form-control" style="background-color: white;" id="produk" value="<?= $detpel['produk'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat">Alamat Lengkap Pelanggan</label>
                        <input type="text" name="alamat" class="form-control" style="background-color: white;" id="alamat" value="<?= $detpel['alamat'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="call">Status Call</label>
                        <input type="text" name="statuscall" class="form-control" style="background-color: white;" id="statuscall" value="<?= $detpel['statuscall'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="reason">Reason Call</label>
                        <input type="text" name="reasoncall" class="form-control" style="background-color: white;" id="reasoncall" value="<?= $detpel['reasoncall'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="penerima">Penerima Telepon</label>
                        <input type="text" name="penerima_telpon" class="form-control" style="background-color: white;" id="penerima_telpon" value="<?= $detpel['penerima_telpon'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="hub">Hubungan Dengan YBS</label>
                        <input type="text" name="hub_ybs" class="form-control" style="background-color: white;" id="hub_ybs" value="<?= $detpel['hub_ybs'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="kendala">Kendala Pelanggan</label>
                        <input type="text" name="kendala_pelanggan" class="form-control" style="background-color: white;" id="kendala_pelanggan" value="<?= $detpel['kendala_pelanggan'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="hasil">Hasil Caring</label>
                        <input type="text" name="hasil_caring" class="form-control" style="background-color: white;" id="hasil_caring" value="<?= $detpel['hasil_caring'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 ms-2" style="width:20% ;">Edit Data</button>
                </form>
            </div>
        </div>

    </tbody>
</table>
<?= $this->endSection() ?>