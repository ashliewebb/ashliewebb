<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<?php include_once('includes/head.tpl.php'); ?>
<body itemscope itemtype="http://schema.org/WebPage" class="[[*alias]] blog-homepage">

<div class="container">
    <?php include_once('includes/header.tpl.php'); ?>

    <main class="main" id="main" role="main">
        [[!getResources? &tpl=`teaser` &limit=`0` &includeTVs=`1` &processTVs=`1`]]
    </main>

    <?php include_once('includes/footer.tpl.php'); ?>
</div>

<?php include_once('includes/scripts.tpl.php'); ?>
</body>
</html>