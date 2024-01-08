<?php include 'header.php'; ?>
<?php include 'oeuvres.php'; ?>
<main>
    <div id="liste-oeuvres">
        <?php foreach ($oeuvres as $oeuvre) { ?>
        <article class="oeuvre">
            <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?>">
                <img src="<?php echo $oeuvre['picture']; ?>" alt="<?php echo $oeuvre['alt']; ?>">
                <h2><?php echo $oeuvre['title']; ?></h2>
                <p class="description"><?php echo $oeuvre['artist']; ?></p>
            </a>
        </article>
        <?php } ?>
    </div>  
</main>
<?php include 'footer.php'; ?>
