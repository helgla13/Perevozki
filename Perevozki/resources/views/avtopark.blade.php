
@extends('main')

@section('content')

    <table border="1">

        <tr>
            <td>Name:</td>
            <td>Olya</td>
            <td><a href='#' class='btn btn-info edit' role='button' id="edit1" >
                    <span class="glyphicon glyphicon-pencil"></span></a>
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>a@a.com</td>
            <td><a href='#' class='btn btn-info edit' role='button' id="edit2" >
                    <span class="glyphicon glyphicon-pencil"></span></a>
            </td>
        </tr>
        <tr>
            <td>Balance:</td>
            <td>100000000000000000000</td>
            <td><a href='#' class='btn btn-info edit' role='button' >
                    <span class="glyphicon glyphicon-eye-open"></span></a>
            </td>
        </tr>
        <tr>
            <td>History of payment:</td>
            <td></td>
            <td><a href='#' class='btn btn-info edit' role='button' >
                    <span class="glyphicon glyphicon-eye-open"></span></a>
            </td>
        </tr>
        <tr>
            <td>Change Password:</td>
            <td></td>
            <td><a href='#' class='btn btn-info edit' role='button' id="edit3" >
                    <span class="glyphicon glyphicon-pencil"></span></a>
            </td>
        </tr>
    </table>


    <!-- HTML-код модального окна смена имени -->
    <div id="myModalBox1" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="modal-title">Change name</h3>
                </div>

                <div class="modal-body">
                    <label for="name">Name:</label>
                    <input type="text"  size="20" class="form-control"  id="name" name="name" value="Olya">
                    <label for="name">New Name:</label>
                    <input type="text"  size="20" class="form-control"  id="newname" name="newname">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- HTML-код модального окна смена емейла -->
    <div id="myModalBox2" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="modal-title">Change email</h3>
                </div>

                <div class="modal-body">
                    <label for="email">Email:</label>
                    <input type="email"  size="20" class="form-control"  id="email" name="email" value="a@a.com">
                    <label for="email">New Email:</label>
                    <input type="email"  size="20" class="form-control"  id="newemail" name="newemail">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- HTML-код модального окна смена пароля -->
    <div id="myModalBox3" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="modal-title">Change password</h3>
                </div>

                <div class="modal-body">
                    <label for="password">Password:</label>
                    <input type="password"  size="20" class="form-control"  id="password" name="password" value="kkkkk">
                    <label for="password">New Password:</label>
                    <input type="password"  size="20" class="form-control"  id="newpassword" name="newpassword">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Баланс -->

    <table border="1">
        <tr>
            <th>Дата</th>
            <th>Пополнение</th>
            <th>Списание</th>
            <th>Остаток</th>
        </tr>
        <tr>
            <td>15.05.2018</td>
            <td>1000</td>
            <td>500</td>
            <td>500</td>
        </tr>
    </table>

    <!-- История оплат -->
    <table border="1">
        <tr>
            <th>Дата</th>
            <th>Сумма</th>
            <th>Куда/на что</th>
        </tr>
        <tr>
            <td>15.05.2018</td>
            <td>500</td>
            <td>ООО "Ляля" /чай</td>

        </tr>
    </table>


    <script>
        $(function () {
            $("#edit1").click(function () {
                $("#myModalBox1").modal('show');
            });
        });

        $(function () {
            $("#edit2").click(function () {
                $("#myModalBox2").modal('show');
            });
        });

        $(function () {
            $("#edit3").click(function () {
                $("#myModalBox3").modal('show');
            });
        });
    </script>

    @endsection