### Materiały z "Integracji systemów informatycznych"

#### I. Opis zawartości repozytorium

  1. folder 'blog-django-girls-2024' zawiera aplikację 'blog' z tutorialu [Django Girls](https://tutorial.djangogirls.org/pl/),
  2. folder 'simple-contact-form' pokazuje użycie Django, Dockera (dockerfile + docker-compose), DRF oraz pliku `Makefile` do realizacji aplikacji umożliwiającej zarządzanie kontaktami,  
  3. folder 'Python-exercises' zawiera przydatne ćwiczenia różnego rodzaju, rozwiązane za pomocą Pythona :smiley:,  
  4. folder 'SQL-exercises' zawiera ćwiczenia z języka SQL, wykorzystując do tego bazę SQLite i tutoriale: [pierwszy](https://third-bit.com/sql/) oraz [drugi](https://www.sqlitetutorial.net/sqlite-python/creating-tables/) na podstawie linków z punktu nr III.4.
  5. folder 'django-on-docker' pokazuje użycie Django, Dockera (dockerfile + docker-compose) na przykładzie [tutoriala](https://testdriven.io/blog/dockerizing-django-with-postgres-gunicorn-and-nginx/) ze strony Testdriven.io. <br><br>


#### II. Zadania do wykonania w ramach zaliczenia przedmiotu  

  1. Bazując na pliku [simple-programming-tasks.md](simple-programming-tasks.md) należy:  
    - wykonać wszystkie zadania z tego pliku w dowolnym języku programowania (w treści zadań sugerowany jest Python, ale można wybrać dowolny język),  
    - rozwiązane zadania zapisujemy w folderze `programming-exercises` w swoim repozytorium dotyczącym przedmiotu (o nazwie np. `Isi` lub podobnej), w folderze tym powinien znajdować się również plik `README.md` oraz folder ze zrzutami obrazu, np. `screenshots`,  
    - w pliku `README.md` każdemu zadaniu nadajemy kolejny numer (np. `task-01` do `task-26`, itd.), umieszczamy tekst zadania, link do pliku z rozwiązaniem oraz zrzut ekranu z wynikiem działania programu.  

<br>

  2. Bazując na [tutorialu o SQLu](https://third-bit.com/sql/) (lub [drugi link tutaj](https://github.com/gvwilson/querynomicon)) należy:  
    - wykonać wszystkie ćwiczenia z rozdziału [Core Features](https://third-bit.com/sql/s02_core/index.html) (lub [drugi link tutaj](https://github.com/gvwilson/querynomicon/blob/main/s02_core/index.md)),  
    - bazy danych SQLite do realizacji ćwiczeń dostępne sa na ww. stronie głównej tutoriala,  
    - technologia dowolna; w tutorialu wykorzystywany jest Python, ale można użyć swoich ulubionych narzędzi,  
    - ćwiczenia zapisujemy w folderze `sql-exercises` w swoim repozytorium dotyczącym przedmiotu (o nazwie np. `Isi` lub podobnej), w folderze tym powinien znajdować się plik `README.md` oraz folder ze zrzutami obrazu, np. `screenshots`,  
    - w pliku `README.md` każdemu ćwiczeniu nadajemy kolejny numer (np. `exercise-01`, itd.), umieszczamy tekst ćwiczenia, komendę SQL do rozwiązania ćwiczenia oraz zrzut ekranu z wynikiem działania komendy.  

<br>

  3. Należy zaimplementować cztery różne aplikacje webowe (trzy na platformie PaaS i jedna lokalnie z użyciem Dockera):  
    - aplikacja typu 'blog' na wybranej platformie PaaS,  
    - aplikacja typu 'to-do' na wybranej platformie PaaS,  
    - aplikacja wykorzystująca REST API (np. standardowy CRUD) lub API dostarczające danych w odpowiednim formacie, np. JSON na wybranej platformie PaaS,  
    - aplikacja w środowisku Dockera, konieczne będzie utworzenie plików `Dockerfile` i `docker-compose.yml` do jej uruchomienia, może być to aplikacja pobierająca dane pogodowe lub informacje na temat wybranego kraju (patrz przykłady).  
 
<br>

> **Dla chętnych**: aplikacja wykorzystująca obrazy i kontenery Dockera na wybranej platformie PaaS.  

<br>

  4. Informacje dodatkowe:  
   - każdą aplikację, która będzie umieszczana na platformie PaaS umieszczamy w osobnym repozytorium,  
   - w pliku `README.md` każdego z repozytoriów należy przedstawić zrzuty ekranu z wybranych elementów działającej aplikacji,  
   - jeśli PaaS to umożliwia, to również należy podać link do działającej aplikacji.  
   - czyli w sumie będzie do zrobienia 5 repozytoriów:
     - jedno z zadaniami progamistycznymi i zadaniami z SQL'a,  
     - trzy z aplkacjami webowymi na platformie PaaS,  
     - jedno z aplikacją na Dockerze.
<br><br>


#### III. Linki z zasobami

1. ##### Python
  - [Interactive](https://www.learnpython.org/) Python tutorial,  
  - Python [Web Development](https://realpython.com/tutorials/web-dev/) Tutorials.  
 
2. ##### Git i GitHub
 - [Książka online](https://git-scm.com/book/pl/v2) o systemie Git, 
 - [Pomoc](https://www.flynerd.pl/2018/02/github-dla-zielonych-pierwsze-repozytorium.html) dla osób, które zaczynają przygodę z systemem kontroli wersji Git,
 - najważniejsze [komendy gita](https://training.github.com/downloads/pl/github-git-cheat-sheet/) w pigułce,
 - wizualna [ściąga](https://marklodato.github.io/visual-git-guide/index-pl.html) z gita,
 - [Generowanie](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent) kluczy SSH 
   i ich [dodawanie](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/adding-a-new-ssh-key-to-your-github-account) do konta GitHub,
 - podstawowa [składnia](https://www.markdownguide.org/basic-syntax/) Markdown,    
 - [Emoji](https://gist.github.com/rxaviers/7360908) on GitHub,
 - GitHub [actions](https://docs.github.com/en/actions),
 - GitHub Student [Developer Pack](https://education.github.com/pack)  

3. ##### Django
  - [Official](https://www.djangoproject.com/) website,  
  - [Najlepszy](https://tutorial.djangogirls.org/pl/) startowy tutorial dla Django,

4. ##### Bazy danych: SQLite i PostgreSQL
  - [SQL](https://www.javatpoint.com/sql-tutorial) tutorial,  
  - [Database Management System](https://www.javatpoint.com/dbms-tutorial) tutorial,  
  - [SQLite](https://www.sqlitetutorial.net/sqlite-python/) w Pythonie, 
  - [Wstęp do SQL](https://third-bit.com/sql/) dla inżynierów danych,
  - [Tutorial SQLite](https://www.tutorialspoint.com/sqlite/sqlite_python.htm) w Pythonie,
  - [SQLite](https://sqlitebrowser.org/) browser,
  - [sqlite-web](https://github.com/coleifer/sqlite-web) - web-based SQLite database browser written in Python,  
  - [PostgreSQL](https://www.postgresqltutorial.com/) tutorial,  
  - [Official](https://www.postgresql.org/docs/current/tutorial.html) PostgreSQL tutorial,  
  - [Useful](https://www.postgresqltutorial.com/postgresql-administration/psql-commands/) `psql` commands.  

5. ##### Docker
  - [Najlepszy](https://www.youtube.com/playlist?list=PLkcy-k498-V5AmftzfqinpMF2LFqSHK5n) kurs Dockera po polsku,
  - Docker [Manuals](https://docs.docker.com/manuals/),
  - [Tutoriale](https://realpython.com/tutorials/docker/) Dockera na RealPython (wymagana rejestracja),
  - Docker [cheat sheet](https://dockerlabs.collabnix.com/docker/cheatsheet/),
  - Darmowe [laboratoria](https://labs.play-with-k8s.com/) do nauki Kubernetes.  

6. ##### Platformy PaaS
  - [Render.com](https://render.com/docs) - nie jest wymagana karta kredytowa,  
  - [Cloud Foundry](https://www.cloudfoundry.org/) - nie jest wymagana karta kredytowa, 
  - [Azure for students](https://azure.microsoft.com/pl-pl/free/students),  
  - [App Engine](https://cloud.google.com/appengine),  
  - [Cloud Run](https://cloud.google.com/run?hl=en),  
  - ...


