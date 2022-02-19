
//function that receives a javascript object and returns a javascript object

/* FORM ATTRIBUTES
  - url
  - form
  -type(post/get)
  -success(data)
 */

// to use this script, submitFoemJson should be called with an object containing
 // the fuction to execute  if submission was successfull
 // the id of the form
  var timeVar;
  var tempObj;
   function getFormData(id){
      var myObj={
        formId: id
         }
       $('#'+id+' [name]').each(function(){
          myObj[''+$(this).attr('name')]=''+$(this).val();
      })

      return myObj;
  }

//submitFormJSon takes the url and also the data as an object
function submitFormJson(obj){
  
  if(typeof(obj.form)==="string"){
    obj.data=getFormData(obj.form);
  }

 $.ajax({
  dataType: "json",
  url: obj.url,
  type: obj.type,
  data: obj.data,
  cache: false,
  success: function(response){
  	 obj.success(response);
  },
  error: function(request, error){
    alert(error);
  } 
 });
}

function removeTooltip(){
    tempObj.tooltip('dispose');
    tempObj.removeAttr('title');
    tempObj.removeAttr('data-toggle','tooltip');
    timeVar=clearTimeout(timeVar);
    
}

function validated_message(obj, message){
  obj.attr('data-toggle','tooltip');
  obj.attr('title', message);
  obj.attr('data-placement','top');
  $('[data-toggle="tooltip"]').tooltip();
  obj.mouseover();
  tempObj=obj;
  timeVar = window.setTimeout(removeTooltip, 3000);
   
}


function validate(obj){
  var status= true;
     $('#'+obj.form+' [name]').each(function(){
          if($(this).val()==""){
            if($(this).attr('data-rule') =='notrequired'){
            }else{
              validated_message($(this),'enter '+$(this).attr('placeholder'));
              status= false;
               return false;
            }
         }
         multiple=true;
  })

 if(status== true){
   //execute all the formatted data
   try{
    if(obj.formatted){
     var i=1;
     var res=obj['formatted']['value'+i]['applyRule']();
      if(res== false){
        return false;
      }
      while(res){
        i++;
        try{
          var res=obj['formatted']['value'+i]['applyRule'](); 
           if(res== false){
            return false; 
          }
        }catch(err){
          res=false;
          //alert(err);
        }
      }
   }
   }catch(err){
      //alert(err);
      var n;
   }

  }else{
    return false;
  }
  return true;
}