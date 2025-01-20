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
                $food = new Food('orange', 300);

                // インんスタンス$foodの各プロパティの値を出力する
                print_r($food);
            

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
                $animal = new Animal('cat', 60, 5000);

                // インスタンス$animalの各プロパティの値を出力する
                print_r($animal);
            
                // メソッドにアクセスして実行する
                $food->show_price(300);

                $animal->show_height(60);
            ?>
        </p>
    </body>

</html>