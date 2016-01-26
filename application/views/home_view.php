<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guestbook</title>
  <link ref="stylesheet", href="public/css/bootstrap.min.css"/>
  <link ref="stylesheet", href="public/css/bootstrap-responsive.min.css"/>
  <link ref="stylesheet", href="public/css/style.css"/>
  <script src="public/javascript/jquery-1.12.0.min.js"></script>
  <script src="public/javascript/bootstrap.min.js"></script>
</head>
<body>
  <h1> Guestbook </h1>
    <div>Company Name: H for Hope Independent Consultant </div>
      <div> Add a new guest: </div>
      <form class="form-horizontal" method="post" action="?">
        <div class="control-group">
          <label class="control-label">First name: </label>
          <div class="controls">
            <input type="text" name="firstname" class="input-xlarge"/>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Last name: </label>
          <div class="controls">
            <input type="text" name="lastname" class="input-xlarge"/>
          </div>
        </div>


        <div class="control-group">
          <label class="control-label">Email: </label>
          <div class="controls">
            <input type="text" name="email" class="input-xlarge"/>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Comment: </label>
          <div class="controls">
            <input type="text" name="comment" class="input-xlarge"/>
          </div>
        </div>

        <div class="control-group">
          <div class="controls">
            <input type="submit" value="Add" class="btn btn-primary"/>
          </div>
        </div>
      </form>




  <footer> &copy; Holly Liu - 2016</footer>
</body>
</html>