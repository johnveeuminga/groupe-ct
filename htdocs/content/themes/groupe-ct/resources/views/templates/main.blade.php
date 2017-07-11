<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N49C66Q');</script>
	<!-- End Google Tag Manager -->


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="{{ themosis_assets() }}/images/favicon/Favicon_16X16.png" />
	<link rel="icon" type="image/x-icon" href="{{ themosis_assets() }}/images/favicon/Favicon_16X16.png" />
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ themosis_assets() }}/images/favicon/Favicon_57x57.png">
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ themosis_assets() }}/images/favicon/Favicon_76x76.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ themosis_assets() }}/images/favicon/Favicon_120x120.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ themosis_assets() }}/images/favicon/Favicon_152x152.png">
	<link rel="apple-touch-icon-precomposed" sizes="180x180" href="{{ themosis_assets() }}/images/favicon/Favicon_180x180.png">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>

	@if (get_the_ID() === PageHelper::get_page_id(PageHelper::PAGE_4_6_CARRIERE))
		<style>
			.lity-iframe-container {
				padding-top: 90%; /* 4:3 ratio */
			}
		</style>
	@endif
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N49C66Q" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
	{{--<a href="#interstitiel" data-lity>Inline</a>--}}
	<div id="interstitiel" class="lity-hide" style="background-image: url('{{ themosis_assets() }}/images/bg/interstiel.jpg');">
		<div class="content">
			<h2>SOLUTIONS D'AFFAIRES DE LA CAPITALE, UNE SOCIÉTÉ DE GROUPE CT.</h2>
			<p>Une entreprise québécoise d'envergure nationale qui offre une expertise reconnue en gestion documentaire et en technologie d'impression pour les entreprise de Québec</p>
		</div>
		<div class="btn-container">
			<a class="btn-bloc2 primary-btn" href="#">Poursuivre votre<br/>visite</a>
			<a class="btn-bloc2 primary-btn" style="margin: 0 15px;" href="#">Lire le communiqué<br/>de presse</a>
			<a class="btn-bloc2 primary-btn" href="#">Joindre solutions d'affaires<br/>de la capitale (SAC)</a>
		</div>
	</div>

	@include('partials.components.header.main-nav-mobile')
	<div id="global-container">
<!--		include header -->
        @include('templates.header')
		<main {{ is_front_page() ? 'class="front-page"' : 'class="main-' . get_the_ID() . '"' }}>
			@yield ('main')
		</main>
		<!-- include footer -->
        @include('templates.footer')
	</div>

    <?php wp_footer(); ?>

</body>
</html>