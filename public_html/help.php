<?php

		$db = file_get_contents('../data/help.json');
		$db = json_decode($db,true);

		$nums = $db['alarmowe'];
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Numery alarmowe w sytuacjach kryzysowych | GŚR</title>
	<meta name="description" content="Szukasz pomocy lub potrzebujesz rozmowy o swoich problemach? Znajdziesz tutaj najważniejsze numery alarmowe w sytuacjach kryzysowych">
	<meta name="keywords" content="">
	<link rel="canonical" href="https://jolantapiotrowska.com/numery-alarmowe">
	<meta property="og:title" content="Numery alarmowe | Gabinet Świadomego Rozwoju">
	<meta property="og:description" content="Szukasz pomocy lub potrzebujesz rozmowy o swoich problemach? Znajdziesz tutaj najważniejsze numery alarmowe w sytuacjach kryzysowych">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://jolantapiotrowska.com/numery-alarmowe">
	<meta property="og:image" content="https://jolantapiotrowska.com/images/schema-favicon/logo-og.jpg">

	<!--=== Schema.org ===-->
	<script type="application/ld+json">
	{"@context":"https://schema.org/","@type":"WebPage","@id":"#WebPage","url":"https://jolantapiotrowska.com/numery-alarmowe","name":"Gabinet Swiadomego Rozwoju - Numery alarmowe","description":"Pomoc w sytuacjach kryzysowych. Zbiór najważniejszych numeró alarmowych","inLanguage":"pl-PL","isPartOf":{"@context":"https://schema.org/","@type":"WebSite","name":"Gabinet Świadomego Rozwoju","url":"https://jolantapiotrowska.com"}}
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
	    "name": "Home",
	    "item": "https://jolantapiotrowska.com"
	  },
	  {
	    "@type": "ListItem",
	    "position": 2,
	    "name": "Numery alarmowe",
	    "item": "https://jolantapiotrowska.com/numery-alarmowe"
	  }]
	}
	</script>

<?php include_once "includes/config.php"; ?>

	<div class="container-fluid p-0">

		<?php include_once "includes/navigation.php"; ?>

		<!--=== Breadcrumbs Section ===-->
		<section class="breadcrumbs section__bg--gradient">
			<div class="container">
				<div class="d-flex justify-content-end align-items-center">
					<ol>
						<li><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>" title="Psychoterapia i coaching - GŚW">Strona główna</a></li>
						<li>Numery alarmowe</li>
					</ol>
				</div>
			</div>
		</section>
		<!--=== End Breadcrumbs Section ===-->

		<div class="img-help mb-3">
			<div class="help-heading" data-aos="fade-right">
					<h1 class="section__title">Pomoc w sytuacjach<br> kryzysowych</h1>
					<p>Poza konkretną pomocą <br>ważna jest zwykła, przyjazna<br> rozmowa z kimś zaufanym.<br> Nawet w najgorszym kryzysie<br> nie jesteś sam(a).</p>
			</div>
		</div>

		<section id="help" class="help">
			<div class="container">
				<div class="row">
					<div class="col-12" data-aos="fade-up">
						<div class="row accordion-item first-number mb-0">
						<div class="col-lg-1 col-md-3 col-sm-12">
							<p class="phone mt-3">
								<a href="tel:+48112; ?>" class="nav-buttons-phone mx-auto mb-2"><img src="/images/icons/phone-red.png" class="img-responsive phone-button-help" alt="Dzwoniący telefon" title="telefon"></a>
							</p>
						</div>
						<div class="col-lg-10 col-md-9 col-sm-11">
							<p class="mt-3" style="font-size:1rem;">OGÓLNOEUROPEJSKI NUMER ALARMOWY W SYTUACJI BEZPOŚREDNIEGO ZAGROŻENIA ŻYCIA</p>
							<p>
								<strong>112</strong>
							</p>
						</div>
					</div>
					</div>

					<div class="tab-content col-12">
						<div class="tab-pane fade show active" id="group-help" role="tabpanel" aria-labelledby="group-help-tab">
							<div class="accordion" id="group-help-accordion">
								<?php
						$x = 0;
						$delay = 0;
							foreach($nums as $y) {
								$x++;
								$delay= $delay + 50;
						?>


								<div class="accordion-item" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
									<h2 class="accordion-header font-trueno" id="<?php echo "heading".$y['offset']; ?>">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $y['offset']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $y['offset']; ?>">
											<?php echo $y['nazwa']; ?>
										</button>
									</h2>
									<div id="collapse<?php echo $y['offset']; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo "heading".$y['offset']; ?>" data-bs-parent="#group-help-accordion">
										<div class="accordion-body">
											<div class="row">
												<div class="col-lg-1 col-md-3 col-sm-12">
													<p class="phone">
														<a href="tel:+48<?php echo $y['numer']; ?>" class="nav-buttons-phone mx-auto mb-2"><img src="<?php echo $y['icon']; ?>" class="img-responsive phone-button-help" alt="Dzwoniący telefon" title="telefon"></a>
													</p>
												</div>
												<div class="col-lg-10 col-md-9 col-sm-11">
													<p><?php echo $y['tekst']; ?></p>
													<p>
														<a href="https://<?php echo $y['link']; ?>" target="_blank" rel="nofollow"><?php echo $y['link']; ?></a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<?php
					}
				?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

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
	<script src="libs/jquery/jquery.min.js"></script>
	<script src="libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="libs/aos/aos.js"></script>
	<script src="js/scripts.js"></script>

</body>

</html>
