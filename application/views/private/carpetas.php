<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Archivos</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php base_url() ?>enter">Inicio</a></li>
                <li class="breadcrumb-item active">Archivos</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row-menu">
                        <div class="left-menu" style="background-color:#bbb;">
                            <h2>Menu</h2>
                            <form class="d-flex" method="post" action="">
                                <input id="search-menu" class="form-control me-2" type="search" name="search" placeholder="Search..." aria-label="Search"> 
                                <button id="search-document" class="btn btn-dark" type="submit">Search</button>
                            </form>
                            <ul id="menu">
                                <li id="carpeta-1"><a href="#">Carpeta 1</a></li>
                                <li id="carpeta-2"><a href="#">Carpeta 2</a></li>
                                <li id="carpeta-3"><a href="#">Carpeta 3</a></li>
                            </ul>
                        </div>
                        <div id="show-subcarpetas" class="right-menu" style="background-color:#ddd;">   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>