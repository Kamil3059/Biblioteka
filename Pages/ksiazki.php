<h1>Tabela <i>ksiazki</i></h1>
<table>
    <?php
    $query = 'SELECT * FROM `ksiazki` LIMIT 0,1;';
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            foreach ($row as $😎 => $😜😜) {
                if($😎== 'Id_dzial')
                {
                    echo '<th>Dział</th>';
                }
                else {
                    echo '<th>' . $😎 . '</th>';
                }
            }
            echo '</tr>';
        }
    }
    $query = 'SELECT `Sygnatura`, `Tytul`, `Nazwisko`, `Imie`, `Wydawnictwo`, `Miejsce_wyd`, `Rok_wyd`, `Objetosc_ks`, `Cena`, `dzialy`.`Nazwa` FROM `ksiazki` INNER JOIN `dzialy` ON `ksiazki`.`Id_dzial` = `dzialy`.`Id_dzial` ORDER BY `Sygnatura`;';
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            echo '<tr>';
            foreach($row as $😎 => $😜😜)
            {
                if($😎== 'Nazwa')
                {
                    echo '<td>' . $😜😜 . '</td>';
                }
                else {
                    echo '<td>' . $😜😜 . '</td>';
                }
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    echo $_SESSION['sebix'];
    ?>

</table>

