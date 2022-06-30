<?php
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $jamKerja = $_POST['jamKerja'];
 
    if($jabatan == 'manager'){
    $gaji_perjam = 50000;
    }elseif ($jabatan == 'sekretaris') {
    $gaji_perjam = 45000;
    }elseif ($jabatan == 'keuangan') {
    $gaji_perjam = 40000;
    }elseif ($jabatan == 'produksi') {
    $gaji_perjam = 30000;
    }
 
if($jamKerja <= 200){
    $jam = $jamKerja;
    $lembur = 0;
}else{
    $jam =  200;
    $lembur = $jamKerja - $jam;
}
 
$gaji_pokok = $jam * $gaji_perjam;
 
$gaji_lembur = 20000 * $lembur;
 
$total_gaji = $gaji_pokok + $gaji_lembur;
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="penggajian.css">
    <title>Gaji Karyawan</title>
</head>
<body>
    <div class="container">
    <form method="POST" name="frmpost" action="">
        <table width="500" border="1" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <td align="center"><h2><b><?php echo "Data Rekapitulasi Gaji Karyawan"; ?></b></h2></td>
            </tr>
            <tr>
                <td>
        <table width="500" border="0" cellpadding="6" cellspacing="6" align="center">
            <tr>
                <td>Nama Anda</td>
                <td> : </td>
                <td><?php echo ucwords($nama); ?></td>
            </tr>
            <tr>
                <td>Jabatan</td> 
                <td> : </td>
                <td><?php echo ucwords($jabatan);?></td></td>
            </tr>
            <tr>
                <td>Jam Kerja</td>
                <td> : </td>
                <td><?php echo $jamKerja." Jam"; ?></td>
            </tr>
            <tr>
                <td>Gaji Pokok Anda</td>
                <td> : </td>
                <td><?php echo $gaji_pokok; ?></td>
            </tr>
            <tr>
                <td>Jam Lembur</td>
                <td> : </td>
                <td><?php echo $lembur." Jam"; ?></td>
            </tr>
            <tr>
                <td>Gaji Lembur</td>
                <td> : </td>
                <td><?php echo $gaji_lembur; ?></td>
            </tr>
            <tr>
                <td>Total Gaji Anda</td>
                <td> : </td>
                <td><?php echo $total_gaji; ?></td>
            </tr>
        </table>
            <tr>
                <td align="center"><?php echo "Gaji Anda Adalah Sebesar Rp." . number_format($total_gaji).".00,-";?></td>
            </tr>
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>