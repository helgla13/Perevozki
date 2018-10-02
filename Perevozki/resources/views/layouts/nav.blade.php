{{--<div class="panel panel-default">--}}
    {{--<div class="panel-body">--}}
            {{--<img src="/images/header.jpg">--}}
    {{--</div>--}}


{{--</div>--}}

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="carspic">
        <img class="head" src="/images/header.jpg">

        <div class="phone">
            <p><img src="/images/call-volume.png" class="call"> 067 111 9292</p>
            <p><img src="/images/call-volume.png" class="call"> 050 726 5111</p>
            <p><img src="/images/call-volume.png" class="call"> 063 280 8111</p>
        </div>
        </div>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Главная</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Наши услуги
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu dbfirst">
                        <li><a  href="#">Грузоперевозки</a></li>
                        <li><a  href="#">Услуги грузчиков</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/avtopark') }}">Автопарк</a></li>
                <li><a href="#">Тарифы</a></li>
                <li><a href="#">Наши клиенты</a></li>
                <li><a href="#">Контакты</a></li>
                <button class='btn btn-success zakaz'>Заказать авто</button>
            </ul>
        </div>
    </div>
</nav>


<!-- Заказ авто -->
<div id="myModalBox" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title">Заказ авто</h3>
            </div>

            <div class="modal-body">
                <label for="name">Ваше имя</label>
                <input type="text"  size="20" class="form-control"  id="name" name="name">
                <label for="phone">Телефон</label>
                <input type="text"  size="20" class="form-control bfh-phone" data-format="+38 (ddd) ddd-dddd"
                       id="phone" name="tel">
                <label for="gruzchiki">Количество грузчиков</label>
                <br>
                <select>
                    <option>Без грузчиков</option>
                    <option>1 грузчик</option>
                    <option>2 грузчика</option>
                    <option>3 грузчика</option>
                    <option>4 грузчика</option>
                </select>
                <br>
                <br>
                <label for="otkuda">Откуда везти:</label>
                <input type="text"  size="20" class="form-control"  id="okuda" name="otkuda">
                <label for="kuda">Куда везти:</label>
                <input type="text"  size="20" class="form-control"  id="kuda" name="kuda">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>