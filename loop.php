<?php 
    echo '<h3>Bai 1:</h3>';
    ?>
<table border="2px">
    <tr>
        <?php
        for ($i = 1; $i <= 9; $i ++) {
            echo "<td>";
            for ($j = 1; $j <= 10; $j ++) {
                echo "$i x $j = " . ($i * $j);
                echo "<br>";
            }
            echo "</td>";
}
    ?>
    </tr>
</table>

<?php 
    echo '<hr>';
    echo '<h3>Bai 2:</h3>';
    ?>

<table style="width: 250px;" border="2px">
    <?php
        for($row = 1; $row <= 8; $row++)
        {
            echo '<tr>';
            for($col = 1; $col <= 8; $col++){
                $total=$row + $col;  
                if($total%2 == 0)  
                {  
                  echo "<td height=30px width=30px></td>";  
                }  
                else  
                {  
                  echo "<td height=30px width=30px bgcolor=#f005></td>";  
                } 
            }
            echo '</tr>';
        }
    ?>
</table>

<?php 
    echo '<hr>';
    echo '<h3>Bai 3:</h3>';
    ?>

<?php
    $n = 5;
    for($i = 1; $i <= $n; $i++ ){
        for($j = 1; $j <= $i; $j++)
        {
            echo '*';
        }
        echo '<br>';
    }
    echo '<hr>';
    echo '<h3>Bai 4:</h3>';

    $n = 5;
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $i; $j++)
        {
            echo '*';
        }
        echo '<br>';
    }
    for($i = $n; $i >= 1; $i--){
        for($j = $i; $j >= 1; $j--)
        {
            echo '*';
        }
        echo '<br>';
    }

    echo '<hr>';
    echo '<h3>Bai 5:</h3>';

    $n = 5;
    $index = 1;
    $result = 0;
    for($i = 1; $i <= $n; $i++)
    {
        $index *=$i;
        $result +=$index;
    }
    echo 'Tong S la: '.$result;

    echo '<hr>';
    echo '<h3>Bai 6:</h3>';

    $n = 20;
    $snt;
    for ($i = 1; $i <= $n; $i++){

        $check = true;
    
        if ($i <= 1){
            $check = false;
        }else{
            for ($j = 2; $j < $i; $j++){
                if ($i % $j == 0){
                    $check = false;
                }
            }
        }
    
        if ($check){
    
            $snt .= $i.', ';
        }
    }
    $snt = trim($snt, ', ');
    echo 'So nguyen to tu 1 den '.$n.' la: '.$snt;