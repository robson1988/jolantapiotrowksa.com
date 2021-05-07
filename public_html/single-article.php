<?php

$id = htmlentities($_GET['id'], ENT_QUOTES, 'UTF-8');
$db = file_get_contents('../data/article.json');
$db = json_decode($db,true);
$article = $db[$id] ? $db[$id] : null;

    if(!$article){
         header("Location: /"); // strona z błędem 404
    }

		$metaTitle = $article['meta-title'];
		$metaDescription = $article['meta-description'];
    $mainPhoto = $article['photos'][0];
    $photos = $article['photos'];
    $postTitle = $article['post-title'];
		$text = $article['text'];
		$author = $article['author'];
		$date = $article['date'];
		$category = $article['category'];

    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
                $_SERVER['REQUEST_URI'];

    $schemaDate = str_replace('.','-', $date);
?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $metaTitle; ?></title>
	<meta name="description" content="<?php echo $metaDescription; ?>">
	<meta name="keywords" content="">
	<link rel="canonical" href="https://jolantapiotrowska.com/wydarzenia/<?php echo $id; ?>">
	<meta property="og:title" content="Gabinet Świadomego Rozwoju - <?php echo $metaTitle; ?>">
	<meta property="og:description" content="<?php echo $metaDescription; ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://jolantapiotrowska.com/<?php echo $id; ?>">
	<meta property="og:image" content="https://jolantapiotrowska.com/<?php echo $mainPhoto; ?>">
	<meta name="theme-color" content="#fff">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Rbcode.pl">
	<script type="application/ld+json">
  {"@context":"https://schema.org/","@type":"WebPage","@id":"#WebPage","url":"https://jolantapiotrowska.com/wydarzenia/<?php echo $id; ?>","name":"Gabinet Swiadomego Rozwoju - <?php echo $metaTitle; ?>","description":"<?php echo $metaDescription; ?>","inLanguage":"pl-PL","isPartOf":{"@context":"https://schema.org/","@type":"WebSite","name":"Psychoterapia i coaching - Gabinet Świadomego Rozwoju","url":"https://jolantapiotrowska.com"}}
	</script>
  <script type="application/ld+json" >
  {"@context":"https://schema.org","@type":"BlogPosting","mainEntityOfPage":{"@type":"WebPage","@id":"<?php echo $link; ?>"},"headline":"<?php echo $postTitle; ?>","description":"<?php echo $text; ?>","image":{"@type":"ImageObject","url":"https://jolantapiotrowska.com/<?php echo $mainPhoto; ?>","width":800,"height":600},"author":{"@type":"organization","name":"<?php echo $author; ?>"},"publisher":{"@type":"Organization","name":"Psychoterapia i coaching | Gabinet Świadomego Rozwoju","logo":{"@type":"ImageObject","url":"https://jolantapiotrowska.com/images/schema-favicon/logo-schema.jpg","width":550,"height":60}},"datePublished":"<?php echo $schemaDate; ?>","dateModified":""}
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://jolantapiotrowska.com"
    },{
      "@type": "ListItem",
      "position": 2,
      "name": "Wydarzenia",
      "item": "https://jolantapiotrowska.com/wydarzenia"
    },{
    "@type": "ListItem",
    "position": 2,
    "name": "<?php echo str_replace("-", " ", $id); ?>",
    "item": "https://jolantapiotrowska.com/wydarzenia/<?php echo $id; ?>"
  }]
}
  </script>

  <!--=== Favicons ===-->
  <link rel="apple-touch-icon" sizes="57x57" href="../images/schema-favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../images/schema-favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../images/schema-favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../images/schema-favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../images/schema-favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../images/schema-favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../images/schema-favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../images/schema-favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../images/schema-favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../images/schema-favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../images/schema-favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../images/schema-favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/schema-favicon/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../images/schema-favicon/ms-icon-144x144.png">
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

		<!--=== Page Content ===-->
		<div class="container" >
			<div class="row">

				<!--=== Blog Post ===-->
				<div class="col-md-10 col-sm-12 p-0 pt-3 mx-auto post">
					<div class="card mb-2" style="border:none;">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <p class="ps-md-0 ps-4"><?php echo $date; ?> | <?php echo $author; ?></p>
  							<h1 class="card-title section__title ms-md-0 ms-4"><?php echo $postTitle; ?></h1>
              </div>
              <div class="col-3 sidebar">
                <div class="card">
                  <h3 class="card-header section__title--two section__bg--gradient">Kategorie</h3>
                  <div class="card-body p-2">
                    <div class="row">
                      <div class="col-12">
                        <ul class="list-unstyled mb-0">
                        <?php

                            $categories = file_get_contents('../data/categories.json');
                            $categories = json_decode($categories,true);

                            foreach ($categories as $key => $value) {

                              ?>

                          <li>
                            <a href="/kategoria/<?php echo $value['name']; ?>" title="Kategoria <?php echo $value['name']; ?>"><?php echo $value['name']; ?></a>
                          </li>
                        <?php
                            };
                        ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
						<div>
              <img class="card-img-top" src="<?php echo $mainPhoto; ?>" alt="<?php echo $metaTitle; ?>" title="<?php echo $metaTitle; ?> | GŚW">
            </div>
						<div class="card-body ms-2 me-2">
							<p class="card-text"><?php echo $text; ?></p>
						</div>
					</div>
				</div>

        <!--=== Mobile categories ===-->
        <div class="col-md-10 col-sm-12 mx-auto sidebar-mobile">
          <div class="card ms-2 me-2 mb-5">
            <h3 class="card-header section__title--two section__bg--gradient">Kategorie</h3>
            <div class="card-body p-2">
              <div class="row">
                <div class="col-12">
                  <ul class="list-unstyled mb-0">
                  <?php

                      $categories = file_get_contents('../data/categories.json');
                      $categories = json_decode($categories,true);

                      foreach ($categories as $key => $value) {

                        ?>

                    <li>
                      <a href="/kategoria/<?php echo $value['name']; ?>" title="Kategoria <?php echo $value['name']; ?>"><?php echo $value['name']; ?></a>
                    </li>
                  <?php
                      };
                  ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

			</div> <!--=== End Row ===-->

		</div> <!--=== End Container ===-->

		<?php include_once "includes/footer.php"; ?>

	</div><!--=== End Container Fluid ===-->

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
