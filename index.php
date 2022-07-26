<?php require __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Logo -->
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Spotify_icon.png" alt="spotify-logo">
        </div>
        
    </header>
    
    <!-- Main -->
    <main>
        <div class="container">
            <!-- Discs -->
            <div class="discs">
                <!-- All-Disc -->
                <?php foreach($discs as $disc) { ?>
                    <div class="card">
                        <img src="<?php echo $disc['poster'];?>" alt="">
                        <h2> <?php echo $disc['title']; ?></h2>
                        <div> <?php echo $disc['author']; ?></div>
                        <div> <?php echo $disc['year']; ?></div>

                    </div>
                
                <?php }?>

            </div>
        </div>

    </main>
</body>
</html>