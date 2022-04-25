<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timeline</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/photos.png"/><?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>

            
        </div>


        <div class="col-md-8">

            <form action="" method="post" />
                <div class="form-group">
                    <textarea class="form-control" placeholder="Apa yang kamu pikirkan?"></textarea>
                </div>
            </form>

            <?php for($i=0; $i < 6; $i++){ ?>
            <div class="card mb-3">
                <div class="card-body">
                <P> hari gini masih bingung mau kuliah di kampus swasta yang berkualitas tinggi? Jangan 
                    bimbang lagi, UNIKA ST PAULUS RUTENG adalah lembaga perguruan tinggi
                    terbaik buat Kamu”. dll!</P>
                <P> Ketika kehidupan memberi kita seribu alasan untuk menangis, tunjukkan 
                    bahwa kita mempunyai sejuta alasan untuk tersenyum, nikmati setiap 
                    detik waktu dan akhiri kelelahan hari ini dengan keikhlasan, warnai hidup dengan
                    selalu berdzikir serta perbanyak nikmat dengan selalu bersyukur</p>
                <p> Menjadi sukses itu bukanlah suatu kewajiban, yang menjadi kewajiban adalah perjuangan kita untuk menjadi sukses.</p>
                </div>
            </div>
            <?php } ?>
            
        </div>
    
    </div>
</div>

</body>
</html>