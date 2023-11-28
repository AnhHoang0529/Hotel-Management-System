<!DOCTYPE html>

<?php include('./header.php'); ?>
<?php include('./db_connect.php'); ?>

<style>
	body{
		width: 100%;
	    height: calc(100%);
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:#f8f8f8;
	}
	#login-right{
		position: absolute;
		right:0;
		width:40%;
		height: calc(100%);
		background:#f8f8f8;
		display: flex;
		align-items: center;
	}
	#login-left{
		position: absolute;
		left:0;
		width:60%;
		height: calc(100%);
		background:#00000061;
		display: flex;
		align-items: center;
	}
	#login-right .card{
		margin: auto
	}
	.logo {
	    margin: auto;
	    font-size: 8rem;
	    background: white;
	    padding: .5em 0.8em;
	    border-radius: 50% 50%;
	    color: #000000b3;
	}
	#login-left {
	  background-repeat: no-repeat;
	  background-size: cover;
	}
        .error{
            background: #f2dede;
            color: #a94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
        }
 </style>

<body>
    <main id="main" class="alert-info">
        <div id="login-left">
            <img src="assets/img/photos/3.png" style="height:100%; width:100%"> 		
        </div>
  		
  	<div id="login-right">
            <div class="card col-md-8">
  		<div class="card-body">
                    <form id="login-form" method="post" action="xuli_login.php">
                        <?php 
                        $error = filter_input(INPUT_GET, 'error');
                        if (isset($error)){ ?>
                        <p class="error"><?php echo $error; ?></p>
                        <?php } ?>
  			<div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control">
  			</div>
  			<div class="form-group">
                            <label for="password" class="control-label">Password</label>
  				<input type="password" id="password" name="password" class="form-control">
  			</div>
  			<center><button name="login" class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
                    </form>
  		</div>
            </div>
  	</div>
    </main>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>

<script>

</script>