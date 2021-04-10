<?php require 'partials/header.php'; ?>

<div class="container">
    <div class="row pt-5">
        <div class="m-1 card-weapon">
            <div id="title">
                <h5 id="name"><?php echo $weapon['name']?></h5>
            </div>
            <div class="photo-container">
                <img class="photo-card" src="" alt="photo de <?php echo $weapon['name']?>">
            </div>
            <div class="stat-container">
            <p>
                <span id="strength"><?php echo $weapon['damage']?> DMG</span>
                <span id="magie"><?php echo $weapon['durability']?> DURABILITY</span>
            </p>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>