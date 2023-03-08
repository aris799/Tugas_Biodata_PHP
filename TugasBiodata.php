<?php
$nama="Muhammad Baihaqi Arrisalah";
$npm="21081010094";
$sekolah= ["SD Raden Patah SBY", "SMP Negeri 26 SBY", "SMA Negeri 11 SBY", "UPN Veteran JATIM"];
$hobi= ["Main Game", "Tidur", "Main Bola"];
$organisasi= ["Anggota SKI (Sie Kerohanian Islam) - SMA","Panitia MOS (Masa Orientasi Siswa) - SMA", "Remas Masjid Raden Patah"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="aris-ico.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <center>
            <H1>BIODATA</H1> 
            <h3> <?php echo $nama ?> - <?php echo $npm ?></h3>
           </center>
    </header>

    <div style="align-items:center;">
        
        <img class="foto" src="aku-removebg-preview.jpg" alt="Image" height="250px" width="200px">
        <p> Halo!!! Perkenalkan nama saya Muhammad Baihaqi Arrisalah bisa dipanggil Aris. Saya lahir pada tanggal 19 Desember 2002 di Surabaya. Saya merupakan anak ke-2 dari 4 bersaudara. Saya adalah Mahasiswa Semester 4 UPN Veteran Jawa Timur Fakultas Ilmu Komputer Prodi Informatika. Cita-cita saya yaitu dapat membahagiakan orangtua. Salam Kenal. </p>

    </div>
    <table>
        <tr>
            <td> <h2>Riwayat Pendidikan</h2></td>
            <td><h2> Riwayat Organisasi</h2></td>
        </tr>

        <tr>
            <td> 
                <ul>
                <?php foreach($sekolah as $skul):?>
                    <li><?=$skul?></li>
                    <?php endforeach; ?>
                </ul>
        </td>
        <td>
            <ul>
                <?php foreach($organisasi as $orgn):?>
                    <li><?=$orgn?></li>
                    <?php endforeach; ?>
            </ul>
        </td>
        </tr>
        <tr>
            <td><h2>Hobi</h2></td>
        </tr>
        <tr>
            <td>
                <ul>
                    <?php foreach($hobi as $hb):?>
                    <li><?=$hb?></li>
                    <?php endforeach; ?>
                </ul>

            </td>
        </tr>
    </table>

   
    
<footer>
    <h4> Contact Me</h4>
    <div>
        <table>
            <tr>
                <td><a href="https://wa.me/6285850757071"><img src="whatsapp (1).png" alt=""></a> </td>
                <td><a href="https://instagram.com/_arisaris79?igshid=ZDdkNTZiNTM="><img src="instagram.png" alt=""></a></td>
                <td><a href="mailto:mbaihaqiarrisalah79@gmail.com"><img src="gmail.png" alt=""></a></td>
            </tr>
        </table>
    </div>
    
</footer>

</body>
</html>
