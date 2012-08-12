<?php include "header.php"; ?>
    
    <h1>kartVista</h1>
    <br />
    <h2><?php echo $slng[slogan] ?></h2>
    <br />
    <a href="index.php?lng=en">English</a> - <a href="index.php?lng=tr">Turkish</a>
    <br /><br />
    <?php echo $slng[name]; ?> : Onur <br />
    <?php echo $slng[surname] ?> : Çelik<br />
    <?php echo $slng[age] ?> : 26<br />
    <?php echo $slng[search]; ?> : <input type="search" placeholder="<?php echo $slng[search]; ?>" />
<?php include "footer.php"; ?>