<form action="/insertCia" method="post">
    @csrf
    <label>nombre empresa</label><br>
    <input type="text" name="cia_name" class="required validate"> <br>
    <br>
    <label>sitio empresa</label><br>

    <input type="url" name="cia_web" class="required validate"> <br>
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

    <input type="submit" value="Consultar">


</form>
