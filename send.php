<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
        $keterangan = $_POST['keterangan'];
        $no_wa = $_POST['noWa'];
        header("location:https://api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20%0DTelepon:%20$telepon%20%0DAlamat:%20$alamat%20%0DKeteranagan:%20$keterangan");
    } else {
        echo "
            <script>
                window.location=history.go(-1);
            </script>    
        ";
    }
?>