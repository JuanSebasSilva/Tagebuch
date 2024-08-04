<section class="containernoti">
    <nav>
        <h2>Noticias</h2>
        <a href="" class="noticesa">Cerrar sesion</a>
    </nav>
    <div class="addnoti">
        <center>
            <i class="fa-solid fa-list-check" data-bs-toggle="modal" data-bs-target="#MdPg<?=$dt['idntcm'];?>">Agregar noticias</i>
        </center> 
    </div>
    <article class="noticerra">
        <a href="home.php?pg=401" class="notiatras">Atras</a>
    </article>
</section>

<div class="modal fade" id="MdPg<?=$dt['idntcm'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>