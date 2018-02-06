<header>
    <div class="row">
        <div class="col-md-4">
            <a href="index.php"><h1>eRevive</h1></a>
        </div>
    <div class="col-md-8">
        <div class="form-group">
        <form class="form-inline login" action="./login.php" method="post">
            <label for="username">Username:</label> <input class="form-control" name="username" id="username" type="text" required>
            <label for="password">Password:</label> <input class="form-control" name="password" id="password" type="password" required>
            <input class="form-control btn btn-control" type="submit" name="login" id="login" value="Sign In">
            <input class="form-control btn btn-control" type="button" formaction ="#" data-target="#registerModal" data-toggle="modal" name="register" id="register" value="Register">
            <input class="form-control btn btn-control" type="submit" formaction ="./reset.php" name="reset" id="reset" value="Reset Password">
        </form>
        </div>
    </div>
    </div>
</header>
