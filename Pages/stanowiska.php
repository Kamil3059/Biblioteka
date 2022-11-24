<h1>Tabela <i>stanowiska</i></h1>
<table>
    <?php
    $query = 'SELECT * FROM `stanowiska` LIMIT 0,1;';
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            foreach ($row as $😎 => $😜😜) {
                echo '<th>' . $😎 . '</th>';
            }
            echo '</tr>';
        }
    }
    $query = 'SELECT * FROM `stanowiska`;';
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            echo '<tr>';
            foreach($row as $😎 => $😜😜)
            {
                echo '<td>'.$😜😜.'</td>';
            }
            echo '<td><a href="?page=stanowiska_formularz&stanowisko=' .$row['Id_stanowisko'].'">NNNNNNN</a></td></tr>';
        }
        echo '</table>';
    }
    ?>
</table>


