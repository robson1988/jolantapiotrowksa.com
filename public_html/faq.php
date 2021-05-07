<?php

		$db = file_get_contents('../data/faq.json');
		$db = json_decode($db,true);

		$faqOne = $db['group-one'];
		$faqTwo = $db['group-two'];
		$faqThree = $db['group-three'];

?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FAQ - Najczęsciej zadawane pytania | GŚW</title>
	<meta name="description" content="Pytania i odpowiedzi dotyczące psychoterapii, coachingu i oferty dla firm. Jasno i na temat odpowiadam na najczęsciej zadawane pytania i wątpliwości">
	<meta name="keywords" content="">
	<link rel="canonical" href="https://jolantapiotrowska.com/faq">
	<meta property="og:title" content="FAQ | Gabinet Świadomego Rozwoju">
	<meta property="og:description" content="Pytania i odpowiedzi dotyczące psychoterapii, coachingu i oferty dla firm. Jasno i na temat odpowiadam na najczęsciej zadawane pytania i wątpliwości">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://jolantapiotrowska.com/faq">
	<meta property="og:image" content="https://jolantapiotrowska.com/images/schema-favicon/logo-og.jpg">

	<!--=== Schema.org ===-->
	<script type="application/ld+json">
{"@context":"https://schema.org/","@type":"WebPage","@id":"#WebPage","url":"https://jolantapiotrowska.com/faq","name":"Gabinet Swiadomego Rozwoju - FAQ","description":"Najczęsciej zadawane pytania. Tutaj znajdziesz odpowiedz na nurtujące Cię pytania.","inLanguage":"pl-PL","isPartOf":{"@context":"https://schema.org/","@type":"WebSite","name":"Psychoterapia i coaching - Gabinet Świadomego Rozwoju","url":"https://jolantapiotrowska.com"}}
	</script>
	<script type="application/ld+json">
{"@context":"https://schema.org","@type":"LocalBusiness","name":"Gabinet Świadomego Rozwoju","image":"https://jolantapiotrowska.com/images/schema-favicon/logo-schema.jpg","@id":"","url":"https://jolantapiotrowska.pl","telephone":"600292336","priceRange":"120 zł - 300 zł","address":{"@type":"PostalAddress","streetAddress":"ul. KEN 4 pok. 416 (Hotel Stal)","addressLocality":"Stalowa Wola","postalCode":"37-450","addressCountry":"PL"},"geo":{"@type":"GeoCoordinates","latitude":50.57752989999999,"longitude":22.0622079},"openingHoursSpecification":{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday"],"opens":"08:00","closes":"16:00"}}
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
	    "name": "Faq",
	    "item": "https://jolantapiotrowska.com/faq"
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
						<li><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>" title="Psychoterapia i coaching - Gabinet Świadomego Rozwoju">Strona główna</a></li>
						<li>FAQ</li>
					</ol>
				</div>
			</div>
		</section>
		<!--=== End Breadcrumbs Section ===-->

		<section id="faq" class="faq pt-0" itemscope itemtype="https://schema.org/FAQPage">
			<div class="img-faq mb-3">
				<div class="faq-heading" data-aos="fade-right">
					<h1 class="section__title">FAQ. Najczęsciej zadawane pytania</h1>
					<p>W tej sekcji znajdziesz odpowiedzi na nurtujące Cię pytania o psychoterapię i coaching.</p>
				</div>
			</div>
			<div class="container">
				<div class="faq__tabs">
					<div class="nav flex-column nav-pills font-trueno col-md-3 col-sm-12" id="pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="group-one-tab" data-bs-toggle="pill" href="#group-one" title="Psychoterapia - najczęściej zadawane pytania" role="tab" aria-controls="v-pills-home" aria-selected="true" data-aos="fade-up">PSYCHOTEKA +</a>
						<a class="nav-link" id="group-two-tab" data-bs-toggle="pill" href="#group-two" title="Coaching - najczęściej zadawane pytania" role="tab" aria-controls="v-pills-profile" aria-selected="false" data-aos="fade-up"
							data-aos-delay="200">PSYCHOTERAPIA</a>
						<a class="nav-link mb-4" id="group-three-tab" data-bs-toggle="pill" href="#group-three" title="Dla firm - najczęściej zadawane pytania" role="tab" aria-controls="v-pills-messages" aria-selected="false" data-aos="fade-up"
							data-aos-delay="400">COACHING</a>
					</div>
					<div class="tab-content col-md-9 col-sm-12" id="pills-tabContent">

						<div class="tab-pane fade show active" id="group-one" role="tabpanel" aria-labelledby="group-one-tab">
							<p class="pt-1 pe-2 ps-2">Film. Tworzony przez ludzi i dla ludzi. Z ukrytą cząstką prawdziwych wydarzeń i odpowiedzią kim chcielibyśmy być, za czym tęsknimy i jakie drzemią w nas uczucia czy emocje. Pełen metafor i symboli, z obrazami i scenami, które w mig potrafią przywołać ukryty ładunek ludzkich wspomnień. Jeśli wybierzesz odpowiedni, będzie balsamem dla duszy, świadectwem, podpowiedzią, czasami pomysłem na nowe.<br>Jako architekt, tworząc i odbierając sztukę, doceniam, jak głęboko jest terapeutyczna.  Z GŚR w projekcie PSYCHOTEKA +, poznaj drugie terapeutyczne oblicze kinematografii. Sprawdź, który bohater jest ci bliski, która scena wywołała grozę czy sprawiła, że łza popłynęła po twojej twarzy. Podziel się swoimi emocjami i odczuciami w gabinecie czy z bliskimi. To często pierwszy krok do zmiany.</p>
							<div class="accordion" id="group-one-accordion">
								<?php
						$x = 0;
						$delay = 0;
						foreach($faqOne as $y) {
							$x++;
							$delay= $delay + 50;
							?>
								<div class="accordion-item" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
									<h2 class="accordion-header font-gotham" id="<?php echo "heading".$y['offset']; ?>" itemprop="name">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $y['offset']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $y['offset']; ?>">
											<?php echo $y['pytanie']; ?>
										</button>
									</h2>
									<div id="collapse<?php echo $y['offset']; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo "heading".$y['offset']; ?>" data-bs-parent="#group-one-accordion" itemscope itemprop="acceptedAnswer"
										itemtype="https://schema.org/Answer">
										<div class="accordion-body" itemprop="text"><?php echo $y['odpowiedz']; ?></div>
									</div>
								</div>

								<?php
						}
				?>
							</div>
						</div>
						<div class="tab-pane fade" id="group-two" role="tabpanel" aria-labelledby="group-two-tab">
							<div class="accordion" id="group-two-accordion">
								<?php
						$x = 0;
						$delay = 0;
						foreach($faqTwo as $y) {
							$x++;
							$delay= $delay + 200;
							?>
								<div class="accordion-item" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
									<h2 class="accordion-header font-gotham" id="<?php echo "heading".$y['offset']; ?>" itemprop="name">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $y['offset']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $y['offset']; ?>">
											<?php echo $y['pytanie']; ?>
										</button>
									</h2>
									<div id="collapse<?php echo $y['offset']; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo "heading".$y['offset']; ?>" data-bs-parent="#group-two-accordion" itemscope itemprop="acceptedAnswer"
										itemtype="https://schema.org/Answer">
										<div class="accordion-body" itemprop="text"><?php echo $y['odpowiedz']; ?></div>
									</div>
								</div>

								<?php
						}
				?>
							</div>
						</div>
						<div class="tab-pane fade" id="group-three" role="tabpanel" aria-labelledby="group-three-tab">
							<div class="accordion" id="group-three-accordion">
								<?php
						$x = 0;
						$delay = 0;
						foreach($faqThree as $y) {
							$x++;
							$delay= $delay + 200;
							?>
								<div class="accordion-item" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
									<h2 class="accordion-header font-gotham" id="<?php echo "heading".$y['offset']; ?>" itemprop="name">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $y['offset']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $y['offset']; ?>">
											<?php echo $y['pytanie']; ?>
										</button>
									</h2>
									<div id="collapse<?php echo $y['offset']; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo "heading".$y['offset']; ?>" data-bs-parent="#group-three-accordion" itemscope itemprop="acceptedAnswer"
										itemtype="https://schema.org/Answer">
										<div class="accordion-body" itemprop="text"><?php echo $y['odpowiedz']; ?></div>
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
