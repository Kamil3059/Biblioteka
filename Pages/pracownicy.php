<h1>Tabela <i>pracownicy</i></h1>
<table>
<?php
$query = 'SELECT * FROM `pracownicy` LIMIT 0,1;';
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        echo '<tr>';
        foreach ($row as $😎 => $😜😜)
        {
            if($😎 == 'Id_stanowisko')
            {
                echo '<th>Stanowisko</th>';
            }
            else
            {
                echo '<th>' . $😎 . '</th>';
            }
        }
        echo '</tr>';
    }
}
$query = 'SELECT `Id_pracownika`, `Nazwisko`, `Imie`, `stanowiska`.`Nazwa`, `Miasto`, `Data_zatrudnienia`, `Wynagrodzenie` FROM `pracownicy` INNER JOIN `stanowiska` ON `pracownicy`.`Id_stanowisko` = `stanowiska`.`Id_stanowisko` ORDER BY `Id_pracownika`;';
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        echo '<tr>';
        foreach($row as $😎 => $😜😜)
        {
            if($😎 == 'Wynagrodzenie')
            {
                echo '<td style="text-align: end">' . $😜😜 . '</td>';
            }
            else
            {
                echo '<td>' . $😜😜 . '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>
</table>
