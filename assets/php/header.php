<!-- 
@ASSESSME.USERID: ls5273
@ASSESSME.AUTHOR: Lana Sorak
@ASSESSME.ANALYZE: YES
-->

<!DOCTYPE html>

    <html lang="en">
        <head>
            <meta charset="utf-8" />

            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Playwrite+HR+Lijeva:wght@100..400&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">

            <?php if (empty($exclude_nav_css)): ?>
            <link rel="stylesheet" href="assets/css/nav.css">
            <?php endif; ?>

            <link rel="stylesheet" href="assets/css/<?php echo $style_sheet; ?>">

            <script src="assets/js/nav.js" defer></script>

            <?php if (basename($_SERVER['PHP_SELF']) === 'comments.php') : ?>
                <script src="assets/js/validate.js"></script>
            <?php endif; ?>

            <?php if (basename($_SERVER['PHP_SELF']) === 'map_explorer.php') : ?>
                <script src="assets/js/map.js"></script>
            <?php endif; ?>

            <title><?php echo $title1; ?></title>
        </head>

        <body>
            <h1><?php echo $title2; ?></h1>