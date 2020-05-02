<?php
    //Włączenie pliku z połączeniem z bazą danych.
    include "wyszukiwarkasql.php";
    //Pobieranie wartości z zmiennej szukanej z pliku szukajkascript.js
    if (isset($_POST['znajdz'])) {
    //Przypisywanie wartości z szukarki do zmiennej $produkt, która zostanie zastosowana w query.
       $produkt = $_POST['znajdz'];
    //Query szukania
       $query = "SELECT p_name FROM products WHERE p_name LIKE '%$produkt%' LIMIT 5";
    //Wykonanie query
       $ExecQuery = mysqli_query($db, $query);
    //Tworzenie nieuporządkowaej listy do wyświetlania wynikówt.
       echo '
    <ul>
       ';
       //Otrzymywanie wyników z bazy danych
       while ($Result = mysqli_fetch_array($ExecQuery)) {
           ?>
       <!--Tworzenie nieuporządkowanych elementów listy.
            Wywołanie funkcji javascript o nazwie "fill" utworzonej na początku pliku "szukajkascript.js", przekazując pobrany wynik jako parametr-->
       <li onclick='fill("<?php echo $Result['p_name']; ?>")'>
       <a>
       <!--Przypisanie wyszukiwanego wyniku w polu wyszukiwania w pliku "szukajka.php".-->
           <?php echo $Result['p_name']; ?>
       </li></a>
       <?php
    }}
    ?>
    </ul>
