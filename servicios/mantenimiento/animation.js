Swal.bindClickHandler()
// Remodelación
Swal.mixin({
    title: 'Remodelación',
    // text: 'Aqui vendra toda la informacion',
    html: '<p class="text-justify"> La empresa SIAI Srl. Cuenta con personal adecuado y ampliamente capacitado para realizar todo tipo Mantenimiento y Remodelación en General.</p>',
    icon: 'success',
    confirmButtonText: 'Ok',
    footer: 'Gracias por leer la información',
    imageUrl: '../img/remodelacion.png',
    imageWidth: '100%',
}).bindClickHandler('data-swal-toast-template-remodelacio')
// Pintura
Swal.mixin({
    title: 'Pintura',
    // text: 'Aqui vendra toda la informacion',
    html: '<p class="text-justify"> La empresa SIAI Srl. Cuenta con personal adecuado y ampliamente capacitado para realizar todo tipo de Pintura y Remodelación de Pintura.</p>',
    icon: 'success',
    confirmButtonText: 'Ok',
    footer: 'Gracias por leer la información',
    imageUrl: '../img/pintura.png',
    imageWidth: '50%',
}).bindClickHandler('data-swal-toast-template-pintura')
// electricidad
Swal.mixin({
    title: 'Electricidad',
    // text: 'Aqui vendra toda la informacion',
    html: '<p class="text-justify"> La empresa SIAI Srl. Cuenta con personal adecuado y ampliamente capacitado para realizar todo tipo de instalación y mantenimiento eléctrico.</p>',
    icon: 'success',
    confirmButtonText: 'Ok',
    footer: 'Gracias por leer la información',
    imageUrl: '../img/electricidad.png',
    imageWidth: '60%',
}).bindClickHandler('data-swal-toast-template-electricidad')
//plomeria
Swal.mixin({
    title: 'Plomería',
    // text: 'Aqui vendra toda la informacion',
    html: '<p class="text-justify">La empresa cuenta con personal adecuado y ampliamente capacitado para realizar todo tipo de mantenimiento e instalacion de plomería.</p>',
    icon: 'success',
    confirmButtonText: 'Ok',
    footer: 'Gracias por leer la información',
    imageUrl: '../img/plomeria.png',
    imageWidth: '60%',
}).bindClickHandler('data-swal-toast-template-plomeria')
// Instalaciones en General
Swal.mixin({
    title: 'Instalaciones en General',
    // text: 'Aqui vendra toda la informacion',
    html: '<p class="text-justify">La empresa cuenta con personal técnico ampliamente capacitado para realizar todo tipo de mantenimiento e instalación en general.</p>',
    icon: 'success',
    confirmButtonText: 'Ok',
    footer: 'Gracias por leer la información',
    imageUrl: '../img/mantenimiento_1.png',
    imageWidth: '50%',
}).bindClickHandler('data-swal-toast-template-instalacio_general')
// mantenimiento de bombas
Swal.mixin({
    title: 'Mantenimiento de Bombas',
    // text: 'La empresa cuenta con personal técnico ampliamente capacitado para realizar el mantenimiento preventivo y correctivo de todo el sistema de agua potable',
    html: '<p class="text-justify">La empresa cuenta con personal técnico ampliamente capacitado para realizar el mantenimiento preventivo y correctivo de todo el sistema de agua potable:<br><ul><li>•	Mantenimiento Preventivo de las Bombas de Agua (Programado)</li><li>•	Mantenimiento Correctivo en caso de emergencias (Todo el año)</li><li>•	Mantenimiento Preventivo de los Hidroceles (Programado)</li><li>•	Mantenimiento correctivo en caso de emergencias (Todo el año)</li><li>•	Mantenimiento, limpieza y desinfección de los tanques de agua (Programado)</li><li>•	Mantenimiento correctivo de los tableros eléctricos (No incluye repuestos</li></ul></p>',
    icon: 'success',
    confirmButtonText: 'Ok',
    footer: 'Gracias por leer la información',
    imageUrl: '../img/mantenimiento_bomba_2.jpg',
    imageWidth: '50%',
}).bindClickHandler('data-swal-toast-template-mantenimiento_bombas')

// Swal.fire({
//     title: 'Bienvenido!',
//     text: 'ESPERO QUE TE GUSTE MI PAGINA WEB',
//     // con html podemos suplantar el html todo lo que queramos 
//     html: '<b>Hola</b>',
//     icon: 'question', // success, error, warning, question
//     confirmButtonText: 'Joel', // Texto del boton :)
//     footer: 'Esta es Informacion Complementaria', 
//     width: '90%', //tamaño de la alerta
//     background:'#8EBFE2',//color de la alerta
//     grow: 'column',//row,column, fullscreen
//     backdrop: true,
//     timer: 5000, // tiempo para que se cierre mi alerta
//     timerProgressBar: true,// se muestra el timepo que permanecera
//     toast: false,
//     position: 'center',// arriba - top, abajo - bottom, abajo derecha-bottom-end, arriba en la deracha-top-end, centro-center 
//     allowOutsideClick:true,
//     allowEscapeKey: false,
//     allowEnterKey: false,
//     stopKeydownPropagation:false,
//     imageUrl: '../img/remodelacion.png',
//     imageWidth: '200px'
// });