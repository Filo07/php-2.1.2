<?php
$input = isset($_POST['text']) ? $_POST['text'] : 'Rad';
$safeInput = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
function etttvåtre($number) {
    $text = [
        1 => 'ett',
        2 => 'två',
        3 => 'tre',
        4 => 'fyre',
        5 => 'fem',
        6 => 'sex',
        7 => 'sju',
        8 => 'åtta',
        9 => 'nio',
        10 => 'tio'
    ];
    return $text[$number] ?? $number;
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
                    echo '  <div class="num">Rad ' . etttvåtre($i) . '</div>';
                    echo '  <div class="text">' . $safeInput . '   ' . etttvåtre($i) . '</div>';
                    echo '</div>';
                }
                ?>
        </div>
  </div>
</body>
</html>