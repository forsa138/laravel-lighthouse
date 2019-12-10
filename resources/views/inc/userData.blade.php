<form>
    <div class="step-content">
        <div class="row">
            <div class='form-field col s12'>
                <p>Conectate con:</p>
                <p>
                <div style="height: 90px">
                    <a href="{{url('/login')}}">
                        <svg class="googleboton" style="height: 70px">
                            <image x="0" y="0" width="70%" height="70%" href="images/googleboton_A6_Rectangle_14_pattern.png" xlink:href="images/googleboton_A6_Rectangle_14_pattern.png" style="height: 60px"></image>
                        </svg>
                    </a>
                </div>
                <div>
                    <p>Registrate</p>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="name" class="required validate"/>
                    <label for="textfield">Nombre*</label>
                </div>
                <div class="input-field col s12">
                    <input type="password" name="password" class="required validate"/>
                    <label for="textfield">Password*</label>
                </div>
                <div class="input-field col s12">
                    <input type="email" name="email" class="required validate"/>
                    <label for="textfield">Email*</label>
                </div>
                </p>
            </div>
        </div>
        <br>
        <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step" data-validator="validateStepOne">CONTINUE</button>
        </div>
    </div>


</form>



<!-- <form>
        <label> Nombre</label><br>
        <input type="text" name="name"><br>
        <label> Email</label><br>
        <input type="email" name="email"><br>
        <label> Password</label><br>
        <input type="password" name="password" required><br>
        <a href="/form2"><input type="submit" name="submit" value="Guardar"></a>
        <br>
        <a href="{{url('/login')}}">Registrate con Google</a>
</form>
 -->

{{--
<form >
    <div id="Paso_1">
        <span>Paso 1</span>
    </div>
    <div id="____Paso_2">
        <span>    Paso 2</span>
    </div>
    <div id="Paso_3">
        <span>Paso 3</span>
    </div>

    <div id="Reg_strate_o_con_ctate_con_">
        <span>Regístrate o conéctate con:</span>
    </div>

    <div id="Grupo_971">

                <label for="exampleFormControlInput1">Nombre*</label>
                <input type="text" class="form-control" name="name" for="name" id="name" placeholder="Ingresa tu nombre" require>
        </div>

        <div id="Grupo_972">
            <div class="form-group">
                <label for="exampleFormControlInput1">Contraseña*</label>
                <input type="password" class="form-control" name="password" for="password" id="password" placeholder="Ingresa tu contraseña" require>
            </div>
        </div>

        <div id="Grupo_973">
            <div class="form-group">
                <label for="exampleFormControlInput1">Email*</label>
                <input type="email" class="form-control" name="email" id="email" for="email" placeholder="correo@ejemplo.com" require>
            </div>
        </div>

        <a href="{{url('/login')}}">
            <svg class="googleboton">
                <pattern elementId="googleboton_A6_Rectangle_14" id="googleboton_A6_Rectangle_14_pattern" x="0" y="0" width="100%" height="100%">
                    <image x="0" y="0" width="100%" height="100%" href="images/googleboton_A6_Rectangle_14_pattern.png" xlink:href="images/googleboton_A6_Rectangle_14_pattern.png"></image>
                </pattern>
                <rect fill="url(#googleboton_A6_Rectangle_14_pattern)" id="googleboton" rx="0" ry="0" x="0" y="0" width="239" height="58">
                </rect>
            </svg>
        </a>
        <div id="_Sigamos_adelante_">
            <a href="{{ url('/form2') }}">
                <input type="submit" class="btn btn-primary" style="font-size: 20px; width: 14rem; background-color: #018DFF; border-radius: 36px;" value="Sigamos adelante!">
            </a>
        </div>
        <div id="terminos" class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Estoy de acuerdo con los Términos y condiciones
                </label>
            </div>
        </div>


    <svg class="Trazado_51" viewBox="0 0 29.795 30.744">
        <path fill="rgba(35,180,255,1)" id="Trazado_51" d="M 14.89756965637207 0 C 23.12527084350586 0 29.79513931274414 6.882340908050537 29.79513931274414 15.37213802337646 C 29.79513931274414 23.86193466186523 23.12527084350586 30.74427604675293 14.89756965637207 30.74427604675293 C 6.669869899749756 30.74427604675293 0 23.86193466186523 0 15.37213802337646 C 0 6.882340908050537 6.669869899749756 0 14.89756965637207 0 Z">
        </path>
    </svg>
    <svg class="Trazado_7097" viewBox="0 0 199 4">
        <path fill="rgba(0,0,0,0)" stroke="rgba(198,198,198,1)" stroke-width="4px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Trazado_7097" d="M 0 0 L 199 0">
        </path>
    </svg>
    <svg class="L_nea_287" viewBox="0 0 197 4">
        <path fill="transparent" stroke="rgba(198,198,198,1)" stroke-width="4px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="L_nea_287" d="M 0 0 L 197 0">
        </path>
    </svg>
    <svg class="Trazado_62" viewBox="0 0 29.795 30.744">
        <path fill="rgba(198,198,198,1)" shape-rendering="auto" id="Trazado_62" d="M 14.8975715637207 0 C 23.12527275085449 0 29.79514312744141 6.882340431213379 29.79514312744141 15.37213706970215 C 29.79514312744141 23.86193466186523 23.12527275085449 30.7442741394043 14.8975715637207 30.7442741394043 C 6.669870376586914 30.7442741394043 0 23.86193466186523 0 15.37213706970215 C 0 6.882340431213379 6.669870376586914 0 14.8975715637207 0 Z">
        </path>
    </svg>
    <svg class="Trazado_7101" viewBox="0 0 29.795 30.744">
        <path fill="rgba(198,198,198,1)"  shape-rendering="auto" id="Trazado_7101" d="M 14.8975715637207 0 C 23.12527275085449 0 29.79514312744141 6.882340431213379 29.79514312744141 15.37213706970215 C 29.79514312744141 23.86193466186523 23.12527275085449 30.7442741394043 14.8975715637207 30.7442741394043 C 6.669870376586914 30.7442741394043 0 23.86193466186523 0 15.37213706970215 C 0 6.882340431213379 6.669870376586914 0 14.8975715637207 0 Z">
        </path>
    </svg>


</form>
--}}
