<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order){
        
        
        //昇順
        if ($order) {
            echo '昇順でソートします。<br>';
            sort ($array);
            foreach($array as $num) {
                echo "{$num}<br>";
            }
        
        //降順
        } else {
            echo '降順でソートします。<br>';
            rsort ($array);
            foreach($array as $num) {
                echo "{$num} <br>";
            }
        }
        }
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        sort_2way ($nums, true);
        sort_2way ($nums, false);

        ?>
    </p>
</body>

</html>
