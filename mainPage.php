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
    <h2>Talk Thingy</h2>
    <form role="form">
        <div class="form-group">
            <div>
                <form role="form">
                    <div class="form-group">
                        <label for="text">Speak:</label>
                        <input type="text" class="form-control" id="text">
                        <select id="voice" class="selectpicker">
                            <?php
                                $voice = new \SpeakServer\Service\Voices();
                                $voices = $voice->getVoices();

                                foreach ($voices as $name) {
                                    echo "<option value='". $name['value'] . "'>" . $name['name'] . "</option>";
                                }

                            ?>
                        </select>
                    </div>
                    <button id="send" type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
        <h2>Extra Stuff</h2>
        <div>
            <button id="meow" type="submit" class="btn btn-default">Meow</button>
            <button id="loser" type="submit" class="btn btn-default">Loser</button>
            <button id="youlose" type="submit" class="btn btn-default">You Lose</button>
            <button id="yousmell" type="submit" class="btn btn-default">You Smell</button>
        </div>
    </form>
</div>

</body>
<script>
    function sendText(text, voice) {
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: {text: text, voice: voice},
        });
    }

    $( "#send" ).click(function() {
        sendText($('#text').val(), $('#voice').val());
    });
    $( "#meow" ).click(function() {
        sendText('meow', $('#voice').val());
    });
    $( "#loser" ).click(function() {
        sendText('Loser', $('#voice').val());
    });
    $( "#youlose" ).click(function() {
        sendText('You Lose', $('#voice').val());
    });
    $( "#yousmell" ).click(function() {
        sendText('You Smell', $('#voice').val());
    });

</script>

</html>