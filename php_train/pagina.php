<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Hello World";?>Compras</h1>
    <?php
        //echo "<h1>PHP executou</h1>";
        $lista = ['Abacate','Leite','Abacaxi'];
    ?>
    <ul>
        <?php
            foreach($lista as $item){?>
                echo "<li>$item</li>";
                <?php    }
         ?>
        
    </ul>



    <ul>
        <li>Abacate</li>
        <li>Leite</li>
        <li>Abacaxi</li>
        <li></li>
    </ul>
</body>
</html>