<?php
/** @var \App\Models\Booking|null $booking */
/** @var \App\Models\Ride[] $rides */
/** @var \Framework\Support\LinkGenerator $link */

$isEdit = $booking !== null;

if ($isEdit) {
    $title = "Upraviť rezerváciu";
    $action = $link->url('booking.update');
} else {
    $title = "Pridať rezerváciu";
    $action = $link->url('booking.store');
}
?>

<main class="vyhladavanie">
    <div class="obsah">

        <h1><?php echo $title; ?></h1>

        <form class="formular" method="post"
              action="<?php echo $action; ?>">

            <?php
            if ($isEdit) {
                ?>
                <input type="hidden"
                       name="id"
                       value="<?php echo $booking->getId(); ?>">
                <?php
            }
            ?>

            <div class="polia">

                <div class="pole">
                    <label for="ride_id">Vyber jazdu</label>

                    <select id="ride_id" name="ride_id" required>

                        <option value="">Vyber jazdu</option>

                        <?php
                        foreach ($rides as $ride) {
                            ?>

                            <option value="<?php echo $ride->getId(); ?>"
                                <?php
                                if ($isEdit && $booking->getRideId() === $ride->getId()) {
                                    echo "selected";
                                }
                                ?>>
                                <?php
                                echo htmlspecialchars($ride->getDeparture());
                                echo " → ";
                                echo htmlspecialchars($ride->getDestination());
                                ?>
                            </option>

                            <?php
                        }
                        ?>

                    </select>
                </div>

                <div class="pole">
                    <label for="passenger_name">Meno cestujúceho</label>

                    <input type="text"
                           id="passenger_name"
                           name="passenger_name"
                           maxlength="100"
                           required
                           value="<?php
                           if ($isEdit) {
                               echo htmlspecialchars($booking->getPassengerName());
                           }
                           ?>">
                </div>

                <div class="pole">
                    <label for="seats">Počet miest</label>

                    <input type="number"
                           id="seats"
                           name="seats"
                           min="1"
                           required
                           value="<?php
                           if ($isEdit) {
                               echo $booking->getSeats();
                           } else {
                               echo "1";
                           }
                           ?>">
                </div>

                <div class="pole">
                    <label for="status">Stav rezervácie</label>

                    <select id="status" name="status" required>

                        <option value="pending"
                            <?php
                            if (!$isEdit || $booking->getStatus() === 'pending') {
                                echo "selected";
                            }
                            ?>>
                            Čakajúca
                        </option>

                        <option value="confirmed"
                            <?php
                            if ($isEdit && $booking->getStatus() === 'confirmed') {
                                echo "selected";
                            }
                            ?>>
                            Potvrdená
                        </option>

                        <option value="cancelled"
                            <?php
                            if ($isEdit && $booking->getStatus() === 'cancelled') {
                                echo "selected";
                            }
                            ?>>
                            Zrušená
                        </option>

                    </select>
                </div>

            </div>

            <div class="formular-spodok">

                <button type="submit" class="tlacidlo modre">
                    <?php
                    if ($isEdit) {
                        echo "Uložiť zmeny";
                    } else {
                        echo "Pridať rezerváciu";
                    }
                    ?>
                </button>

                <a href="<?php echo $link->url('booking.index'); ?>">
                    Späť na zoznam
                </a>

            </div>

        </form>

    </div>
</main>
