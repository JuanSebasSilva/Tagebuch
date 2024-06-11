<?php require_once("controllers/cdom.php"); ?>

<div class="conte">
    <div class="inser">
        <form id="frmisn" action="home.php?pg=<?=$pg;?>" method="POST">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nomdom">Nombre Dominio</label>
                    <input type="text" class="form-control" name="nomdom" id="nomdom" value="<?php if($dtOne && $dtOne[0]['nomdom']) echo $dtOne[0]['nomdom'];?>" required>
                </div>
                <div class="form-group col-md-6">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Enviar">
                    <input type="hidden" name="ope" value="save">
                    <input type="hidden" name="iddom" id="iddom" value="<?php if($dtOne) echo $dtOne[0]['iddom'];?>">
                </div>
            </div>
        </form>
    </div>
</div>

<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Dominio</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php if($dat){ foreach($dat as $dt){ ?>
            <tr>
                <td><?=$dt['iddom']?></td>
                <td><?=$dt['nomdom']?></td>
                <td>
                    <a href="home.php?pg=<?=$pg;?>&iddom=<?=$dt['iddom'];?>&ope=edit" title="Editar">
                        <i class="fa-solid fa-pen-to-square fa-2x"></i>
                    </a>
                    <a href="home.php?pg=<?=$pg;?>&iddom=<?=$dt['iddom'];?>&ope=del" title="Eliminar" onclick="return eliminar();">
                        <i class="fa-solid fa-trash-can fa-2x" ></i>
                    </a>
                </td>
            </tr>
        <?php }} ?>
    </tbody>
</table>