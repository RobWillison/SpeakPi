

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Talk Thingy, Hi <?= $_SESSION['name']; ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?
                    $active = $_SESSION['page'];
                    $speakClass = $active == 'speak' ? 'active' : '';
                    $buttonClass = $active == 'button' ? 'active' : '';
                ?>
                <li class="<?= $speakClass ?>"><a href="index.php?page=speak">Speak<span class="sr-only">(current)</span></a></li>
                <li class="<?= $buttonClass ?>"><a href="index.php?page=button">Buttons</a></li>
                <li><a href="index.php?page=login">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>




