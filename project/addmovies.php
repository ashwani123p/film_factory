<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>

<body>
<form class="form-horizontal" method="post" action="action.php?admin=<?php echo $admin ?>" enctype="multipart/form-data">
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Genre</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="genre" placeholder="Genre"/>
        </div>
    </div>
     <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Name</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="name"  placeholder="Last Name"/>
        </div>
    </div>
      <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Year of Release</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="year"  placeholder="eg:- 2017"/>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">IMDB</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="imdb" placeholder="IMDB"/>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Actors</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="actors" placeholder="Actors"/>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Director</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="director" placeholder="Director"/>
        </div>
    </div><div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Info</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="info"  placeholder="Info"/>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Image</label>
        <div class="col-xs-5">
            <input type="file" class="form-control" name="image" />
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Link</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="link"  placeholder="Link"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <input type="submit" class="btn btn-primary" name="submit" value="Add Movie"/>
        </div>
    </div>
</form>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
