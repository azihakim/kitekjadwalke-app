@extends('master')
@section('css')
@endsection

@section('content')
	<h2 class="text-center">Standar Pelayanan</h2>
	<div class="container">
		<div class="row">
			<div class="container">
				{{-- <h2>Preview PDF</h2> --}}
				<div class="ratio ratio-16x9">
					<iframe src="{{ asset('vendor/img/standard pelayanan.pdf') }}" frameborder="0"></iframe>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
@endsection
