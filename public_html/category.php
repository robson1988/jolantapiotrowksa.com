<?php

$category_id = $_GET['id'];
$category_db = file_get_contents('../data/categories.json');
$category_db = json_decode($category_db,true);
$title = $category_db[$category_id]['name'];
$description = $category_db[$category_id]['description'];

?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?> | Posty, artykuły i najnowsze wydarzenia | GŚR</title>
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="">
	<link rel="canonical" href="https://jolantapiotrowska.com/kategoria/<?php echo $category_id; ?>">
	<meta property="og:title" content="<?php echo $title; ?> - Gabinet Świadomego Rozwoju">
	<meta property="og:description" content="<?php echo $description; ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://jolantapiotrowska.com/kategoria/<?php echo $category_id; ?>">
	<meta property="og:image" content="https://jolantapiotrowska.com/images/schema-favicon/logo-og.jpg">
	<meta name="theme-color" content="#fff">
	<meta name="robots" content="noindex, nofollow">
	<meta name="author" content="Rbcode.pl">
	<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

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

		<div class="container mt-2">
			<div class="row p-2">
				<h1 class="my-4 section__title">Kategoria <?php echo $category_id; ?></h1>

				<!--=== All posts ===-->
				<div class="col-12 p-0">
					<div class="row" data-masonry='{"percentPosition": true }'>

						<?php
								$db = file_get_contents('../data/article.json');
								$db = json_decode($db,true);
								$db = array_reverse($db);
								$category = $category_id;
								$article_filter_category=array_filter($db,function($article){
										global $category;
										return ($article["category"]==$category);
				});
						$keys = array_keys($article_filter_category);
						$amount_of_articles=count($article_filter_category);

								for ($i = 0; $i < $amount_of_articles; $i++) {
									  $article = $keys[$i];
									?>

						<div class="col-sm-12 col-md-6 col-lg-3 mb-4 category-card">
							<div class="card ">
								<div class="blog-card related-post-image m-0">
									<a href="/wydarzenia/<?php echo $article; ?>" title="<?php echo $article_filter_category[$article]['post-title']; ?>">
										<img class="bd-placeholder-img card-img-top img-fluid" src="<?php echo $article_filter_category[$article]['photos'][0]; ?>" alt="<?php echo $article_filter_category[$article]['post-title']; ?>" title="<?php echo $article_filter_category[$article]['post-title']; ?> | GŚW">
									</a>
									<p class="related-post-date"><?php echo $article_filter_category[$article]['date']; ?></p>
								</div>
								<div class="card-body">
									<a href="/wydarzenia/<?php echo $article; ?>" title="<?php echo $article_filter_category[$article]['post-title']; ?>"><h2 class="card-title section__title"><?php echo $article_filter_category[$article]['post-title']; ?></h2></a>
									<p class="card-text"><?php echo substr($article_filter_category[$article]['text'],0,100)."..."; ?></p>
									<p class="m-0"><a href="/wydarzenia/<?php echo $article; ?>" title="<?php echo $article_filter_category[$article]['post-title']; ?>">Czytaj więcej...</a></p>
								</div>
							</div>
						</div>

						<?php
								};
						?>

					</div>
				</div>
			</div><!--=== End Row ===-->
		</div><!--=== End Container ===-->

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
