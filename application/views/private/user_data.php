<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Consultar datos</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php base_url() ?>enter">Inicio</a></li>
                <li class="breadcrumb-item active">Datos</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-user me-1"></i>
                    Datos 
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Domicilio</th>
                                <th>Teléfono</th>
                                <th>Extensión</th>
                                <th>RFC</th>
                                <th>CURP</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Username</th>
                                <th>Domicilio</th>
                                <th>Teléfono</th>
                                <th>Extensión</th>
                                <th>RFC</th>
                                <th>CURP</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td><?= $username ?></td>
                                <td><?= $address ?></td>
                                <td><?= $phone ?></td>
                                <td><?= $extension ?></td>
                                <td><?= $rfc ?></td>
                                <td><?= $curp ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    