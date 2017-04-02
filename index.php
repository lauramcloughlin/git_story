<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Git Story</title>
    <style>
        @import 'css/style.css';
    </style>
</head>
<body>
<h2>Git Story</h2>

<h1>The Traditional Sunday Dinner</h1>

<?php
for ($loop = 1; $loop <= 3; $loop++) { ?>
<p><a href="chapter0<?= $loop ?>.html">Chapter <?= $loop ?><a></p>
<?php } ?>


</body>
</html>