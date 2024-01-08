<?php include 'header.php'; ?>
<?php include 'oeuvres.php'; ?>

<main>
    <?php foreach ($oeuvres as $oeuvre) {
        if ($oeuvre["id"] == (int)$_GET["id"]) { 
    ?>

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvre['picture']; ?>" alt="<?php echo $oeuvre['alt']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre['title']; ?></h1>
            <p class="description"><?php echo $oeuvre['artist']; ?></p>
            <p class="description-complete"><?php echo $oeuvre['description']; ?></p>
        </div>
    </article>
    <?php
        }
    } ?>
</main>

<?php include 'footer.php'; ?>
