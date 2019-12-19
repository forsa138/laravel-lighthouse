<!DOCTYPE html>

<html>

    <div class='form-field col s12'>
        <p>Conectate con:</p>
        <p>
        <div style="height: 40px">
            <a href="{{url('/login')}}">
                <svg class="googleboton" style="height: 50px">
                    <image x="0" y="0" width="70%" height="70%" href="images/googleboton_A6_Rectangle_14_pattern.png" xlink:href="images/googleboton_A6_Rectangle_14_pattern.png" style="height:45px"></image>
                </svg>
            </a>
        </div>
        </p>
    </div>
    <br>
{{--
        <div>
        <label>Email usuario</label> <br>
            <input type="email" name="user_email" disabled value="{{ Auth::user()->email}}">

        </div><br>
--}}



    <form action="/save" method="post">
        @csrf
        <div hidden>
            <label>Email usuario</label> <br>
            <input type="text" name="user_email" readonly value="{{\App\Http\Controllers\Controller::getEmail()}}">

        </div><br>

        <label>nombre empresa</label><br>
        <input type="text" name="cia_name" id="cia_name" class="required validate" required> <br>
        <br>
        <label>sitio empresa</label><br>

        <input type="url" name="cia_web" id="cia_web" class="required validate" required> <br>
        <br>
        <label>plataforma</label><br>
        <select name="platform_id" >
            @foreach ($platformname_array as $data)
                <option value="{{ $data->id }}">{{ $data->platform_name}}</option>
            @endforeach

        </select> <br>
        <br>
        <label>categoria</label><br>
        <select name="category_id">
            @foreach ($classname_array as $data)
                <option value="{{ $data->id }}">{{ $data->category_name}}</option>
            @endforeach

        </select>
        <br> <br>

{{--        <input type="submit" value="Consultar">--}}
        <input type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">

        <div class="container">
            <!-- Trigger the modal with a button -->
        {{--        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enviar</button>--}}

        <!-- Modal -->

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Procesando la información</strong></h4>
                        </div>
                        <div class="modal-body">
                            <br>
                            <table>
                                <th>
                                    <img src="\images\spinner2.gif" style="height: 100px" >
                                </th>
                                <th style="width: 10px"></th>
                                <th>
                                    <p>Los datos seran enviados al email {{\App\Http\Controllers\Controller::getEmail()}}</p>

                                    <p>En unos segundos seras redireccionado al home y los datos serán enviados a tu email registrado.</p>
                                </th>
                            </table>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </form>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>


    </body>

</html>

{{--
<script>
    function cia() {
        document.getElementById('cia_name').value;

    }
</script>

<script>
    function web() {
        document.getElementById('cia_web').value;

    }
</script>

--}}
