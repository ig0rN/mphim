@extends('master')

@section('title', __('translate.customers'))

@section('content')
<div class="container">
	<nav id="breadcrumb" aria-label="breadcrumb">
		<ol class="breadcrumb my-4">
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
	<p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae in quia nesciunt veritatis sed assumenda dignissimos repellat voluptatibus, aut at expedita quae labore vel possimus ipsam voluptas, exercitationem ex mollitia, animi natus! Ipsum ipsa impedit quisquam commodi a, id, ab voluptatibus repellendus beatae illum temporibus maxime quasi similique ducimus aliquid?
    </p>
</div>
@endsection