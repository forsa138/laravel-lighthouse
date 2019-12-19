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
    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
        Launch demo modal
    </button>


    <!-- Modal -->
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <a href="https://roier.ai">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


</form>
