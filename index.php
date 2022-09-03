<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Daily Expense</h2>
  <form method ="post" action="">
    <div class="form-group">
      <label for="desc">Desc</label>
      <input type="text" class="form-control" id="desc" placeholder="Description" name="desc">
    </div>
    <div class="form-group">
      <label for="cost">Cost</label>
      <input type="text" class="form-control" id="cost" placeholder="Cost" name="cost">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<?php
include "dbcon.php";
if(($_POST['desc']!="" && $_POST['cost']!="") && (isset($_POST['desc']) && isset($_POST['cost'])))
{
    $desc = $_POST['desc'];
    $cost = $_POST['cost'];
    $date = date('Y-m-d');
    $sql = "INSERT INTO `accounts`(`particulars`, `amount`, `savedate`) VALUES ('$desc','$cost','$date')";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        ?>
        <script>
            alert("Data Inserted");
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("Data not inserted");
        </script>
        <?php
    }
}
?>
<script>    
history.pushState(null, null, document.URL);
   window.addEventListener('popstate', function () {
   history.pushState(null, null, document.URL);
});
</script>
</body>
</html>