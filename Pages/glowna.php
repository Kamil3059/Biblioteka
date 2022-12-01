<h1>Strona główna</h1>

<?php
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

if (isset($_COOKIE['Ciastko'])){
    echo '<p>Dane z ciastka wyświetlane jako tablica: </p><pre>';
    print_r(json_decode($_COOKIE['Ciastko'], true));
    echo '</pre>';

    echo '<p>Dane z ciastka wyświetlane jak tekst JSON:</p><pre>'
        .  $_COOKIE['Ciastko'] . '</pre>';
}
    ?>

<?php
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

if (isset($_COOKIE['dzialy'])){
    echo '<p>Dane z dzialy wyświetlane jako tablica: </p><pre>';
    print_r(json_decode($_COOKIE['dzialy'], true));
    echo '</pre>';

    echo '<p>Dane z dzialy wyświetlane jak tekst JSON:</p><pre>'
        .  $_COOKIE['dzialy'] . '</pre>';
}
?>
<pre>
    <?php
    print_r($_SESSION);
    ?>
</pre>


