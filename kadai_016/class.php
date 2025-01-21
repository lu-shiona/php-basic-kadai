<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>課題016</title>
    </head>

    <body>
        <p>
            <?php
            // クラスを定義する
            class Food {
                // プロパティを定義する
                private $name;
                private $price;

                // プロパティの値を出力するメソッドを定義する
                public function show_price() {
                    echo $this->price . '<br>';
                }

                // コンストラクタを定義する
                public function __construct(string $name, int $price) {
                    $this->name = $name;
                    $this->price = $price;          
                }
            }
                // インスタンス化する
                $orange = new Food('orange', 300);

                // インんスタンス$orangeの各プロパティの値を出力する
                print_r($orange);
                echo '<br>';
            

            // クラスを定義する
            class Animal {
                // プロパティを定義する
                private $name;
                private $height;
                private $weight;

                // プロパティの値を出力するメソッドを定義する
                public function show_height() {
                    echo $this->height . '<br>';
                }

                // コンストラクタを定義する
                public function __construct(string $name, int $height, int $weight) {
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }
            }
                // インスタンス化する
                $cat = new Animal('cat', 60, 5000);

                // インスタンス$catの各プロパティの値を出力する
                print_r($cat);
                echo '<br>';
            
                // メソッドにアクセスして実行する
                echo $orange->show_price();

                echo $cat->show_height();
            ?>
        </p>
    </body>

</html>