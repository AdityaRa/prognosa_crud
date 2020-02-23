<?php include_once('config.php');
if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
	extract($_REQUEST);
	if($seksi==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=un');
		exit;
	}elseif($bulan==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=ue');
		exit;
	}elseif($bruto==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=up');
		exit;
	}elseif($restitusi==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=ar');
		exit;
	}else{
		
		$userCount	=	$db->getQueryCount('users','id');
		if($userCount[0]['total']<20){
			$data	=	array(
							'seksi'=>$seksi,
							'bulan'=>$bulan,
							'bruto'=>$bruto,
							'restitusi'=>$restitusi,
						);
			$insert	=	$db->insert('users',$data);
			if($insert){
				header('location:browse-users.php?msg=ras');
				exit;
			}else{
				header('location:browse-users.php?msg=rna');
				exit;
			}
		}else{
			header('location:'.$_SERVER['PHP_SELF'].'?msg=dsd');
			exit;
		}
	}
}
?>

<!doctype html>

<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Prognosa KPP Pratama Sukabumi</title>

	

	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

	<!--[if lt IE 9]>

	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<![endif]-->

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	

	<!-- Global site tag (gtag.js) - Google Analytics -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131906273-1"></script>

	<script>

	  window.dataLayer = window.dataLayer || [];

	  function gtag(){dataLayer.push(arguments);}

	  gtag('js', new Date());

	  gtag('config', 'UA-131906273-1');

	</script>

</head>



<body>

	

	<div class="bg-light border-bottom shadow-sm sticky-top">

		<div class="container">

			<header class="blog-header py-1">

				<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand text-muted p-0 mr-2" href="pajak.go.id"><img src='djp.png' alt='Direktorat Jenderal Pajak'></a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">

						<ul class="navbar-nav mr-auto">

							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-17" class="active nav-item"><a title="Home" href="" class="nav-link">Home</a></li>

						</ul>
<!-- Tombol Search -->
						<form method="get" action="pajak.go.id" class="form-inline my-2 my-lg-0">

							<div class="input-group input-group-md">

								<input type="text" class="form-control search-width" name="s" id="search" value="" placeholder="Search..." aria-label="Search">

								<div class="input-group-append">

									<button type="submit" class="btn btn-primary" id="searchBtn"><i class="fa fa-search"></i></button>

								</div>

							</div>

						</form>

					</div>

				</nav>

			</header>

		</div> <!--/.container-->

	</div>

	<div class="container my-4">

		<!-- Nothings to do here -->

	</div>

	

   	<div class="container">

		<h1><a href="">Prognosa KPP Pratama Sukabumi</a></h1>

		<?php

		if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="un"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User name is mandatory field!</div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ue"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User email is mandatory field!</div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User phone is mandatory field!</div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ar"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Restitusi is mandatory field!</div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ras"){

			echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record added successfully!</div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rna"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Record not added <strong>Please try again!</strong></div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="dsd"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Please delete a user and then try again <strong>We set limit for security reasons!</strong></div>';

		}

		?>

		<div class="card">

			<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Add Data</strong> <a href="browse-users.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Hasil Prognosa</a></div>

			<div class="card-body">

				

				<div class="col-sm-6">

					<h5 class="card-title">Kolom dengan  <span class="text-danger">*</span> harus diisi!</h5>

					<form method="post">

						<div class="form-group">

							<label>Seksi <span class="text-danger">*</span></label>

							<!-- <input type="text" name="seksi" id="seksi" class="form-control" placeholder="Enter Nama Seksi" required> -->
							<select name="seksi" id="seksi" class="form-control">
							<option value="Seksi Pengawasan & Konsultasi II"> Seksi Pengawasan & Konsultasi II</option>
							<option value="Seksi Pengawasan & Konsultasi III">Seksi Pengawasan & Konsultasi III</option>
							<option value="Seksi Pengawasan & Konsultasi IV">Seksi Pengawasan & Konsultasi IV</option>
							<option value="Seksi Ekstensifikasi & Penyuluhan">Seksi Ekstensifikasi & Penyuluhanl</option>
							<option value="Seksi Penagihan">Seksi Penagihan</option>
							<option value="Seksi Pemeriksaan">Seksi Pemeriksaan</option>
							</select>
						</div>

						<div class="form-group">

							<label>Bulan <span class="text-danger">*</span></label>

							<!-- <input type="text" name="bulan" id="bulan" class="form-control" placeholder="Enter Bulan Prognosa" required> -->
							<select name="bulan" id="bulan" class="form-control">
							<option value="januari">Januari</option>
							<option value="februari">Februari</option>
							<option value="Maret">Maret</option>
							<option value="April">April</option>
							<option value="Mei">Mei</option>
							<option value="Juni">Juni</option>
							<option value="Juli">Juli</option>
							<option value="Agustus">Agustus</option>
							<option value="September">September</option>
							<option value="Oktober">Oktober</option>
							<option value="November">November</option>
							<option value="Desember">Desember</option>

							</select>

						</div>

						<div class="form-group">

							<label>Penerimaan Bruto <span class="text-danger">*</span></label>

							<input type="text"   class="text form-control" name="bruto" id="bruto"  placeholder="Enter Penerimaan Bruto" required>

						</div>

						<div class="form-group">

							<label>Restitusi <span class="text-danger">*</span></label>

							<input type="text"   class="text form-control" name="restitusi" id="restitusi"  placeholder="Enter restitusi" required>

						</div>

						<div class="form-group">

							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Simpan Data</button>

						</div>

					</form>

				</div>

			</div>

		</div>

	</div>

    

	
	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
	<script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>
	<script>
		$(document).ready(function() {
		jQuery(function($){
			  var input = $('[type=tel]')
			  input.mobilePhoneNumber({allowPhoneWithoutPrefix: '+1'});
			  input.bind('country.mobilePhoneNumber', function(e, country) {
				$('.country').text(country || '')
			  })
			 });
		});
	</script>

    

</body>

</html>