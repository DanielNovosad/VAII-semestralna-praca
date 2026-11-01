<main class="vyhladavanie">
    <div class="obsah">

        <!-- nadpis -->
        <h1>Vyhľadávanie jázd</h1>
        <p class="popis">Nájdi spoločnú jazdu podľa destinácie a dátumu.</p>


        <!-- vyhlavaci formular -->
        <form class="formular">

            <div class="polia">

                <div class="pole">
                    <label for="odkial">Odkiaľ</label>
                    <input type="text" id="odkial" placeholder="Vyberte mesto">
                </div>

                <div class="pole">
                    <label for="kam">Kam</label>
                    <input type="text" id="kam" placeholder="Vyberte mesto">
                </div>

                <div class="pole">
                    <label for="datum">Dátum</label>
                    <input type="date" id="datum">
                </div>

            </div>

            <div class="formular-spodok">
                <button type="button" class="tlacidlo modre">Vyhľadať</button>
                <span>Zobrazené výsledky: 3</span>
            </div>

        </form>


        <!-- filtre -->
        <div class="filtre">
            <span>Cena: bez obmedzenia</span>
            <span>Čas odchodu: bez obmedzenia</span>
        </div>


        <!-- zoznam jazd -->
        <section class="zoznam-jazd">

            <article class="karta-jazdy">

                <div>
                    <h2>Žilina → Bratislava</h2>
                    <p>12. 10. 2026 · 08:30</p>
                    <a href="#" class="detail">Zobraziť detail</a>
                </div>

                <div class="cena">
                    <strong>8 € / osoba</strong>
                    <span>3 voľné miesta</span>
                </div>

            </article>

            <article class="karta-jazdy">

                <div>
                    <h2>Martin → Žilina</h2>
                    <p>12. 10. 2026 · 13:15</p>
                    <a href="#" class="detail">Zobraziť detail</a>
                </div>

                <div class="cena">
                    <strong>5 € / osoba</strong>
                    <span>2 voľné miesta</span>
                </div>

            </article>

            <article class="karta-jazdy">

                <div>
                    <h2>Žilina → Trenčín</h2>
                    <p>12. 10. 2026 · 17:00</p>
                    <a href="#" class="detail">Zobraziť detail</a>
                </div>

                <div class="cena">
                    <strong>6 € / osoba</strong>
                    <span>1 voľné miesto</span>
                </div>

            </article>

        </section>

    </div>
</main>