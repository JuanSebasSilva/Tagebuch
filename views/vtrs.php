<?php include('controllers/ctrs.php'); ?>

<div class="contx">
    <form name="frm1" method="POST" action="home.php?pg=<?=$pg;?>">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="nomeve">Nombre</label>
                <input type="text" id="nomeve" name="nomeve" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['nomeve']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="deseve">Descripcion</label>
                <input type="text" id="deseve" name="deseve" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['deseve']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="tpoeve">Tipo</label>
                <select id="tpoeve" name="tpoeve" class="form-control form-select">
                    <?php if($datV){ foreach($datV as $dtv){ ?>
                    <option value="<?=$dtv['idval'];?>" <?php if($dtOne && $dtOne[0]['idval']==$dtv[0]['idval']) echo 'selected'?>>
                        <?=$dtv['nomval']?>
                    </option>
                    <?php }} ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="fheve">Fecha</label>
                <input type="date" id="fheve" name="fheve" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['fheve']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="dureve">Duracion</label>
                <input type="number" id="dureve" name="dureve" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['dureve']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="etdeve">Estado</label>
                <select id="etdeve" name="etdeve" class="form-control form-select">
                    <?php if($datV){ foreach($datV as $dtv){ ?>
                        <option value="<?=$dtv['idval'];?>" <?php if($dtOne && $dtOne[0]['etdeve']==$dtv[0]['idval']) echo 'selected'; ?> required>
                            <?=$dtv['nomval']?>
                        </option>
                    <?php }} ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <input type="hidden" id="ideve" name="ideve" value="<?php if($dtOne) echo $dtOne[0]['ideve']; ?>">
                <input type="hidden" name="ope" value="save">
                <input type="submit" class="btn" value="Enviar">
            </div>
        </div>
    </form>
</div>

<table id="example" class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Duracion</th>
            <th>Estado</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php if($dat){ foreach($dat as $dt){ ?>
        <tr>
            <td><?=$dt['ideve'];?></td>
            <td><?=$dt['nomeve'];?></td>
            <td><?=$dt['tpoeve'];?></td>
            <td><?=$dt['fheve'];?></td>
            <td><?=$dt['dureve'];?></td>
            <td><?=$dt['etdeve'];?></td>
            <td>
                <a href="home.php?pg=<?=$pg;?>&ideve=<?=$dt['ideve'];?>&ope=edit" title="Editar">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a href="home.php?pg=<?=$pg;?>&ideve=<?=$dt['ideve'];?>&ope=del" title="Eliminar">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php }} ?>
    </tbody>
</table>

<!-- <section class="tras flex ">
    <?php
        require_once("views/Vmenueqp.php");
    ?>
    <div class="container">
        <div class="tras-l">
            <div class="listas-tras">
                <div class="list-tras">
                    <h2>Lista jugadores</h2>
                    <table>
                        <tr>
                            <td>Pedro Pablo Brother</td>
                            <td>20 años</td>
                            <td>icono</td>
                        </tr>
                        <tr>
                            <td>Pedro Pablo Brother</td>
                            <td>20 años</td>
                            <td>icono</td>
                        </tr>
                        <tr>
                            <td>Pedro Pablo Brother</td>
                            <td>20 años</td>
                            <td>icono</td>
                        </tr>
                    </table>
                </div>
                <div class="list-tras">
                    <h2>Lista favoritas</h2>
                    <table>
                        <tr>
                            <td>Pedro Pablo Brother</td>
                            <td>20 años</td>
                            <td>icono</td>
                        </tr>
                        <tr>
                            <td>Pedro Pablo Brother</td>
                            <td>20 años</td>
                            <td>icono</td>
                        </tr>
                        <tr>
                            <td>Pedro Pablo Brother</td>
                            <td>20 años</td>
                            <td>icono</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="tras-temp">
                <h2>Temporada</h2>
                <a href="#" class="btn-2">2009 - 2010</a>
                <div class="temp-content">
                    <div class="flex-temp">
                        <img src="img/jugador.png" alt="imgplayer">
                        <div class="temp-txt">
                            <table class="temp-list">
                                <tr>
                                    <td>Minutos jugados</td>
                                    <td>258</td>
                                </tr>
                                <tr>
                                    <td>Partidos jugados</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>Goles</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>Asistencias</td>
                                    <td>8</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="temp-txt">
                        <h3>Titulos obtenidos</h3>
                        <table class="temp-list">
                            <tr>
                                <td>Liga Papaya</td>
                                <td>Bota de oro</td>
                            </tr>
                            <tr>
                                <td>Torneo Lulo</td>
                                <td>Bota de oro</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="temp-button">
                    <a href="#" onclick="tras1()" class="btn-1">Solicitud traspaso</a>
                    <a href="#" onclick="tras2()" class="btn-1">Solicitud cesion</a>
                </div>
            </div>
        </div>
        <div class="procesos">
            <h2>Procesos de solicitudes</h2>
            <table class="solicitud-list">
                <tr>
                    <td>Nombre jugador</td>
                    <td>Solicitud traspaso</td>
                    <td>En negociacion</td>
                </tr>
                <tr>
                    <td>Nombre jugador</td>
                    <td>Solicitud traspaso</td>
                    <td>En negociacion</td>
                </tr>
                <tr>
                    <td>Nombre jugador</td>
                    <td>Solicitud traspaso</td>
                    <td>En negociacion</td>
                </tr>
            </table>
        </div>
    </div>
</section> -->