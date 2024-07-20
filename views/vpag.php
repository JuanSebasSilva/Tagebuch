<?php include('controllers/cpag.php'); ?>

<div class="contx">
    <form name="frm1" method="POST" action="home.php?pg=<?=$pg;?>">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="nompag">Nombre</label>
                <input type="text" id="nompag" name="nompag" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['nompag']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="rutpag">Ruta</label>
                <input type="text" id="rutpag" name="rutpag" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['rutpag']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="ordpag">Orden</label>
                <input type="number" id="ordpag" name="ordpag" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['ordpag']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="icopag">Icono</label>
                <input type="text" id="icopag" name="icopag" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['icopag']; ?>">
            </div>
            <div class="form-group col-md-6">
                <input type="hidden" id="idpag" name="idpag" value="<?php if($dtOne) echo $dtOne[0]['idpag']; ?>">
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
            <th>Ruta</th>
            <th>Orden</th>
            <th>Icono</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php if($dat){ foreach($dat as $dt){ ?>
            <tr>
                <td><?=$dt['idpag'];?></td>
                <td><?=$dt['nompag'];?></td>
                <td><?=$dt['rutpag'];?></td>
                <td><?=$dt['ordpag'];?></td>
                <td><?=$dt['icopag'];?></td>
                <td>
                    <a href="home.php?pg=<?=$pg;?>&idpag=<?=$dt['idpag'];?>&ope=edit" title="Editar">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="home.php?pg=<?=$pg;?>&idpag=<?=$dt['idpag'];?>&ope=del" title="Eliminar">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php }} ?>
    </tbody>
</table>