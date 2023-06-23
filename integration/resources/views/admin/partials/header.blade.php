<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="{!! url('img/favicon.png') !!}" />

	<link rel="canonical" href="dashboard-ecommerce.html" />

	<title>Elwin Life - Administrator</title>

	<!-- Choose your prefered color scheme -->
	<!-- <link href="css/light.css" rel="stylesheet"> -->
	<!-- <link href="css/dark.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link class="js-stylesheet" href="{!! url('css/light.css') !!}" rel="stylesheet">
	<script src="{!! url('js/settings.js') !!}"></script>
	<style>
		body {
			opacity: 0;
		}
	</style>
	<!-- END SETTINGS -->
<!--<script async src="{!! url('www.googletagmanager.com/gtag/jse143?id=UA-120946860-10') !!}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120946860-10', { 'anonymize_ip': true });
</script> -->
<style>
	.file-upload input[type="file"] {
   display: none;
}

.file-upload label {
   display: block;
   padding: 10px 15px;
   background: #1e90ff;
   color: #fff;
   border-radius: 5px;
   cursor: pointer;
   font-weight: bold;
   text-align: center;
}

.file-upload label:hover {
   background: #007fff;
}

/* To hide file name */
.inputfile {
   opacity: 0;
   position: absolute;
   top: 0;
}
</style>
</head>