/*
   method request takes the request object.
 */

var url= {
    home: {
        config: "./serverScripts/home/configure.php",
        setfeaturedata: null
    },
    signin: {
        password_signin: "./serverScripts/signin/passwordSignin.php",
        id_signin: null,
        accnt_activation: null,
        resignin: "./serverScripts/signin/reaccessSystem.php"
    }
}

 function Configuration(){
     this.themecolor;// default value is the official school theme color. 
     this.isComposite=false;//receive a booleen value if its been made composite, default value is false;
     this.composition={};// input value is an object containing the compositions that make up the element.
     this.compositionqtn;
 }

function School(sname,addressObj,scolor){
     var name=sname;
     var address=addressObj;
     var colors=scolor;
     this.getname=function(){return name;};
     this.getaddress=function(){return address;};
     this.getcolors=function(){return colors;};
}


function Member(school_obj,firstname,middlename,lastname){
    this.firstname;
    this.middlename;
    this.lastname;
    this.idno="ere444";
    this.email;
    this.school;
    this.password;
    this.ip="323232";
    this.requestObj;
    this.featureList={};
if(firstname){
    this.firstname=firstname;
    this.middlename= middlename;
    this.lastname=lastname;
    this.school= school_obj;
  }

 }


 Member.prototype.request= function(){
          $.ajax({
            url:this.requestObj.url,
            dataType: this.requestObj.dataType,
            data: this.requestObj.data,
            success: this.requestObj.handler,
        })
  } 
  

Director.prototype.details= new Member();
Director.prototype.constructor= Director;
function Director(school_obj,firstname,middlename,lastname){

        this.feature={
        activities: {
            widgets: {
                tools: {

                }
            },
            enabled: true
        },
        setting: {
            widgets: {
                tools: {

                }
            },
            enabled: true
         },
        home:  {
            widgets: {
                tools: {

                }
            },
            enabled: true
         },
         entrance: {
            widgets: {
                tools: {

                }
            },
            enabled: true
         },

         controlpanel: {
            widgets: {
                tools: {

                }
            },
            enabled: true
         },
         message: {
            widgets: {
                tools: {

                }
            },
            enabled: true
         },
         theme: {
            widgets: {
                tools: {

                }
            },
            enabled: true
         }
    }
    if(firstname){
        Member.call(this, school_obj,firstname,middlename,lastname); 
    } 
}


Teacher.prototype.details= new Member();
Teacher.prototype.constructor=Teacher;
function Teacher(school_obj,firstname,middlename,lastname){
    if(firstname){
        Member.call(this, school_obj,firstname,middlename,lastname);
    }
    this.feature={
        result: {
            widgets: {
                tools : {

                }
            },
            enabled: true
        },
        setting: {
            widgets: {
                tools : {

                }
            },
            enabled: true
        },
        result: {
            widgets: {
                tools : {

                }
            },
            enabled: true
        }
    } 
}

Principal.prototype.details= new Member();
Principal.prototype.constructor= Principal;
function Principal(school_obj,firstname,middlename,lastname){
    if (firstname) {
        Member.call(this, school_obj,firstname,middlename,lastname);
    }
    this.feature={

        activities: {
            widgets: {
                tools: {
                    
                }
            }, 
            enabled: true
        },
        setting: {
            widgets: {
                tools: {

                }
            },
            enabled: true
        },
        result: {
            widgets: {
                tools: {

                }
            },
            enabled: true
        }
    }
}

Administrator.prototype.details= new Member();
Administrator.prototype.constructor= Administrator;
function Administrator(school_obj,firstname,middlename,lastname){
     Member.call(this, school_obj,firstname,middlename,lastname);
}

GeneralSupervisor.prototype.details = new GeneralSupervisor();
GeneralSupervisor.prototype.constructor= GeneralSupervisor;
function GeneralSupervisor(school_obj,firstname,middlename,lastname){
    Member.call(this, school_obj,firstname,middlename,lastname);
}




//request class
function request(obj){
        this.data= {
            val: obj.data,
            id:     "43434",
            ip:  "878989"
        };
        this.url=obj.url;
        this.handler= obj.handler;
        this.dataType=obj.dataType;
        this.type=obj.type;
}


function f_home(){

    this.config= {
            widgets: {
                tools: {

                }
            },
            enabled: true,
            url: {
                config: null,
                setfeaturedata: null
            }
    },
    this.widgets = {

    }
}



function f_reset_pass(){
    this.config = {
            widgets: {
                tools: {

                }
            },
            enabled: true,
            url: {

            }
    },
    this.widgets = {

    }
}

function f_message(){
    this.config = {
            widgets: {
                tools: {

                }
            },
            enabled: true,
            url: {

            }
    },
    this.widgets = {

    }
}

    
 function f_controlpanel(){
    this.config = {
            widgets: {
                tools: {

                }
            },
            enabled: true,
            url: {

            }
    },
    this.widgets = {

    }
 }

 function f_setting(){
    this.config = {
            widgets: {
                tools: {

                }
            },
            enabled: true,
            url: {

            }
    },
    this.widgets = {

    }
 }

 function f_theme(){
    this.config = {
            widgets: {
                tools: {

                }
            },
            enabled: true,
            url: {

            }
    },
    this.widgets = {

    }
 }
 
 function f_activities(){
    this.config = {
            widgets: {
                tools: {

                }
            },
            enabled: true,
            url: {

            }
    },
    this.widgets = {

    }
 }

 function f_result(){
    this.config = {
            widgets: {
                tools: {

                }
            },
            enabled: true,
            url: {

            }
    },
    this.widgets = {

    }
 }

function f_desk(){
    this.config = {
            widgets: {
                tools: {

                }
            },
            enabled: true,
            url: {

            }
    },
    this.widgets = {

    }
 }
  

function f_entrance(){
    this.config = {
            widgets: {
                tools: {

                }
            },
            enabled: true,
            url: {

            }
    },
    this.widgets = {

    }
 }


function f_added(){
    this.config = {
            widgets: {
                tools: {

                }
            },
            enabled: true,
            url: {

            }
    },
    this.widgets = {

    }

 }


 var featureSynList= {
    f1: "home",
    f2: "setting",
    f3: "activities",
    f4: "result",
    f5: "desk",
    f6: "controlpanel",
    f7: "theme",
    f8: "entrance",
    f9: "message",
    f10: "resetpass",
    f11: "added"
}

var CreatFeature ={
    signin: {

        request: {
            id_signin: {
                data: signin.request.data.id_signin(),
                //handler
                handler: signin.request.response.id_signin,
                //url
                url: url.signin.id_signin,
                dataType: "json",
                type: "POST"
            },
            password_signin: {
                data: signin.request.data.password_signin(),
                //handler
                handler: signin.request.response.password_signin,
                //url
                url: url.signin.password_signin,
                dataType: "json",
                type: "POST"
            },
            accnt_activation: {
                data: signin.request.data.accnt_activation(),
                //handler
                handler: signin.request.response.accnt_activation,
                //url
                url: url.signin.accnt_activation,
                dataType: "json",
                type: "POST"
            },
            resignin: {
                data: signin.request.data.resignin,
                handler: signin.request.response.resignin,
                url: url.signin.resignin,
                dataType: "json",
                type: "POST"
            }
        }

    },

    home: {
        //this is enables the configuration of the user allowed features
        config: function(){
            return (new f_home()).config;
        },
    // used to create an object of a features widget and allowed usage tools for user
        widgets: function(){
            return (new f_home()).widgets;
        },
        icon: {
            
        },

        request: {
            //the home configuration request
            config: {
                //data
                data: home.request.data.config(),
                //handler
                handler: home.request.response.config,
                //url
                url: url.home.config,
                dataType: "html",
                type: "GET"
            },

            //a request to set the user data when selected
            setfeaturedata: {
                 //data
                data: home.request.data.setfeaturedata,
                //handler
                handler: signin.request.response.setfeaturedata,
                //url
                url: url.home.setfeaturedata,
                dataType: "json",
                type: "POST"
            }
        }
    },

    result: {
        //this is enables the configuration of the user allowed features
        config: function(){
            return (new f_reset_pass()).config;
        },
    // used to create an object of a features widget and allowed usage tools for user
        widgets: function(){
            return (new f_reset_pass()).widgets;
        },
        request: {
            config: {
                                //data
                data: home.request.data.config(),
                //handler
                handler: home.request.response.config,
                //url
                url: url.home.config,
                dataType: "jsonp",
                type: "GET"
            }
        }
    },
    message: {
        config: function(){
            return (new f_message()).config;
        },
     // used to create an object of a features widget and allowed usage tools for user
        widgets: function(){
            return (new f_message()).widgets;
        }
    },
    setting: {

        config: function(){
            return (new f_setting()).config;
        },
     // used to create an object of a features widget and allowed usage tools for user
        widgets: function(){
            return (new f_setting()).widgets;
        }
    },

    activities: {
        config: function(){
            return (new f_activities()).config;
        },
     // used to create an object of a features widget and allowed usage tools for user
        widgets: function(){
            return (new f_activities()).widgets;
        }
    },

    result: {
        config: function(){
            return (new f_result()).config;
        },
     // used to create an object of a features widget and allowed usage tools for user
        widgets: function(){
            return (new f_result()).widgets;
        }
    },
    desk: {
        config: function(){
            return (new f_desk()).config;
        },
     // used to create an object of a features widget and allowed usage tools for user
        widgets: function(){
            return (new f_desk()).widgets;
        }
    },
    controlpanel: {
        config: function(){
            return (new f_controlpanel()).config;
        },
     // used to create an object of a features widget and allowed usage tools for user
        widgets: function(){
            return (new f_controlpanel()).widgets;
        }
    },
    entrance: {
        config: function(){
            return (new f_entrance()).config;
        },
     // used to create an object of a features widget and allowed usage tools for user
        widgets: function(){
            return (new f_entrance()).widgets;
        }
    },

    theme: {
        config: function(){
            return (new f_theme()).config;
        },
     // used to create an object of a features widget and allowed usage tools for user
        widgets: function(){
            return (new f_theme()).widgets;
        }
    },
    
    added: {
        config: function(){
            return (new f_added()).config;
        },
     // used to create an object of a features widget and allowed usage tools for user
        widgets: function(){
            return (new f_added()).widgets;
        }
    }  
}

var position= {
    Director: function(){
        return new Director();
    },
    Principal: function(){
         return new Principal();
    },
    Teacher: function(){
        return new Teacher();
    },

    Administrator: function(){
        return new Administrator();
    },

    GeneralSupervisor: function(){
        return new GeneralSupervisor();
    },

}
 

var CreatUser= {
    Director: function(school_obj,firstname,middlename,lastname){
        return new Director(school_obj,firstname,middlename,lastname);
    },
    Principal: function(school_obj,firstname,middlename,lastname){
         return new Principal(school_obj,firstname,middlename,lastname);
    },
    Teacher: function(school_obj,firstname,middlename,lastname){
        return new Teacher(school_obj,firstname,middlename,lastname);
    },

    Administrator: function(school_obj,firstname,middlename,lastname){
        return new Administrator(school_obj,firstname,middlename,lastname);
    },

    GeneralSupervisor: function(school_obj,firstname,middlename,lastname){
        return new GeneralSupervisor(school_obj,firstname,middlename,lastname);
    },

     //this funtion initiates the creation of a particular user objects, it takes a configuration object;
    init: function(obj){
        //create a user object and set all features. the function receives the user object description

        //create an object of the highest assigned rank
         User= CreatUser[''+obj['configuration']['composition']['f'+obj.configuration.compositionqtn]](obj.school, obj.details.firstname, obj.details.middlename, obj.details.lastname);
         User.configuration = new Configuration();
         User.configuration.compositionqtn=obj.configuration.compositionqtn;
         User.configuration.themecolor=obj.configuration.themecolor;
         if(obj.configuration.isComposite==="true"){
            User.configuration.isComposite=true;
            User['configuration']['composition']['f1']= position[''+obj['configuration']['composition']['f1']](); 
        for(var i=1; i<=(obj.configuration.compositionqtn -1);i++){
            //add the other position objects for composite users
            User['configuration']['composition']['f'+i]= position[''+obj['configuration']['composition']['f'+i]](); 
         }
         
        }

        //feature synchronization, tries to assign any possible feature that has been added to the default features of a particular users
        CreatUser.synfeature(); 



        //This is stage enables every additional feature and disables default features which are enabled by default 
        var x=1;
        while(obj['configuration']["feature"]['f'+x]){
            var temp= obj['configuration']["feature"]['f'+x]['name'];
          
            //check if the feature object belong to the default position features
            if(User['feature'][temp]){
                User['feature'][temp]['enabled']=obj['configuration']["feature"]['f'+x]['status'];
            }else{
                //create a new object of that particular feature
                 User['feature'][temp]= new CreatFeature[temp]['config']();
                 User['feature'][temp]['enabled']= obj['configuration']["feature"]['f'+x]['status'];
            }
            
            ++x;
        }


       //this stage set's home page features
        var i=1;
        var h=0;
        var count_dom1=1;
        var count_dom2=1;
        var temp_name;
        var dom1="";
        var dom2='<div class="carousel-item"><div class="card-deck p-3" style="justify-content: center;">';
        while(featureSynList["f"+i]){
            //check if the feature is found in the user object
            var feat=featureSynList["f"+i];
            if(User.feature[feat]){
                //creatFeature list
                User['featureList']['f'+i]= temp;
                //for desktop create a new element 
                if(count_dom1 < 6){

                 dom1+='<div class="card box-shadow f-home-'+feat+'-icon" style="max-width: 250px;">'+
                    '<a data-toggle="modal" class="feature">'+
                    '<img class="card-img-top" src="'+$('.f-img-link-container img.'+feat).attr('src')+'" alt="'+feat+'">'+
                    '<div class="card-body text-center bg-white">'+
                    '<small class="text-muted font-weight-light">'+feat+'</small></div>'+
                    '<cite class="f-home-custom-hide">'+feat+'</cite></a><div class="desktop-loader-cover"><div style="margin: auto; width: 51.2px;"><div class="spinner"><div class="spinner-circle spinner-circle-outer"></div><div class="spinner-circle-off spinner-circle-inner"></div><div class="spinner-circle spinner-circle-single-1"></div><div class="spinner-circle spinner-circle-single-2"></div><div class="text">..working..</div></div></div> </div></div>';
                            //place deskto feature icons on the home screen
                    count_dom1++;
                }else{

                    if(i===6){ 
                        temp_name= "control panel" 
                    }else{
                        temp_name=feat;
                    }

                    if(count_dom2===6 ){
                        //append the initial element
                        dom2+='</div></div>';
                        $('.f-home-icon-append').append(dom2);
                        dom2='<div class="carousel-item"><div class="card-deck p-3" style="justify-content: center;">';
                            count_dom2=1;
                    }else{}

                    dom2+= '<div class="card box-shadow f-home-'+feat+'-icon" style="max-width: 250px;">'+
                    '<a data-toggle="modal" class="feature">'+
                    '<img class="card-img-top" src="'+$('.f-img-link-container img.'+feat).attr('src')+'" alt="'+feat+'">'+
                    '<div class="card-body text-center bg-white">'+
                    '<small class="text-muted font-weight-light">'+temp_name+'</small></div>'+
                    '<cite class="f-home-custom-hide">'+feat+'</cite></a> <div class="desktop-loader-cover"> <div style="margin: auto; width: 51.2px;"><div class="spinner"><div class="spinner-circle spinner-circle-outer"></div><div class="spinner-circle-off spinner-circle-inner"></div><div class="spinner-circle spinner-circle-single-1"></div><div class="spinner-circle spinner-circle-single-2"></div><div class="text">..working..</div></div></div></div></div>';
                    count_dom2++;
                }
                //do this for mobile 
                //show only the allowed icons,
                $('.f-home-'+temp+'-icon').show();
                h++;
            }
            i++;
        }
       $('.f-home-icon-dom1').append(dom1);
       dom2+="</div></div>";
       $('.f-home-icon-append').append(dom2);

    },
    synfeature: function(){
          if(User.configuration.isComposite===true){
             for(var i=1; i < User.configuration.compositionqtn; i++){
                var j=1;
                while(featureSynList['f'+j]){
                     var temp=featureSynList['f'+j];
                     if(User['configuration']["composition"]["f"+i]['feature'][temp]){
                            //check if this feature is present in the User.feature obj
                            if(User.feature[temp]){
                            }else{
                                User.feature[temp]= User['configuration']["composition"]["f"+i]['feature'][temp];
                            }
                     }
                      ++j;
                }
             }

          }else{

          }

    }
}