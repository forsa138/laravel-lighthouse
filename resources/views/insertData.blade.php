

<form action="/insert" method="post">
    @csrf
    <label>nombre</label><br>
    <input type="text" name="name" class="required validate"> <br>
    <br>
    <label>email</label><br>
    <input type="email" name="email" class="required validate"> <br>
    <br>
    <label>password</label><br>

    <input type="password" name="password" class="required validate"> <br>
    <br>

    <a href={{url('/pruebaCia')}}>
    <input type="submit" value="siguiente">
    </a>
</form>

