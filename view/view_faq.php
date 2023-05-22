<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/faq.css">
    <script src="../asset/script/affichage.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="../asset/script/ajax.js" defer></script>
    <title>FAQ</title>
</head>
<body>
    <header>
        <div>
            <div class="container">
                <div id="tour">
                    <a href=""><img src="../asset/img/tour.png" alt=""></a>
                </div>
                <div id="logo">
                    <a href=""><img src="../asset/img/logo.svg" alt=""></a>
                </div>
                <div id="tel">
                    <img src="../asset/img/tel.png" alt="" id="tel-img">
                    <p>04 48 20 03 08</p>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <div id="wrapper" class="container">
            <ul id="menu">
                <li> <a href="">Nos locations</a></li>
                <li> <a href="">Box de stockage</a></li>
                <li> <a href="">Cartons et déménagement</a></li>
                <li> <a href="">Professionnels</a></li>
                <li> <a href="">Contact et infos</a></li>
                <li> <a href="">Mon compte</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <hr>
    </div>

    <h1>Bienvenue sur la FAQ </h1>

    <div >
        <form action="" id="recherche">
            <input type="text" name="" id="searchBar" placeholder="Que recherchez-vous ?">
        </form>
    </div>

    <div id="faq">
        <?php  foreach ($uniqueCategories as $key => $value):?>

            <!-- <div class="categorie"> -->
                <div class='titre'>
                    <h2><?= $value?></h2>
                </div>
                <?php $catPro = $value ?>
        
                <?php  foreach ($donnees as $key => $value):?>
        
                    <?php if($catPro == $value['category']):?>
                    <div class="container-question">
                        <div class="question">
                            <p><?=$value['question'];?></p>
                        </div>
                        <div div class="reponse cacher">
                            <p><?=$value['answer'];?></p>
                        </div>
                    </div>
        
                <?php endif;?>
        
                <?php endforeach;?>
        
            <?php endforeach;?>
            <!-- </div> -->
    </div>

</body>
</html>