<!DOCTYPE html>
<html lang="en">
<? include 'header.html'; ?>
<body>
<div class="container">
    <? include 'Common.tpl.php'; ?>

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
                        echo "<button id=\"$name\" class=\"btn btn-default\">$button</button>";
                        echo "<script>
                        $( \"#$name\" ).click(function(e) {
                                e.preventDefault();
                                sendText('$button');
                        });
                    </script>";
                    }
                }
            }
            ?>
        </div>

        <h2>Add New Stuff</h2>
        <input type="text" class="form-control" id="newbutton">
        <button id='newbutonsubmit' class="btn btn-default"> Add</button>
    </form>
</div>

</body>
<script>
    function sendText(text) {
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: {text: text},
            success: done(),
        });
    }

    function done()
    {
        return true;
    }

    function addButton(text) {
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: {addbutton: text},
            success: function(data) { return false; },
        });
    }

    $('#newbutonsubmit').click(function () {
        addButton($('#newbutton').val());
        window.location.reload()
    });

</script>

</html>