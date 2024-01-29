<?php
$winner = 'n';
$gameBoard = array('', '', '', '', '', '', '', '', '');

if (isset($_POST['submitBtn'])) {
    for ($i = 0; $i <= 8; $i++) {
        $gameBoard[$i] = $_POST['gameBoard' . $i];
    }
}

if (
    ($gameBoard[0] == 'x' && $gameBoard[1] == 'x' && $gameBoard[2] == 'x') ||
    ($gameBoard[3] == 'x' && $gameBoard[4] == 'x' && $gameBoard[5] == 'x') ||
    ($gameBoard[6] == 'x' && $gameBoard[7] == 'x' && $gameBoard[8] == 'x') ||
    ($gameBoard[0] == 'x' && $gameBoard[3] == 'x' && $gameBoard[6] == 'x') ||
    ($gameBoard[2] == 'x' && $gameBoard[6] == 'x' && $gameBoard[8] == 'x') ||
    ($gameBoard[2] == 'x' && $gameBoard[4] == 'x' && $gameBoard[6] == 'x') ||
    ($gameBoard[1] == 'x' && $gameBoard[4] == 'x' && $gameBoard[7] == 'x') ||
    ($gameBoard[2] == 'x' && $gameBoard[5] == 'x' && $gameBoard[8] == 'x') ||
    ($gameBoard[0] == 'x' && $gameBoard[4] == 'x' && $gameBoard[8] == 'x')
) {
    $winner = 'x';
    print("</br></br><strong>X WON!</strong></br>");
} else {
    $blank = 0;
    for ($i = 0; $i <= 8; $i++) {
        if ($gameBoard[$i] == '') {
            $blank = 1;
        }
    }

    if ($blank == 0 && $winner == 'n') {
        $winner = 't';
        print("</br>TIED GAME!");
    } elseif ($blank == 1 && $winner == 'n') {
        $i = rand() % 8;
        while ($gameBoard[$i] != '') {
            $i = rand() % 8;
        }
        $gameBoard[$i] = 'o';

        if (
            ($gameBoard[0] == 'o' && $gameBoard[1] == 'o' && $gameBoard[2] == 'o') ||
            ($gameBoard[3] == 'o' && $gameBoard[4] == 'o' && $gameBoard[5] == 'o') ||
            ($gameBoard[6] == 'o' && $gameBoard[7] == 'o' && $gameBoard[8] == 'o') ||
            ($gameBoard[0] == 'o' && $gameBoard[3] == 'o' && $gameBoard[6] == 'o') ||
            ($gameBoard[2] == 'o' && $gameBoard[6] == 'o' && $gameBoard[8] == 'o') ||
            ($gameBoard[2] == 'o' && $gameBoard[4] == 'o' && $gameBoard[6] == 'o') ||
            ($gameBoard[1] == 'o' && $gameBoard[4] == 'o' && $gameBoard[7] == 'o') ||
            ($gameBoard[2] == 'o' && $gameBoard[5] == 'o' && $gameBoard[8] == 'o') ||
            ($gameBoard[0] == 'o' && $gameBoard[4] == 'o' && $gameBoard[8] == 'o')
        ) {
            $winner = 'o';
            print("</br></br><strong>O WON!</strong></br>");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>TIC TAC TOE</title>
</head>
<body align='center'>
    <form name="tictactoe" action="index.php" method="post">
        <?php
        for ($i = 0; $i <= 8; $i++) {
            printf('<input type="text" name="gameBoard%s" value="%s" id="box">', $i, $gameBoard[$i]);
            if ($i == 2 || $i == 5 || $i == 8) {
                print('<br>');
            }
        }

        if ($winner == 'n') {
            print('<input type="submit" name="submitBtn" value="PLAY" id="go">');
        } else {
            print('<input type="submit" name="newgameBtn" value="PLAY AGAIN" id="again" onclick="window.location.href=\'index.php\'">');
        }
        ?>
    </form>
</body>
</html>
