@extends('master')

@section('title', 'Mphim+')

@section('content')
<div class="container">
	<nav id="breadcrumb" aria-label="breadcrumb">
		<ol class="breadcrumb my-4">
			<li class="breadcrumb-item">
				<a href="{{ route('home') }}">
					{{ __('translate.home') }}
				</a>
			</li>
			<li class="breadcrumb-item active text-uppercase" aria-current="page">
                Mphim+
			</li>
		</ol>
	</nav>
<!--
	<div class="row">
		<div class="col-md-8">
			<div class="event-item">
				<div class="up-content">
					<h2>WHAT mphim+ IS</h2>	
				</div>
				<div class="down-content">
					<h4>
						<strong>WHAT mphim+ IS</strong>
					</h4>
					<strong>mphim+</strong> is a software that allows a company to record and implement its sales policies, favoring the positioning of its products and services on the market through the optimization of marketing mix elements (product, price, distribution and promotion). <strong>mphim+
					</strong> is preparatory to different promotional tools, like trade shows, salesmen and e-commerce sites and it assures their co-existence, maximizing results in terms of sales. <strong>mphim+</strong> is based on the 3ds+ marketing and export-marketing management, and studied in  upper secondary schools and universities.
				</div>
			</div>
		</div>
	</div>
	<p>
		<a href="www.3dsplus.net/index.html">
			<strong>Mphim+</strong> si basa sulla metodologia di marketing ed export marketing management 3ds+</a>, oggetto di studio nelle scuole secondarie superiori e nelle università.
	</p>
	<h4>
		<strong>How mphim+ improves selling performances</strong>
	</h4>
	<p>
		By simplifying:
		- the research of new commercial opportunities, whatever promotional tool the company has chosen  (trade shows, salesmen, e-commerce, social networks, etc…);
		- the building or expansion of a net of vendors, in case one resorts to salesmen, agents, mediators or brokers;
		- the formulation of commercial proposals in line with the conditions of the market, containing the causes which determine the interruption or suspension of negotiations with negative repercussions on sales.
	</p>
	<h4>
		<strong>To whom it is addressed</strong>
	</h4>
	<p>
		To the farming, manufacturing sectors (artisan and industrial), services, to wholesalers and trade agents.
	</p>
	<h4>
		<strong>What the software elaborates</strong>
	</h4>
	<p>
		<strong>mphim+</strong>  envisages a compulsory path by which the company achieves resolution and optimization of all marketing elements necessary to assure an adequate management of the transaction. Through the insertion of few data (description of the product, packaging, target price, wholesale and retail reference price) the software is capable of elaborating, among other things:
		- technical file of the product / service;
		- price list and discount chart;
		- retailers’ insurance mark-up;
		- maximum sustainable commission;
		- margin of profit on sales fulfilled by the company in relation to the actual sales price;
		- commissions in favor of the sales network (agents, managers and directors);
		- estimated organizational cost coverage connected to the management of the sales network.
		A recap panel will permit the evaluation of balanced commercial conditions that the company intends to propose to the clientele and, if there be market misalignments (on prices, sales commissions etc….) it permits the immediate redefinition of the companies’ marketing  elements.
	</p>
	<h4>
		<strong>The Services</strong>
	</h4>
	<p>
		Besides the software itself, upon request, it assures:
		-  managerial consultation and the necessary training  for a correct application of the methodology;
		- personalized mphim+ software to respond to specific company requests.
	</p>
	<div id="btn-clr">
		<a href="" target="_blank">DOWNLOAD THE BROCHURE MPHIM+ A METHODOLOGY IN A SOFTWARE</a>
	</div>
	<div class="text-center pb-4">
		<img src="{{ asset('img/roadmap/roadmap.jpg') }}" alt="img/roadmap/roadmap.jpg" />
	</div>
-->
	<div id="what-is" class="pt-5">
		<h3 class="heading">
			What is
		</h3>
		<p>
			mphim + is a business intelligence software that allows you to maximize all company resources, driving them to higher sales and profitability targets. In a competitive and constantly changing market, it is the ability to control all the details to mark the boundary between growth and downsizing. mphim + is also a web application software that allows you to exceed the limits of installation, ensuring usability at any time, in any place and from any device (PC, tablet, smartphone and other mobile systems), through a simple connection to the internet.
		</p>
	</div>
	<div id="what-does" class="pt-5">
		<h3 class="heading">
			What does it do
		</h3>
		<ul>
			<li>
				Online tool (usable from any device, anytime, anywhere)
			</li>
			<li>
				URTD: UNIQUE REAL TIME DASHBOARD
			</li>
			<li>
				Optimization of marketing mix elements or 4P (product, price, place, promotion) in URTD
			</li>
			<li>
				B2B and B2C market segmentation and price discrimination strategies based on customer type, minimum order, payment method and market area in URTD
			</li>
			<li>
				Trade marketing strategies (sustainability of a long / short channel, incentives to sellers and retailers) in URTD
			</li>
			<li>
				Analysis of the EBT margin / ros in URTD deriving from the various promotion alternatives such as direct and indirect sales force (sales agents and agents), fairs, e-commerce, sales promotion (3x2 offers, gifts, end of year awards ...), partnerships , etc
			</li>
			<li>
				Negotiations in URTD (ebt margin / ros related to a customer offer)
			</li>
			<li>
				Sales network organization in URTD: economic sustainability of a sales network from 1 to 3 levels (agent, manager, director).
			</li>
			<li>
				Model of integrated network marketing for sales network development planning according to the Fibonacci sequence.
			</li>
		</ul>
	</div>
	<div id="why-to" class="pt-5">
		<h3 class="heading">
			Why to have it
		</h3>
	</div>
	<div id="roadmap" class="pt-5">
		<h3 class="heading">
			Roadmap
		</h3>
		<img src="{{ asset('img/roadmap/roadmap.jpg') }}" alt="img/roadmap/roadmap.jpg" />
	</div>
@endsection