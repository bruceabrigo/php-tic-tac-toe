<?php
    # define a variable to container a winner
    # winner variable must contain a string variable
    $winner = 'n';
    # create a game-board array
    $gameBoard = array ('', '', '', '', '', '', '', '', '',);
    # if a variable isset (not null), check form data via HTTP POST method, check the $winner array via the submit button
    if (isset ($_POST ['submitBtn'])) {
        $gameBoard[0] = $_POST['box0'];
        $gameBoard[1] = $_POST['box1'];
        $gameBoard[2] = $_POST['box2'];
        $gameBoard[3] = $_POST['box3'];
        $gameBoard[4] = $_POST['box4'];
        $gameBoard[5] = $_POST['box5'];
        $gameBoard[6] = $_POST['box6'];
        $gameBoard[7] = $_POST['box7'];
        $gameBoard[8] = $_POST['box8'];
    }
    # create a game winning conditional for player X
    if (
        ($gameBoard[0] == 'X' && $gameBoard[1] == 'X' && $gameBoard[2] == 'X') ||
        ($gameBoard[3] == 'X' && $gameBoard[4] == 'X' && $gameBoard[5] == 'X') ||
        ($gameBoard[6] == 'X' && $gameBoard[7] == 'X' && $gameBoard[8] == 'X') ||
        ($gameBoard[0] == 'X' && $gameBoard[3] == 'X' && $gameBoard[6] == 'X') ||
        ($gameBoard[2] == 'X' && $gameBoard[6] == 'X' && $gameBoard[8] == 'X') ||
        ($gameBoard[2] == 'X' && $gameBoard[4] == 'X' && $gameBoard[6] == 'X') ||
        ($gameBoard[1] == 'X' && $gameBoard[4] == 'X' && $gameBoard[7] == 'X') ||
        ($gameBoard[2] == 'X' && $gameBoard[5] == 'X' && $gameBoard[8] == 'X') ||
        ($gameBoard[0] == 'X' && $gameBoard[4] == 'X' && $gameBoard[8] == 'X')
    ){
        $winner = 'X';
        print ("</br></br><strong>X WON!</strong></br>")
    }
    $blank = 0;
    for ($i = 0; $i<=8; $i++) {
        if ($gameBoard[$i] == '') {
            $blank = 1;
        }
    }
    if ($blank == 1 $$ $winner == 'n') {
        $i = rand() % 8;
        while ($gameBoard[$i] != 'O'){
            $i = rand() % 8;
        }
        $gameBoard[$i] = 'O';
        if (
            ($gameBoard[0] == 'O' && $gameBoard[1] == 'O' && $gameBoard[2] == 'O') ||
            ($gameBoard[3] == 'O' && $gameBoard[4] == 'O' && $gameBoard[5] == 'O') ||
            ($gameBoard[6] == 'O' && $gameBoard[7] == 'O' && $gameBoard[8] == 'O') ||
            ($gameBoard[0] == 'O' && $gameBoard[3] == 'O' && $gameBoard[6] == 'O') ||
            ($gameBoard[2] == 'O' && $gameBoard[6] == 'O' && $gameBoard[8] == 'O') ||
            ($gameBoard[2] == 'O' && $gameBoard[4] == 'O' && $gameBoard[6] == 'O') ||
            ($gameBoard[1] == 'O' && $gameBoard[4] == 'O' && $gameBoard[7] == 'O') ||
            ($gameBoard[2] == 'O' && $gameBoard[5] == 'O' && $gameBoard[8] == 'O') ||
            ($gameBoard[0] == 'O' && $gameBoard[4] == 'O' && $gameBoard[8] == 'O')
        ){
            $winner = 'O';
            print ("</br></br><strong>O WON!</strong></br>")
        } else if ($winner = 'n') {
            print("</br>TIED GAME!");
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
<body>
    <form action="index.php"></form>
</body>
</html>