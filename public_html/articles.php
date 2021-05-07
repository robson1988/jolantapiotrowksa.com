<?php

$db = file_get_contents('../data/article.json');
$db = json_decode($db,true);


$last_key = array_keys($db, end($db));

foreach ($db as $key => $lastPost) {
}

?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wydarzenia i najważniejsze informacje | GŚR</title>
	<meta name="description" content="Aktualne wydarzenia, inforamcje i relacje z pracy Gabinetu Świadomego Rozwoju!">
	<meta name="keywords" content="">
	<link rel="canonical" href="https://jolantapiotrowska.com/wydarzenia">
	<meta property="og:title" content="Gabinet Świadomego Rozwoju">
	<meta property="og:description" content="Aktualne wydarzenia, inforamcje i relacje z pracy Gabinetu Świadomego Rozwoju!">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://jolantapiotrowska.com/wydarzenia">
	<meta property="og:image" content="https://jolantapiotrowska.com/images/schema-favicon/logo-og.jpg">
	<meta name="theme-color" content="#fff">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Rbcode.pl">
	<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

	<!--=== Schema.org ===-->
	<script type="application/ld+json">
	{"@context":"https://schema.org/","@type":"WebPage","@id":"#WebPage","url":"https://jolantapiotrowska.com/wydarzenia","name":"Gabinet Świadomego Rozwoju - Wydarzenia ","description":"Aktualne wydarzenia, inforamcje i relacje z pracy Gabinetu Świadomego Rozwoju!","inLanguage":"pl-PL","isPartOf":{"@context":"https://schema.org/","@type":"WebSite","name":"Psychoterapia i coaching - Gabinet Świadomego Rozwoju","url":"https://jolantapiotrowska.com"}}
	</script>
	<script type="application/ld+json">
	{"@context":"https://schema.org","@type":"MedicalBusiness","name":"Gabinet Świadomego Rozwoju","image":"https://jolantapiotrowska.com/images/schema-favicon/logo-schema.jpg","@id":"","url":"https://jolantapiotrowska.pl","telephone":"600292336","priceRange":"120 zł - 300 zł","address":{"@type":"PostalAddress","streetAddress":"ul. KEN 4 pok. 416 (Hotel Stal)","addressLocality":"Stalowa Wola","postalCode":"37-450","addressCountry":"PL"},"geo":{"@type":"GeoCoordinates","latitude":50.57752989999999,"longitude":22.0622079}}
	</script>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org/",
		"@type": "BreadcrumbList",
		"itemListElement": [{
			"@type": "ListItem",
			"position": 1,
			"name": "Wydarzenia",
			"item": "https://jolantapiotrowska.com/wydarzenia"
		}]
	}
	</script>
	<!--=== Favicons ===-->
	<link rel="apple-touch-icon" sizes="57x57" href="images/schema-favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/schema-favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/schema-favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/schema-favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/schema-favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/schema-favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/schema-favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/schema-favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/schema-favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="images/schema-favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/schema-favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/schema-favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/schema-favicon/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/schema-favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!--=== Stylesheets ===-->
	<link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
	<link href="../libs/aos/aos.css" rel="stylesheet">
	<link href="../libs/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/my_style.css">
	<link rel="stylesheet" type="text/css" href="../css/blog_style.css">

	<!--=== Fontawasome ===-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!-- Google Tag Manager-->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MQ23DH4');</script>
	 <!--End Google Tag Manager -->
	</head>

	<body>
	<!-- Google Tag Manager (noscript)-->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQ23DH4"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="container-fluid p-0 ">

		<?php include_once "includes/navigation.php"; ?>

		<div class="row m-0 section__bg--gradient">
			<div class="col-12 pe-0 ps-0">
				<div class="three__hero d-block d-lg-flex align-items-center">
					<div class="text h-100 d-lg-flex justify-content-center">
						<div class="align-self-center text-left p-3">
							<div class="intro mx-auto pt-3" data-aos="zoom-in">
								<p><?php echo $lastPost['date']; ?> | <?php echo $lastPost['author']; ?></p>
								<a href="/wydarzenia/<?php echo $key; ?>" title="<?php echo $lastPost['meta-title']; ?>">
									<h1 class="section__title mb-1"><?php echo $lastPost['post-title']; ?></h1>
								</a>
								<p><?php echo substr($lastPost['text'],0,150)."..."; ?></p>
								<p class="m-0"><a href="/wydarzenia/<?php echo $key; ?>" title="<?php echo $lastPost['meta-title']; ?>">Czytaj więcej...</a></p>
							</div>
						</div>
					</div>
					<div class="blog__image h-100">
						<a href="/wydarzenia/<?php echo $key; ?>" title="<?php echo $lastPost['meta-title']; ?>"><img src="<?php echo $lastPost['photos'][0]; ?>" alt="<?php echo $lastPost['meta-title']; ?>" title="<?php echo $lastPost['meta-title']; ?> | GŚW"
								data-aos="fade-in"></a>
						<div data-aos="fade-right" class="contact__dots--one"></div>
					</div>

				</div>
			</div>
		</div>

		<div class="container mt-5">
			<div class="row p-2">
				<h2 class="my-4 section__title">Ostatnie wydarzenia</h2>

				<!--=== All posts ===-->
				<div class="col-12 p-0">
					<div class="row latest-posts" data-masonry='{"percentPosition": true }'>

						<?php
								$x = count($db);

								$lastArticles = array_reverse(array_slice($db,-$x,$x-1));

								 $i = 0;
								foreach ($lastArticles as $key => $value) {

									if ($i++ > $x) break;

									$metaTitle = $value['meta-title'];
									$postTitle = $value['post-title'];
									$mainPhoto = $value['photos'][0];
									$text = $value['text'];
									$date = $value['date'];
									$author = $value['author'];

									?>

						<div class="card mb-3">
							<div class="row no-gutters">
								<div class="col-sm-12 col-md-4 col-lg-4 blog-card related-post-image m-0 p-0">
									<a href="/wydarzenia/<?php echo $key; ?>" title="<?php echo $postTitle; ?>">
										<img class="bd-placeholder-img card-img-top img-fluid" src="<?php echo $mainPhoto; ?>" alt="<?php echo $metaTitle; ?>" title="<?php echo $metaTitle; ?> | GŚW">
									</a>
								</div>
								<div class="col-sm-12 col-md-8 col-lg-8">
									<div class="card-block px-2 card-body">
										<p><?php echo $date; ?> | <?php echo $lastPost['author']; ?></p>
										<a href="/wydarzenia/<?php echo $key; ?>" title="<?php echo $metaTitle; ?>">
											<h3 class="card-title section__title"><?php echo $postTitle; ?></h3>
										</a>
										<p class="card-text"><?php echo substr($text,0,200)."..."; ?></p>
										<p class="m-0"><a href="/wydarzenia/<?php echo $key; ?>" title="<?php echo $metaTitle; ?>">Czytaj więcej...</a></p>
									</div>
								</div>
							</div>
						</div>
						<?php
								};
						?>
					</div>
				</div>
			</div>
			<!--=== End Row ===-->
		</div>
		<!--=== End Container ===-->

		<?php include_once "includes/footer.php"; ?>

	</div>
	<!--=== End Container Fluid ===-->

	<div id="preloader"></div>
	<a onclick="topFunction()" href="#" class="back-to-top" id="go-to-top">
		<i class="fas fa-chevron-up"></i>
	</a>

	<?php include_once "includes/cookies.php";?>

	<!--=== Bootstrap ===-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="../libs/jquery/jquery.min.js"></script>
	<script src="../libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="../libs/aos/aos.js"></script>
	<script src="../libs/owl.carousel/owl.carousel.min.js"></script>
	<script src="../js/scripts.js"></script>

</body>

</html>
