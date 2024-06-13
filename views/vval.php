<?php require_once("controllers/cval.php"); ?>

<div class="conte">
    <form id="frmins" action="home.php?pg=<?=$pg;?>" method="POST">
        <div class="row">
            <div class="form-grup col-md-6">
                <label for="nomval">Nombre Valor</label>
                <input type="text" name="nomval" id="nomval" class="form-control" required value="<?php if($dtOne && $dtOne[0]['nomval']) echo $dtOne[0]['nomval'];?>">
            </div>
            <div class="form-group col-md-6">
                <label for="iddom">Dominio</label>
                <select name="iddom" id="iddom" class="form-select">
                    <?php if($dtDom){ foreach($dtDom as $dtD){?>
                        <option value="<?=$dtD['iddom'];?>" <?php if($dtOne && $dtD['iddom']==$dtOne[0]['iddom']) echo "selected";?>>
                            <?=$dtD['nomdom'];?>
                        </option>
                    <?php }} ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="parval">Parametros</label>
                <input type="text" name="parval" id="parval" class="form-control" value="<?php if($dtOne && $dtOne[0]['parval']) echo $dtOne[0]['parval'];?>">
            </div>
            <div class="form-group col-md-6">
                <label for="actval">Activo</label>
                <select name="actval" id="actval" class="form-select">
                    <option value="1" <?php if($dtOne && $dtOne[0]['actval']==1) echo "selected"; ?>>Si</option>
                    <option value="2" <?php if($dtOne && $dtOne[0]['actval']==2) echo "selected"; ?>>No</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <br>
                <input class="btn btn-primary" type="submit" value="Enviar">
                <input type="hidden" name="ope" value="save">
                <input type="hidden" name="idval" id="idval" value="<?php if($dtOne && $dtOne[0]['idval']) echo $dtOne[0]['idval'];?>"> 
            </div>
        </div>
    </form>
</div>

<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Valor</th>
            <th>Dominio</th>
            <th>Activo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php if($dat){ foreach($dat as $dt){ ?>
        <tr>
            <td><?=$dt['idval'];?></td>
            <td><?=$dt['nomval'];?>
                <?php if($dt['parval']){ ?>
                    <small><?=$dt['idval'];?></small>
                <?php } ?>
            </td>
            <td>
                <?php 
                    if($dtDom){
                        foreach($dtDom as $dtd){
                            if($dtd['iddom']==$dtd['iddom']){
                                echo $dtd['nomdom'];
                            }
                        }
                    } 
                ?>
            </td>
            <td>
                <?php if($dt['actval']==1){ ?>
                    <a href="home.php?pg=<?=$pg;?>&idval=<?=$dt['idval'];?>&ope=act&actval=2">
                        <i class="fa fa-solid fa-circle-check fa-2x"></i>
                    </a>
                <?php }else{ ?>
                    <a href="home.php?pg=<?=$pg;?>&idval=<?=$dt['idval'];?>&ope=act&actval=1">
                        <i class="fa fa-solid fa-circle-xmark fa-2x" style="color: #ff0000;"></i>
                    </a>
                <?php } ?>
            </td>
            <td style="text-alight:right;">
                <a href="home.php?pg=<?=$pg;?>&idval=<?=$dt['idval'];?>&ope=eli" title="Eliminar" onclick="return eliminar();">
                    <i class="fa-solid fa-trash-can fa-2x"></i>
                </a>
                <a href="home.php?pg=<?=$pg;?>&idval=<?=$dt['idval'];?>&ope=edit" title="Editar">
                    <i class="fa-solid fa-pen-to-square fa-2x"></i>
                </a>
            </td>
        </tr>
        <?php }} ?>
    </tbody>
</table>