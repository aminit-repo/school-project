





 var directors= {
  home: function(obj){
    
  },

  gallery: function(obj){
 
    }
 }



var secretory={
    home: function(obj){
      //an empty variable is returned if it is in large screen.
    	 if(obj.e.parents('.carousel').attr('class')){
    	   //Reload the current page
    	 }else{//else is a small screen size
    	 }
    	},

	gallery: function(obj){
        //an object is returned if it is a large screen size
       if(obj.e.parents('.carousel').attr('class')){
          //remove the visible components
          $('.home-md').removeClass('d-md-block');
          $('nav').addClass('d-none');
          //get required updates from the server
           directors.gallery(obj);
       }else{//else is a small screen size
          $('.home-sm').addClass('d-none');
           $('nav').addClass('d-none');
       }
		},

  galleryCallback: function(response){
       alert(response);
  }
	
 }
 



