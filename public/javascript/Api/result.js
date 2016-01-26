var Result = function(){
  
  this.__construct = function(){
    console.log("Result created");
  };
  
  this.success = function(){
    console.log("success");
  };

  this.failure = function(){
    console.log("failed");
  };


};