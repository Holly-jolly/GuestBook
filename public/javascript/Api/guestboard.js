var Guestboard = function(){
  
  this.__construct = function(){
    console.log("Guestboard created");
    Template= new Template();
    Event = new Event();
    Result = new Result();
    console.log(template.guest_list({id:1, content: "this is a testing"}));
  };

  var load_list =function(){

  };

  var create_list =function(){

  };


};