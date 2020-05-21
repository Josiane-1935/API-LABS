<!DOCTYPE html>
<html>
<head>
  <title>Salimia me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container border border-primary mx-auto m-5 pb-5 ">
    <div class="panel panel-primary ">
      <div class="panel-heading" align="center">
      hello
      </div>
      <span><h2>Salimia Me</h2><span>
      <div class="panel-body">
    <form method="POST" action="process.php">
      <div class="form-group col-lg-5">
        <label for="name">Name :</label>
        <input type="text" name="name" id="name" placeholder="Input Name" class="form-control" width="25%" required/>
      </div>
      <div class="form-group col-lg-5">
        <label for="age">Age :</label>
        <input type="number" name="age" id="age" placeholder="Input Age" min="5" max="90" class="form-control" required/>
      </div>
      <div class="form-group col-lg-5">
        <label for="gender">Gender :</label>
        <input type="radio" name="gender" id="male" value="m" required/>male
        <input type="radio" name="gender" id="female" value="f" required/>Female
      </div>
      <div class="form-group col-lg-5">
        <button type="submit" class="btn btn-primary" name="submit" id="submit">
          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path class="heroicon-ui" d="M17.62 10H20a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H8.5c-1.2 0-2.3-.72-2.74-1.79l-3.5-7-.03-.06A3 3 0 0 1 5 9h5V4c0-1.1.9-2 2-2h1.62l4 8zM16 11.24L12.38 4H12v7H5a1 1 0 0 0-.93 1.36l3.5 7.02a1 1 0 0 0 .93.62H16v-8.76zm2 .76v8h2v-8h-2z"/>
          </svg>
          <span>Salimia Me</span>

        </button>
      </div>

    </form>
  </div>
  </div>
</div>



</body>
</html>
