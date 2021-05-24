
  <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Modificar datos</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php base_url() ?>enter">Inicio</a></li>
                <li class="breadcrumb-item active">Cambios</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-user-edit me-1"></i>
                    Datos 
                </div>
                <div class="card-body">
                    <form action="<?php base_url() ?>edit_user" method="post">
                        <div class="mb-3">
                            <label for="inputAddress">Domicilio:</label>
                            <input class="form-control" type="text" name="address" value="<?= $address ?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputPhone">Teléfono:</label>
                            <input class="form-control" type="number" name="phone" value="<?= $phone ?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputExtension">Extensión:</label>
                            <input class="form-control" type="number" name="extension" value="<?= $extension ?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputRFC">RFC:</label>
                            <input class="form-control" type="text" name="rfc" value="<?= $rfc ?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputCurp">CURP:</label>
                            <input class="form-control" type="text" name="curp" value="<?= $curp ?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword">Cambiar password:</label>
                            <input class="form-control" type="password" name="password" value="<?= $password ?>">
                        </div>
                        <button class="btn btn-success" type="submit">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
