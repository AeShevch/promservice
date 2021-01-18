<nav class="navbar navbar-expand-sm fixed-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <?php bloginfo('name'); ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <?php wpbootstrapsass_nav(); ?>
        </div>
    </div>
    <!-- /.container -->
</nav>
