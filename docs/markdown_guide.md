# Praca z Markdownem

Markdown to lekki język znaczników, który pozwala na szybkie i czytelne formatowanie tekstu. Pliki Markdown mają zazwyczaj rozszerzenie `.md`.

Poniżej znajduje się przewodnik po najważniejszych elementach Markdowna, przydatnych przy tworzeniu dokumentacji projektowej i raportów z laboratoriów.

## 1. Podstawowe formatowanie tekstu

* **Nagłówki**: Używaj znaku `#`. Liczba znaków `#` odpowiada poziomowi nagłówka.
    ```markdown
    # Nagłówek poziomu 1
    ## Nagłówek poziomu 2
    ### Nagłówek poziomu 3
    ```
Tak to wygląda po użyciu w tekście:  
# Nagłówek poziomu 1
## Nagłówek poziomu 2
### Nagłówek poziomu 3  

<br>
<br>
  
* **Pogrubienie i kursywa**:
    - Pogrubienie: `**tekst**` lub `__tekst__` (np. **pogrubiony tekst**)
    - Kursywa: `*tekst*` lub `_tekst_` (np. *kursywa*)
    - Pogrubiona kursywa: `***tekst***` (np. ***pogrubiona kursywa***)
* **Listy**:
    - **Nienumerowane**: użyj `-`, `*` lub `+`.
        - Element 1
        - Element 2
    - **Numerowane**: użyj cyfry z kropką.
        1. Pierwszy element
        2. Drugi element
* **Cytaty**: Użyj znaku `>`.
    > To jest cytat.
* **Przejście do nowej linii**:
    - Aby wymusić przejście do nowej linii w tym samym akapicie, dodaj **dwie spacje** na końcu linii lub użyj znacznika `<br>`.
    - Aby zacząć nowy akapit, pozostaw jedną pustą linię między blokami tekstu.

## 2. Użycie elementów HTML

Markdown pozwala na używanie czystego kodu HTML tam, gdzie standardowa składnia jest niewystarczająca.

* **Podkreślenie tekstu**: `<u>podkreślony tekst</u>` (np. <u>podkreślony tekst</u>)
* **Wymuszone przejście do linii**: `<br>`
* **Centrowanie tekstu/obrazków**: `<center>tekst</center>`
* **Rozwijana sekcja (akordeon)**:
    ```html
    <details>
      <summary>Kliknij, aby rozwinąć</summary>
      Tutaj znajduje się ukryta treść, np. rozwiązanie zadania.
    </details>
    ```

## 3. Fragmenty kodu i komend

### Kod w linii (Inline code)
Aby umieścić krótki fragment kodu lub nazwę komendy wewnątrz zdania, otocz go pojedynczymi grawisami (backticks): `` ` ``.
Przykład: Użyj polecenia `SELECT`, aby pobrać dane.

### Bloki kodu (Code blocks)
Dla dłuższych fragmentów kodu użyj potrójnych grawisów przed i po kodzie. Możesz również określić język programowania dla kolorowania składni (np. `sql`, `bash`, `python`).

#### Przykład SQL:
```sql
SELECT id, nazwa, cena 
FROM Produkty 
WHERE ilosc > 0 
ORDER BY cena DESC;
```

#### Przykład komendy terminala:
```bash
ls -la
```

## 4. Wstawianie obrazków

Składnia wstawiania obrazka jest bardzo podobna do wstawiania linku, ale zaczyna się od wykrzyknika:

`![Tekst alternatywny](sciezka/do/obrazka.png)`

- **Tekst alternatywny**: Wyświetla się, gdy obrazek nie może zostać załadowany.
- **Ścieżka**: Może to być ścieżka lokalna (np. `img/schemat.png`) lub adres URL.

Możesz też użyć tagu HTML `<img>`, aby kontrolować np. szerokość obrazka:
`<img src="sciezka/do/obrazka.png" width="300">`

Przykład:
![Logo SQL](https://upload.wikimedia.org/wikipedia/commons/8/87/Sql_data_base_with_logo.png)

## 5. Linki i Tabele

* **Link**: `[Nazwa wyświetlana](https://www.google.com)`  
Po użyciu: [Google](https://www.google.com)
* **Tabela**:  

| Nazwa kolumny 1 | Nazwa kolumny 2 |
|:---------------:|:---------------:|
|    Wartość A    |    Wartość B    |
|    Wartość C    |    Wartość D    |

## 6. Eksport do PDF
### Narzędzia JetBrains (IntelliJ, PyCharm, DataGrip)
Aby przekonwertować plik Markdown na format PDF za pomocą środowisk IDE od JetBrains:

1. Otwórz plik `.md` w edytorze.
2. Upewnij się, że masz włączony podgląd Markdown (ikona dzielonego okna w prawym górnym rogu edytora).
3. Kliknij prawym przyciskiem myszy w obszarze edytora tekstu lub podglądu.
4. Wybierz opcję **Export to PDF...** (lub **Export to HTML...** jeśli wolisz format przeglądarkowy).
5. Wybierz miejsce zapisu i potwierdź.

### Visual Studio Code
W VS Code najpopularniejszym sposobem jest użycie rozszerzenia **Markdown PDF**:

1. Zainstaluj rozszerzenie **Markdown PDF** (autor: yyzhang) z VS Code Marketplace.
2. Otwórz plik `.md`.
3. Kliknij prawym przyciskiem myszy wewnątrz edytora tekstu.
4. Wybierz opcję **Markdown PDF: Export (pdf)**.
5. Plik PDF zostanie wygenerowany w tym samym folderze co plik źródłowy.

Alternatywnie możesz użyć skrótu `Ctrl+Shift+P`, wpisać `Markdown PDF: Export (pdf)` i zatwierdzić klawiszem `Enter`.
