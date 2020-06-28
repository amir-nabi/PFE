<!DOCTYPE html>
<html>
    <head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<style>
body{
	background-image: url("/login_admin.jpg");
	
	background-repeat: no-repeat;
	background-size: cover;
}
    .panel-heading {
    padding: 5px 15px;
}

.panel-footer {
	padding: 1px 15px;
	color: #A0A0A0;
}
.panel-body{
	background-image: url("/lock.jpg") ;
	background-repeat: no-repeat;
	background-position: center;
}

.profile-img {
	width: 96px;
	height: 96px;
	margin: 0 auto 10px;
	display: block;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
}
</style>
    </head>
<!------ Include the above in your HEAD tag ---------->
<body>

    <div class="container" style="margin-top:200px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-success">
					<div class="panel-heading" style="text-align:center">
						<strong>Administration</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="{{route('postloginadmin')}}" method="POST">
                            @csrf
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="image admin">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Adresse e-mail" name="email" type="email" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Mot de passe" name="password" type="password" required="">
											</div>
										</div>
										<div class="form-group">
                                        <span class="group-btn">     
                <button type="submit" class="btn btn-success btn-md" style="width:100%">Connexion <i class="fa fa-sign-in"></i></button>
            </span>										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
                </div>
			</div>
		</div>
    </div>
</body>
</html>