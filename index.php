<?php
$input = isset($_POST['text']) ? $_POST['text'] : 'Rad';
$safeInput = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
function swedishOrdinal($number) {
    $ordinals = [
        1 => 'första',
        2 => 'andra',
        3 => 'tredje',
        4 => 'fjärde',
        5 => 'femte',
        6 => 'sjätte',
        7 => 'sjunde',
        8 => 'åttonde',
        9 => 'nionde',
        10 => 'tionde'
    ];
    return $ordinals[$number] ?? $number;
}
?>
<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>Visa sträng + radnummer</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="allt">
    <h1>Text med Radnummer</h1>
    <form method="post" action="">
                <input type="text" name="text" value="<?php echo $safeInput; ?>" placeholder="Text Här">
                <button type="submit">Visa</button>
                </form>

                <div class="svar">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo '<div class="line">';
                    echo '  <div class="num">Rad ' . swedishOrdinal($i) . '</div>';
                    echo '  <div class="text">' . $safeInput . '   ' . swedishOrdinal($i) . '</div>';
                    echo '</div>';
                }
                ?>
        </div>
  </div>
</body>
</html>