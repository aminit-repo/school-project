
	/* request Object prototype 

	User.request ---- request attribute name for each user, it gives the user the ability to process request
   
   User.request= {
          data: null, --- this specifies the data to be sent to the server
          handler: null -- a fuction that handles the request response
   }

--How to create a request object --

  CreatFeature.feature_type.request.request_type

*/

var interfaceRegister= {
   opened: home,
   requestPending: false,
   requestedFeature: "none"
}


var signin = {
	directives: {
		visited: false, 
		request: {
			password_signin: false,
			id_signin: false,
			accnt_activation: false,
         resiginin: false,
		},
		 alert: {
		    errorCode: {
		    	passone: {
		    		occur: false,
		    		message: "password minimum length is 5"
		    	},
			    passtwo: {
		    		occur: false,
		    		message: "i can't find a number"
		    	},
		    	passthree: {
		    		occur: false,
		    		message: "i can't find a character"
		    	},
			    emailone: {
		    		occur: false,
		    		message: "i need your email to continue"
		    	},
			    emailtwo: {
		    		occur: false,
		    		message: "email looks wrong"
		    	 }
		    },
		    password: function(){
		    	return $('');
		    },
		    email: function(){
		    	return $(' ');
		    }
		  }

	},

	widgets: {
		option: {
			DOM: function(){
   			return $('.option-widget');
  		   },
  		   isOpen: true
  		},

   		password: {
   			DOM: function(){
   				return $('.password-widget');
   			}, 
   			isOpen: false
   		},

   		id: {
   			DOM: function(){
   			return $('.id-widget');
   			},
   			isOpen: false
		},
   		wait: {
   			DOM: function(){
   			return $('.wait-widget');
   			},
   			isOpen: false
   		},
   		activate: {
   			DOM: function(){
   				return $('.activate-widget');
   			},
   			isOpen: false,
   			
   			panel: {
   					panelone:{
   						isOpen: true,
   						DOM: function(){
   							return $('.activate-widget #step-one');
   						}
   					}, 
   					paneltwo: {
   						isOpen: false,
   						DOM: function(){
   							return $('.activate-widget #step-two');
   						}
   					},
   					panelthree: {
   						isOpen: false,
   						DOM: function(){
   							return $('.activate-widget #step-three');
   						}
   					},
   					panelfour: {
   						isOpen: false,
   						DOM: function(){
   							return $('.activate-widget #step-four');
   						}
   					},
   					panelfive: {
   						isOpen: false,
   						DOM: function(){
   							return $('.activate-widget #step-five');
   						}
   					},
   					panelsix: {
   						isOpen: false,
   						DOM: function(){
   							return $('.activate-widget #step-six');
   						}
   					},
   					panelseven: {
   						isOpen: false,
   						DOM: function(){
   							return $('.activate-widget #step-seven');
   						}
   					}

   			}
   		}


	},
   DOM: function(){
         return $('.signin-div');
   },

	click: function(evt){
		  evt.stopPropagation();
   	    if($(this).attr('type')){
   	    	if(signin.widgets.password.isOpen){
   	    		//check if it's the next button
   	    		if($(this).attr('id')=="next"){
   	    			signin.passwordwidget.event['nextclick']();
   	    		}else{//do this if is the back button
   	    			signin.passwordwidget.event['backclick']();
   	    		}
   	    	}else if(signin.widgets.id.isOpen){
   	    		    alert('on progress');
   	    	}else if(signin.widgets.activate.isOpen){

   	    		    if($(this).attr('id')==='activate-yes'){
   	    		    	signin.activatewidget.event.yesclick();
   	    		    }else if($(this).attr('id')==='activate-no'){
   	    		    	signin.activatewidget.event.noclick();
   	    		    }else if($(this).attr('id')==="next"){
   	    		    	signin.activatewidget.shownextpanel(); 
   	    		    }else{
   	    		    	signin.activatewidget.event.backclick();
   	    		    }
   	    	}else{
   	    		 alert('what widget is this');
   	    	}
   	    	 
   	    }else{
   	    	if(signin.widgets.password.isOpen){
   	    	 	   signin.passwordwidget.event[''+$(this).attr('href')]();
   	    	}else if(signin.widgets.option.isOpen){	
   	    		   signin.optionwidget.event[''+$(this).attr('href')]();
   	    	}else if(signin.activate.isOpen){
   	    	  		signin.activatewidget.event[''+$(this).attr('href')]();
   	    	}else{
   	    		alert('what widget is this');
   	    	}

   	    }
   		 return false;
	},
	passwordwidget: {
			password: function(){
				return $('.password-widget [type="password"]');
			},
			email: function(){
				return $('.password-widget [type="text"]');
			},
		    displayLoader: function(){
				 $('#signin-loader-div').show();//display loader
		    },
		    hideLoader: function(){
		    	$('#signin-loader-div').hide();//hide loader
		    },
		    showAlert: function(){
		    	if(signin.directives.alert.errorCode.passone.occur){
		    		this.password().addClass('error');
					$('.password-alert .info').html(signin.directives.alert.errorCode.passone.message);
					$('.password-alert').addClass('show');
		    	}else if(signin.directives.alert.errorCode.passtwo.occur){
		    		this.password().addClass('error');
					$('.password-alert .info').html(signin.directives.alert.errorCode.passtwo.message);
					$('.password-alert').addClass('show');
		    	}else if(signin.directives.alert.errorCode.passthree.occur){
		    		this.password().addClass('error');
					$('.password-alert .info').html(signin.directives.alert.errorCode.passthree.message);
					$('.password-alert').addClass('show');
		    	}else if (signin.directives.alert.errorCode.emailone.occur){
		    		this.email().addClass('error');
					$('.email-alert .info').html(signin.directives.alert.errorCode.emailone.message);
					$('.email-alert').addClass('show');
		    	}else{
		    		this.email().css('border-color','red');
					$('.email-alert .info').html(signin.directives.alert.errorCode.emailtwo.message);
					$('.email-alert').addClass('show');
		    	}
		    },
		    closeAlert: function(){
		    	 if(signin.directives.alert.errorCode.passone.occur){
		    		signin.passwordwidget.password().removeClass('error');
					signin.directives.alert.errorCode.passone.occur=false;
					$('.password-alert').removeClass('error');
		    	}else if(signin.directives.alert.errorCode.passtwo.occur){
		    		 signin.passwordwidget.password().removeClass('error');
					 signin.directives.alert.errorCode.passtwo.occur=false;
					 $('.password-alert-cover').removeClass('show');
		    	}else if(signin.directives.alert.errorCode.passthree.occur){
		    		signin.passwordwidget.password().removeClass('error');
					 signin.directives.alert.errorCode.passthree.occur=false;
					 $('.password-alert-cover').removeClass('show');
		    	}else if (signin.directives.alert.errorCode.emailone.occur){
		    		signin.passwordwidget.email().removeClass('error');
					 signin.directives.alert.errorCode.emailone.occur=false;
					  $('.email-alert').removeClass('show');
		    	}else{
		    		signin.passwordwidget.email().removeClass('error');
					$('.email-alert').removeClass('show');
					signin.directives.alert.errorCode.emailtwo.occur=false;
		    	}

		    },
			validatePassword: function(){
				//check if the password is above four character
				var pass= $('.password-widget [type="password"]').val();
				//A strong password should at least have one character in the presence of numbers and a number in the presence of characters, the minimum length is 5 characters
				if(pass.length < 5){
					 signin.directives.alert.errorCode.passone.occur=true;
					 signin.passwordwidget.showAlert();
					return false;
				}
				//check for the presence of a number
				var foundchar=false;
				var foundnum=false;
				founddot= false;
				for(var i=0; i < pass.length;i++){
					if(!isNaN(pass[i])){
						foundnum=true;
					}else{
						foundchar=true;
					}

				}
				if(!(foundchar&&foundnum)){
					if(!foundnum){
						signin.directives.alert.errorCode.passtwo.occur=true;
					 	signin.passwordwidget.showAlert();
					}else{
						signin.directives.alert.errorCode.passthree.occur=true;
					 	signin.passwordwidget.showAlert();
					}
					return false;
				}
				return true;
			},

			validatemail: function(){
				//a valid email must have the @ character
			    //a valid email must not start with the @ character
			    //a valid email can't end with the @ character
			    var foundspecialchar=false;
			    var founddot=false; 
			    var temp=this.email().val();
			     var index= temp.indexOf('@');
                  if(index > 0 && (index < temp.length-1)){
                  	 return true;
                  }
                  if(temp.length <= 0){
					 signin.directives.alert.errorCode.emailone.occur=true;
					signin.passwordwidget.showAlert();
                  }else{
                  	 signin.directives.alert.errorCode.emailtwo.occur=true;
					 signin.passwordwidget.showAlert();
                  }
			     return false;

			},

			event: {
        		nextclick: function(){
   	        		 //validate the email
   	        		if(signin.passwordwidget.validatemail()){
   	   	      		//validate the username and password filed
       				if(signin.passwordwidget.validatePassword()){
       					//signin.passwordwidget.displayLoader();
       	    			//create a Member object
       	    			User= new Member();
       	    			User.requestObj= new request(CreatFeature.signin.request.password_signin);
       	      			//set the password request directive to true, specifying this response should be handled in the defined way
       	        		signin.directives.request.password_signin= true;
       	        		User.request();//let user make request to the server
       					}
   	   			}
   				},
   				 backclick: function(){
   				 	//display the the option widget
   					signin.widgets.option.DOM().show();
   					signin.widgets.option.isOpen=true;
   					signin.widgets.password.isOpen=false;
   					signin.hidecontrolbuttons();
   					signin.widgets.password.DOM().hide(); 
   					signin.manageextrasLinks("show",true,false);
   				 },
   				 forgotpassclick: function(){
   					alert('reset password');
   				}
			} 
	},

	optionwidget: {

		event: {
			idclick: function(){
   	 			alert('this service is in progress...');
   			},
   			passwordclick: function(){
   				signin.widgets.option.DOM().hide();
   				signin.widgets.password.DOM().show();
   				signin.widgets.password.isOpen=true;
   				signin.showcontrolbuttons();
   				signin.manageextrasLinks("hide",true,false);
   			},
   		   activateclick: function(){
   				signin.manageextrasLinks("hide",true,true);
   				signin.widgets.option.DOM().hide();
   				signin.widgets.activate.DOM().show();
   				signin.widgets.activate.isOpen=true;
   				signin.widgets.activate.panel.panelone.DOM().show();
   				signin.widgets.activate.panel.panelone.isOpen=true;
   			  }
		}

	},
	activatewidget: {

		event: {

			control: {
				button: 0 //zero specifies that the no button was clicked by default
			},
			yesclick: function(){
				signin.activatewidget.shownextpanel();
				signin.activatewidget.event.control.button=1;//this represent the yes button being clicked
   			},
   			noclick: function(){
   				 signin.activatewidget.shownextpanel("step-five");
   				 signin.showcontrolbuttons();
   				 signin.activatewidget.event.control.button=0;// no button  being clicked
   			},
   			backclick: function(){
   				if(signin.widgets.activate.panel.paneltwo.isOpen){
   					signin.widgets.activate.panel.paneltwo.DOM().hide();
   					signin.widgets.option.DOM().show();
   					signin.widgets.option.isOpen=true;
   					signin.widgets.activate.isOpen=false;
   					signin.widgets.activate.panel.paneltwo.isOpen=false;
   					 signin.hidecontrolbuttons();
   					signin.widgets.activate.DOM().hide(); 
   					signin.manageextrasLinks("show",true,false);
   				}else if(signin.widgets.activate.panel.panelthree.isOpen){
   					if(signin.activatewidget.event.control.button){// do this if the yes button was clicked last
   						signin.widgets.activate.panel.panelthree.DOM().hide();
   						signin.widgets.activate.panel.paneltwo.DOM().show();
   						signin.widgets.activate.panel.paneltwo.isOpen=true;
   						signin.widgets.activate.panel.panelthree.isOpen=false;
   					}else{// do this if the no button was clicked last
   						 //hide panel 3 and open panel 5
   						signin.widgets.activate.panel.panelthree.DOM().hide();
   						signin.widgets.activate.panel.panelfive.DOM().show();
   						signin.widgets.activate.panel.panelfive.isOpen=true;
   						signin.widgets.activate.panel.panelthree.isOpen=false;
   					}
   				}else if(signin.widgets.activate.panel.panelfour.isOpen){
   					 //hide panel 4 and open panel 3
   					signin.widgets.activate.panel.panelfour.DOM().hide();
   					signin.widgets.activate.panel.panelthree.DOM().show();
   					signin.widgets.activate.panel.panelthree.isOpen=true;
   					signin.widgets.activate.panel.panelfour.isOpen=false;
   				}else if(signin.widgets.activate.panel.panelfive.isOpen){
   					//hide the panel 5 and open the option widget
   					signin.widgets.activate.panel.panelfive.DOM().hide();
   					signin.widgets.option.DOM().show();
   					signin.widgets.option.isOpen=true;
   					signin.widgets.activate.isOpen=false;
   					signin.widgets.activate.panel.panelfive.isOpen=false;
   					signin.hidecontrolbuttons();
   					signin.widgets.activate.DOM().hide(); 
   					signin.manageextrasLinks("show",true,false);

   				}else if(signin.widgets.activate.panel.panelsix.isOpen){
   				    //hide panel 6 and open panel 5
   					signin.widgets.activate.panel.panelsix.DOM().hide();
   					signin.widgets.activate.panel.panelfive.DOM().show();
   					signin.widgets.activate.panel.panelsix.isOpen=true;
   					signin.widgets.activate.panel.panelfive.isOpen=false;
   					 
   				}else{
   					 alert('uninitiated event');
   				}
   			}
		},
		shownextpanel: function(panel){
			if(panel){
				//hide the current shown panel and show the required panel
				if(signin.widgets.activate.panel.panelone.isOpen){
				    signin.widgets.activate.panel.panelone.DOM().hide(); //hide the current panel
				    signin.widgets.activate.panel.panelone.isOpen=false;
				}else if(signin.widgets.activate.panel.paneltwo.isOpen){
					signin.widgets.activate.panel.paneltwo.hide(); //hide the current panel
					signin.widgets.activate.panel.paneltwo.isOpen=false;
				}else if(signin.widgets.activate.panel.panelthree.isOpen){
					signin.widgets.activate.panel.panelthree.DOM().hide(); //hide the current panel
					signin.widgets.activate.panel.panelthree.isOpen=false;
				}else if(signin.widgets.activate.panel.panelfour.isOpen){
					signin.widgets.activate.panel.panelfour.DOM().hide(); //hide the current panel
					signin.widgets.activate.panel.panelfour.isOpen=false;
				}else if(signin.widgets.activate.panel.panelfive.isOpen){
					signin.widgets.activate.panel.panelfive.DOM().hide(); //hide the current panel
					signin.widgets.activate.panel.panelfive.isOpen=false;
				}else if(signin.widgets.activate.panel.panelsix.isOpen){
					signin.widgets.activate.panel.panelsix.DOM().hide(); //hide the current panel
					signin.widgets.activate.panel.panelsix.isOpen=false;
				}else{
					signin.widgets.activate.panel.panelseven.DOM().hide(); //hide the current panel
				}
				    $('.activate-widget #'+panel).show();// show the required panel

				    if(panel==="step-one"){
				    	signin.widgets.activate.panel.panelone.isOpen=true;
				    }else if(panel==="step-two"){
				    	signin.widgets.activate.panel.paneltwo.isOpen=true;
				    }else if(panel=== "step-three"){
				    	signin.widgets.activate.panel.panelthree.isOpen=true;
				    }else if(panel==="step-four"){
				    	signin.widgets.activate.panel.panelfour.isOpen=true;
				    }else if(panel==="step-five"){
				    	signin.widgets.activate.panel.panelfive.isOpen=true;
				    }else if(panel==="step-six"){
				    	signin.widgets.activate.panel.panelsix.isOpen=true;
				    }else{
				    	signin.widgets.activate.panel.panelseven.isOpen=true;
				    }

			}else{
				if(signin.widgets.activate.panel.panelone.isOpen){
					 signin.widgets.activate.panel.panelone.DOM().hide();
					 signin.widgets.activate.panel.paneltwo.DOM().show();
				 	 signin.showcontrolbuttons();
				 	 signin.widgets.activate.panel.panelone.isOpen=false;
				 	 signin.widgets.activate.panel.paneltwo.isOpen=true;
				}else if(signin.widgets.activate.panel.paneltwo.isOpen){
					 signin.widgets.activate.panel.paneltwo.DOM().hide();
					 signin.widgets.activate.panel.panelthree.DOM().show();
					 signin.widgets.activate.panel.paneltwo.isOpen=false;
				 	 signin.widgets.activate.panel.panelthree.isOpen=true;
				}else if(signin.widgets.activate.panel.panelthree.isOpen){
					 if(signin.activatewidget.event.control.button){
					 	signin.widgets.activate.panel.panelthree.DOM().hide();
					 	signin.widgets.activate.panel.panelfour.DOM().show();
					 	signin.widgets.activate.panel.panelthree.isOpen=false;
				 	 	signin.widgets.activate.panel.panelfour.isOpen=true;
					 }else{
					 	signin.widgets.activate.panel.panelthree.DOM().hide();
					 	signin.widgets.activate.panel.panelfive.DOM().show();
					 	signin.widgets.activate.panel.panelthree.isOpen=false;
				 	 	signin.widgets.activate.panel.panelfive.isOpen=true;
					 }
					
				}else if(signin.widgets.activate.panel.panelfour.isOpen){
					signin.widgets.activate.panel.panelfour.DOM().hide();
					 signin.widgets.activate.panel.panelseven.DOM().show();
					 signin.widgets.activate.panel.panelfour.isOpen=false;
				 	 signin.widgets.activate.panel.panelseven.isOpen=true;
				 	 signin.hidecontrolbuttons();
				}else if(signin.widgets.activate.panel.panelfive.isOpen){
					alert('condition determines if panel three of panel four should be opened');
					 signin.widgets.activate.panel.panelfive.DOM().hide();
					 signin.widgets.activate.panel.panelthree.DOM().show();
					 signin.widgets.activate.panel.panelfive.isOpen=false;
				 	 signin.widgets.activate.panel.panelthree.isOpen=true;	
				}else{
					alert('uninitiated operation');
				}	
			}
			

		},
		showprevpanel: function(panel){

		}
	},
				//this function take three argument first is either to show or hide, and takes true for the link to show or hide	
   manageextrasLinks: function(request, activate, forgotpass){
   				if(request==="show"){
                    if(activate&&(!forgotpass)){
                    	$('.extras a:first-child').hide();
   				        $('.extras a:last-child').show();
                    }

                     if(!(activate)&&(forgotpass)){
                    	$('.extras a:first-child').hide();
   				        $('.extras a:last-child').show();
                    }

   				}else{

   					if(activate && forgotpass){
   						$('.extras a:first-child').hide();
   				        $('.extras a:last-child').hide();
   					}else if(!activate&&forgotpass){
   						$('.extras a:first-child').hide();
   				        $('.extras a:last-child').show();
   					}else{
   						$('.extras a:first-child').show();
   				        $('.extras a:last-child').hide();
   					}

   				}
   },
   setheight: function(){
   	 //initialize the height of the sigin-div
     var signinheight=$('.signin-div').css('height');
     $('.signin-div').css('height',signinheight);
   },
   setLoaderWidth: function(){
     var loaderwidth= $('.signin-div').css('width');
     $('#loader-box-container').css('width',loaderwidth);
    },
   showcontrolbuttons: function(){
   		$('.signin-div .control-btns-cover').css('visibility','visible');
   },
   hidecontrolbuttons: function(){
   		$('.signin-div .control-btns-cover').css('visibility','hidden');
   },

   request: {
   		data:  {

   			password_signin: function() {
   			
   					email: signin.passwordwidget.email().val();
   	   	  			password: signin.passwordwidget.password().val();
   				

   			},

   			id_signin: function(){
   				return {}
   			},
   			accnt_activation: function(){
                return {

                }
   			},
            resiginin: function(){

               return {
                   ip: User.ip
               }
            }

   		},
   		response: {

   			password_signin: function(response){
   				 //do this if login was successfull
   	   	  		if(true){
   	   	  		 signin.hidecontrolbuttons();
                   signin.manageextrasLinks('hide',true,true);
   	   	  		 signin.widgets.password.isOpen=false;
   		          signin.widgets.password.DOM().hide();

   		          //initialize system
   		         if (typeof(Storage) !== "undefined"){
    					//store user details
                       CreatUser.init(response);// create the user object
      				     localStorage.id = response.id;
      				     localStorage.firstname=response.details.firstname;
      				     localStorage.school=response.school.name;
      				     localStorage.schoolColor= response.school.color;
    

  				}else{// else use cookie values
  					document.cookie = "username=John Doe; expires=Wed, 18 July 2020 12:00:00 UTC; path=/";
  					// create and object of the highest composition
  		             CreatUser.init(response);// create the user object
  				} 

                  $('.user-slogan-text').text(User.firstname.charAt(0).toUpperCase());
  				      $('.user-name').text(User.firstname);
   		         signin.widgets.wait.DOM().show();
   		         signin.widgets.wait.isOpen=true;         
                  //configure user details 
                  home.opening();
   	   	  		}else{
   	   	  			 alert('request failed');
   	   	  		}
   	   			//set the request directives back to false, to indicate event response been treated
   	   			signin.directives.request.password_signin=false;
   	   			//signin.passwordwidget.hideLoader();// hide the loader

   			},

   			id_signin: function(response){
   				signin.directives.request.id_signin= false;
   			},
   			accnt_activation: function(response){
   				signin.directives.request.accnt_activation=false;
   			},
            resignin: function(response){
               //create the user object
                alert(response);
               // CreatUser.init(response);// create the user object
               
                 signin.directives.request.resiginin=false;

                 //create a tempory member object to make request 
                 var userComplement= new Member();
                  userComplement.requestObj= new request(CreatFeature.home.request.config);
                             //create a temp obj
                 var temp=User.feature;
                 // create a list of all the feature to obtain
                 var i=1;
                 while(list=featureSynList['f'+i]){
                     if(temp[list]){
                        fList['f'+i]=list;
                     }
                     i++;
                 }
                 home.directives.request.config=true;
                 userComplement.request();
               }
   		}
	}

   
}


var home= {
     //directives is defined here.
	directives: {
       visited: false, //default value is false if this feature has not been visited.
       request: {
			config: false
		},
       widgets: true // species that all widgets are shown initially
	},

	request: {
		urls: function() {
			return home.directives.request.urls.config; 
		},
		data: {
         config: function(){
             return fList;
         }
      },
		response: {
			config: function(response){
				$('#mobile-features').after(response);
            // $('.f-result-display').css('display','none');
            home.directives.request.config=false;
             home.opening();

			},
			setfeaturedata: function(response){

			}
		}
	},

	widgets: {
		mobileSearch: function(){
            return $('#mobile-search');
		}, 
		desktopSearch: function(){
			return $('#desktop-search');
		},
		searchbox: function(){
			return $('#search-div');
		},
		desktopFeature: function(){
			return $('#desktop-feat');
		 },
		mobileFeature:  function(){
			return $('#mobile-features');
		 }
	 },
	  opening: function(){ 
		if(this.directives.visited==false){        
         //load the neccessary features
         User.feature_type= home;
         User.request;
         //close the signin widget
        signin.DOM().hide();
        $('.home-feature').fadeIn(2000);
        signin.widgets.wait.DOM().hide();
        signin.widgets.wait.isOpen=false;
        home.enableWidgets();
        $('.home-lg-feat').addClass('d-none');
        $('.home-lg-feat').addClass('d-md-block');
        $('#name-button-widget').addClass('d-inline-block');
		}else{
              home.enableWidgets();
		}
	},
	closing: function(){

	},
	close: function(){
      home.disableWidgets();
	},

	disableWidgets: function(){
		this.widgets.mobileSearch().css('display','none');
		this.widgets.desktopSearch().removeClass('d-md-block');
		this.widgets.searchbox().css('display','none');
		this.widgets.desktopFeature().removeClass('d-md-block');
		this.widgets.mobileFeature().css('display','none');
      $('.f-home-nav').css('display','none');
		this.directives.widgets= false// widgets are now disabled
	},
	enableWidgets: function(){
		this.widgets.mobileSearch().css('display','block');
		this.widgets.desktopSearch().addClass('d-md-block');
		this.widgets.searchbox().css('display','block');
		this.widgets.desktopFeature().addClass('d-md-block');
		this.widgets.mobileFeature().css('display','block');
      $('.f-home-nav').css('display','block');
		this.directives.widgets= false// widgets are now disabled
	},

}





var gallery = {

	directives: {
		visited: false

	},

	widgets: {

	},

	DOM: function() { 
		return $('#gallary-interface');
	},
	opening: function(){
      
	},
	close: function(){
        
	},
	disableWidgets: function(){
		this.DOM().css('display','none');
	},

	tool: {
		delete: function(){

		},
		upload: function(){

		}
	}
}


var result= {
   directives: {
      visited: false, 
      request: {
         config: false
      }
   },

   opening: function(){
      //display loader
      $('.f-home-result-icon .desktop-loader-cover').show();
      if(result.directives.visited=== false){

          //make request to obtain data 
          data= new request(CreatFeature.result.request.config); 
          User.requestObj= data;
          User.request();
      }else{
         //close the previous opened interface
          interfaceRegister.opened.close();
          featurelist.result.DOM().fadeIn(2000);           
      }

   },

   request: {
      urls: function() {
         return home.directives.request.urls.config; 
      },
      data: {
         config: function(){
             return { };
         }
      },
      response: {
         config: function(response){
         // configure the result interface

         
          interfaceRegister.opened.close();
          interfaceRegister.opened=result;
          featurelist.result.DOM().fadeIn(2000);  
         },
         setfeaturedata: function(response){

         }
      }
   }

}






var featurelist= {
	home: {
	   init: function(){
		  home.opening();
		},
		DOM: function(){
			return $('.f-home-home-icon');
		}
	},
	gallery: function(){
      alert('galary clicked');
		gallery.opening();
	},

   result: {
      init: function(){
         //check firstly if there is any pending request
         if(interfaceRegister.requestPending=== false){
            //open the loader for 
            result.opening();
         }else{
            //show dialogue box 
         }


      },

      DOM: function(){
         return $('.f-result-display');
      }
   }

}



