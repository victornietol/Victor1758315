<?php
include "head.php"
?>
<body>
    <Center>
        <nav class="">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Formulario</a>
                <ul class="right hide-on-med-and-down">
                </ul>
            </div>
        </nav>
    </Center>   
    <center>
    <div class="row">
        <form class="col s12" action="form.php" method="post">

            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_box</i>
                    <input id="icon_prefix" name="txtNombre" type="text" class="validate">
                    <label for="icon_prefix">Nombre</label>
                </div>
                <div class="input-field col s6">
                    <!-- <i class="material-icons prefix">phone</i> -->
                    <input id="icon_telephone" type="tel" name="txtApellidos" class="validate">
                    <label for="icon_telephone" >Apellidos</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">cake</i>
                    <input id="icon_prefix" name="txtEdad" type="text" class="validate">
                    <label for="icon_prefix">Edad</label>
                </div>
            </div>

            <div class="row">          
                <div class="input-field col s6">
                    <i class="material-icons prefix">contact_mail</i>
                    <input id="icon_prefix" name="txtCorreo" type="text" class="validate">
                    <label for="icon_prefix">Correo</label>
                </div>
            </div> 

            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="icon_prefix" id="password" type="password" name="txtPassword" class="validate">
                    <label for="icon_prefix">Password</label>
                </div>
            </div>   
            
            <button class="btn waves-effect waves-light red white-text" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
    </center>
</body>

<?php
include "footeer.php";
?>
