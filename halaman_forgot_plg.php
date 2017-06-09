<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<style>
	body{
		background:url(http://allswalls.com/images/parking-wallpaper-1.jpg);
		background-size:cover;
		
	}
</style>
<script>
	$(document).ready(function(){
		$('#reset-form').submit(function(){
			$.ajax({
				type: 'POST',
				url: 'proses_reset_pass_plg.php',
				data: $('#reset-form').serialize(),
				success: function(hasil){
					if(hasil=='yes'){
						$('#reset-form input').val('');
						$('#notif').html('<div class="alert alert-success text-left"><button type="button" class="close" data-dismiss="alert">&times;</button>Password berhasil diubah!</div>');
						
					}
					else{
						$('#notif').html(hasil);
					}
				}
			});
				return false;
		});
	});
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<nav class="navbar navbar-atas">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="utama.php" class="navbar-brand"><span class="glyphicon glyphicon-home"></span> Home</a>
		</div>
	</div>
</nav>
 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Pelanggan</h2>
				  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form id="reset-form" role="form" autocomplete="off" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="Your email address" class="form-control"  type="email" required >
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                          <input id="pass" name="pass" placeholder="New password" class="form-control"  type="password" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                          <input id="pass" name="cpass" placeholder="Confirm password" class="form-control"  type="password" required>
                        </div>
                      </div>
					  
					  <div class="form-group" id="notif"></div>
					  
                      <div class="form-group">
                        <button name="recover-submit" class="btn btn-lg btn-primary btn-block" type="submit"> Reset Password</button>
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>

</body>
</html>
