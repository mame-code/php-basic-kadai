<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>課題16</title>
</head>

<body>
  <P>
    <?php
    //クラスを定義する
    class Food {
    //プロパティを定義する
    private $name;
    private $price;

    //priceの値をメソッドを定義する
    public function show_price (){
      $this->price = $price.'<br>';
    }
    //値を代入するコンストラクタを作成する
      public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
    }
  }

  class Animal {
    //プロパティを定義する
    private $name;
    private $height;
    private $weight;

    //priceの値をメソッドを定義する
    public function show_height (){
      $this->height = $height.'<br>';
    }
    //値を代入するコンストラクタを作成する
      public function __construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
  }

    //任意の引数を渡すインスタンスを作成する
    $food = new Food ('potato', 250) ;
    $animal = new Animal('dog', 60, 5000);

    //インスタンスの各プロパティの値を出力する
    print_r($food);
    echo '<br>';
    print_r($animal);
    ?>
  
</p>
</body>

</html>