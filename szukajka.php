<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testowa wersja szukajki</title>
    <!--Wykorzystujemy bibliotekę jquery aby mieć dostęp do ajaxa, jest konieczna inaczej nie działa-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!--Włączenie do plisku skryptu js, dzieki któremu szukajka działa-->
    <script type="text/javascript" src="szukajkascript.js"></script>

</head>
<body>
    <!--Szukarka-->
   <input type="text" id="search" placeholder="Search" />
   <br>
   <b>Przykład: </b><i>Gumka, Klej, Arkusz, Długopis, Segregator, cokolwiek</i>
   <br />
   <!--Znalezione w bazie danych sugestie będą wyświetlone w poniższym divie-->
   <div id="display"></div>
</body>
</html>