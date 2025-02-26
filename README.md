# 📅 Fotbalový Kalendář

## ⚽ Popis projektu
Tento projekt je webová aplikace pro správu fotbalových zápasů. Umožňuje uživatelům plánovat zápasy, sledovat výsledky a spravovat statistiky týmů.

## 🚀 Funkcionality
- Registrace a přihlášení uživatelů
- Přidávání, editace a mazání zápasů
- Seznam zápasů s detaily (domácí tým, hostující tým, datum, výsledek)
- Responzivní design s využitím **Bootstrap 5**
- Přístupová práva pro správu zápasů

## 🛠 Technologie
- **Frontend:** HTML, CSS, Bootstrap 5
- **Backend:** PHP (s MySQL databází)
- **Databáze:** MySQL

## 📂 Struktura projektu
```
📁 FotbalovyKalendar2024
│── 📁 sui/               # Obsahuje navbar, styly a opakované komponenty
│── 📁 css/               # Styly pro aplikaci
│── 📁 img/               # Obrázky a loga
│── 📁 db/                # SQL soubory pro databázi
│── index.php            # Hlavní stránka aplikace
│── zapasy.php           # Stránka se seznamem zápasů
│── pridat_zapas.php     # Formulář pro přidání zápasu
│── login.php            # Přihlášení uživatele
│── register.php         # Registrace nového uživatele
│── logout.php           # Odhlášení uživatele
│── dashboard.php        # Hlavní panel uživatele
│── databaze.php         # Připojení k databázi
│── .htaccess            # Nastavení serveru
```

## 🏗 Instalace
1. Naklonujte repozitář:
   ```sh
   git clone https://github.com/tvuj-repozitar/fotbalovy-kalendar.git
   ```
2. Importuj databázi z **db/fotbalovy_kalendar.sql** do MySQL
3. Uprav připojení k databázi v `databaze.php`
4. Spusť projekt v lokálním serveru (např. Laragon, XAMPP)

## 👤 Přispěvatelé
- **Tvoje jméno** - Vývojář 🎯

## 📜 Licence
Tento projekt je licencován pod MIT licencí.
![image](https://github.com/user-attachments/assets/b73b9546-66fe-4828-bc8e-a6bc5fea7521)
