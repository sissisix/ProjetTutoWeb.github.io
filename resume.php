<?php
    if(isset($_POST['form1'])){
        echo test;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php if(isset($_POST['form1'])): ?>
        <p>test</p>
    <?php else: ?>
        <p>non</p>
    <?php endif; ?>
</body>
</html>