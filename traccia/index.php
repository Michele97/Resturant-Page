<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="contatti.css">
    <link rel="stylesheet" href="prenota.css">
    
    <title>Ristorante</title>
</head>
<body>
    <?php include("nav.php")?>
    <main>
        <?php 
        $page = $_GET['page'];

        if($page=="home"){
            include("home.php");
        }else{
            if($page=="about"){
                include("about.php");
            }else{
                if($page=="contatti"){
                    include("contatti.php");
                }else{
                    if($page=="prenota"){
                        include("prenota.php");
                    }else{
                         include("home.php");
                    }
                }
            }
        }
        
        ?>

    </main>
</body>
</html>