/*!
    * Start Bootstrap - SB Admin v7.0.4 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2021 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
      output.style.display = 'inline';
    }
};

var loadFile1 = function(event) {
    var output1 = document.getElementById('output1');
    output1.src = URL.createObjectURL(event.target.files[0]);
    output1.onload = function() {
      URL.revokeObjectURL(output1.src) // free memory
      output1.style.display = 'inline';
    }
};
// var loadFile3 = function(event) {
//     var output3 = document.getElementById('output3');
//     output3.src = URL.createObjectURL(event.target.files[0]);
//     output3.onload = function() {
//       URL.revokeObjectURL(output3.src) // free memory
//       output3.style.display = 'inline';
//     }
// };

ClassicEditor
.create( document.querySelector( '#ckdescription') )
.catch( error => {
    console.error( error );
} );

ClassicEditor
.create( document.querySelector('#productDesc') )
.catch( error => {
    console.error( error );
});
function confirmDel() {
    return confirm("Are you sure you want to delete?");
 }