<?php require 'partials/header.php'; ?>
<div>
    <h2>Register a weapon</h2>
</div>
<form action="" method="post">
    <div>
        <label for="namewp">Name</label>
        <input type="text" name="namewp" id="namewp" class="input-width" require>
    </div>
    <div>
        <label for="damagewp">Damage</label>
        <input type="number" name="damagewp" id="damagewp" class="input-width" require>
    </div>
    <div>
        <label for="durabilitywp">Durability</label>
        <input type="number" name="durabilitywp" id="durabilitywp" class="input-width" require>
    </div>
    <div>
        <button type="submit" name ="submit" id="submit">Send form</button>
    </div>
</form>
<?php require 'partials/footer.php'; ?>