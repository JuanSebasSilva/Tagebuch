<?php include('controllers/ceve.php'); ?>

<div class="contx">
    <form method="POST" action="index.php?pg=<?=$pg;?>">
        <div class="form-group col-md-6">
            <label for="nomeve">Nombre</label>
            <input type="text" id="nomeve" name="nomeve" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['nomeve']; ?>" required>
        </div>
        <div class="form-group col-md-6">
            <label for="deseve">Descripcion</label>
            <input type="text" id="deseve" name="deseve" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['deseve']; ?>" required>
        </div>
        <div class="form-group col-md-6">
            <label for="idval">Tipo</label>
            <select id="idval" name="tpoeve">
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
            <label for="idval">Estado</label>
            <select id="idval" name="tpoeve">
                <?php if($datV){ foreach($datV as $dtv){ ?>
                <option value="<?=$dtv['idval'];?>" <?php if($dtOne && $dtOne[0]['idval']==$dtv[0]['idval']) echo 'selected'?> required>
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
    </form>
</div>

<table id="example" class="table table-striped">
    <thead>
        <tr>
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
            <td><?=$dt['nomeve'];?></td>
            <td><?=$dt['tpoeve'];?></td>
            <td><?=$dt['fheve'];?></td>
            <td><?=$dt['dureve'];?></td>
            <td><?=$dt['etdeve'];?></td>
            <td>
                <a href="home.php?pg=<?=$pg;?>&ideve=<?=$dt['ideve'];?>&ope=edit" title="Editar">
                    <i></i>
                </a>
                <a href="home.php?pg=<?=$pg;?>&ideve=<?=$dt['ideve'];?>&ope=del" title="Eliminar">
                    <i></i>
                </a>
            </td>
        </tr>
        <?php }} ?>
    </tbody>
</table>

<!-- <section class="evento container">
    <div class="event-content">
        <div class="eve">
            <h2>Torneo</h2>
            <center><img src="img/torneo.png" alt=""></center>
            <center><a href="home.php?pg=107" class="btn-2">Entrar</a></center>
        </div>
        <div class="eve">
            <h2>Liga</h2>
            <center><img src="img/liga.png" alt=""></center>
            <center><a href="home.php?pg=108" class="btn-2">Entrar</a></center>
        </div>
        <div class="eve">
            <h2>Amistoso</h2>
            <center><img src="img/amistosos.png" alt=""></center>
            <center><a href="home.php?pg=110" class="btn-2">Entrar</a></center>
        </div>
        <div class="eve">
            <h2>Entrenamiento</h2>
            <center><img src="img/cono.png" alt=""></center>
            <center><a href="home.php?pg=109" class="btn-2">Entrar</a></center>
        </div>
    </div>
</section> -->