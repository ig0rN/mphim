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
	<div id="what-is" class="item">
		<h3 class="heading">
			What is
		</h3>
		<p>
			mphim + is a business intelligence software that allows you to maximize all company resources, driving them to higher sales and profitability targets. In a competitive and constantly changing market, it is the ability to control all the details to mark the boundary between growth and downsizing. mphim + is also a web application software that allows you to exceed the limits of installation, ensuring usability at any time, in any place and from any device (PC, tablet, smartphone and other mobile systems), through a simple connection to the internet.
		</p>
	</div>
	<div id="what-does" class="item">
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
	<div id="why-to" class="item">
		<h3 class="heading">
			Why to have it
		</h3>
	</div>
	<div id="roadmap" class="item">
		<h3 class="heading">
			Roadmap
		</h3>
		<img src="{{ asset('img/roadmap/roadmap.jpg') }}" alt="img/roadmap/roadmap.jpg" />
	</div>
</div>
@endsection