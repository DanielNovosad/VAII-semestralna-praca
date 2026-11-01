<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App\Configuration::APP_NAME ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $link->asset('favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $link->asset('favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $link->asset('favicons/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= $link->asset('favicons/site.webmanifest') ?>">
    <link rel="shortcut icon" href="<?= $link->asset('favicons/favicon.ico') ?>">
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
</head>
<body>

<header class="hlavicka">
    <div class="obsah hlavicka-obsah">
        <a href="<?= $link->url('home.index') ?>" class="logo">🚙 UniRide</a>
        <nav class="navigacia">
            <a href="<?= $link->url('home.index') ?>" class="<?= ($_GET['c'] ?? 'home') === 'home' ? 'aktivna' : '' ?>">Domov</a>
            <a href="<?= $link->url('jazdy.index') ?>" class="<?= ($_GET['c'] ?? 'home') === 'jazdy' ? 'aktivna' : '' ?>">Vyhľadať jazdu</a>
            <a href="#">Moje jazdy</a>
            <a href="#">Profil</a>
            <a href="#" class="prihlasenie">Prihlásiť sa</a>
        </nav>
    </div>
</header>

<?= $contentHTML ?>

<footer class="pata">
    <div class="obsah pata-obsah">
        <span>UniRide</span>
        <span>Spolu na cestách</span>
    </div>
</footer>

</body>
</html>