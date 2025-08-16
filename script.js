//Access the offcanvas element (MENU) 
const myoffcanvas = document.getElementById('responsiveNavbar');
// Initialize the offcanvas using Bootstrap's Offcanvas constructor
const bsoffcanvas = new bootstrap.offcanvas(myoffcanvas);

function openMenu() {
    bsoffcanvas.show();
    
}
function closeMenu() {
   bsoffcanvas.hide();
}

//Form sign-in and sign-up
