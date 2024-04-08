/******************/
/* e14_2018_06_05 */
/******************/
function obliczWesele() {
    const iloscGosci = +document.getElementById('iloscGosci').value
    const wynik = document.getElementById('wynik_1')
    const poprawiny = document.getElementById('poprawiny')
    let koszt = iloscGosci * 100
    if (poprawiny.checked) {
        wynik.innerHTML = "Koszt Twojego wesela to " + koszt * 1.3 + " złotych"
    } else {
        wynik.innerHTML = "Koszt Twojego wesela to " + koszt + " złotych"
    }
}

/******************/
/* e14_2018_06_06 */
/******************/
function obliczKosztDostawyZG() {
    const iloscKilometrowZG = +document.getElementById('iloscKilometrowZG').value
    const wynik = document.getElementById('wynik_2')
    const zielonaGora = document.getElementById('zielonaGora')
    let koszt = iloscKilometrowZG * 2
    if (zielonaGora.checked) {
        wynik.innerHTML = "Dowieziemy Twoją pizzę za darmo"
    } else {
        wynik.innerHTML = "Dowóz będzie Cię kosztował " + koszt + " złotych"
    }
}

/******************/
/* e14_2019_01_02 */
/******************/
function rozmiarCzcionki() {
    const rozmiarTekstu = +document.getElementById('rozmiarTekstu').value
    const wynik = document.getElementById('wynik_3')
    wynik.style.fontSize = rozmiarTekstu + '%'
}

function typCzcionki(typ) {
    const wynik = document.getElementById('wynik_3')
    wynik.style.fontStyle = typ
}

function kolorTekstu(kolor) {
    const wynik = document.getElementById('wynik_3')
    wynik.style.color = kolor
}

/******************/
/* e14_2019_01_04 */
/******************/
function obliczKawa() {
    const wynik = document.getElementById('wynik_4')
    const numerKawy = +document.getElementById('numerKawy').value
    const wagaKawy = +document.getElementById('wagaKawy').value
    let koszt = 0
    switch (numerKawy) {
        case 1:
            koszt = 5 * wagaKawy
            wynik.innerHTML = "Koszt zamówienia wynosi " + koszt + " zł"
            break
        case 2:
            koszt = 7 * wagaKawy
            wynik.innerHTML = "Koszt zamówienia wynosi " + koszt + " zł"
            break
        case 3:
            koszt = 6 * wagaKawy
            wynik.innerHTML = "Koszt zamówienia wynosi " + koszt + " zł"
            break
        default:
            wynik.innerHTML = "Koszt zamówienia wynosi " + koszt + " zł"
    }
}

/* Funkcja z if zamiast switch *
function obliczKawa() {
    const wynik = document.getElementById('wynik_4')
    const numerKawy = +document.getElementById('numerKawy').value
    const wagaKawy = +document.getElementById('wagaKawy').value
    let koszt = 0
    if (numerKawy == 1) {
        koszt = 5 * wagaKawy
        wynik.innerHTML = "Koszt zamówienia wynosi " + koszt + " zł"
    } else if (numerKawy == 2) {
        koszt = 7 * wagaKawy
        wynik.innerHTML = "Koszt zamówienia wynosi " + koszt + " zł"
    } else if (numerKawy == 3) {
        koszt = 6 * wagaKawy
        wynik.innerHTML = "Koszt zamówienia wynosi " + koszt + " zł"
    } else wynik.innerHTML = "Koszt zamówienia wynosi " + koszt + " zł"
}
//*/

/******************/
/* e14_2019_01_11 */
/******************/
function over(id, img) {
    document.getElementById(id).src = img;
}

function out(id, img) {
    document.getElementById(id).src = img;
}

function clicked(id, img) {
    over(id, img);
    document.getElementById("glownyPies").src = img;
}

/******************/
/* e14_2019_01_12 */
/******************/
function over2(id, img) {
    document.getElementById(id).src = img;
}

function out2(id, img) {
    document.getElementById(id).src = img;
}

function clicked2(id, img) {
    over2(id, img);
    document.getElementById("glownyPies2").src = img;
}

/******************/
/* e14_2019_06_05 */
/******************/
function przeslijForm() {
    const imieForm = document.getElementById('imieForm').value
    const nazwiskoForm = document.getElementById('nazwiskoForm').value
    const emailForm = document.getElementById('emailForm').value
    const uslugaForm = document.getElementById('uslugaForm').value
    const regulaminCheck = document.getElementById('regulaminCheck')
    const wynik = document.getElementById('wynik_7')
    if (!regulaminCheck.checked) {
        wynik.innerHTML = "<span style='color: red'>Musisz zapoznać się z regulaminem"
    } else {
        wynik.innerHTML = imieForm.toUpperCase() + " " + nazwiskoForm.toUpperCase() + "<br/> Treść Twojej sprawy: " + uslugaForm + "<br/> Na podany e-mail zostanie wysłana oferta."
    }
}

/******************/
/* e14_2019_06_06 */
/******************/
function przeslijForm2() {
    const imieForm = document.getElementById('imieForm2').value
    const nazwiskoForm = document.getElementById('nazwiskoForm2').value
    const emailForm = document.getElementById('emailForm2').value
    const uslugaForm = document.getElementById('uslugaForm2').value
    const wynik = document.getElementById('wynik_8')
    wynik.innerHTML = imieForm + " " + nazwiskoForm + "<br/>" + emailForm + "<br/> Usługa: " + uslugaForm
}

/******************/
/* e14_2020_01_02 */
/******************/
function zamowCukierka() {
    const ksztaltCukierka = +document.getElementById("ksztaltCukierka").value;
    const r = +document.getElementById("rCukierek").value
    const g = +document.getElementById("gCukierek").value
    const b = +document.getElementById("bCukierek").value
    const wynik = document.getElementById("wynik_9")
    const kolorCukierka = document.getElementById("kolorCukierka")
    switch (ksztaltCukierka) {
        case 1:
            wynik.innerHTML = "Zamówiłeś żelka: miś"
            break
        case 2:
            wynik.innerHTML = "Zamówiłeś żelka: żabka"
            break
        case 3:
            wynik.innerHTML = "Zamówiłeś żelka: serce"
            break
        default:
            wynik.innerHTML = "Zamówiłeś żelka: inny kształt"
            break
    }
    kolorCukierka.style = "background: rgb(" + r + ", " + g + ", " + b + ");"
}

/* Funkcja z if zamiast switch *
function zamowCukierka2() {
    const ksztaltCukierka = +document.getElementById("ksztaltCukierka2").value;
    const r = +document.getElementById("rCukierek2").value
    const g = +document.getElementById("gCukierek2").value
    const b = +document.getElementById("bCukierek2").value
    const wynik = document.getElementById("wynik_10")
    const kolorCukierka = document.getElementById("kolorCukierka2")
    if (ksztaltCukierka == 1) {
        wynik.innerHTML = "Zamówiłeś żelka: miś"
    } else if (ksztaltCukierka == 2) {
        wynik.innerHTML = "Zamówiłeś żelka: żabka"
    } else if (ksztaltCukierka == 3) {
        wynik.innerHTML = "Zamówiłeś żelka: serce"
    } else {
        wynik.innerHTML = "Zamówiłeś żelka: inny kształt"
    }
    kolorCukierka.style = "background: rgb(" + r + ", " + g + ", " + b + ");"
}
//*/

/******************/
/* e14_2020_01_03 */
/******************/
function zamowCukierka2() {
    const ksztaltCukierka = +document.getElementById("ksztaltCukierka2").value;
    const r = +document.getElementById("rCukierek2").value
    const g = +document.getElementById("gCukierek2").value
    const b = +document.getElementById("bCukierek2").value
    const wynik = document.getElementById("wynik_10")
    const kolorCukierka = document.getElementById("kolorCukierka2")
    switch (ksztaltCukierka) {
        case 1:
            wynik.innerHTML = "Twoje zamówienie to cukierek cytryna"
            break
        case 2:
            wynik.innerHTML = "Twoje zamówienie to cukierek liść"
            break
        case 3:
            wynik.innerHTML = "Twoje zamówienie to cukierek banan"
            break
        default:
            wynik.innerHTML = "Twoje zamówienie to cukierek inny"
            break
    }
    kolorCukierka.style = "background: rgb(" + r + ", " + g + ", " + b + ");"
}

/* Funkcja z if zamiast switch *
function zamowCukierka2() {
    const ksztaltCukierka = +document.getElementById("ksztaltCukierka2").value;
    const r = +document.getElementById("rCukierek2").value
    const g = +document.getElementById("gCukierek2").value
    const b = +document.getElementById("bCukierek2").value
    const wynik = document.getElementById("wynik_10")
    const kolorCukierka = document.getElementById("kolorCukierka2")
    if (ksztaltCukierka == 1) {
        wynik.innerHTML = "Twoje zamówienie to cukierek cytryna"
    } else if (ksztaltCukierka == 2) {
        wynik.innerHTML = "Twoje zamówienie to cukierek liść"
    } else if (ksztaltCukierka == 3) {
        wynik.innerHTML = "Twoje zamówienie to cukierek banan"
    } else {
        wynik.innerHTML = "Twoje zamówienie to cukierek inny"
    }
    kolorCukierka.style = "background: rgb(" + r + ", " + g + ", " + b + ");"
}
//*/

/******************/
/* e14_2020_06_01 */
/******************/
function policzFarba() {
    const powierzchnia = +document.getElementById("powierzchnia").value
    const wynik = document.getElementById("wynik_11")
    wynik.innerHTML = "Liczba jednolitrowych puszek farby potrzebnych do pomalowania wynosi: " + Math.ceil(powierzchnia / 4)
}

/******************/
/* e14_2020_06_04 */
/******************/
function ozdoba(wybor) {
    const wynik = document.getElementById("wynik_12")
    if (wybor == "choinka") {
        wynik.innerHTML = "Wybrałeś choinkę. Cena 10 zł"
    }
    if (wybor == "mikołaj") {
        wynik.innerHTML = "Wybrałeś mikołaja. Cena 12 zł"
    }
    if (wybor == "renifer") {
        wynik.innerHTML = "Wybrałeś renifera. Cena 8 zł"
    }
}

/*******************/
/* ee09_2019_06_02 */
/*******************/
function obliczPaliwo() {
    const rodzajPaliwa = +document.getElementById("rodzajPaliwa").value
    const iloscLitrow = +document.getElementById("iloscLitrow").value
    const wynik = document.getElementById("wynik_13")
    let cena = 0;
    if (rodzajPaliwa == 1) {
        cena = 4
    }
    if (rodzajPaliwa == 2) {
        cena = 3.5
    }
    wynik.innerHTML = "koszt paliwa: " + cena * iloscLitrow + " zł"
}

/*******************/
/* ee09_2019_06_04 */
/*******************/
function kalkulator(operator) {
    const a = +document.getElementById("liczbaA").value
    const b = +document.getElementById("liczbaB").value
    const wynik = document.getElementById("wynik_14")
    switch (operator) {
        case '+':
            wynik.innerHTML = "Wynik: " + (a + b)
            break
        case '-':
            wynik.innerHTML = "Wynik: " + (a - b)
            break
        case '*':
            wynik.innerHTML = "Wynik: " + (a * b)
            break
        case '/':
            wynik.innerHTML = "Wynik: " + (a / b)
            break
        case '**':
            wynik.innerHTML = "Wynik: " + (a ** b)
            break
    }
}

/* Osobne funkcje dla każdego operatora *
function dodawanie() {
    const a = +document.getElementById("liczbaA").value
    const b = +document.getElementById("liczbaB").value
    const wynik = document.getElementById("wynik")
    wynik.innerHTML = "Wynik: " + (a + b)
}
 
function odejmowanie() {
    const a = +document.getElementById("liczbaA").value
    const b = +document.getElementById("liczbaB").value
    const wynik = document.getElementById("wynik")
    wynik.innerHTML = "Wynik: " + (a - b)
}
 
function mnozenie() {
    const a = +document.getElementById("liczbaA").value
    const b = +document.getElementById("liczbaB").value
    const wynik = document.getElementById("wynik")
    wynik.innerHTML = "Wynik: " + (a * b)
}
 
function dzielenie() {
    const a = +document.getElementById("liczbaA").value
    const b = +document.getElementById("liczbaB").value
    const wynik = document.getElementById("wynik")
    wynik.innerHTML = "Wynik: " + (a / b)
}
 
function potegowanie() {
    const a = +document.getElementById("liczbaA").value
    const b = +document.getElementById("liczbaB").value
    const wynik = document.getElementById("wynik")
    wynik.innerHTML = "Wynik: " + (a ** b)
}
//*/

/*******************/
/* ee09_2019_06_05 */
/*******************/
function generujCiag() {
    let a = +document.getElementById("pierwszyWyraz").value
    const r = +document.getElementById("roznicaCiagu").value
    let n = +document.getElementById("liczbaWyrazow").value
    const wynik = document.getElementById("wynik_15")
    wynik.innerHTML = "Ciąg arytmetyczny zawiera wyrazy: "
    let tekst = "Ciąg arytmetyczny zawiera wyrazy: "
    while (n) {
        tekst += a + ", "
        a += r
        n--
    }
    wynik.innerHTML = tekst
}

/*******************/
/* ee09_2020_01_02 */
/*******************/
function obliczPaliwo2() {
    const dystansKM = +document.getElementById("dystansKM").value
    const spalanie = +document.getElementById("spalanie").value
    const wynik = document.getElementById("wynik_16")
    const paliwo = spalanie / 100 * dystansKM
    wynik.innerHTML = "Potrzebujesz: " + Math.round(paliwo) + " litrów paliwa";
}

/*******************/
/* ee09_2020_06_04 */
/*******************/
function cenaWizyty() {
    const piling = document.getElementById("piling").checked
    const maska = document.getElementById("maska").checked
    const masaz = document.getElementById("masaz").checked
    const regulacja = document.getElementById("regulacjaBrwi").checked
    const wynik = document.getElementById("wynik_17")
    let cena = 0
    if (piling) {
        cena += 45
    }
    if (maska) {
        cena += 30
    }
    if (masaz) {
        cena += 20
    }
    if (regulacja) {
        cena += 5
    }
    wynik.innerHTML = "Cena zabiegów: " + cena
}

/*******************/
/* ee09_2020_06_05 */
/*******************/
function cenaStrzyzenia() {
    const krotkie = document.getElementById("krotkie").checked
    const srednie = document.getElementById("srednie").checked
    const poldlugie = document.getElementById("poldlugie").checked
    const dlugie = document.getElementById("dlugie").checked
    const wynik = document.getElementById("wynik_18")
    let cena = 0
    if (krotkie) {
        cena = 25
    }
    if (srednie) {
        cena = 30
    }
    if (poldlugie) {
        cena = 40
    }
    if (dlugie) {
        cena = 50
    }
    wynik.innerHTML = "Cena strzyżenia: " + cena
}

/*******************/
/* ee09_2022_01_06 */
/*******************/
function changeBg(kolor) {
    const prawy = document.getElementById('prawy19')
    prawy.style.backgroundColor = kolor
}

function fontColor(kolor) {
    const prawy = document.getElementById('prawy19')
    prawy.style.color = kolor
}

function fontSizing(size) {
    const prawy = document.getElementById('prawy19')
    prawy.style.fontSize = size + "%"
}

function ramka() {
    const obraz = document.getElementById("gibraltar")
    const borderCheck = document.getElementById("borderCheck").checked
    if (borderCheck) {
        obraz.style.border = "1px solid white"
    } else {
        obraz.style.border = "none"
    }
}
function punktor(typ) {
    const lista = document.getElementById("lista");
    lista.style.listStyleType = typ;
}

/*******************/
/* ee09_2022_01_07 */
/*******************/
function zamianaImg(img) {
    const obraz = document.getElementById('lanzarotte')
    obraz.src = "img/" + img
}

/* Wersja nr 1 */
let zmiana = 0
function iconChange() {
    zmiana++
    const polub = document.getElementById("icon")
    if (zmiana % 2 == 0) {
        polub.src = "img/icon-off.png"
    } else {
        polub.src = "img/icon-on.png"
    }
}
//*/

/* Wersja nr 2 *
let flag = false
function iconChange() {
    flag = !flag
    const polub = document.getElementById("icon")
    if (flag) {
        polub.src = "img/icon-on.png"
    } else {
        polub.src = "img/icon-off.png"
    }
}
//*/

/*******************/
/* ee09_2022_06_02 */
/*******************/
function paleta() {
    const h = +document.getElementById('wartoscH').value
    const d1 = document.getElementById('d1')
    const d2 = document.getElementById('d2')
    const d3 = document.getElementById('d3')
    const d4 = document.getElementById('d4')
    const d5 = document.getElementById('d5')

    d1.style = 'background-color: hsl(' + h + ', 100%, 50%)'
    d2.style = 'background-color: hsl(' + h + ', 80%, 50%)'
    d3.style = 'background-color: hsl(' + h + ', 60%, 50%)'
    d4.style = 'background-color: hsl(' + h + ', 40%, 50%)'
    d5.style = 'background-color: hsl(' + h + ', 20%, 50%)'
}

/*******************/
/* ee09_2022_06_04 */
/*******************/
/* Wersja nr 1 *
const iloscProduktow = document.querySelectorAll('.ilosc')
const nazwaProduktow = document.querySelectorAll('.produkt')
const aktualizujPrzycisk = document.querySelectorAll('.aktualizuj')
const zamowPrzycisk = document.querySelectorAll('.zamow')
let idZamowienia = 0

function sprawdz() {
    iloscProduktow.forEach((produkt) => {
        if (produkt.innerHTML == 0) {
            produkt.style = 'background-color: red;'
        }
        if (produkt.innerHTML >= 1 && produkt.innerHTML <= 5) {
            produkt.style = 'background-color: yellow;'
        }
        if (produkt.innerHTML > 5) {
            produkt.style = 'background-color: Honeydew;'
        }
    })
}

aktualizujPrzycisk.forEach((przycisk, i) => {
    przycisk.addEventListener('click', () => {
        const nowaIlosc = prompt('Podaj nową ilość:')
        iloscProduktow[i].innerHTML = nowaIlosc
        sprawdz()
    })
})

zamowPrzycisk.forEach((przycisk, i) => {
    przycisk.addEventListener('click', () => {
        alert('Zamówienie nr: ' + idZamowienia + ' Produkt: ' + nazwaProduktow[i].innerHTML)
        idZamowienia++
    })
})
sprawdz()
//*/

/* Wersja nr 2 */
function sprawdz2() {
    const produkty = ['p1', 'p2', 'p3', 'p4']
    for (let i = 0; i < produkty.length; i++) {
        const ilosc = document.getElementById(produkty[i]).innerHTML
        const produkt = document.getElementById(produkty[i])
        if (ilosc == 0) {
            produkt.style = 'background-color: red;'
        }
        if (ilosc >= 1 && ilosc <= 5) {
            produkt.style = 'background-color: yellow;'
        }
        if (ilosc > 5) {
            produkt.style = 'background-color: Honeydew;'
        }
    }
}

function aktualizuj(produktID) {
    const produkt = document.getElementById(produktID)
    const nowaIlosc = prompt('Podaj nową ilość:')
    produkt.innerHTML = nowaIlosc
    sprawdz2()
}

let idZamowienia = 0
function zamow(nazwaProduktu) {
    alert('Zamówienie nr: ' + idZamowienia + ' Produkt: ' + nazwaProduktu)
    idZamowienia++
}
sprawdz2()

/********************/
/* inf03_2022_06_02 */
/********************/
function obliczPaliwo3() {
    const rodzajPaliwa = +document.getElementById("rodzajPaliwa3").value
    const iloscLitrow = +document.getElementById("iloscLitrow3").value
    const wynik = document.getElementById("wynik_23")
    let cena = 0
    if (rodzajPaliwa == 1) {
        cena = 4
    }
    if (rodzajPaliwa == 2) {
        cena = 3.5
    }
    wynik.innerHTML = "koszt paliwa: " + cena * iloscLitrow + " zł"
}