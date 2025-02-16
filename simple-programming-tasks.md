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
    
    
Uwagi (dla programów napisanych w Pythonie):
1. Ciągi znaków wczytujemy za pomocą funkcji input().
2. Logikę rozwiązania umieszczamy w ciele funkcji, którą wywołujemy następnie w bloku `if __name__ == '__main__'`:
3. Każdy rezultat działania funkcji (metody) wyświetlamy w konsoli.
4. Używamy komentarzy, tam gdzie wyjaśnienie uważamy za konieczne.
5. Każde rozwiązanie tworzymy w pliku o nazwie w postaci `skrypt1-123456.py`, gdzie podajemy numer zadania i swój numer albumu.
6. Wszystkie zadania (skrypty od 1 do 10 + folder 'utils') umieszczamy w folderze o nazwie np. `Python-scripts` lub podobnej i przesyłamy:
   - na koniec zajęć, po spakowaniu do prowadzącego, np. przez Discord'a jako DM,
   - do końca dnia na swoje zdalne repozytorium i link do repo przesyłamy do prowadzącego, wraz z imieniem i nazwiskiem,
   - w pliku README.md dokonujemy krótkiego opisu zrealizowanych zadań, mile widziane linki do dokumentacji, wyniki działania programów, itp. :)
