> Uwagi dotyczą języka Python!
> Do realizacji zadań można wykorzystać dowolny język!


1. Napisz program (na dwa sposoby), który sprawdza czy wczytany pojedynczy znak jest cyfrą lub nie.
   Jeśli wczytamy więcej znaków, należy wziąć tylko pierwszy.
   Hint: skorzystaj z funkcji isdigit() i isinstance().  
<br>

2. Napisz program, który sprawdza czy wczytany łańcuch znakowy jest liczbą lub nie. 
   Muszą być wczytane co najmniej dwa znaki.
   Hint: skorzystaj z funkcji all().  
<br>

3. Napisz program, który szuka określonego ciągu znaków w łańcuchu znakowym i zwraca indeks pierwszego wystąpienia ciągu lub -1, gdy nie ma takiego ciągu.
   Hint: skorzystaj z funkcji find().  
<br>

4. Napisz program, który szuka określonego ciągu znaków w łańcuchu znakowym i zwraca indeksy wszystkich wystąpień ciągu lub -1, gdy nie ma takiego ciągu.
   Hint: skorzystaj z funkcji split().  
<br>

5. Napisz program (na dwa sposoby), który szuka pierwiastków liczb od 1 do 256 (włącznie) podzielnych bez reszty przez 2.
   Hint: skorzystaj z modułu 'math' i z tzw. 'list comprehensions'.	  
<br>

6. Napisz program, który tworzy słownik o nazwie zawierającej Twój numer albumu.
   Kluczami powinny być liczby od 10 do 20, a wartościami pseudolosowe łańcuch znaków o długości 8.
   Hint: skorzystaj z modułów 'string' i 'random'.  
<br>

7. Stwórz folder 'utils', a w nim plik 'obliczenia.py', w którym należy zaimplementować cztery wybrane funkcje matematyczne z modułu 'math'. 
   Następnie należy utworzyć plik 'skrypt7-nr_albumu.py' i zaimportować w nim ww. funkcje do obliczeń na przykładowych wartościach.  
 <br>  

8. Napisz program, który generuje losowy ciąg znaków o długości 100, a następnie utwórz słownik którego kluczami będą unikalne znaki występujące w ciągu,
   a wartościami liczba ich wystąpień w ciągu znakowym. Utwórz listę, której każdy element to krotka (tupla), zawierająca kolejny klucz z ww. słownika i odpowiadającą mu wartość liczbową.  
   Hint: skorzystaj z modułu 'collections' i klasy Counter().  
 <br>  

9. Stwórz klasy Vehicle i Car z polami 'nazwa' 'rok_produkcji' i 'przebieg' oraz metodami is_old() i is_long_mileage().
   Stwórz po jednym obiekcie dla każdej z klas oraz trzeci obiekt, gdzie klasa Car dziedziczy z klasy Vehicle.
   Dla każdego z obiektów wywołaj obie metody, co najmniej raz użyj dekoratora '@property' w każdym z trzech przypadków.  
 <br>  

10. Napisz program, który korzystająć z metody chr() wygeneruje łańcuch znakowy z alfabetem, czyli 'abc....xyz'. 
    Do pliku 'alfabet1-numeralbumu.txt' zapisz wygenerowany łańcuch znakowy, a do pliku 'alfabet2-numeralbumu.txt' zapisz litery z ww. łańcucha znakowego, 
    tylko że każda litera ma się znaleźć w osobnej linii w pliku.
    Hint: oprócz funkcji write() skorzystaj również z menedżera kontekstu 'with', żeby nie zapomnieć o zamknięciu pliku.  
<br>

11. Odwrócić sentencję podaną przez użytkownika.  
<br>

12. Zamienić wszystkie litery o na 0, e na 3, i na 1, a na 4 w podanej przez użytkownika sentencji.  
<br>

13. Używając pętli wyświetl liczby w przedziale od 1 do 50 oprócz liczb podzielnych przez 3.  
<br>

14. Używając pętli wyświetl liczby w przedziale od 1 do 100  podzielne przez 3 i 4 oraz podaj ich liczbę.  
<br>

15. Używając pętli dodawaj do wcześniej zadeklarowanej tabeli liczby z przedziału od 1 do 100, które są podzielne przez 3 lub podzielne przez 5.  
<br>

16. Napisz prostą funkcję o nazwie potega(), przyjmującą jeden argument, podnoszącą podaną liczbę do trzeciej potęgi.  
<br>

17. Stwórz klasę o nazwie Dog, która będzie posiadała zmienne takie jak: name, age, coat_color. Dodatkowo klasa posiada funkcje sound(), po wywołaniu której wypisywany jest tekst: {name} is barking! Stworzyć 3 obiekty klasy Dog.  
<br>

18. Stworzyć plik `funkcje.py`, w którym należy zaimplementować funkcję: dodawanie, odejmowanie, dzielenie, mnożenie oraz modulo. W pliku `main.py` zaimportować plik funkcje.py i wykorzystać zaimportowane funkcje na przykładowych wartościach.  
<br>

19. Sprawdź czy wyraz bądź zdanie podane przez użytkownika jest palindromem.  
<br>

20. Prosta gra, program generuje losową liczbę od 1 do 100, użytkownik ma odgadnąć liczbę, jeżeli nie trafi ma zostać wyświetlona podpowiedź czy za duża czy za mała liczba.  
<br>

21. Dziedziczenie klas. Klasa Animal ma zawierać atrybuty takie jak name, age, sex oraz funkcje sound(). Klasy `Dog`, `Cat` oraz `Fox` dziedziczą po klasie `Animal` oraz nadpisują funkcje `sound()` odpowiednimi dźwiękami, dodatkowo klasy `Dog` oraz `Cat` posiadają atrybut `breed`.  
<br>

22. Załadować plik test.txt i stworzyć funkcję wyszukującą najdłuższy wyraz.  
<br>

23. Za pomocą pętli stworzyć 1000 losowych 6 znakowych wyrazów [A-Z][a-z][0-9] i zapisać je do pliku passwords.txt.  
<br>
24. Napisać funkcję tworzącą plik `pc.csv`. Pierwszy wiersz ma zawierać nazwy kolumn: pc_name, ip. Nazwy komputerów mają zaczynać się literą P oraz 4 oktetem adresu ip. Adresy zaczynają się od 172.30.2.1 do 172.30.2.100. Plik csv ma być rozdzielany przecinkami.  
<br>

25. Za pomocą pakietu do web-scrappingu, np.[beautifulsoup](https://beautiful-soup-4.readthedocs.io/en/latest/) lub [jsoup](https://jsoup.org/), zapisać do tablicy wszystkie hiperłącza występujące na wybranej przez siebie stronie.  
<br>

26. Za pomocą webscrappera pobrać wszystkie oferty domów z podanego linku(https://www.otodom.pl/pl/wyniki/sprzedaz/mieszkanie/pomorskie/gdynia/gdynia/gdynia?priceMax=600000&viewType=listing), każda oferta ma być obiektem klasy Home, który posiada atrybuty takie jak `header_name`, `price`, `price_for_m2`. Wszystkie obiekty zapisać do słownika oraz do pliku `home.csv`.  
<br>

Uwagi (dla programów napisanych w Pythonie):
1. Ciągi znaków wczytujemy za pomocą funkcji input().
2. Logikę rozwiązania umieszczamy w ciele funkcji, którą wywołujemy następnie w bloku `if __name__ == '__main__'`:
3. Każdy rezultat działania funkcji (metody) wyświetlamy w konsoli.
4. Używamy komentarzy, tam gdzie wyjaśnienie uważamy za konieczne.
5. Każde rozwiązanie tworzymy w pliku o nazwie w postaci `skrypt1-123456.py`, gdzie podajemy numer zadania i swój numer albumu.
