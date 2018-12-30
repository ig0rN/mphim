@extends('master')

@section('title', __('translate.customers'))

@section('content')
<div class="container">
	<nav id="breadcrumb" aria-label="breadcrumb">
		<ol class="breadcrumb mt-4 mb-0">
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
			<div class="col-md-4 py-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8 py-4">
				<p class="m-0">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</div>
	</div>
	<div id="professionals" class="item-text">
		<h3 class="heading">
			Professionals
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4 py-4">
				<div class="image">
					<img src="{{ asset('img/customers/professionals.jpg')}}" alt="img/customers/professionals.jpg" />
				</div>
			</div>
			<div class="col-md-8 py-4">
				<p class="m-0">
					Mphim + allows the professional to have the business intelligence tools necessary to operate proactively in the field or in support of functional directions, divisional and general and to occupy positions of responsibility for which they are required managerial and economic skills and competences. Mphim + is used by management consultants and accounting professionals to assist client companies in one or more company areas (administration, finance and control, marketing, strategy and general management, sales organization) thus extending the scope of the professional study.
				</p>
			</div>
		</div>
	</div>
	<div id="trade" class="item-text">
		<h3 class="heading">
			Trade associations
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4 py-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8 py-4">
				<p class="m-0">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</div>
	</div>
	<div id="public" class="item-text">
		<h3 class="heading">
			Public institutions
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4 py-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8 py-4">
				<p class="m-0">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</div>
	</div>
	<div id="schools" class="item-text">
		<h3 class="heading">
			Schools
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4 py-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8 py-4">
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
			<div class="col-md-4 py-4">
				<div class="image">
					<img src="{{ asset('img/customers/university.jpg')}}" alt="img/customers/university.jpg" />
				</div>
			</div>
			<div class="col-md-8 py-4">
				<p class="m-0">
					ESCUBE + is a university incubator that allows students to engage in practical management consulting activities in the fields of marketing, administration, finance and control, strategies and general management. Mphim + has always collaborated with Italian and foreign universities. Several students from the major Italian universities (University of Palermo, Insubria of Varese and UNIMORE of Modena and Reggio Emilia), who have carried out the curricular internship at the partner of mphim +, and then culminate the experience with the thesis . Open classes were held by the author of mphim + at the UET of Tirana (Albania) and at the University of Kragujevac (Serbia). With the Luigj Gurakuqi University of Shkodres, masters in export management were organized based on the mphim + method and university incubators (ESCUBE +) were activated with the same and with the University of Palermo.
				</p>
			</div>
		</div>
	</div>
</div>
@endsection