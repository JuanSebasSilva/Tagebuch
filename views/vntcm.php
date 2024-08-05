<?php 
    include('controllers/cntcm.php');
    echo title('', 'Noticias/Comunicados', 2);
?>

<div class="contx">
    <form name="frm1" method="POST" action="home.php?pg=<?=$pg;?>">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="nomnc">Nombre</label>
                <input type="text" id="nomnc" name="nomnc" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['nomnc']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="desnc">Descripcion</label>
                <input type="text" id="desnc" name="desnc" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['desnc']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="autnc">Autor</label>
                <input type="number" id="autnc" name="autnc" class="form-control" value="<?php if($dtOne) echo $dtOne[0]['autnc']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="tponc">Tipo</label>
                <select id="tponc" name="tponc" class="form-control form-select">
                    <?php if($datTpo){ foreach($datTpo as $dtt){ ?>
                        <option value="<?=$dtt['idval'];?>" <?php if($dtOne && $dtOne[0]['tponc']==$dtt[0]['idval']) echo 'selected'?> required>
                            <?=$dtt['nomval']?>
                        </option>
                    <?php }} ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="princ">Prioridad</label>
                <select id="princ" name="princ" class="form-control form-select">
                    <?php if($datPri){ foreach($datPri as $dtp){ ?>
                        <option value="<?=$dtp['idval'];?>" <?php if($dtOne && $dtOne[0]['princ']==$dtp[0]['idval']) echo 'selected'?> required>
                            <?=$dtp['nomval']?>
                        </option>
                    <?php }} ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="etdnc">Estado</label>
                <select id="etdnc" name="etdnc" class="form-control form-select">
                    <?php if($datEtd){ foreach($datEtd as $dte){ ?>
                        <option value="<?=$dte['idval'];?>" <?php if($dtOne && $dtOne[0]['etdnc']==$dte[0]['idval']) echo 'selected'?> required>
                            <?=$dte['nomval']?>
                        </option>
                    <?php }} ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <input type="hidden" id="idnc" name="idnc" value="<?php if($dtOne) echo $dtOne[0]['idnc']; ?>">
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
            <th>Autor</th>
            <th>Tipo</th>
            <th>Prioridad</th>
            <th>Estado</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php if($dat){ foreach($dat as $dt){ ?>
        <tr>
            <td><?=$dt['idnc'];?></td>
            <td><?=$dt['nomnc'];?></td>
            <td><?=$dt['autnc'];?></td>
            <td><?=$dt['tponc'];?></td>
            <td><?=$dt['princ'];?></td>
            <td><?=$dt['etdnc'];?></td>
            <td>
                <a href="home.php?pg=<?=$pg;?>&idnc=<?=$dt['idnc'];?>&ope=edit" title="Editar">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a href="home.php?pg=<?=$pg;?>&idnc=<?=$dt['idnc'];?>&ope=del" title="Eliminar">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php }} ?>
    </tbody>
</table>

<!-- <section class="containernoti">
    <nav>
        <h2>Noticias</h2>
        <a href="" class="noticesa">Cerrar sesion</a>
    </nav>
    <div class="addnoti">
        <center>
            <i class="fa-solid fa-list-check" data-bs-toggle="modal" data-bs-target="#MdPg<?=$dt['idnc'];?>">Agregar noticias</i>
        </center> 
    </div>
    <article class="noticerra">
        <a href="home.php?pg=401" class="notiatras">Atras</a>
    </article>
</section>

<div class="modal fade" id="MdPg<?=$dt['idnc'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="">Titulo de noticia</label>
                        <input type="text" name="" id="" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Prioridad</label>
                        <select name="" id="">
                            <?php if($dtPri){ foreach($dtPri as $dtP){ ?>
                            <option value="<?=$dtP['idval'];?>" <?php if($dtOne && $dtOne[0]['idval']==$dtP[0]['idval']) echo "selected";?>>
                                <?=$dtP['nomval']; ?>
                            </option>
                            <?php }} ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div> -->