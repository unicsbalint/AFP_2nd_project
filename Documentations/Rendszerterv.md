
<center><h1>Rendszerterv</h1></center>

* <h2>Rendszer célja</h2>

    A rendszer célja egy olyan weboldal létrehozása, amelyben a felhasználó tud vásárolni a termékek közül. A felhasználó tud szűrni a termékek közül, értékelni tudja a termék minőségét és a weboldal szolgáltatásait. A weboldal akadálymentesített, ezért minden felhasználó könnyedén tudja kezelni a felületet. Az ADMIN szerepkörrel rendelkező felhasználó felelős a termékek hozzáadásáért és a webáruház megfelelő működéséért. A webáruház rendelkezik egy virtuális kosárral, amelyben a felhasználó az általa kiválasztott termékeket tudja tárolni és megvásárolni. A webáruház minden internetkapcsolattal és webböngészővel rendelkező eszközön működik. 

* <h2>Projektterv</h2>
 Az átlag felhasználók jogköre megegyezik, mindegyik felhasználónak joga van módosítani személyes adatait, törölni felhasználóját, saját hirdetéseit,  A felhasználók értékelhetik a megvásárolt termékeket.
 Ezen kívül az ADMIN felhasználó jogköre jóváhagyni a felhasználók által felrakott termékeket.


* <h2>Üzleti folyamatok modellje</h2>

    ![Image](https://github.com/unicsbalint/AFP_2nd_project/blob/master/Pictures/Igenyelt_uzleti_folyamat_modell.png)

* <h2>Követelmények</h2>

    * **Funkcionális követelmények:**

        - A felhasználó adatainak eltárolása
        - A termékek adatainak eltárolása
        - A felhasználói értékelések eltárolása
        - A termékek közötti keresés és szűrés megvalósítása
        - A termék kosárba helyezésének kialakítása
        - A vásárlás menetének kialakítása
    
    * **Nemfunkcionális követelmények:**

        - A felhasználók, más felhasználóknak csak a nevét és az értékelését látják
        - A rendszernek egyszerre több felhasználót kell kiszolgálnia
    
    * **Törvényi előírások, szabványok:**

        - A GDPR-ban foglaltak betartása

* <h2>Funkcionális terv</h2>
	A felhasználó, termékek, felhasználói értékelések adatainak tárolására MySql adatbáziban kerül sor.
	A szűrési rendszer , keresés, kosárba helyezés, vásárlás menetének megvalósítására php programnyelvben lesz megoldva.

* <h2>Fizikai környezet</h2>

    Az alkalmazás web platformra készül, ezért minden internetkapcsolattal és webböngészővel rendelkező készüléken elérhető. Nincsenek megvásárolt software komponenseink. A fejlesztéshez használt eszközök:
    - Visual Studio Code
    - XAMPP
    - Notepad++
    - Git
    - Trello

* <h2>Absztrakt domain modell</h2>
	/pictures/abstract-domain-model

* <h2>Architekturális terv</h2>
	Az architektúrális tervnek a funkcionális követelményeken túl fontos elemét képezik a rendszer használatát befolyásoló tényezők is. Az adatok tárolását adatbázisok segítségével biztosítjuk így rugalmasság szempontjából a későbbi bővítésekre is felkészültünk.
* <h2>Adatbázis terv</h2>

    ![Image](https://github.com/unicsbalint/AFP_2nd_project/blob/master/Pictures/Database_plan.png)

* <h2>Implementációs terv</h2>

    A webáruház felülete HTML, JavaScript nyelven készül. Az elemeket CSS fájlok segítségével dizájnoljuk. A termékek
    és a felhasználók tárolására szükség van adatbázisra is. A webáruház backend részét PHP nyelven valósítjuk meg. A fájlokat külön választjuk, az átláthatóság és az egyszerűbb bővítés érdekében.

* <h2>Tesztterv</h2>

    A tesztelés során az oldalon megvalósított funkciók működését figyeljük. A teszteléssel a különböző hibák megtalálása a cél.
    A teszteléseket a fejlesztői csapat minden tagja elvégzi. Egy teszt eredményeit a tagok dokumentálják külön fájlokba.
    A dokumentum táblázatos formában beküldendő.
    A tesztelési dokumentum kitöltésére egy sablon:

    **Tesztelő: Vezetéknév Keresztnév**
    
    **Tesztelés dátuma: Év.Hónap.Nap**

    Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés
    ----------|--------------|---------------|----------|-----------
    például. Teszt #01 | Regisztráció | A felhasználó az adatok megadásával sikeresen regisztrálni tud  | A felhasználó sikeresen regisztrált | Nem találtam problémát.
    ... | ... | ... | ... | ...

* <h2>Telepítési terv</h2>

    A áruház internet segítségével lesz elérhető egy webcímen keresztül. A webcím megadásával a felhasználó a webáruház főoldalára kerül.
    A legtöbb böngészőből elérhető a weboldal, továbbá minden interneteléréssel rendelkező eszköz eléri az oldalt.
    A webáruház telepítésekor szükséges, hogy egy szerverszolgáltatáshoz kapcsolódjon, mivel a háttérben adatbáziskezelés történik.
    A telepítés során fontos, hogy a szerver elérési útja megváltozhat, ez esetben módosítani kell azt a megfelelő fájlban. 

* <h2>Karbantartási terv</h2>

    A webáruház karbantartására időről időre sor fog kerülni illetve a lehető leghamarabb, amennyiben az oldal működését megnehezítő hibát
    találunk. A hibafelderítés meggyorsítása érdekében szeretnénk az oldalon egy 'Jelentés' gombot elhelyezni, mely megnyomásával, és a mezők kitöltésével a felhansználó küldhet visszajelzést, amennyiben egy funkció nem működik megfelelően.
    Ezeket a jelentéseket a fejlesztői csapat tagjai látni fogják, így hamar meg tudják kezdeni a hibák javítását.
    A hibajelentés elküldésekor két mezőt fogunk látni magunk előtt: Az egyikben a probléma rövid, párszavas megfogalmazása szükséges, ezen mező
    kitöltése kötelező, a másik mező a probléma részletesebb leírására szolgál mely kitöltése opcionális.
    A biztonság növelése érdekében szükséges bármilyen módosítás előtt az oldalról egy biztonsági mentést készíteni.