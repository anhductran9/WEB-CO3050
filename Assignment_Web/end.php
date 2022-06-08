<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulation</title>
    <link rel="stylesheet" href="game.css">
</head>
<body>
    <div class="container" style="display: block; text-align: center; margin-top: 25vh;">
        <div id="end" class="flex-center flex-column">
            <h1 id="finalScore"><?php if(isset($_POST['score'])) echo $_POST['score']; else 0 ?></h1>
        </div>
        <button type="submit" class="btn" id="saveScoreBtn" onclick="saveHighScore(event)">Save</button>
        <a class="btn" href="/game.php">Play Again</a>
        <a class="btn" href="/index.php">Go Home</a>
    </div>
</body>
</html>