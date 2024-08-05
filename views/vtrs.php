<?php 
    include('controllers/ctrs.php');
    echo title('', 'Trapasos', 2);
?>

<div class="contx">
    <form name="frm1" method="POST" action="home.php?pg=<?=$pg;?>">
        <div class="row">
            
        </div>
    </form>
</div>

<table id="example" class="table table-striped">
    <thead>
        <tr>
            
        </tr>
    </thead>
    <tbody>
        <?php if($dat){ foreach($dat as $dt){ ?>
        <tr>
            
            <td>
                <a href="home.php?pg=<?=$pg;?>&ideve=<?=$dt['ideve'];?>&ope=edit" title="Editar">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a href="home.php?pg=<?=$pg;?>&ideve=<?=$dt['ideve'];?>&ope=del" title="Eliminar">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php }} ?>
    </tbody>
</table>

<!-- <section class="tras flex ">
    <?php
        require_once("views/Vmenueqp.php");
    ?>
    <div class="container">
        <div class="tras-l">
            <div class="listas-tras">
                <div class="list-tras">
                    <h2>Lista jugadores</h2>
                    <table>
                        <tr>
                            <td>Pedro Pablo Brother</td>
                            <td>20 años</td>
                            <td>icono</td>
                        </tr>
                        <tr>
                            <td>Pedro Pablo Brother</td>
                            <td>20 años</td>
                            <td>icono</td>
                        </tr>
                        <tr>
                            <td>Pedro Pablo Brother</td>
                            <td>20 años</td>
                            <td>icono</td>
                        </tr>
                    </table>
                </div>
                <div class="list-tras">
                    <h2>Lista favoritas</h2>
                    <table>
                        <tr>
                            <td>Pedro Pablo Brother</td>
                            <td>20 años</td>
                            <td>icono</td>
                        </tr>
                        <tr>
                            <td>Pedro Pablo Brother</td>
                            <td>20 años</td>
                            <td>icono</td>
                        </tr>
                        <tr>
                            <td>Pedro Pablo Brother</td>
                            <td>20 años</td>
                            <td>icono</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="tras-temp">
                <h2>Temporada</h2>
                <a href="#" class="btn-2">2009 - 2010</a>
                <div class="temp-content">
                    <div class="flex-temp">
                        <img src="img/jugador.png" alt="imgplayer">
                        <div class="temp-txt">
                            <table class="temp-list">
                                <tr>
                                    <td>Minutos jugados</td>
                                    <td>258</td>
                                </tr>
                                <tr>
                                    <td>Partidos jugados</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>Goles</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>Asistencias</td>
                                    <td>8</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="temp-txt">
                        <h3>Titulos obtenidos</h3>
                        <table class="temp-list">
                            <tr>
                                <td>Liga Papaya</td>
                                <td>Bota de oro</td>
                            </tr>
                            <tr>
                                <td>Torneo Lulo</td>
                                <td>Bota de oro</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="temp-button">
                    <a href="#" onclick="tras1()" class="btn-1">Solicitud traspaso</a>
                    <a href="#" onclick="tras2()" class="btn-1">Solicitud cesion</a>
                </div>
            </div>
        </div>
        <div class="procesos">
            <h2>Procesos de solicitudes</h2>
            <table class="solicitud-list">
                <tr>
                    <td>Nombre jugador</td>
                    <td>Solicitud traspaso</td>
                    <td>En negociacion</td>
                </tr>
                <tr>
                    <td>Nombre jugador</td>
                    <td>Solicitud traspaso</td>
                    <td>En negociacion</td>
                </tr>
                <tr>
                    <td>Nombre jugador</td>
                    <td>Solicitud traspaso</td>
                    <td>En negociacion</td>
                </tr>
            </table>
        </div>
    </div>
</section> -->