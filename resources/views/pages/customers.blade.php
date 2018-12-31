@extends('master')

@section('title', __('translate.customers'))

@section('content')
<div class="container">
	<nav id="breadcrumb" aria-label="breadcrumb">
		<ol class="breadcrumb m-0">
			<li class="breadcrumb-item">
				<a href="{{ route('home') }}">
					{{ __('translate.home') }}
				</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">
                {{ __('translate.customers') }}
			</li>
		</ol>
	</nav>
	<div id="companies" class="item-text">
		<h3 class="heading">
			Companies
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8">
				<h4 class="font-weight-bold mb-3">
					Mphim + and companies
				</h4>
				<p class="mb-2">
					The mphim + software and the consulting and training services are intended:
				</p>
				<ol class="companies-ol">
					<li>
						the following types of companies <strong>b2b</strong>:
						<ul>
							<li>
								agricultural, zootechnical and processing companies;
							</li>
							<li>
								manufacturing companies (craft and industrial);
							</li>
							<li>
								service companies;
							</li>
							<li>
								wholesalers;
							</li>
							<li>
								sales agents wishing to apply a network marketing methodology for the purpose of implementing their own sales network or organizing the marketing of the principals;
							</li>
						</ul>
					</li>
					<li>
						<strong>b2c</strong> companies that sell products or perform "standard" services for the final consumer, by way of example:
						<ul>
							<li>
								retailers;
							</li>
							<li>
								hotel, restaurant and cafè;
							</li>
							<li>
								social and welfare services (nursing homes, health care, etc.);
							</li>
							<li>
								pharmacies;
							</li>
							<li>
								ets..
							</li>
						</ul>
					</li>
				</ol>
				<p class="mb-2">
					<strong>Aggregation of companies</strong> companies that intend to implement common penetration projects In domestic and foreign markets:
				</p>
				<ul>
					<li>
						Consortia of companies;
					</li>
					<li>
						Business networks;
					</li>
					<li>
						European groups of economic interest;
					</li>
					<li>
						Production districts;
					</li>
					<li>
						Joint Ventures.
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="professionals" class="item-text">
		<h3 class="heading">
			Professionals
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/customers/professionals.jpg')}}" alt="img/customers/professionals.jpg" />
				</div>
			</div>
			<div class="col-md-8">
				<p>
					Mphim + allows the professional to have the business intelligence tools necessary to operate proactively in the field or in support of functional directions, divisional and general and to occupy positions of responsibility for which they are required managerial and economic skills and competences. Mphim + is used by management consultants and accounting professionals to assist client companies in one or more company areas (administration, finance and control, marketing, strategy and general management, sales organization) thus extending the scope of the professional study.
				</p>
				<p class="mb-2">
					ESCUBE fully responds to the spirit of the Recommendation of the European Parliament and of the Council of 18 December 2006 which established the key competences for lifelong learning, outlining the following addresses:
				</p>
				<ul>
					<li>
						digital competence;
					</li>
					<li>
						spirit of initiative and entrepreneurship.
					</li>
				</ul>
				<p class="mb-2">
					It is no coincidence that the acronym ESCUBE starts from:
				</p>
				<ul>
					<li>
						education, entrepreneurship and economic development
					</li>
					<li>
						school
					</li>
					<li>
						cube
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="trade" class="item-text">
		<h3 class="heading">
			Trade associations
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/customers/trade.jpeg')}}" alt="img/customers/trade.jpeg" />
				</div>
			</div>
			<div class="col-md-8">
				<p class="m-0">
					<strong>Associations of categories in the various industrial, craft, commercial, agricultural and tertiary sectors and the SME association in general</strong>, interested in providing a concrete support to the associated companies in the field of marketing and export marketing management.
				</p>
			</div>
		</div>
	</div>
	<div id="public" class="item-text">
		<h3 class="heading">
			Public institutions
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8">
				<ul class="public-ul">
					<li>
						<strong>local administrations</strong> (municipalities, provinces and regions) as a tool for territorial marketing, to strengthen the competitiveness of local products and services;
					</li>
					<li>
						<strong>central administrations</strong> as an instrument of industrial policy, to favor the development of the secondary, through the adoption of measures aimed at ensuring a concrete support to the export of the national industry;
					</li>
					<li>
						<strong>companies owned</strong> by public administrations interested in providing concrete support in the field of marketing and export marketing management.
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="schools" class="item-text">
		<h3 class="heading">
			Schools
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8">
				<p class="m-0">
					ESCUBE is a "technical-professional center" that allows the upper secondary school to direct the laboratory teaching towards the national strategic sectors, according to the productive, cultural and social vocation of the surrounding territory.
					The school "opens" to local businesses, providing management consulting services to local SMEs and allowing students, after a period of training, to engage in "real" work activities and then to acquire the preparatory know-how for future initiatives. entrepreneurial or to propose itself more easily on the labor market as in a real "work-shop".
				</p>
			</div>
		</div>
	</div>
	<div id="university" class="item-text">
		<h3 class="heading">
			University
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/customers/university.jpg')}}" alt="img/customers/university.jpg" />
				</div>
			</div>
			<div class="col-md-8">
				<p class="m-0">
					ESCUBE + is a university incubator that allows students to engage in practical management consulting activities in the fields of marketing, administration, finance and control, strategies and general management. Mphim + has always collaborated with Italian and foreign universities. Several students from the major Italian universities (University of Palermo, Insubria of Varese and UNIMORE of Modena and Reggio Emilia), who have carried out the curricular internship at the partner of mphim +, and then culminate the experience with the thesis . Open classes were held by the author of mphim + at the UET of Tirana (Albania) and at the University of Kragujevac (Serbia). With the Luigj Gurakuqi University of Shkodres, masters in export management were organized based on the mphim + method and university incubators (ESCUBE +) were activated with the same and with the University of Palermo.
				</p>
			</div>
		</div>
	</div>
</div>
@endsection