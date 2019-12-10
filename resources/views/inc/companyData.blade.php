
<form>
    <div class="step-content">
        <div class="row">
            <div class='form-field col s12'>
                <p>Cuéntanos un poco más de tu negocio</p>
                <div class="input-field col s12">
                    <input type="text" name="textfield" class="required validate"/>
                    <label for="textfield">Ingresa el nombre de tu empresa</label>

                </div>
                <div class="input-field col s12">
                    <input type="text" name="textfield" placeholder="http://mi-sitio.com" class="required validate"/>
                    <label for="textfield">Sitio web de tu empresa </label>

                    <div class="input-field col s12">

                        <label for="textfield">PLataforma e-commerce</label>
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="step-actions">
                <button type="submit" class="waves-effect waves-dark btn next-step">CONTINUE</button>
                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
            </div>
        </div>
    </div>
</form>



{{--
<form>

        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre Empresa*</label> <br>
            <input type="text" name="cia_name" id="exampleFormControlInput1" placeholder="tu empresa" required>
         </div> <br>
        <div class="form-group">
            <label for="exampleFormControlInput1">Soitio Web Empresa*</label> <br>
            <input type="url" name="cia_web" id="exampleFormControlInput1" placeholder="http://www.misitio.com" required>
        </div>
    <br>

        <a href="{{url('/mailmessage')}}">
             <input type="submit" value="Sigamos Adelante">
        </a>
</form>
--}}{{--

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="css/Web_1920___11.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<form>
    <div id="Paso_1">
        <span>Paso 1</span>
    </div>
    <div id="____Paso_2">
        <span>    Paso 2</span>
    </div>
    <div id="Paso_3">
        <span>Paso 3</span>
    </div>

    <div id="_Sigamos_adelante_">
        <a href="{{url('/mailmessage')}}">
            <button type="button" class="btn btn-primary" style="font-size: 20px; width: 14rem; background-color: #018DFF; border-radius: 36px;">Sigamos adelante!</button>
        </a>
    </div>

    <div id="Cu_ntanos_un_poco_m_s_de_tu_ne">
        <span>Cuéntanos un poco más de tu negocio.</span>
    </div>
    <div id="Grupo_971">
        <div id="Tipo_de_empresa_">
            <span>Tipo de empresa*</span>
        </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1"></label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
    </div>
    <div id="Grupo_972">
        <div id="Plataforma_Ecommerce_">
            <span>Plataforma Ecommerce*</span>
        </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1"></label>
                <select class="form-control" name="" id="exampleFormControlSelect1">


                    <option>1</option>
                </select>
            </div>
    </div>
    <div id="Grupo_973">
        <form method="get" action="/report">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Sitio web empresa*</label>
                <input type="url" name="cia_web" class="form-control" id="exampleFormControlInput1" placeholder="http://misitio.com">
            </div>
        </form>
    </div>
    <div id="Grupo_974">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Empresa*</label>
                <input type="text"  name="cia_name" class="form-control" id="exampleFormControlInput1" placeholder="Ingresa el nombre de la empresa">
            </div>
        </form>

    <div id="Grupo_959">
        <svg class="Trazado_51" viewBox="0 0 29.795 30.744">
            <path fill="rgba(35,180,255,1)" id="Trazado_51" d="M 14.89756965637207 0 C 23.12527084350586 0 29.79513931274414 6.882340908050537 29.79513931274414 15.37213802337646 C 29.79513931274414 23.86193466186523 23.12527084350586 30.74427604675293 14.89756965637207 30.74427604675293 C 6.669869899749756 30.74427604675293 0 23.86193466186523 0 15.37213802337646 C 0 6.882340908050537 6.669869899749756 0 14.89756965637207 0 Z">
            </path>
        </svg>
        <svg class="Trazado_83" viewBox="0 0 29.795 30.744">
            <path fill="rgba(35,180,255,1)" id="Trazado_83" d="M 14.89756965637207 0 C 23.12527084350586 0 29.79513931274414 6.882340908050537 29.79513931274414 15.37213802337646 C 29.79513931274414 23.86193466186523 23.12527084350586 30.74427604675293 14.89756965637207 30.74427604675293 C 6.669869899749756 30.74427604675293 0 23.86193466186523 0 15.37213802337646 C 0 6.882340908050537 6.669869899749756 0 14.89756965637207 0 Z">
            </path>
        </svg>
        <svg class="Trazado_7097" viewBox="0 0 199 4">
            <path fill="rgba(0,0,0,0)" stroke="rgba(35,180,255,1)" stroke-width="4px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Trazado_7097" d="M 0 0 L 199 0">
            </path>
        </svg>
        <svg class="L_nea_287" viewBox="0 0 197 4">
            <path fill="transparent" stroke="rgba(198,198,198,1)" stroke-width="4px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="L_nea_287" d="M 0 0 L 197 0">
            </path>
        </svg>
        <svg class="Trazado_62" viewBox="0 0 29.795 30.744">
            <path fill="rgba(198,198,198,1)"  shape-rendering="auto" id="Trazado_62" d="M 14.8975715637207 0 C 23.12527275085449 0 29.79514312744141 6.882340431213379 29.79514312744141 15.37213706970215 C 29.79514312744141 23.86193466186523 23.12527275085449 30.7442741394043 14.8975715637207 30.7442741394043 C 6.669870376586914 30.7442741394043 0 23.86193466186523 0 15.37213706970215 C 0 6.882340431213379 6.669870376586914 0 14.8975715637207 0 Z">
            </path>
        </svg>
    </div>

    </div>



</form>
--}}
