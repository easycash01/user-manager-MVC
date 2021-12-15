<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   

<link rel="stylesheet" href="./public/css/stile.css">
<link rel="stylesheet" href="./public/css/sidebar.css">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
      <!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

      <title>TEMPLATE.php</title>

</head>

<body>

<main>
<!-- <?php  include './views/template_part/navbar.php'; ?> -->

<?php  include './views/template_part/sideBar.php'; ?>

<div class="main">

<div class="pagine">
      
<?php
$mvc = NEW MvcTemplate();
$mvc->collegamenti_Pages();
?>
</div> <!--  fine div pagine  -->

<?php  include './views/template_part/footer.php'; ?>
</div> <!--  fine div main  -->
 
</main>
</body>

</html>