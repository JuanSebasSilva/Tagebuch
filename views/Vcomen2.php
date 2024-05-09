<section class="comunic flex">
	<?php
        require_once("views/Vmenueqp.php");
    ?>
	<section class="crudcome">
		<section class="cm-of">
			<p>Entrenador:</p><input type="text" name="">
		</section>
		<section class="cm-to">
			<p>Para:</p>
			<select>
				<option>Todos</option>
				<option>Jugador1</option>
				<option>Jugador2</option>
				<option>Jugador3</option>
			</select>
		</section>
		<section class="cm-as">
			<p>Asunto:</p>
			<input type="text" name="">
		</section>
		<section class="cm-ds">
			<textarea>Descripcion</textarea>
		</section>
		<section>
			<a class="btnco" onclick="comen()" href="home.php?pg=105">Enviar</a>
			<a class="btnco" href="home.php?pg=105">Atras</a>
		</section>
	</section>	
</section>

