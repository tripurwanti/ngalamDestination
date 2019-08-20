<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<?php include ('head.php'); ?>
</head>
<body>
	<div id="page">
		<!-- header -->
		<?php include "header.php"; ?>
		<!-- end header -->

		<hr style="display: block;
		margin-top: 0.5em;
		margin-bottom: 0.5em;
		margin-left: auto;
		margin-right: auto;
		/*border-style: inset;*/
		border-width: 4px;

		">

		<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-sm-6 col-xs-6 col-md-offset-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 style="text-align: center; margin-top: 20px;">Verifikasi Username</h3>
                            </div>
                            <br/>
                        	<br/>
                            <div align="center" class="card-body card-block">
                                <form method="post" action="<?php echo site_url('c_user/forget_pass/') ?>">
                                    
                                    <div class="form-group">
                                        <!-- <label for="exampleInputPassword1">Username</label> -->
                                        <input type="text" class="form-control" name="username" placeholder="Input Username">
                                    </div>
                                    
                                    <button style="" type="submit" class="btn btn-danger">Verifikasi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


		<?php include "footer.php"; ?>

	</div>
</body>
</html>