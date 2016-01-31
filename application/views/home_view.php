<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guestbook</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/stylesheets/bootstrap.min.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/stylesheets/bootstrap-responsive.min.css');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/stylesheets/style.css');?>"/>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>public/javascript/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>public/javascript/api/result.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>public/javascript/api/template.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>public/javascript/api/guestboard.js"></script>
  <script> 
  //Initiate the Guestboard Application
  $(function(){
    var guestboard = new Guestboard();
    //ajax call//
    $("form").submit(function(event){
      event.preventDefault();
      var first_name= this.firstname.value;
      var last_name=this.lastname.value;
      var e_mail=this.email.value;
      var comment=this.comment.value;
  
      $.ajax({
        type:"post",
        url: "<?php echo base_url();?>" + "home/create_data",
        dataType: 'json',
        data: {firstname: first_name, lastname: last_name,
          email: e_mail, comment:comment },
        success:function(res){
          if(res[0]['result'] == 1){
            $("#success-msg").html("<div class= alert alert-success fade in>" 
              + "<a href= '#'' class= 'close' data-dismiss= 'alert' aria-label='close'>"
              + "&times;</a>" +"Your guest information has been successfully saved!"+ 

              "</div>");
          
          }
          else {
            $("#error-msg").html("<div class='alert alert-danger text-center fade in'>"
              + "<a href= '#'' class= 'close' data-dismiss= 'alert' aria-label='close'>"
              + "&times;</a>"+"Please fill in all the required fields!" +

              "</div>");

           
            
          }
          // $.ajax({
          //   type:"get"
          //   url: 
          // })


          //adding information to the table
          // $('#guestlist > tbody:last-child').text(
          //   '<tr><td>'+ res.firstname +'</td>'+ 
          //   '<td>'+ res.lastname + '</td>' +
          //   '<td>'+ res.email + '</td>'+
          //   '<td>'+ res.comment + '</td>');
          } 
        });
      });
      return false;
    });
  </script>
</head>
<body>
  <h1> Guestbook </h1>
    <div>Company Name: H for Hope Independent Consultant </div>
      <div> Add a new guest: </div>
      <form class="form-horizontal" id="create_guest" method="post" action="<?=site_url('home/create_data')?>">
        <div class="control-group">
          <label class="control-label">First name: </label>
          <div class="controls">
            <input type="text" name="firstname" class="input-xlarge" size="64"/>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Last name: </label>
          <div class="controls">
            <input type="text" name="lastname" class="input-xlarge" size="64"/>
          </div>
        </div>


        <div class="control-group">
          <label class="control-label">Email: </label>
          <div class="controls">
            <input type="text" name="email" class="input-xlarge" size="64"/>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Comment: </label>
          <div class="controls">
            <input type="text" name="comment" class="input-xlarge"/>
          </div>
        </div>

        <div class="control-group">
          <div class="controls">
            <input type="submit" id="send" value="Add" class="btn btn-primary"/>
          </div>
        </div>
      </form> 
      <div id="success-msg"></div>
      <div id="error-msg"></div>
       
      <div class="table-responsive" >
        <table class="table table-hover" id="guestlist">
          <tbody>
            <tr>
              <th class="small-column"> User ID </th>
              <th> First Name </th>
              <th> Last Name </th>
              <th> Email </th>
              <th> Comment </th>
              <th> Edit/Delete </th>
            </tr>
          </tbody>
            <?php foreach($guests ->result() as $row) { ?>
            <tr>
              <td><?php echo $row->id;?></td>
              <td><?php echo $row->firstname;?></td>
              <td><?php echo $row->lastname;?></td>
              <td><?php echo $row->email;?></td>
              <td><?php echo $row->comment?></td>
              <td><button><a href="<?php echo base_url();?>/home/delete_data/<?php echo $row->id; ?>">Delete</a> </button></td>
            </tr>
            <?php } ?>
        </table>
      </div>

  <footer> &copy; Holly Liu - 2016</footer>
</body>
</html>