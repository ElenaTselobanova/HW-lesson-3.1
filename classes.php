<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Классы и объекты</title>
</head>
<body>
<h1>Инкапсуляция</h1>
<p>Инкапсуляция - принцип объектно-ориентированного программирования, позволяющий собрать объект в пределах одной
    структуры или массива, убрав способ обработки данных и сами данные от «чужих глаз».</p>
<p>Это одновременно и облегчает конечному пользователю работу с программой, и защищает данные и само приложение
    от постороннего вмешательства. Пользователь может работать со всем функционалом через интерфейс, не задумываясь
    над тем, как программа работает.</p>
<p>Инкапсуляцию применяют:</p>
<ul>
    <li>когда нужно сохранить некоторый участок кода без изменений со стороны пользователя;</li>
    <li>когда нужно ограничить доступ к коду - в связи с уникальностью используемых техник, которые автор хочет
        оставить «при себе»;</li>
    <li>когда изменение кода повлечёт за собой неработоспособность программы или её взлом.</li>
</ul>
<h3>Плюсы обектов:</h3>
<ul>
    <li>исходное шаблонирование из класса;</li>
    <li>быстрое изменение свойств и методов из класса;</li>
    <li>фиксация значений, запрещенных к изменению;</li>
    <li>инкапсуляция кода по объекту в рамках одного блока;</li>
    <li>возможность переиспользования объекта в другом объекте.</li>
</ul>
<h3>Минусы объектов:</h3>
<ul>
    <li>ограничения области видимости;</li>
    <li>не работают без параметров;</li>
</ul>

</body>
</html>

<?php
class Car
{
    public $brand;
    public $model;
    public $type;
    public $price;

    public function __construct($brand, $model, $type, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->type = $type;
        $this->price = $price;

        echo "$this->brand, $this->model, $this->type, $this->price<br>";
    }
}
$mercedes = new Car ('Mercedes', 'W-177', 'hatchback', 2000000);
$bmw = new Car ('BMW', 'x6', 'crossover', 6000000);

class Tv
{
    public $brand, $model, $diagonal;

    public function __construct($brand, $model, $diagonal)
{
    $this->brand = $brand;
    $this->model = $model;
    $this->diagonal = $diagonal;
}

    public function getInfo()
    {
        echo "Марка: $this->brand,  Модель: $this->model, Диагональ: $this->diagonal<br>";
    }
}
$Sony = new Tv ('Sony', 'KD-55XE7096', 54.6);
$Samsung = new Tv ('Samsung', 'UE50MU6100U', 54.6);

$Sony->getInfo();
$Samsung->getInfo();


class Pen
{
    public function __construct($model, $color, $price)
    {
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
    }

    public function getPrice()
    {
        echo "$this->price<br>";
    }
}
$pilot = new Pen('Pilot', 'black', 100);
$pilot->getPrice();
$bic = new Pen('BIC', 'blue', 30 );
$bic->getPrice();

class Duck
{
    public $breed;
    public $dwelling;

    public function __construct($breed, $dwelling)
    {
        $this->breed = $breed;
        $this->dwelling = $dwelling;
    }

    public function getDuck()
    {
        echo "$this->breed:  Среда обитания - $this->dwelling<br>";
    }
}
$duck1 = new Duck('Кряква', 'болотистая местность');
$duck1->getDuck();
$duck2 = new Duck('Индоутка', 'около речных водоемов');
$duck2->getDuck();

class Product
{
    public $name;
    public $category;
    public $price;

    public function __construct($name, $category, $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }


    public function getProducts()
    {
        echo "$this->category<br>$this->name<br>$this->price<br>";
    }
}
$product1 = new Product('iPhone8', 'Телефон', 80000);
$product1->getProducts();

$product2 = new Product('Indesit', 'Холодильник', 70000);
$product2->getProducts()
?>
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25.07.2018
 * Time: 19:02
 */