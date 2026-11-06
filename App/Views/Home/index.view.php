<?php
/** @var \Framework\Support\LinkGenerator $link */
?>
<main>
    <!-- uvod -->
    <section class="uvod">
        <div class="obsah">

            <h1>Cestuj jednoducho s UniRide</h1>

            <p>Nájdi si spoločnú jazdu alebo ponúkni voľné miesto vo svojom aute.</p>

            <div class="tlacidla">
                <a href="<?= $link->url('ride.index') ?>" class="tlacidlo modre">Vyhľadať jazdu</a>
                <a href="#" class="tlacidlo biele">Ponúknuť jazdu</a>
            </div>

        </div>
    </section>

    <!-- informacne karty -->
    <section class="informacie">
        <div class="obsah karty">

            <article class="karta">
                <h2>Vyhľadávanie jázd</h2>
                <p>Nájdi dostupné jazdy podľa miesta a dátumu.</p>
            </article>

            <article class="karta">
                <h2>Moje jazdy a rezervácie</h2>
                <p>Spravuj svoje ponuky a rezervované miesta.</p>
            </article>

            <article class="karta">
                <h2>Môj profil</h2>
                <p>Uprav osobné údaje a informácie o vozidle.</p>
            </article>

        </div>
    </section>

    <!-- obrazky -->
    <section class="ilustracia">

        <picture>
            <source media="(max-width: 600px)"
                    srcset="<?= $link->asset('images/uniride-landscape-mobile.svg') ?>">

            <source media="(max-width: 900px)"
                    srcset="<?= $link->asset('images/uniride-landscape-tablet.svg') ?>">

            <img src="<?= $link->asset('images/uniride-landscape-desktop.svg') ?>"
                 alt="Auto na ceste"
                 class="obrazok">
        </picture>

    </section>
</main>