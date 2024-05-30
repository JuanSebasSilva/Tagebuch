<?php include("controllers/cper.php"); ?>

<div>
    <form method="POST" action="#" class="form-per">
        <div class="form-per">
            <label for="nomper">Perfil</label>
            <input id="nomper" name="nomper" value="<?php if($dtOne && $dtOne[0]['nomper']) echo $dtOne[0]['nomper']; ?>">
        </div>
        <div class="form-per">
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
    </form>
</div>