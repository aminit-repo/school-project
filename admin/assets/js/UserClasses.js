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
            success: this.requestObj.handler
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

