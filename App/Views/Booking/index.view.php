<?php
/** @var \App\Models\Booking[] $bookings */
/** @var \Framework\Support\LinkGenerator $link */
?>

<main class="vyhladavanie">
    <div class="obsah">

        <h1>Rezervácie</h1>
        <p class="popis">Prehľad všetkých vytvorených rezervácií.</p>

        <p>
            <a href="<?php echo $link->url('booking.add'); ?>"
               class="tlacidlo modre">
                Pridať rezerváciu
            </a>
        </p>

        <section class="zoznam-jazd">

            <?php
            foreach ($bookings as $booking) {
                $ride = $booking->getRide();
                ?>

                <article class="karta-jazdy">

                    <div>
                        <h2>
                            <?php
                            echo htmlspecialchars($booking->getPassengerName());
                            ?>
                        </h2>

                        <p>
                            <?php
                            if ($ride !== null) {
                                echo htmlspecialchars($ride->getDeparture());
                                echo " → ";
                                echo htmlspecialchars($ride->getDestination());
                            } else {
                                echo "Jazda už nie je dostupná.";
                            }
                            ?>
                        </p>

                        <p>
                            Počet miest:
                            <?php echo $booking->getSeats(); ?>
                        </p>

                        <p>
                            Stav:
                            <?php echo htmlspecialchars($booking->getStatus()); ?>
                        </p>

                        <div class="akcie-jazdy">

                            <a href="<?php
                            echo $link->url(
                                'booking.edit',
                                ['id' => $booking->getId()]
                            );
                            ?>" class="tlacidlo-upravit">
                                Upraviť
                            </a>

                            <form method="post"
                                  action="<?php echo $link->url('booking.delete'); ?>"
                                  onsubmit="return confirm('Naozaj chcete vymazať túto rezerváciu?');">

                                <input type="hidden"
                                       name="id"
                                       value="<?php echo $booking->getId(); ?>">

                                <button type="submit" class="tlacidlo-vymazat">
                                    Vymazať
                                </button>

                            </form>

                        </div>
                    </div>

                </article>

                <?php
            }
            ?>

            <?php
            if (count($bookings) === 0) {
                ?>
                <p>Zatiaľ neexistujú žiadne rezervácie.</p>
                <?php
            }
            ?>

        </section>

    </div>
</main>
