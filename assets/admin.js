
/***********************************************************************
 
ADMIN MENU EDITING 

Removes everything from adminbar that isn't needed by the normal user.
Should be included in /anchor/ 

You need to include jQuery in anchor/views/partials/header.php along with the .admin-menu class
to the ul.
 
 
*************************************************************************/


$(document).ready(function() {
	$( ".admin-menu li:nth-child(2) a" ).text("Referenser");
	$( ".admin-menu li:nth-child(3)" ).hide();
	$( ".admin-menu li:nth-child(4) a" ).text("Sidor");
	$( ".admin-menu li:nth-child(5)" ).hide();
	$( ".admin-menu li:nth-child(6)" ).hide();
	$( ".admin-menu li:nth-child(7) a" ).text("Avancerat");
});