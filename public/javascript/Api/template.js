var Template = function(){
  
  this.__construct = function(){
    console.log("Template created");
  };
  
  this.guest_list = function(obj){
    var output = "<div id=" + obj.id + ">";
    output+=obj.content;
    output+="</div>";
    return output;
  };


  this.__construct();


};
