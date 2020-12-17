<?php
include '../13-Includes/components/head.php';
?>
    <div>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <!--
            action => Página a la que irá la información del formulario, si está vacío la enviará a esta misma página.
            method => Método HTTP
            enctype => Codificación de la información al subirla al servidor (solo en método POST)
            -->
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" autofocus="autofocus"/>
            </div>
            <div>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido"/>
            </div>
            <div>
                <label for="boton">Botón antiestrés:</label>
                <input type="button" name="boton" value="púlsame"/>
            </div>
            <div>
                <label for="sexo">Sexo:</label>
                <p>
                    Hombre: <input type="checkbox" name="sex" value="hombre"/>
                    Mujer: <input type="checkbox" name="sex" value="mujer"/>
                </p>
            </div>
            <div>
                <label for="color">Color preferido:</label>
                <input type="color" name="color"/>
            </div>
            <div>
                <label for="fecha">Fecha de nacimiento:</label>
                <input type="date" name="fecha"/>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email"/>
            </div>
            <div>
                <label for="file">Archivo a subir:</label>
                <input type="file" name="file" multiple/>
            </div>
            <div>
                <label for="hidden">Input ninja:</label>
                <input type="hidden" name="hidden" value="ninja!"/>
            </div>
            <div>
                <label for="number">Número de familiares:</label>
                <input type="number" name="number"/>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" name="password"/>
            </div>
            <div>
                <label for="radio">Lealtad:</label>
                <p>
                    <input type="radio" name="radio" value="Imperium" required/>
                    Imperium
                    <input type="radio" name="radio" value="Chaos"/>
                    Caos
                    <input type="radio" name="radio" value="Orks"/>
                    WAAAGH
                </p>
            </div>
            <div>
                <label for="tel">Teléfono:</label>
                <input type="tel" name="tel"/>
            </div>
            <div>
                <label for="url">Web personal:</label>
                <input type="url" name="url"/>
            </div>
            <div>
                <label for="select">Primarca preferido:</label>
                <select name="select">
                    <option value="Fulgrim">Fulgrim</option>
                    <option value="El Khan">El Khan</option>
                    <option value="Mortarion">Mortarion</option>
                    <option value="Perturabo">Perturabo</option>
                </select>
            </div>
            <div>
                <p>
                    <label for="bio">Sobre ti:</label>
                </p>
                <textarea name="bio" rows="5"></textarea>
            </div>
            <input type="submit" value="enviar"/>
        </form>
    </div>

<?php
include '../13-Includes/components/footer.php';