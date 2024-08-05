<?php 
    include('controllers/cper.php');
    echo title('', 'Perfiles', 2);
?>

<div class="contx">
    <form method="POST" action="#" class="form-per">
        <div class="row">
            <div class="form-group">
                <label for="nomper">Perfil</label>
                <input id="nomper" name="nomper" value="<?php if($dtOne && $dtOne[0]['nomper']) echo $dtOne[0]['nomper']; ?>">
            </div>
            <div class="form-group">
                <label for="pagini">Pagina inicial</label>
                <select id="pagini" name="pagini">
                    <option value="0">Seleccione pagina inicial</option>
                    <?php if($datPg){ foreach($datPg as $dtpg){ ?>
                    <option value="<?=$dtpg['idpag'];?>" <?php if($dtOne && $dtOne[0]['pagini']==$dtpg['idpag']) echo "selected";?>>
                        <?=$dtpg['idpag']." - ".$dtpg['nompag'];?>
                    </option>
                    <?php }} ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <br>
                <input type="submit" class="btn btn-primary" value="Enviar">
                <input type="hidden" name="ope" value="save">
                <input type="hidden" name="idper" value="<?php if ($dtOne) echo $dtOne[0]['idper']; ?>">
            </div>
        </div>
    </form>
</div>

<table class="table table-striped" id="example">
    <thead>
        <tr>
            <th>Id</th>
            <th>Perfil</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php if($dat){ foreach($dat as $dt){ ?>
            <tr>
                <td><?=$dt['idper'];?></td>
                <td><?=$dt['nomper'];?></td>
                <td>
                    <a href="#" title="Ver paginas" data-bs-toggle="modal" data-bs-target="#myModal<?=$dt['idper'];?>">
                        <i class="fa-solid fa-clipboard-check fa-2x"></i>
                    </a>
                    <?php
                        $mper->setIdper($dt['idper']);
                        $dp = $mper->getPxp();
                        $dm = arrstr($dp);
                        modal($dt['idper'], $dt['nomper'], $pg, $dm);
                    ?>
                    <a href="home.php?pg=<?=$pg;?>&idper=<?=$dt['idper'];?>&ope=edit" title="Editar">
                        <i class="fa-solid fa-pen-to-square fa-2x"></i>
                    </a>
                </td>
            </tr>
        <?php }} ?>
    </tbody>
</table>