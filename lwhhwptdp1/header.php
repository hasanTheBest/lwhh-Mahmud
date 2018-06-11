<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title> 
    <?php wp_head(); ?>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline"><?php bloginfo( 'description' ); ?></h3>
                <h1 class="align-self-center display-1 text-center heading"><?php bloginfo( 'name' ); ?></h1>
            </div>
        </div>
    </div>
</div>
