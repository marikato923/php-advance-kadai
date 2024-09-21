<!DOCTYPE html>
<html  lang="ja">
    
<head>
<meta charset="utf-8">
<title>PHP基礎編</title>
</head>
<body>
    <p>
    <?php
    // "food"
    // クラスを定義する
    class Food {
        // プロパティを定義する
        private $name;
        private $price;
            
        // priceを追加するメソッド
        public function show_price() {
            echo $this->price;
        }
        
        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
    }

    // インスタンス化
    $food = new Food('potato', 250);

    // インスタンス$foodの各プロパティの値を出力する
    print_r($food);

    // "animal"
    class Animal {
        private $name;
        private $height;
        private $weight;

    public function show_height() {
        echo $this->height;
        }  

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        }
    }

    $animal = new Animal('dog', 60, 5000);

    print_r($animal);

    // show_priceメソッドとshow_heightメソッドにそれぞれアクセスして実行する
    echo '<br>';
    $food->show_price();

    echo '<br>';
    $animal->show_height();
    ?> 
    </p>
</body>
</html>
