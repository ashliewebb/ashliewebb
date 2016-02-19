<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<?php include_once('includes/head.tpl.php'); ?>
<body itemscope itemtype="http://schema.org/WebPage" class="[[*alias]]">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-24767164-1', 'auto');
  ga('send', 'pageview');

</script>

<div class="container">
    <?php include_once('includes/header.tpl.php'); ?>

    <main class="main[[!If? &subject=`[[*sidebar]]` &operator=`empty` &then=` layout-two-columns--7-shift`]][[!If? &subject=`[[*sidebar]]` &operator=`!empty` &then=` layout-two-columns--3-9`]]" id="main" role="main">
        [[!If? &subject=`[[*sidebar]]` &operator=`!empty`
            &then=`<aside class="sidebar column-3">
                        [[*sidebar]]
                   </aside>`]]
        <section class="content column-[[!If? &subject=`[[*alias]]` &operator=`==` &operand=`resume` &then=`9` &else=`7`]]">
            [[*content]]
        </section>
    </main>

    <?php include_once('includes/footer.tpl.php'); ?>
</div>

<?php include_once('includes/scripts.tpl.php'); ?>
</body>
</html>