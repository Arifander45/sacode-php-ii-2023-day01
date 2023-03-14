<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Pages</title>

    <!-- Style CSS -->
    <style>
        body{
            background-color :#16a085;
        }
    </style>

</head>
<body>

    <!-- Heading dengan tag hmtl -->

    <h1>Profile Pages</h1>

    <!-- Paragraph dengan syntax PHP -->

    <?php
        // Menampilkan string ke layar
        echo "<p>Hello PHP!</p>";

        /*
         
        syntax PHP bida dijalankan
        hanya di dalam dokumen dengan extensi *.php
         */

        # membuat variabel PHP

        $angka1=10;
        $angka2=5;

        # Penjumlahan
        $jumlah = $angka1 + $angka2;

       

        # Pengurangan
        $pengurangan = $angka1 + $angka2;
    


    ?>

    <h3>Hasil Penjumlahan</h3>
    <p>
        <?php echo $jumlah; ?>    
    </p>

    <h3>Hasil Pengurangan</h3>
    <p>
        <?php echo $pengurangan; ?>
    </p>
    
</body>
</html>