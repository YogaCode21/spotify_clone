<div class="grid grid-cols-[17%,75%]">
    <?php 
    include_once "../template/navbar.php";
    switch(@$_GET['page']){
        case 'login':
            include_once "../input/login.php";
        break;
        case 'register':
            include_once "../input/register.php";
        break;
        case 'obat':
            include_once "view-data-obat.php";
        break;
        case "pelanggan":
            include_once "view-data-pelanggan.php";
        break;
        case "tambah_obat":
            include_once "../tambah/tambah_obat.php";
        break;
        case "edit_obat":
            include_once "../update/update_obat.php";
        break;
        case "edit_pelanggan":
            include_once "../update/update_pelanggan.php";
        break;
        case "proses_update_pelanggan":
            include_once "../update/proses_update_pelanggan.php";
        break;
        case "tambah_transaksi":
            include_once "../tambah/tambah_transaksi.php";
        break;
        case "proses_tambah_transaksi":
            include_once "../tambah/proses_tambah_transaksi.php";
        break;
    }
    ?>
</div>