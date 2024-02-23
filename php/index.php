<!-- PHP -->
<?php 
// GET badword
$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];

// Censor word
$censured_paragraph = str_replace($badword, '*****', $paragraph);
?>

<!-- Doctype Html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- my css -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container text-center mt-5">
    <h1><mark class="originalword">Prola originale</mark></h1>
    <p class="fw-bolder p-4"><?= $paragraph ?></p>
    <p class="fw-medium p-4">La parola originale originale è lunga:<strong><?= mb_strlen($paragraph)?>caratteri</strong></p>
    <h2><mark style="red">Parola censurata</mark></h2>
    <p class="fw-bolder p-4"><?= $censured_paragraph ?></p>
    <p class="fw-medium p-4">La parola originale è lunga:<strong><?= mb_strlen($censured_paragraph)?>caratteri</strong>
    </div>
</body>
</html>