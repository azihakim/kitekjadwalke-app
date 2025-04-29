@extends('master')

@section('css')
	<!-- Tambahkan CSS tambahan jika diperlukan -->
@endsection

@section('content')
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="card">
					@if ($berita->gambar)
						<img src="{{ asset($berita->gambar) }}" class="card-img-top" alt="{{ $berita->judul }}">
					@endif
					<div class="card-body">
						<h2 class="card-title">{{ $berita->judul }}</h2>
						<p class="card-text">{!! nl2br(e($berita->isi)) !!}</p>
						<a href="{{ route('berita') }}" class="btn btn-primary mt-3">Kembali ke Daftar Berita</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<!-- Tambahkan JavaScript tambahan jika diperlukan -->
@endsection
