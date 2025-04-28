@extends('master')
@section('css')
@endsection

@section('content')
	<h2 class="text-center">Pimpinan Daerah</h2>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header p-0 position-relative mt-2 mx-2 z-index-2">
						<a class="d-block blur-shadow-image">
							<img src="{{ asset('vendor/img/Wakil Bupati.JPG') }}" alt="img-colored-shadow" class="img-fluid border-radius-lg">
						</a>
					</div>
					<div class="card-body text-center">
						<h2 class="font-weight-bold">
							Rohman
						</h2>
						<h5 class="font-weight-normal">
							Wakil Bupati Banyuasin
						</h5>
						<p class="mb-0">
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit accusamus alias, fugit obcaecati aliquam
							itaque corrupti nobis dignissimos totam ipsum numquam fugiat id molestiae quibusdam dolor inventore. Quae, fugiat
							hic.
						</p>
						{{-- <button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3">Find out more</button> --}}
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header p-0 position-relative mt-2 mx-2 z-index-2">
						<a class="d-block blur-shadow-image">
							<img src="{{ asset('vendor/img/Bupati.JPG') }}" alt="img-colored-shadow" class="img-fluid border-radius-lg">
						</a>
					</div>
					<div class="card-body text-center">
						<h2 class="font-weight-bold">
							H.M. TOHA
						</h2>
						<h5 class="font-weight-normal">
							Bupati Banyuasin
						</h5>
						<p class="mb-0">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse enim deleniti eligendi eum nihil repellendus
							voluptate debitis ratione ea laborum nisi quod, nam rerum. Debitis, et. Fugiat rem obcaecati perferendis!
						</p>
						{{-- <button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3">Find out more</button> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
@endsection
