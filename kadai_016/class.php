<!DOCTYPE html>
<html  lang="ja">
    
<head>
<meta chrset="utf-8">
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
        
        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
        
        // priceを追加するメソッド
        public function show_price() {
            return $this->price;
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

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        }
    
    public function show_height() {
            return $this->height;
        }  
    }

    $animal = new Animal('dog', 60, 5000);

    print_r($animal);

    // priceプロパティとheightプロパティの値を出力
    echo '<br>';
    print_r($food->show_price());

    echo '<br>';
    print_r($animal->show_height());
    ?> 
    </p>
</body>
</html>
