<?php
    include_once "DB.php";
    $className = $_REQUEST['classNameSelect'];
    $students = getAllClassRoomPlaces(substr($className,0,1),substr($className,1));
?>

<style>
    button{
        padding: 10px;
    }
    h1{
        text-align: center;
    }
    .container{
        display: flex;
        justify-content: center;
    }
    .row{
        display: flex;
        flex-direction: column-reverse;
    }
    .desk{
        width: 400px;
        margin: 10px;
        border: solid black 1px;
        display: flex;
    }
    .seat{
        margin: 10px;
        border: solid red 1px;
        height: 50px;
        width: 200px;
        font-size: 20px;
        text-align: center;
        padding: 10px;
    }
</style>
<?php
    echo "<a href='http://school/'><button>Назад</button></a>";
    echo "<h1>Класс $className</h1>";
?>
<div>
    <div class="container">
        <div class="row">
            <div class="desk">
                <div class="seat">1Хаджиниязов Игор</div>
                <div class="seat">12Иглова Катя</div>
            </div>
            <div class="desk">
                <div class="seat">2</div>
                <div class="seat">22</div>
            </div>
            <div class="desk">
                <div class="seat">3</div>
                <div class="seat">32</div>
            </div>
            <div class="desk">
                <div class="seat">4</div>
                <div class="seat">42</div>
            </div>
            <div class="desk">
                <div class="seat">5</div>
                <div class="seat">52</div>
            </div>
            <div class="desk">
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
        </div>
        <div class="row">
            <div class="desk">
                <div class="seat">Хаджиниязов Игор</div>
                <div class="seat">Иглова Катя</div>
            </div>
            <div class="desk">
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="desk">
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="desk">
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="desk">
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="desk">
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
        </div>
        <div class="row">
            <div class="desk">
                <div class="seat">Хаджиниязов Игор</div>
                <div class="seat">Иглова Катя</div>
            </div>
            <div class="desk">
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="desk">
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="desk">
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="desk">
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="desk">
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
        </div>
    </div>

</div>