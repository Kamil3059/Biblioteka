<h1>Tabela <i>dzialy</i></h1>

<table>
    <?php
    $query = 'SELECT * FROM `dzialy` LIMIT 0,1;';
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
    $query = 'SELECT * FROM `dzialy`;';
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
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</table>
