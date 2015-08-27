$(function(){
	$('.button-collapse').sideNav({
      menuWidth: 400, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
	    }
	  );
      
	$('.button-collapse').sideNav('hide');
	$('.button-collapse').sideNav('show');
});