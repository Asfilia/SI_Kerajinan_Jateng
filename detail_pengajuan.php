<?php include('config.php'); ?>
<?php
//jika sudah mendapatkan parameter GET id dari URL
if (isset($_GET['id'])) {
    //membuat variabel $id untuk menyimpan id dari GET id di URL
    $Id = $_GET['id'];

    //query ke database SELECT tabel markers berdasarkan id = $id
    $select = mysqli_query($koneksi, "SELECT * FROM `contact_us` WHERE id= '$Id'") or die(mysqli_error($koneksi));

    //jika hasil query = 0 maka muncul pesan error
    if (mysqli_num_rows($select) == 0) {
        echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
        exit();
        //jika hasil query > 0
    } else {
        //membuat variabel $data dan menyimpan data row dari query
        $data = mysqli_fetch_assoc($select);
    }
}
?>

<div class="card mx-5 mt-10" style="margin-top:20px">
    <div class="card-header text-white text-center">
        <h3><b>Detail Pengajuan</b></h3>
    </div>
    <div class="card-body pengajuan">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" value="<?php echo $data['name']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" value="<?php echo $data['email']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Contact</label>
            <input type="number" class="form-control" value="<?php echo $data['contact']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label class="exampleFormControlInput1">Country</label>
            <select class="form-control" readonly required>
                <option value="">---Pilih---</option>
                <option value="Indonesia" <?php if ($data['country'] == 'Indonesia') {
                                                echo 'selected';
                                            } ?>>Indonesia</option>
                <option value="Singapura" <?php if ($data['country'] == 'Singapura') {
                                                echo 'selected';
                                            } ?>>Singapura</option>
                <option value="Malaysia" <?php if ($data['country'] == 'Malaysia') {
                                                echo 'selected';
                                            } ?>>Malaysia</option>
                <option value="Vietnam" <?php if ($data['country'] == 'Vietnam') {
                                            echo 'selected';
                                        } ?>>Vietnam</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Subject</label>
            <input type="text" class="form-control" value="<?php echo $data['subject']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" rows="5" readonly><?php echo $data['message']; ?></textarea>
        </div>
    </div>
    <div class="card-footer text-white text-center">
        <h5><b><?php echo $data['date']; ?></b></h5>
    </div>
</div>

<div class="col-md-6 col-sm-6 offset-md-3 py-3 text-center">
    <a href="halaman_admin.php?page=pengajuan" class="btn btn-primary">Kembali</a>
</div>