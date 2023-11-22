<div class="grid grid-cols-[17%,75%]">
    <?php 
    include_once "../template/sidebar.php";
    switch(@$_GET['page']){
        case 'obat':
            include_once "view-data-obat.php";
        break;
        case 'karyawan':
            include_once "view-data-karyawan.php";
        break;
        case "supplier":
            include_once "view-data-supplier.php";
        break;
        case "transaksi":
            include_once "view-data-transaksi.php";
        break;
        case "pelanggan":
            include_once "view-data-pelanggan.php";
        break;
        case "dashboard":
            include_once "view-dashboard.php";
        break;
    }
    ?>
</div>