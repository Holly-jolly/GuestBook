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
</head>
<body>
  <h1> Guestbook </h1>
    <div>Company Name: H for Hope Independent Consultant </div>
      <div> Guest Info: </div>
      <form class="form-horizontal" id="update_guest" method="post" action="<?=site_url('home/update_data')?>">
        
        <?php foreach($guest_info as $row){?>
        <div class="control-group">
          <div class="controls">
            <input type="hidden" name="userID" value="<?php echo $row->id; ?>" class="input-xlarge" />
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">First name: </label>
          <div class="controls">
            <input type="text" name="firstname" value="<?php echo $row->firstname; ?>"class="input-xlarge" size="64"/>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Last name: </label>
          <div class="controls">
            <input type="text" name="lastname" value="<?php echo $row->lastname; ?>" class="input-xlarge" size="64"/>
          </div>
        </div>


        <div class="control-group">
          <label class="control-label">Email: </label>
          <div class="controls">
            <input type="text" name="email" value="<?php echo $row->email; ?>" class="input-xlarge" size="64"/>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Comment: </label>
          <div class="controls">
            <input type="text" name="comment" value="<?php echo $row->comment; ?>"class="input-xlarge"/>
          </div>
        </div>

        <div class="control-group">
          <div class="controls">
            <input type="submit" id="update" value="update" class="btn btn-primary"/>
            <button class="btn btn-primary">
              <a href="<?php echo base_url('/home')?>">Cancel</a> 
            </button> 
          </div>
        </div>

       
        <?php } ?>
      </form> 
      
</html>
