$(function(){

var Event = function(){
  
  this.__construct = function(){
    console.log("Event created");
    Result = new Result();
    create_guest();
    update_guest();
    delete_guest();
  };

  var create_guest = function(){
    $("form").on('submit', function(e){
       e.preventDefault();
      var url = " http://localhost:8888/guestbook/api/create";
      var postData = $(this).serialize();

      $.post(url, postData, function(response){
        if(response.result == 1){ 
          
        }else{
          Result.failure();
        }

      },
       'json');
     


    //   {  //make a POST request with Ajax
    //     type:"post",
    //     url: "http://localhost:8888/guestbook/api/create_guest",
    //     data: $(this).serialize(),
    //     dataType: 'text',
    //     cache:false,
    //     success: function(object){
    //       console.log('success');
          
    //     }
    //   });  
    //   return false; //don't submit the form 
     });
  };

  var update_guest = function(){
    
  };
 
  var delete_guest = function(){

  };


};
});


