<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
for($i=1; $i<11;$i++)
{
    ?> <br> <?php
    for($X=1; $X<11; $X++)
    {
        $total = $i+$X;
        if($total%2 == 0)
        {
            echo "X";
        }
        else
        {
            echo "O";
        }
    }
    ?> <?php
}
?>

</body>
</html>