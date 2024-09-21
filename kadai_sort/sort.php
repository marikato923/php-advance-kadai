<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数の定義
        function sort_2way($array, $order) {
            // 昇順の場合
            if($order) {
            echo '昇順にソートします。<br>';
            sort($array);
            }
            // 降順の場合
            else {
            echo '降順にソートします。<br>';
            rsort($array);
            }

            // ソートした内容を表示
            foreach ($array as $num) {
            echo $num . '<br>';
            }

        }

        // 配列の値を設定
        $nums = [15, 4, 18, 23, 10];
        
        // 配列を昇順にソート
        sort_2way($nums, true);

        // 配列を降順にソート
        sort_2way($nums, false);
        ?>
    </p>
</body>
</html>