

<form>

    <label>nombre</label><br>
    <input type="text" name="name" class="required validate"> <br>
    <br>
    <label>email</label><br>
    <input type="email" name="email" class="required validate"> <br>
    <br>
    <label>password</label><br>

    <input type="password" name="password" class="required validate"> <br>
    <br>
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
    <a href={{url('/')}}>
        <input type="submit" value="guardar">
    </a>

</form>

