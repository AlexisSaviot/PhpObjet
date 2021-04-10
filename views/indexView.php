<?php require 'partials/header.php'; ?>

<div class="container">
    <div class="row pt-5">
        <?php foreach ($characList as $character){?>
            <div class="m-1 card-perso">
            <div id="title">
                <h5 id="name"><?php echo $character->getName()?></h5>
            </div>
            <div class="star-card">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="photo-container">
                <img class="photo-card" src="./img/unnamed.jpg" alt="photo de <?php echo $character->getName()?>">
            </div>
            <div class="stat-container">
                <p>
                    <span id="life"><?php echo $character->getLife()?> HP</span>
                    <span id="strength"><?php echo $character->getStrength()?> STRENGTH</span>
                    <span id="magie"><?php echo $character->getMagic()?> MAGIC</span></br>
                </p>
                <a href="single.php?id=<?php echo $character->getID()?>"><?php echo $character->getName()?>'s page</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<?php require 'partials/footer.php'; ?>

