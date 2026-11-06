<?php
/** @var \App\Models\Ride[] $rides */
/** @var \Framework\Support\LinkGenerator $link */
?>

<main class="vyhladavanie">
    <div class="obsah">

        <h1>Vyhľadávanie jázd</h1>
        <p class="popis">Nájdi spoločnú jazdu podľa destinácie a dátumu.</p>

        <!-- Vyhladavaci formular -->
        <form class="formular">

            <div class="polia">

                <div class="pole">
                    <label for="odkial">Odkiaľ</label>
                    <input type="text"
                           id="odkial"
                           placeholder="Vyberte mesto">
                </div>

                <div class="pole">
                    <label for="kam">Kam</label>
                    <input type="text"
                           id="kam"
                           placeholder="Vyberte mesto">
                </div>

                <div class="pole">
                    <label for="datum">Dátum</label>
                    <input type="date" id="datum">
                </div>

            </div>

            <div class="formular-spodok">
                <button type="button" class="tlacidlo modre">
                    Vyhľadať
                </button>

                <span>
                    Zobrazené výsledky:
                    <?php echo count($rides); ?>
                </span>
            </div>

        </form>

        <!-- Filtre -->
        <div class="filtre">
            <span>Cena: bez obmedzenia</span>
            <span>Čas odchodu: bez obmedzenia</span>
        </div>

        <!-- Pridanie jazdy -->
        <p>
            <a href="<?php echo $link->url('ride.add'); ?>"
               class="tlacidlo modre">
                Pridať jazdu
            </a>
        </p>

        <!-- Zoznam jazd -->
        <section class="zoznam-jazd">

            <?php
            foreach ($rides as $ride) {
                ?>

                <article class="karta-jazdy">

                    <div>
                        <h2>
                            <?php
                            echo htmlspecialchars($ride->getDeparture());
                            echo " → ";
                            echo htmlspecialchars($ride->getDestination());
                            ?>
                        </h2>

                        <p>
                            <?php
                            echo date(
                                    'd. m. Y · H:i',
                                    strtotime($ride->getDepartureTime())
                            );
                            ?>
                        </p>

                        <!-- Tlacidla Upravit a Vymazat -->
                        <div class="akcie-jazdy">

                            <a href="<?php
                            echo $link->url(
                                    'ride.edit',
                                    ['id' => $ride->getId()]
                            );
                            ?>" class="tlacidlo-upravit">
                                Upraviť
                            </a>

                            <form method="post"
                                  action="<?php echo $link->url('ride.delete'); ?>"
                                  onsubmit="return confirm('Naozaj chcete vymazať túto jazdu?');">

                                <input type="hidden"
                                       name="id"
                                       value="<?php echo $ride->getId(); ?>">

                                <button type="submit" class="tlacidlo-vymazat">
                                    Vymazať
                                </button>

                            </form>

                        </div>

                    </div>

                    <div class="cena">
                        <strong>
                            <?php
                            echo number_format(
                                    $ride->getPrice(),
                                    2,
                                    ',',
                                    ' '
                            );
                            ?>
                            € / osoba
                        </strong>

                        <span>
                            <?php echo $ride->getAvailableSeats(); ?>
                            voľné miesta
                        </span>
                    </div>

                </article>

                <?php
            }
            ?>

            <?php
            if (count($rides) === 0) {
                ?>
                <p>Momentálne nie sú dostupné žiadne jazdy.</p>
                <?php
            }
            ?>

        </section>

    </div>
</main>
