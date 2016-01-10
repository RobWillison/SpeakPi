<!DOCTYPE html>
<html lang="en">
<?= include 'header.html'; ?>
<body>
<div class="container">
    <h2>Talk Thingy</h2>

    <form role="form">
        <h2>Extra Stuff</h2>
        <div>
            <?php
            if (file_exists('Buttons.txt')) {
                $fp = fopen('Buttons.txt', 'r');
                while (!feof($fp)) {
                    $button = trim(fgets($fp));
                    $name = md5($button);
                    if ($button != '') {
                        echo "<button id=\"$name\" type=\"submit\" class=\"btn btn-default\">$button</button>";
                        echo "<script>
                        $( \"#$name\" ).click(function() {
                                sendText('$button', $('#from').val());
                        });
                    </script>";
                    }
                }
            }
            ?>
        </div>

        <h2>Add New Stuff</h2>
        <input type="text" class="form-control" id="newbutton">
        <button id='newbutonsubmit' type="submit" class="btn btn-default"> Add</button>
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

    $('#newbutonsubmit').click(function () {
        addButton($('#newbutton').val());
        window.location.reload()
    });

</script>

</html>