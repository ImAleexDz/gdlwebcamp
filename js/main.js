(function () {
    "use strict"

    let regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function () {


        let windowHeight = $(window).height();
        let barraAltura = $('.barra').innerHeight();
        
        //scroll
        $(window).scroll(function() {
            let scroll = $(window).scrollTop();
            if(scroll > windowHeight) {
                $('.barra').addClass('fixed');
                $('body').css({'margin-top': barraAltura+'px'});
            } else {
                $('.barra').removeClass('fixed');
                $('body').css({'margin-top': '0px'});
            }
        });

        //Menu responsive
        $('.menu-movil').on('click', function() {
            $('.navegacion-principal').slideToggle();
        });

        //programa de conferencias
        $('.programa-evento .info-curso:first').show();
        $('.menu-programa a:first').addClass('activo');
    
        $('.menu-programa a').on('click', function() {
            $('.menu-programa a').removeClass('activo');
            $(this).addClass('activo')
            $('.ocultar').hide();
            let enlace = $(this).attr('href');
            $(enlace).fadeIn(1000);
    
            return false;
        });

        //Campos datos usuario
        let nombre = document.getElementById('nombre');
        let apellido = document.getElementById('apellido');
        let email = document.getElementById('email');

        //Campo pases
        let pase_dia = document.getElementById('pase_dia');
        let pase_dosdias = document.getElementById('pase_dosdias');
        let pase_completo = document.getElementById('pase_completo');

        //Botones y divs
        let calcular = document.getElementById('calcular');
        let errorDiv = document.getElementById('error');
        let botonRegistro = document.getElementById('btnRegistro');
        let lista_productos = document.getElementById('lista-productos');

        //Extras
        let camisas = document.getElementById('camisa_evento');
        let etiquetas = document.getElementById('etiquetas');
        let suma = document.getElementById('suma-total');

        if(document.getElementById('calcular')) {

            
            const calcularMontos = (e) => {
                e.preventDefault();
                if (regalo.value === '') {
                    alert('Debes elegir un regalo');
                    regalo.focus();
                } else {
                    let boletosDia = parseInt(pase_dia.value, 10) || 0,
                        boletosDosDias = parseInt(pase_dosdias.value, 10) || 0,
                        boletoCompleto = parseInt(pase_completo.value, 10) || 0,
                        cantidadCamisas = parseInt(camisas.value, 10) || 0,
                        cantidadEtiquetas = parseInt(etiquetas.value, 10) || 0;
    
                    const totalPagar = (boletosDia * 30) + (boletosDosDias * 45) + (boletoCompleto * 50) + ((cantidadCamisas * 10) * .93) + (cantidadEtiquetas * 2);
    
                    const listadoProductos = [];
    
                    if (boletosDia >= 1) {
                        listadoProductos.push(boletosDia + ' Pases por día');
                    }
                    if (boletosDosDias >= 1) {
                        listadoProductos.push(boletosDosDias + ' Pases por 2 días');
                    }
                    if (boletoCompleto >= 1) {
                        listadoProductos.push(boletoCompleto + ' Pases Completos');
                    }
                    if (cantidadCamisas >= 1) {
                        listadoProductos.push(cantidadCamisas + ' Camisas');
                    }
                    if (cantidadEtiquetas >= 1) {
                        listadoProductos.push(cantidadEtiquetas + ' Etiquetas');
                    }
    
                    lista_productos.style.display = 'block';
                    lista_productos.innerHTML = '';
                    for (let i = 0; i < listadoProductos.length; i++) {
                        lista_productos.innerHTML += listadoProductos[i] + '<br/>'
                    }
    
                    suma.innerHTML = '$ ' + totalPagar.toFixed(2);
    
                }
            }; //Calcular Montos
    
            const mostrarDias = () => {
                let boletosDia = parseInt(pase_dia.value, 10) || 0,
                    boletosDosDias = parseInt(pase_dosdias.value, 10) || 0,
                    boletoCompleto = parseInt(pase_completo.value, 10) || 0;
    
                let diasElegidos = [];
    
                if (boletosDia > 0) {
                    diasElegidos.push('viernes');
                } else {
                    document.getElementById('viernes').style.display = 'none';
                }
                if (boletosDosDias > 0) {
                    diasElegidos.push('viernes', 'sabado');
                } else {
                    document.getElementById('viernes').style.display = 'none';
                    document.getElementById('sabado').style.display = 'none';
                }
                if (boletoCompleto > 0) {
                    diasElegidos.push('viernes', 'sabado', 'domingo');
                } else {
                    document.getElementById('viernes').style.display = 'none';
                    document.getElementById('sabado').style.display = 'none';
                    document.getElementById('domingo').style.display = 'none';
                }
                for (let i = 0; i < diasElegidos.length; i++) {
                    document.getElementById(diasElegidos[i]).style.display = 'block';
                }
    
            };
    
            function validarCampos() {
                if (this.value == '') {
                    errorDiv.innerHTML = 'Este campo es obligatorio';
                    this.style.border = '1px solid red';
                } else {
                    errorDiv.style.display = 'none';
                    this.style.border = '1px solid #cccccc'
                }
            };
    
            function validarEmail() {
                if (this.value.indexOf("@") > -1) {
                    errorDiv.style.display = 'none';
                    this.style.border = '1px solid #cccccc'
                } else {
                    errorDiv.innerHTML = 'Ingrese un correo válido';
                    this.style.border = '1px solid red';
                }
            }
    
            calcular.addEventListener('click', calcularMontos);
            pase_dia.addEventListener('blur', mostrarDias);
            pase_dosdias.addEventListener('blur', mostrarDias);
            pase_completo.addEventListener('blur', mostrarDias);
            nombre.addEventListener('blur', validarCampos);
            apellido.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarEmail);
            
        }
        
    }); //DOM Content Loaded
})();

//******************************************************************** */

if(document.getElementById('mapa')) {
    $(function() {
        
        //Lettering
        $('.nombre-sitio').lettering();
        
        //Menu fijo
        let windowHeight = $(window).height();
        let barraAltura = $('.barra').innerHeight();
        
        $(window).scroll(function() {
            let scroll = $(window).scrollTop();
            if(scroll > windowHeight) {
                $('.barra').addClass('fixed');
                $('body').css({'margin-top': barraAltura+'px'});
            } else {
                $('.barra').removeClass('fixed');
                $('body').css({'margin-top': '0px'});
            }
        });
        
        //Menu responsive
        $('.menu-movil').on('click', function() {
            $('.navegacion-principal').slideToggle();
        });
        
        //mapa
        const map = L.map('mapa').setView([20.674781, -103.38749], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([20.674781, -103.38749]).addTo(map)
            .bindPopup('GDLWebcam 2018<br> Boletos ya disponibles')
            .openPopup();
    
        //animaciones números
        $('.resumen-evento li:nth-child(1) p').animateNumber({number:6}, 1200);
        $('.resumen-evento li:nth-child(2) p').animateNumber({number:15}, 1200);
        $('.resumen-evento li:nth-child(3) p').animateNumber({number:3}, 600);
        $('.resumen-evento li:nth-child(4) p').animateNumber({number:9}, 1500);
    
        //cuenta regresiva
        $('.cuenta-regresiva').countdown('2020/12/10 09:00:00', function(event) {
            $('#dias').html(event.strftime('%D'));
            $('#horas').html(event.strftime('%H'));
            $('#minutos').html(event.strftime('%M'));
            $('#segundos').html(event.strftime('%S'));
        });
    });
}

