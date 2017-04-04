<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <title>Creative - Start Bootstrap Theme</title>

    <?php echo Asset::css('style.css'); ?>
    <?php echo Asset::css('custom.css'); ?>
    <!-- Plugin CSS -->
    <?php echo Asset::css('magnific-popup.css'); ?>
    <!-- Theme CSS -->
    <?php echo Asset::css('creative.min.css'); ?>
</head>

<body>
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Your Favorite Source of Free Bootstrap Themes</h1>
		<hr>
		<?php echo Form::open(array('action' => 'api/search', 'method' => 'get')); ?>
		    <div class="input-append span12">
			<input type="text" class="search-query" placeholder="Search" name="word">
		    </div>
		    <div>
			<button type="submit" id="serch" class="btn btn-primary btn-xl page-scroll">Find Out More</button>
		    </div>
		<?php echo Form::close(); ?>
            </div>
        </div>
    </header>
</body>
</html>
