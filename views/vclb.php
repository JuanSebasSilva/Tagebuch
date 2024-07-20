<?php include('controllers/cclb.php'); ?>

<div class="contx">
    <form name="frm1" method="POST" action="home.php?pg=<?=$pg;?>">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="nomeve">Nombre</label>
                <input type="text" id="nomeve" name="nomeve" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['nomeve']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="desclb">Descripcion</label>
                <input type="text" id="desclb" name="desclb" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['desclb']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="preclb">Presidente</label>
                <input type="text" id="preclb" name="preclb" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['preclb']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="anoforclb">Año de formacion</label>
                <input type="date" id="anoforclb" name="anoforclb" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['anoforclb']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="cstmenusu">Costo mensualidad</label>
                <input type="number" id="cstmenusu" name="cstmenusu" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['cstmenusu']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="dep">Ubicacion</label>
                <select id="dep" name="dep" class="form-control form-select" onchange="selUbi(this.value);">
                    <option value="0">Seleccione departamento</option>
                    <?php if($datU){ foreach($datU as $dtu){ ?>
                        <option value="<?=$dtu['idubi'];?>" <?php if($dtOne && $dtOne[0]['idubi']==$dtu[0]['idubi']) echo 'selected'?> required>
                            <?=$dtu['nomubi']?>
                        </option>
                    <?php }} ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="idubi">Ubicacion</label>
                <div id="reload">
                    <select name="idubi" id="idubi" class="form-control form-select">
                        <option value="0">Seleccione departamento</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-md-6">
                <input type="hidden" id="idclb" name="idclb" value="<?php if($dtOne) echo $dtOne[0]['idclb']; ?>">
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
            <th>Descripcion</th>
            <th>Presidente</th>
            <th>Costo Mensualidad</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php if($dat){ foreach($dat as $dt){ ?>
        <tr>
            <td><?=$dt['idclb'];?></td>
            <td><?=$dt['nomclb'];?></td>
            <td><?=$dt['desclb'];?></td>
            <td><?=$dt['preclb'];?></td>
            <td><?=$dt['cstmenusu'];?></td>
            <td>
                <a href="home.php?pg=<?=$pg;?>&idclb=<?=$dt['idclb'];?>&ope=edit" title="Editar">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a href="home.php?pg=<?=$pg;?>&idclb=<?=$dt['idclb'];?>&ope=del" title="Eliminar">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php }} ?>
    </tbody>
</table>