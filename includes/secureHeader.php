<header>
    <div class="row">
        <div class="col-md-4">
            <a href="index.php"><h1>eRevive</h1></a>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <form class="form-inline logout" action="./logout.php" method="post">
                    <label for="logout">Welcome, <?php echo $_SESSION['username']; ?></label>
                    <input class="form-control btn btn-control" type="submit" formaction = "./create.php" name="create" id="create" value="Create Listing">
                    <input class="form-control btn btn-control" type="submit" formaction ="./viewListings.php" name="viewListings" id="viewListings" value="View My Listings">
                    <input class="form-control btn btn-control" type="submit" name="logout" id="logout" value="Sign Out">
                </form>
            </div>
        </div>
    </div>
</header>
