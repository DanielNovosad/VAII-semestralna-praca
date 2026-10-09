# UniRide

**Daniel Novosad**  
**Študijná skupina:** 5ZYI31

## Stručný opis projektu

**UniRide** je webová aplikácia určená pre študentov, ktorí chcú zdieľať jazdy autom s ostatnými študentmi. Používatelia budú môcť vyhľadávať ponúkané jazdy podľa miesta odchodu, cieľovej destinácie a dátumu. Po prihlásení si budú môcť rezervovať voľné miesto vo vybranej jazde alebo sami ponúknuť jazdu ostatným.

Používateľ, ktorý chce ponúkať jazdy, si najskôr vyplní údaje o svojom vozidle. Pri vytváraní jazdy následne zadá trasu, dátum, čas odchodu, cenu za osobu a počet voľných miest. Cieľom aplikácie je uľahčiť študentom hľadanie spoločnej dopravy a znížiť náklady na cestovanie.

## Role v projekte

### Návštevník

Môže vyhľadávať dostupné jazdy a prezerať si ich podrobnosti. Na vytvorenie jazdy alebo rezerváciu miesta sa musí zaregistrovať a prihlásiť.

### Registrovaný používateľ

Môže ponúkať vlastné jazdy, rezervovať si miesta v jazdách ostatných používateľov, spravovať svoje rezervácie a upravovať svoj profil.

### Administrátor

Má prístup k správe používateľov a jázd. Môže odstraňovať nevhodné ponuky a riešiť problémy s obsahom inzerovaných jázd.

## Prípady použitia podľa rolí

### Návštevník
- Vyhľadá jazdu podľa miesta odchodu, cieľa a dátumu.
- Zobrazí si podrobnosti vybranej jazdy.
- Vytvorí si používateľský účet.

### Registrovaný používateľ

- Prihlási sa a odhlási zo svojho účtu.
- Upraví svoje osobné údaje.
- Vyplní alebo upraví informácie o svojom vozidle.
- Vytvorí novú ponuku jazdy.
- Upraví alebo zruší vlastnú ponúkanú jazdu.
- Rezervuje si miesto v jazde iného používateľa.
- Zruší svoju rezerváciu.
- Zobrazí si prehľad vlastných jázd a rezervácií.
- Ako vodič si zobrazí zoznam cestujúcich prihlásených na jeho jazdu.


### Administrátor

- Zobrazí si zoznam všetkých registrovaných používateľov.
- Zobrazí si zoznam všetkých ponúkaných jázd.
- Odstráni nevhodnú alebo neaktuálnu ponuku jazdy.
- Zablokuje alebo odblokuje používateľský účet.

## Plánované entity

### Používateľ (`User`)

Obsahuje údaje o používateľovi, napríklad **meno, priezvisko, e-mail a heslo**.

### Vozidlo (`Vehicle`)

Obsahuje informácie o vozidle používateľa, napríklad **značku, model, farbu a počet miest pre cestujúcich**. Používateľ môže mať najviac jedno vozidlo.

### Jazda (`Ride`)

Predstavuje ponúkanú jazdu. Obsahuje **miesto odchodu, cieľovú destináciu, dátum, čas, cenu za osobu a počet ponúkaných miest**.

### Rezervácia (`Booking`)

Predstavuje rezerváciu miesta na jazde. Obsahuje informáciu o **používateľovi, jazde, dátume vytvorenia a stave rezervácie**.

## Vzťahy medzi entitami

### Používateľ – Vozidlo (1:1)
Používateľ môže mať maximálne jedno vozidlo, pričom každé vozidlo patrí jednému používateľovi.

### Používateľ – Jazda (1:N)
Jeden používateľ môže vytvoriť viacero jázd, ale každá jazda má iba jedného vodiča.

### Vozidlo – Jazda (1:N)
Jedno vozidlo môže byť použité na viacerých jazdách, pričom každá jazda využíva jedno konkrétne vozidlo.

### Používateľ – Rezervácia (1:N)
Používateľ môže vytvoriť viacero rezervácií, ale každá rezervácia patrí jednému používateľovi.

### Jazda – Rezervácia (1:N)
Jedna jazda môže mať viacero rezervácií, pričom každá rezervácia sa vzťahuje na jednu konkrétnu jazdu.

## Hlavné stránky aplikácie

### 1. Úvodná stránka
Zobrazuje základné informácie o aplikácii a ponuku dostupných jázd.

### 2. Vyhľadávanie jázd
Umožňuje vyhľadávať a filtrovať jazdy podľa miesta odchodu, cieľa a dátumu.

### 3. Detail jazdy
Zobrazuje informácie o konkrétnej jazde, vodičovi, vozidle, cene a voľných miestach. Prihlásený používateľ si tu môže rezervovať miesto.

### 4. Používateľský účet
Umožňuje registráciu, prihlásenie a úpravu osobných údajov a informácií o vlastnom vozidle.

### 5. Moje jazdy a rezervácie
Zobrazuje jazdy vytvorené používateľom a jeho rezervácie. Umožňuje vytvárať, upravovať a rušiť vlastné jazdy a spravovať rezervácie.

### 6. Administrátorské rozhranie
Umožňuje administrátorovi prezerať a spravovať používateľov a ponúkané jazdy.

## Rozdelenie funkcionality

### Základné funkcie

- Registrácia, prihlásenie a odhlásenie používateľa.
- Zobrazenie a vyhľadávanie dostupných jázd.
- Zobrazenie detailu konkrétnej jazdy.
- Vytváranie, úprava a odstraňovanie vlastných jázd.
- Zadanie a úprava údajov o jednom vozidle používateľa.
- Rezervovanie voľného miesta na jazde.
- Zrušenie vlastnej rezervácie.
- Zobrazenie prehľadu vlastných jázd a rezervácií.
- Kontrola počtu dostupných miest pri rezervácii.
- Kontrola oprávnení používateľov pri úprave a odstraňovaní údajov.

### Rozširujúce funkcie

- Pokročilé filtrovanie a zoradenie jázd podľa ceny alebo času odchodu.
- Nahrávanie fotografie vozidla.
- Potvrdzovanie alebo zamietanie rezervácií vodičom.
- Administrátorské rozhranie na správu používateľov a jázd.
- Zobrazovanie aktuálneho počtu voľných miest.




<br>
<br>
<sub><i>(Pri príprave dokumentácie bol použitý nástroj Codex na pomoc s formátovaním v Markdowne a na kontrolu formulácií textu.)</i></sub>