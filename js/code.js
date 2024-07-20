var swiper = new Swiper(".mySwiper-1", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true, pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    }
})

var swiper = new Swiper(".mySwiper-2", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true, pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    }
})

function home() {
    window.location.href = 'home.php?pg=101';
}

function admin() {
    confirm('¿Desea confirmar la siguiente accion?');
}
function noticia() {
    confirm('¿Desea publicar la siguiente noticia?');

}
function borrar() {
    confirm('¿Desea eliminar este evento?');
}

function tras1() {
    confirm('¿Desea solicitar traspaso de este jugador?');
}

function tras2() {
    confirm('¿Desea solicitar cesion de este jugador?');
}

function comen() {
    confirm('¿Desea enviar este comunicado?');
}

function equi() {
    confirm('¿Desea ingresar a este equipo?')
}
function validar() {
    var p1 = document.getElementById("cont1").value;
    var p2 = document.getElementById("cont2").value;

    if (p1 == p2) {
        alert("Inicio de sesion Exitoso");
        window.location = 'home.php?=pg=101';
    } else {
        document.getElementById("error").innerHTML = "<div id='error'>Los datos son incorrectos</div>";
    }
}

function selUbi(dep){
    var parametros = {
        'valor' : dep
    };
    $.ajax({
        data: parametros,
        url: 'views/selmun.php',
        type: 'POST',
        success: function(response){
            $('#reload').html(response);
        }
    });
}