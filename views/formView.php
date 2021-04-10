<?php require 'partials/header.php'; ?>
<div>
    <h2>Register a character</h2>
</div>
<form action="" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="input-width" require>
    </div>
    <div>
        <label for="life">Life</label>
        <input type="number" name="life" id="life" class="input-width" require>
    </div>
    <div>
        <label for="strength">Strength</label>
        <input type="number" name="strength" id="strength" class="input-width" require>
    </div>
    <div>
        <label for="magie">Magic</label>
        <input type="number" name="magic" id="magic" class="input-width" require>
    </div>
    <div>
        <button type="submit" name ="submit" id="submit">Send form</button>
    </div>
</form>
<?php require 'partials/footer.php'; ?>