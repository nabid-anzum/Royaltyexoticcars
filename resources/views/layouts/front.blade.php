@php

	$setting = \App\Model\Setting::first();
	$brands = App\Model\VehicleBrand::where('status','active')->get();
	$categories = App\Model\VehicleCategory::where('parent_category_id',0)->where('status','active')->get();

@endphp
<!DOCTYPE html><!-- Last Published: Sat Jul 18 2020 22:29:29 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="www.rentalexoticsbeasts.com" data-wf-page="5eab2e688db14a5dd693300b"
	data-wf-site="5a10aaa4d85f4b0001a53292" lang="en">
<head>
	<meta charset="utf-8" />
	<title>Rental Exotic Beasts - Las Vegas</title>
	<meta
		content="Las Vegas&#x27; largest selection of exotic cars, suvs, autocycles &amp; motorcycles for rent. NO mileage limits, governors, security deposits, or hidden fees. Call or text +1-866-984-1187 to book!"
		name="description" />
	<meta content="Rental Exotic Beasts - Las Vegas" property="og:title" />
	<meta
		content="Las Vegas&#x27; largest selection of exotic cars, suvs, autocycles &amp; motorcycles for rent. NO mileage limits, governors, security deposits, or hidden fees. Call or text +1-866-984-1187 to book!"
		property="og:description" />
	<meta
		content="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a823c1c32f0d300017e7fa0_Royalty%20Exotic%20Cars%20Website%20Banner%20-%20small.gif"
		property="og:image" />
	<meta content="Rental Exotic Beasts - Las Vegas" property="twitter:title" />
	<meta
		content="Las Vegas&#x27; largest selection of exotic cars, suvs, autocycles &amp; motorcycles for rent. NO mileage limits, governors, security deposits, or hidden fees. Call or text +1-866-984-1187 to book!"
		property="twitter:description" />
	<meta
		content="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a823c1c32f0d300017e7fa0_Royalty%20Exotic%20Cars%20Website%20Banner%20-%20small.gif"
		property="twitter:image" />
	<meta property="og:type" content="website" />
	<meta content="summary_large_image" name="twitter:card" />
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="1ergY3uaEZfUno4hRzE8xunDKWbi2nV6QnZa2CZZDYM" name="google-site-verification" />
	<link href="/frontEnd/css/rentalexoticsbeasts.16f3cbba0.min.css" rel="stylesheet" type="text/css" />
	<link href="/frontEnd/css/custom.css" rel="stylesheet" type="text/css" />
	<link href="/frontEnd/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<script src="/frontEnd/ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
	<script
		type="text/javascript">WebFont.load({ google: { families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "Oswald:200,300,400,500,600,700", "Rock Salt:regular"] } });</script>
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
	<script
		type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);
	</script>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" integrity="sha512-RWhcC19d8A3vE7kpXq6Ze4GcPfGe3DQWuenhXAbcGiZOaqGojLtWwit1eeM9jLGHFv8hnwpX3blJKGjTsf2HxQ==" crossorigin="anonymous" />


    <style>
        .nav__brand .logo{
            height:60px !important;
        }


        @media screen and (max-width: 767px) {
            .nav__brand .logo {
                height: 38px !important;
            }
        }

        .slider-left-content{

            background: linear-gradient(#94ccdb, #7673ea, transparent) !important;
        }
        .carousel-caption{
            bottom: 20% !important;
        }
        .slider-left-content .heading{
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .no-appearance {
            -webkit-appearance: caps-lock-indicator;
            -moz-appearance: none;
            text-indent: 1px;
            text-overflow: '';
        }

        .booking-option{
            font-size: 18px !important;
            height: 55px !important;
        }
        .input-group {
            margin-bottom: 1rem;
        }

        .checkbox-with-content{
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin: 10px auto;
        }

        .checkout-card, .booking-card{
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4) !important;
        }

        label.error{
            color: red !important;
        }
    </style>

@yield('style')
</head>

<body>
	<header class="header">
		<div data-collapse="all" data-animation="over-right" data-duration="200" data-easing="ease-out-quad"
			data-easing2="ease-out-quad" role="banner" class="navigation w-nav">
			<div class="info-container">
				<div class="info" style="padding: 0px 150px 0px 150px; height:auto;">
					<div class="left-side">
					<a target="_blank"
						href="tel:+18669841187" id="Header-Phone-Link" class="info__link">Toll Free: {{$setting->phone}}</a>



					<div class="info__embed w-embed"><a id="Email-Link-Footer" class="info__link"
							href="mailto:{{$setting->email}}?subject=&body=<br><br><br><br>---------<br>Please place your message above this line<br>Page URL: [sub]"
							onclick="this.href = this.href.replace('[sub]',window.location)">
							{{$setting->email}}
						</a>
					</div>
					<a href="https://www.google.com/maps/place/Royalty+Exotic+Car+Rentals/@36.1109615,-115.1838642,17z/data=!3m1!4b1!4m5!3m4!1s0x80c8c425f445f48d:0x7b51ef32201743d6!8m2!3d36.1109615!4d-115.1816755?hl=en"
						id="Header-Map-Link" target="_blank" class="info__link infobar__link--nolink">9am - 7pm Daily</a>
					</div>
						<div class="right-side">
						<div class="info__search">
						<form action="/vehicles" id="Header-Search-Form"
							class="search w-form"><input type="search" class="search__input w-input" maxlength="256"
								name="q" placeholder="Search cars, suvs, slingshots, etc"
								title="Search cars, motorcycles, destinations, faqs, rental requirements, reviews, etc"
								required="" /><input type="submit" value=" " class="search__submit w-button" /></form>
					</div>
					</div>


				</div>
			</div>
			<div class="nav-container" style="padding: 0px 150px 50px 150px; height:auto;">
				<div class="nav">
					<div class="nav__brand"><a href="/" id="Header-Brand-Link" aria-current="page"
							class="brand w-nav-brand w--current">
							<div class="brand__icon"></div>
						</a></div>
					<div class="nav__links">
						<div data-delay="0" data-hover="1" class="dropdown dropdown__mobile w-dropdown">
							<div id="Rentals-Menu" class="nav__link nav__link--mobile w-dropdown-toggle">
								<div>Rentals</div>
							</div>
							<nav class="dropdown__list dropdown__list--categories w-dropdown-list"><img
									src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5baebde8ad0c8ab1cfd622ef_icon-arrow-up-gray.svg"
									alt="" class="nav__dropdown--arrow" />
								<div class="nav__dropdown--pane">

									<div class="nav__categories">

										@foreach($categories??array(  ) as $category)
											<a href="/vehicles?category={{ $category->slug }}" id="Nav-Car-Rentals-Link" class="nav__categories--link w-inline-block">
												<div class="nav__categories--graphic">
													<img src="{{url($category->photo??'')}}"
														alt="" class="nav__categories--img" onerror="this.src='/no-image.png';" />
												</div>
												<div class="nav__categories--text">
													<div class="nav__categories--heading">{{ $category->name }}</div>
													<div class="nav__categories--desc">Ranging from American muscle to European
														masterpieces.</div>
												</div>
											</a>

										@endforeach

										<div class="nav__categories--quicklinks">
											<div class="quicklinks__collection w-dyn-list">
												<div role="list"
													class="quicklinks__list quicklinks__list--grid w-dyn-items">
													@foreach($brands??array() as $brand)
													<div role="listitem"
														class="quicklinks__item quicklinks__item--nav w-dyn-item"><a
															id="Nav-Quicklink" href="/vehicles?brand={{ $brand->slug }}"
															class="quicklinks__link w-inline-block"><img
																src="{{url($brand->photo??'')}}"
																alt="Bugatti" class="quicklinks__logo" />
															<div class="quicklinks__details">
																<div class="quicklinks__title">{{ $brand->name }}</div>
																<!-- <div class="quicklinks__desc">Veyron</div> -->
															</div>
														</a>
													</div>
													@endforeach
												</div>
											</div>
										</div>
									</div>
								</div>
							</nav>
						</div>
						<div data-delay="0" data-hover="1" class="dropdown w-dropdown">
							<div id="Requirements-Menu" class="nav__link w-dropdown-toggle">
								<div>Requirements</div>
							</div>
							<nav class="dropdown__list dropdown__list--table w-dropdown-list"><img
									src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5baebde8ad0c8ab1cfd622ef_icon-arrow-up-gray.svg"
									alt="" class="nav__dropdown--arrow" />
								<div class="nav__dropdown--pane">
									<div class="nav__reqs">
										<div class="switch switch__table">
											<div class="switch__label switch__label--on">United States<br />Drivers</div><a
												id="Requirements-Switch" href="#" class="switch__link w-inline-block">
												<div class="switch__button"></div>
											</a>
											<div class="switch__label switch__label--off">International<br />Drivers</div>
										</div>
										<div class="table reqs__table--nav">
											<div class="table__row table__row--header">
												<div
													class="table__cell table__cell--dimension table__cell--dimension-header">
												</div>
												<div class="table__cell">Exotic<br />Cars &amp; SUVs</div>
												<div class="table__cell">Auto &amp; Moto<br />Cycles</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Age-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div>Age ⓘ</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Minimum Age requirements are strictly enforced and ensure
															proper insurance protection. All renters who allow an underage
															driver will be fined $2,500 and their rental will be immediately
															canceled.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell">25+</div>
												<div class="table__cell">21+</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-License-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Drivers License ⓘ</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Every driver is required to be listed on the rental agreement
															and provide a VALID and NON-EXPIRED drivers license with the
															name matching EXACTLY the name on the rental
															agreement.<br /><strong>Note:</strong> International Drivers
															Licenses are accepted.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell--wrapper">
													<div class="table__cell">United States<br />Drivers License</div>
													<div class="table__cell table__cell--intl">International<br />Drivers
														License</div>
												</div>
												<div class="table__cell--wrapper">
													<div class="table__cell">United States<br />Drivers License</div>
													<div class="table__cell table__cell--intl">International<br />Drivers
														License</div>
												</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Insurance-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Car Insurance ⓘ</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Every driver is required to have an active car insurance policy
															before driving one of our rental vehicles.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell--wrapper">
													<div data-delay="0" class="table__cell w-dropdown">
														<div id="Requirements-Insurance-Exotics-US-Tooltip"
															class="table__dropdown--toggle w-dropdown-toggle">
															<div class="text-block">Comp/Collision<br />100/300/50 ⓘ</div>
														</div>
														<nav class="table__dropdown--pane w-dropdown-list">
															<div><span>Each driver is required to provide their own car
																	insurance that covers any liability claim up to
																	$100k/$300k/$50k and has full comprehensive &amp;
																	collision coverage with a maximum $1,000
																	deductible.<br /><strong>Note:</strong> Your insurance
																	policy still requires Comp/Collision coverage even if
																	you decide to purchase an optional insurance
																	upgrade.</span></div>
															<div class="table__dropdown--arrow"></div>
														</nav>
													</div>
													<div data-delay="0" class="table__cell table__cell--intl w-dropdown">
														<div id="Requirements-Insurance-Exotics-Intl-Tooltip"
															class="table__dropdown--toggle w-dropdown-toggle">
															<div class="text-block">$199<br />Royalty Insurance ⓘ</div>
														</div>
														<nav class="table__dropdown--pane w-dropdown-list">
															<div><span>Covers any bodily injury claim up to $1,000,000 and
																	has full comprehensive and collision coverage with a
																	$15,000 deductible.</span></div>
															<div class="table__dropdown--arrow"></div>
														</nav>
													</div>
												</div>
												<div data-delay="0" class="table__cell w-dropdown">
													<div id="Requirements-Insurance-Cycles-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">$29<br />Royalty Insurance ⓘ</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div><span>Each driver is required to purchase the Royalty Insurance
																Policy that covers any bodily injury claim up to $15k/$30k
																and has full comprehensive &amp; collision coverage with a
																$2,500 deductible.</span></div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
											</div>
											<div class="table__divider">Upgrade Options</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Supplemental-Insurance-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Supplemental<br />Liability Insurance ⓘ
														</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Protects against any bodily injury incurred during your rental
															period up to the combined value of $1,000,000 for any passenger
															or passerby regardless of who is at fault.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell--wrapper">
													<div class="table__cell">$99</div>
													<div class="table__cell table__cell--intl">Included</div>
												</div>
												<div class="table__cell">--</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Damage-Waiver-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Property Damage<br />Waiver ⓘ</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Protects against common damages up to a specified limit
															including curbed wheels, windshield cracks, minor
															scuffs/scratches, etc.<br /><strong>Note: </strong>If damages
															exceed the specified limit and results in an insurance claim,
															this will act as a deductible waiver.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div data-delay="0" class="table__cell w-dropdown">
													<div id="Requirements-Damage-Waiver-Exotics-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">$99 ⓘ</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Protects against any damages up to a $3,500 (based on the
															actual cost of repair).<br />If the damage exceeds $3,500 and
															results in an insurance claim, this will act as a deductible
															waiver.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div data-delay="0" class="table__cell w-dropdown">
													<div id="Requirements-Damage-Waiver-Cycles-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">$49 ⓘ</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Protects against any damages up to a $2,500 (based on the
															actual cost of repair).<br />If the damage exceeds $2,500 and
															results in an insurance claim, this will act as a deductible
															waiver.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Tire-Protection-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Tire<br />Protection ⓘ</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Covers cost of tire replacement, tow charges, and loss of
															rental time up to $1,000.<br /><strong>Note:</strong> Tire
															replacement can take up to several hours depending on the
															location of incident, traffic conditions, and availability.
														</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell">$49</div>
												<div class="table__cell">$35</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Breakdown-Coverage-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Mechanical<br />Breakdown Coverage ⓘ</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Covers cost of Mechanical Parts due to wear and tear, tow
															charges, and loss of rental time up to
															$1,000.<br /><strong>Note:</strong> Does NOT cover mechanical
															failure due to customer mis-use or gross negligence operating
															the vehicle. You are fully responsible for your own actions
															while operating a Rental Exotic Beasts vehicle.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell">$99</div>
												<div class="table__cell">$49</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Prepaid-Fuel-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Prepaid<br />Fuel Credit ⓘ</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Allows you to return the vehicle without needing to refuel
															beforehand. <br /><strong>Note:</strong> ALL vehicles (including
															auto/moto cycles) require 91 OCTANE RATING fuel. Anyone caught
															using lower quality fuel will be fined $2,500 and responsible
															for any subsequent damages resulting from improper fuel.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell">$99</div>
												<div class="table__cell">$49</div>
											</div>
										</div>
									</div>
								</div>
							</nav>
						</div>
						<div data-delay="0" data-hover="1" class="dropdown w-dropdown">
							<div id="About-Menu" class="nav__link w-dropdown-toggle">
								<div>About</div>
							</div>
							<nav class="dropdown__list dropdown__list--about w-dropdown-list"><img
									src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5baebde8ad0c8ab1cfd622ef_icon-arrow-up-gray.svg"
									alt="" class="nav__dropdown--arrow" />
								<div class="nav__dropdown--pane">
									<div class="nav__about">
										<div class="nav__about--column about__column--links">
											<a href="/faqs"
												id="Nav-FAQs-Link" class="nav__about--link w-dropdown-link">FAQs</a>
											<a href="/privacy" id="Nav-Privacy-Link"
												class="nav__about--link w-dropdown-link">Privacy</a>
											
											<a href="mailto:{{$setting->email}}"
												id="Nav-Feedback-Link" class="nav__about--link w-dropdown-link">Feedback</a>
										</div>
									</div>
								</div>
							</nav>
						</div>
						<a id="Rally-Link-Nav" href="#" class="nav__link nav__link--hidden w-inline-block">
							<div>Rally</div>
						</a>
						
						<a id="Shop-Link-Nav" href="/shop" class="nav__link w-inline-block">
							<div>Shop</div>
						</a>
						<a href="/login" class="user nav__link w-inline-block">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</a>
					</div>
					<div id="Nav-Drawer-Button" class="nav__button w-nav-button"><img
							src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a5f41d75e7131000194c9d3_menu.svg"
							alt="" class="navbar__icon" /></div>
				</div>
			</div>
			<nav role="navigation" class="drawer w-nav-menu">
				<div class="drawer__container">

					<div class="drawer__section"><a
							href="https://www.google.com/maps/place/Royalty+Exotic+Car+Rentals/@36.1109615,-115.1838642,17z/data=!3m1!4b1!4m5!3m4!1s0x80c8c425f445f48d:0x7b51ef32201743d6!8m2!3d36.1109615!4d-115.1816755?hl=en"
							id="Drawer-Location-Link" target="_blank" class="card w-inline-block">
							<div class="drawer__location">
								<div class="drawer__location--info"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a690c68ae5eb70001f01b94_rec_logo_icon_black.svg"
										alt="Rental Exotic Beasts Logo" class="drawer__location--logo" />
									<div class="drawer__location--title">Rental Exotic Beasts Rentals</div>
									<div class="drawer__location--desc">{{$setting->address}}</div>
								</div>
								<div class="location__map"></div>
							</div>
						</a></div>

					<div class="drawer__section">
						<div class="card"><a id="Drawer-Shop-Button" href="/shop"
								target="_blank" class="navdrawer__shop--button w-inline-block"><img
									src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5c13df34d3261aa1bbc46af7_icon-open.svg"
									alt="" class="navdrawer__shop--icon" />
								<div>Visit our Merch Shop!</div>
							</a></div>
					</div>
					<div class="drawer__section">
						<div class="card card__table">
							<div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">

								<div class="tabs__content w-tab-content">
									<div data-w-tab="US Residents" class="tabs__pane w-tab-pane w--tab-active">
										<div class="navdrawer__links--wrapper"><a href="tel:18669841187"
												id="Drawer-Call-US-Link" class="navdrawer__link w-inline-block">
												<div class="navdrawer__link--icon"><img
														src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a7253fa2651bb0001cd5c5c_icon-sms-white.svg"
														alt="US Main Phone Number" class="navdrawer__link--image" />
												</div>
												<div>Call Toll Free: </div>
												<div>{{$setting->phone}}</div>
											</a><a
												href="mailto:reservations@rentalexoticsbeasts.com?subject=I&#x27;d%20like%20to%20rent%20an%20exotic%20car!%20%3A)"
												id="Drawer-Email-US-Link" class="navdrawer__link w-inline-block">
												<div class="navdrawer__link--icon"><img
														src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a533e1_mail-white.svg"
														alt="Reservations Email" class="navdrawer__link--image" /></div>
												<div>{{$setting->email}}</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="drawer__section">
						<div class="card card__table">
							<div class="navdrawer__links--wrapper"><a
									href="{{$setting->insta_link}}" target="_blank"
									id="Drawer-Instagram-Link" class="navdrawer__link w-inline-block">
									<div class="navdrawer__link--icon navdrawer__link--icon-social"><img
											src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a533c2_instagram.svg"
											alt="Instagram" class="navdrawer__link--image" /></div>
									<div>Follow us on Instagram</div>
								</a><a href="{{$setting->fb_link}}"
									target="_blank" id="Drawer-Facebook-Link" class="navdrawer__link w-inline-block">
									<div class="navdrawer__link--icon navdrawer__link--icon-social"><img
											src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a533b4_53f333fd1b92a02f2f930a05_facebook_footer.svg"
											alt="Facebook" class="navdrawer__link--image" /></div>
									<div>Like us on Facebook</div>
								</a><a href="{{$setting->tweeet_link}}" target="_blank"
									id="Drawer-Twitter-Link" class="navdrawer__link w-inline-block">
									<div class="navdrawer__link--icon navdrawer__link--icon-social"><img
											src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a53477_53f33417144ad8302fd73d6a_twitter_footer.svg"
											alt="Twitter" class="navdrawer__link--image" /></div>
									<div>Follow us on Twitter</div>
								</a>

								<a href="{{$setting->pinter_link}}" target="_blank"
									id="Drawer-Pinterest-Link" class="navdrawer__link w-inline-block">
									<div class="navdrawer__link--icon navdrawer__link--icon-social"><img
											src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a536cd_pinterest.svg"
											alt="Pinterest" class="navdrawer__link--image" /></div>
									<div>Follow us on Pinterest</div>
								</a><a href="{{$setting->utube_link}}" target="_blank"
									id="Drawer-Youtube-Link"
									class="navdrawer__link navdrawer__link--no-border w-inline-block">
									<div class="navdrawer__link--icon navdrawer__link--icon-social"><img
											src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a53631_youtube.svg"
											alt="Youtube" class="navdrawer__link--image" /></div>
									<div>Subscribe to our YouTube</div>
								</a>
							</div>
						</div>
					</div><a
						href="mailto:{{$setting->email}}"
						id="Drawer-Feedback-Button" class="navdrawer__button w-button">How can we improve?</a>
				</div>
			</nav>
		</div>
	</header>
	@yield('content')
	<footer>
        <!-- Footer top -->
        <div class="container footer_top">
            <div class="row"><div class="col-md-3">
                    <div class="footer_item">
                        <h4>Explore link</h4>
                        <hr>
                        <ul class="list-unstyled footer_menu">
							<li><a href="/"><span class="fa fa-play"></span> Home</a>
							<li><a href="/vehicles"><span class="fa fa-play"></span> Our Fleet</a>
                            </li><li><a href="/shop"><span class="fa fa-play"></span> Shop</a>
                            </li><li><a href="/faqs"><span class="fa fa-play"></span> FAQ's</a>
                            </li><li><a href="/privacy"><span class="fa fa-play"></span> Privacy</a>
                            </li></ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_item">
                        <h4>Rentals</h4>
                        <hr>
                        <ul class="list-unstyled footer_menu">

							@foreach($categories??array(  ) as $category)

								<li>
									<a href="/vehicles?category={{ $category->slug }}"><span class="fa fa-play"></span>{{ $category->name }}</a>
								</li>

							@endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_item">
                        <h4>Social</h4>
                        <hr>
                        <ul class="list-unstyled footer_menu">
                            <li><a href="{{$setting->insta_link}}"><span class="fa fa-play"></span>Instagram</a>
                            </li><li><a href="{{$setting->fb_link}}"><span class="fa fa-play"></span>Facebook</a>
                            </li><li><a href="{{$setting->tweeet_link}}"><span class="fa fa-play"></span>Twitter</a>
                            </li><li><a href="{{$setting->pinter_link}}"><span class="fa fa-play"></span>Pinterest</a>
                            </li><li><a href="{{$setting->utube_link}}"><span class="fa fa-play"></span>Youtube</a>
                            </li></ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer_item">
                        <h4>Local</h4>
                        <hr>
                        <ul class="list-unstyled footer_contact">
                            <li><a href=""><span class="fa fa-map-marker"></span>{{$setting->address}}</a></li>
                            <li><a href="mailto:{{$setting->email}}"><span class="fa fa-envelope"></span>{{$setting->email}}</a></li>
                            <li><a><span class="fa fa-mobile"></span><p>{{$setting->phone}}</p></a></li>
                            <li><a href="tel:01988300003" class="btn btn-success mb-2" style="background-color: orangered"><i class="fa fa-phone"></i> Call Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Footer top end -->

        <!-- Footer bottom -->
        <div class="footer_bottom text-center">
            <p class="wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">Designed and Developed by {{$setting->company_name}} Team . Copyright © <a href="{{url('/')}}">{{$setting->company_name}} </a>{{date('Y')}}. All Rights Reserved
            </p>
        </div><!-- Footer bottom end -->
        @include('modal.auth')
    </footer>
	<script src="/frontEnd/d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d5419.js?site=5a10aaa4d85f4b0001a53292"
		type="text/javascript" ></script>
	<script src="/frontEnd/js/rentalexoticsbeasts.af38aa331.js"
		type="text/javascript"></script>
	<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous"></script>



    @yield('script')
</body>
</html>
