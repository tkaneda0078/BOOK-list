<!DOCTYPE html>
<head>
    <title>Finec - Responsive Portfolio Theme for Designers & Photographers</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <?php //echo Asset::img('favicon.jpg"', array('rel' => 'shortcut icon')); ?>

    <!-- Favicon -->
    <?php //echo Asset::img('favicon.ico', array('rel' => 'shortcut icon')); ?>

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <?php echo Asset::css('style.css'); ?>
    <?php echo Asset::css('custom.css'); ?>

</head>
<body class="home">


<!-- / Site Header -->
<div class="site-header">
    <!-- / Site Logo -->
    <div class="site-logo">
        <a href="">
            <?php echo Asset::img('site-logo.png'); ?>
        </a>
    </div>
    <!-- \ Site Logo -->


    <!-- / Site Menu -->
    <div class="site-menu">
        <div class="icon"></div>
        <div class="menu">
            <ul>
                <li><a href="index.html">Portfolio</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="portfolio-single.html">Portfolio Single</a></li>
                <li><a href="blog.html">Blog / News</a></li>
                <li><a href="blog-single.html">Blog Single</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="shortcodes.html">Shortcodes</a></li>
            </ul>
        </div>
    </div>
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="span12">-->
<!--                <form action="" id="custom-search-form" class="form-search form-horizontal pull-right">-->
                <?php echo Form::open('api/search', array('id' => 'custom-search-form', 'class' => 'form-search form-horizontal pull-right')); ?>
                    <div class="input-append span12">
                        <input type="text" class="search-query" placeholder="Search" name="word">
                        <button type="submit" id="serch" class="btn"><i class="icon-search"></i></button>
                    </div>
                <?php echo Form::close(); ?>
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- \ Site Menu -->


    <!-- / Site Description -->
    <h1>
        website.
    </h1>
    <!-- \ Site Description -->


    <!-- / Site Footer -->
    <div class="site-footer">
        <div class="site-social">
            <ul>
                <li><i class="pe-so-dribbble pe-lg pe-va"></i></li>
                <li><i class="pe-so-facebook pe-lg pe-va"></i></li>
                <li><i class="pe-so-twitter pe-lg pe-va"></i></li>
            </ul>
        </div>

        <p>© 2017 website</p>
    </div>
    <!-- \ Site Footer -->

</div>
<!-- \ Site Header -->


<!-- \ Site Main -->
<div class="site-main">

    <ul class="row grid cs-style-2">
        <li class="col-md-2 post">
            <figure>
                <?php echo Asset::img('uploads/01.jpg'); ?>
                <figcaption>
                    <h3>Music</h3>
                    <span>Jacob Cummings</span>
                </figcaption>
            </figure>
        </li>
        <li class="col-md-2 post">
            <figure>
                <?php echo Asset::img('uploads/02.jpg'); ?>
                <figcaption>
                    <h3>Music</h3>
                    <span>Jacob Cummings</span>
                </figcaption>
            </figure>
        </li>
        <li class="col-md-2 post">
            <figure>
                <?php echo Asset::img('uploads/01.jpg'); ?>
                <figcaption>
                    <h3>Music</h3>
                    <span>Jacob Cummings</span>
                </figcaption>
            </figure>
        </li>
        <li class="col-md-2 post">
            <figure>
                <?php echo Asset::img('uploads/02.jpg'); ?>
                <figcaption>
                    <h3>Music</h3>
                    <span>Jacob Cummings</span>
                </figcaption>
            </figure>
        </li>
        <li class="col-md-2 post">
            <figure>
                <?php echo Asset::img('uploads/01.jpg'); ?>
                <figcaption>
                    <h3>Music</h3>
                    <span>Jacob Cummings</span>
                </figcaption>
            </figure>
        </li>
        <li class="col-md-2 post">
            <figure>
                <?php echo Asset::img('uploads/02.jpg'); ?>
                <figcaption>
                    <h3>Music</h3>
                    <span>Jacob Cummings</span>
                </figcaption>
            </figure>
        </li>
        <li class="col-md-2 post">
            <figure>
                <?php echo Asset::img('uploads/01.jpg'); ?>
                <figcaption>
                    <h3>Music</h3>
                    <span>Jacob Cummings</span>
                </figcaption>
            </figure>
        </li>
        <li class="col-md-2 post">
            <figure>
                <?php echo Asset::img('uploads/02.jpg'); ?>
                <figcaption>
                    <h3>Music</h3>
                    <span>Jacob Cummings</span>
                </figcaption>
            </figure>
        </li>
        <li class="col-md-2 post">
            <figure>
                <?php echo Asset::img('uploads/01.jpg'); ?>
                <figcaption>
                    <h3>Music</h3>
                    <span>Jacob Cummings</span>
                </figcaption>
            </figure>
        </li>
    </ul>
</div>


<!-- / JS Files  -->

<!-- jQuery -->
<?php echo Asset::js('jQuery/jquery-2.1.1.js'); ?>

<!-- Theme Functions -->
<?php echo Asset::js('functions.js'); ?>

<!-- Caption Effects Plugin -->
<?php echo Asset::js('CaptionHoverEffects/js/modernizr.custom.js'); ?>
<?php echo Asset::js('CaptionHoverEffects/js/toucheffects.js'); ?>

<!-- \ JS Files  -->

<script>
    <?php if (isset($books)) : ?>
    var books = <?php echo json_encode($books, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;
    <?php endif; ?>
</script>

</body>
</html>
