<!DOCTYPE html>
<html lang="en">
<?= include 'header.html'; ?>
<body>
<div class="container">
    <h2>Login</h2>

    <form role="form">
        <div class="form-group">
            <div>
                <form role="form">
                    <div class="form-group">
                        <label for="text">Name:</label>
                        <input type="text" class="form-control" id="username">
                    </div>
                    <button id="send" type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </form>
</div>

</body>
<script>
    function login(username) {
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: {name: username},
        });
    }

    $('#send').click(function () {
        login($('#username').val());
    });
</script>

</html>