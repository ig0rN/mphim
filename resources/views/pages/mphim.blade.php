@extends('master')

@section('title', 'Mphim+')

@section('content')
<div class="container">
	<nav id="breadcrumb" aria-label="breadcrumb">
		<ol class="breadcrumb m-0">
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
	<div id="what-is" class="item-text">
		<h3 class="heading">
			What is?
		</h3>
		<p>
			mphim + is a business intelligence software that allows you to maximize all company resources, driving them to higher sales and profitability targets. In a competitive and constantly changing market, it is the ability to control all the details to mark the boundary between growth and downsizing. mphim + is also a web application software that allows you to exceed the limits of installation, ensuring usability at any time, in any place and from any device (PC, tablet, smartphone and other mobile systems), through a simple connection to the internet.
		</p>
	</div>
	<div id="what-does" class="item-text">
		<h3 class="heading">
			What does it do?
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
	<div id="why-to" class="item-text">
		<h3 class="heading">
			Why to have it?
		</h3>
		<h4>
			5 models in one solution
		</h4>
		<ol class="mphim-ol mb-4">
			<li>
				Business model:
				allows optimization
				the way in which the company develops its own
				business and realizes value for customers, the
				property, employees etc ...				
			</li>
			<li>
				Management model:
				conscious 
				Choices compared to the pre-set 
				objectives
			</li>
			<li>
				Trade marketing model:
				allows the development of marketing strategies towards retailers	
			</li>
			<li>
				Marketing mix model:
				optimization of the elements of the marketing mix or 4P (product, price, place, promotion)
			</li>
			<li>
				Network management model:
				development of the sales network
				according to the Fibonacci sequence
			</li>
		</ol>
		<h4>
			A single solution for all business areas
		</h4>
		<ul class="mphim-ul">
			<li>
				<h5>
					Marketing
				</h5>
				It is an instrument of marketing and export marketing management, of aid to the choices of operational marketing (sales channels, long / short channel, pricing, agent commissions, sales promotion, etc.).
			</li>
			<li>
				<h5>
					Strategy and general management
				</h5>
				It is a business intelligence tool support to the decisions of the general management
			</li>
			<li>
				<h5>
					Organization
				</h5>
				Optimizes the planning of organizational resources and improves the quality in managing the sales network.
			</li>
			<li>
				<h5>
					Administration,
					Finance and Control
				</h5>
				Allows maximum optimization of all company resources, bringing them to greater profitability goals
			</li>
		</ul>
		<h4 class="font-weight-bold">
			The value of awareness
		</h4>
		<p>
			Companies are often unable to estimate the economic effects of an extremely low price variation: a variation of 1% of the sale price may also result in an increase of two or even three-digit profits.
		</p>
		<h4 class="font-weight-bold">
			Targeted and effective decisions
		</h4>
		<p>
			mphim + improves the quality of decision-making processes and therefore the competitive capacity of the company. By inserting very few company data,
			the business intelligence software is able to instantly provide information on the profitability of the products / services (ros or ebt) based on the price chosen, the sustainability of the incentive policies provided in favor of b2b customers and the chosen promotional strategies (agents, trade fairs , e-commerce sites b2c and b2b, sales promotion such as 3x2 offers and gifts).
		</p>
	</div>
	<div id="roadmap" class="item-text">
		<h3 class="heading">
			Roadmap
		</h3>
		<img src="{{ asset('img/roadmap/roadmap.jpg') }}" alt="img/roadmap/roadmap.jpg" />
	</div>
</div>
@endsection