<?php
    include_once "DB.php";
    $classes = getAllClasses();
?>
<style>
    button{
        padding: 10px;
    }
    select{
        padding: 10px;
    }
    div{
        margin-top: 20px;
    }
</style>
<h1>Добавить класс</h1>
<input name="add_class">
<button>Добавить класс</button>
<?php
    if(isset($classes)){
        echo "<form action='classView.php' method='post'>";
        echo "<h1>Показать класс</h1>";
        echo "<h2>Выбери класс:</h2>";
        echo "<div>";
        echo "<select name='classNameSelect'>";
        foreach($classes as $class){
            echo "<option>";
            echo "{$class->grade}{$class->letter}";
            echo "</option>";
        }
        echo "</select>";
        echo "</div>";
        echo "<div><button>Показать класс</button></div>";
        echo "</form>";
    }else{
        echo "Классы пусты";
    }
?>


