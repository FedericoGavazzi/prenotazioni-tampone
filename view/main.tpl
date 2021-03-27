<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Prenotazioni</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
</head>
<body>
<header>
    <a href="#" class="logo"><?= $argomento ?></a>
    <a href="#" class="button">Home</a>
    <button>Download</button>
</header>

   <?= $this -> section('content'); ?>


</body>
</html>
<!-- <?= stampa le cose al posto di scrivere php echo -->