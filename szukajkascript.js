//Pobieranie wartości z pliku "ajax.php".
function fill(Value) {
    //przypisanie wartości do "search" div w pliku "szukajka.php".
    $('#search').val(Value);
    //Ukrycie div "display" w pliku "szukajka.php".
    $('#display').hide();
}

$(document).ready(function() {
    //Funkcja zostanie wywołana w momencie wprowadzania znaków w polu wyszukiwania.
    $("#search").keyup(function() {
        //Przypisywanie zawartości pola wyszukiwania do zmienne w javascripcie nazwanej 'szukane".
        var szukane = $('#search').val();
        //Validating, if "name" is empty.
        if (szukane == "") {
            //Przypisanie pustej wartości do wyświetlenia w "display" div w pliku "szukajka.php".
            $("#display").html("");
        }
        //W przypadku gdy pole wyszukiwania nie jest puste
        else {
            //Wywołanie ajaxa.
            $.ajax({
                //Metoda "Post" w Ajaxie.
                type: "POST",
                //Dane wysyłane do pliku "ajax.php".
                url: "ajax.php",
                //Dane wysyłane do pliku "ajax.php".
                data: {
                    //Przypisywanie wartości zmiennej szukane do zmiennej znajdz.
                    znajdz: szukane
                },
                //Jeżeli szukana fraza znajduje odpowiednik w bazie danych wtedy zostaje wywołana funkcja:
                success: function(html) {
                    //Wyświetlenie wyniku w polu "display" div w pliku "szukajka.php"
                    $("#display").html(html).show();
                }
            });
        }
    });
 });