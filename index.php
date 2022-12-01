<?php include "navbar.php";?>

<div class="container-fluid mt-3">
<h3>Tambah Kelas</h3>
    <form action="proses_tambah_kelas.php" method="post">
        nama kelas :
        <input type="text" name="nama_kelas" value="" class="form-control">
        kelompok :
        <input type="text" name="kelompok" value="" class="form-control">
        angkatan :
        <input type="tet" name="angkatan" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">
    </form>
</div>

</body>
</html>