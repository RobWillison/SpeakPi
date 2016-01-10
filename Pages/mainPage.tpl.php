<!DOCTYPE html>
<html lang="en">
<head>
    <title>Talk Thingy :D</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Talk Thingy, Hi <?= $_SESSION['name']; ?></h2>

    <form role="form">
        <div class="form-group">
            <div>
                <form role="form">
                    <div class="form-group">
                        <label for="text">Speak:</label>
                        <input type="text" class="form-control" id="text">
                    </div>
                    <button id="send" type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </form>
</div>

</body>
<script>
    function sendText(text, voice) {
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: {text: text, from: voice},
        });
    }

    function addButton(text) {
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: {addbutton: text},
        });
    }

    $('#send').click(function () {
        sendText($('#text').val(), $('#from').val());
    });
</script>

</html>