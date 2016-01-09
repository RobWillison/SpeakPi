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
                                echo "<option value='" . $name['value'] . "'>" . $name['name'] . "</option>";
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
            <?php
            if(file_exists('Buttons.txt')) {
                $fp = fopen('Buttons.txt', 'r');
                while (!feof($fp)) {
                    $button = trim(fgets($fp));
                    $name = md5($button);
                    if($button != '') {
                        echo "<button id=\"$name\" type=\"submit\" class=\"btn btn-default\">$button</button>";
                        echo "<script>
                        $( \"#$name\" ).click(function() {
                                sendText('$button', $('#voice').val());
                        });
                    </script>";
                    }
                }
            }
            ?>
        </div>

        <h2>Add New Stuff</h2>
        <input type="text" class="form-control" id="newbutton">
        <button id='newbutonsubmit' type="submit" class="btn btn-default"> Add </button>
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

    function addButton(text) {
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: {addbutton: text},
        });
    }

    $('#newbutonsubmit').click(function() {
        addButton($('#newbutton').val());
    });

</script>

</html>