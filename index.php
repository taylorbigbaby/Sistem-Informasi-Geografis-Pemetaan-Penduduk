<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../tampil_data.php?pesan=belum_login");
}
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "menu_sidebar.php"; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include "menu_topbar.php"; ?>
                <br>
                <br>
                <br>
                <br>
                <center><img src="img/banyumas.png" alt="banyumaslogo" width="150px"> </center>
                <br>
                <h2>
                    <center><b>SISTEM INFORMASI GEOGRAFIS </b> </center>
                </h2>
                <h2>
                    <center><b>PEMETAAN PENDUDUK DI KELURAHAN TUAH MADANI</b> </center>
                </h2>
                <h2>
                    <center><a href="../index.php"><button class="btn btn-primary" type="button" href="../index.php">Lihat Web</button></a></center>
                </h2>

            </div>
            <!-- End of Main Content -->
            <?php include "footer.php"; ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body>

</html>