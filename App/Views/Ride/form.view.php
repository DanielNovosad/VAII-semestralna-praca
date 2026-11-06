<?php
/** @var \App\Models\Ride|null $ride */
/** @var \Framework\Support\LinkGenerator $link */

$isEdit = $ride !== null;

if ($isEdit) {
    $title = "Upraviť jazdu";
    $action = $link->url('ride.update');
} else {
    $title = "Pridať jazdu";
    $action = $link->url('ride.store');
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
                <input type="hidden" name="id"
                       value="<?php echo $ride->getId(); ?>">
                <?php
            }
            ?>

            <div class="polia">

                <div class="pole">
                    <label for="departure">Odkiaľ</label>
                    <input type="text"
                           id="departure"
                           name="departure"
                           required
                           maxlength="100"
                           value="<?php
                           if ($isEdit) {
                               echo htmlspecialchars($ride->getDeparture());
                           }
                           ?>">
                </div>

                <div class="pole">
                    <label for="destination">Kam</label>
                    <input type="text"
                           id="destination"
                           name="destination"
                           required
                           maxlength="100"
                           value="<?php
                           if ($isEdit) {
                               echo htmlspecialchars($ride->getDestination());
                           }
                           ?>">
                </div>

                <div class="pole">
                    <label for="departure_time">Dátum a čas odchodu</label>
                    <input type="datetime-local"
                           id="departure_time"
                           name="departure_time"
                           required
                           value="<?php
                           if ($isEdit) {
                               echo date(
                                   'Y-m-d\TH:i',
                                   strtotime($ride->getDepartureTime())
                               );
                           }
                           ?>">
                </div>

                <div class="pole">
                    <label for="price">Cena za osobu (€)</label>
                    <input type="number"
                           id="price"
                           name="price"
                           min="0"
                           max="999999.99"
                           step="0.01"
                           required
                           value="<?php
                           if ($isEdit) {
                               echo $ride->getPrice();
                           }
                           ?>">
                </div>

                <div class="pole">
                    <label for="available_seats">Počet voľných miest</label>
                    <input type="number"
                           id="available_seats"
                           name="available_seats"
                           min="1"
                           required
                           value="<?php
                           if ($isEdit) {
                               echo $ride->getAvailableSeats();
                           }
                           ?>">
                </div>

            </div>

            <div class="formular-spodok">
                <button type="submit" class="tlacidlo modre">
                    <?php
                    if ($isEdit) {
                        echo "Uložiť zmeny";
                    } else {
                        echo "Pridať jazdu";
                    }
                    ?>
                </button>

                <a href="<?php echo $link->url('ride.index'); ?>">
                    Späť na zoznam
                </a>
            </div>

        </form>

    </div>
</main>
