@foreach ($beritas as $berita)
	<div class="col-lg-4 mb-4">
		<div class="card h-100">
			<div class="card-header p-0 position-relative mt-2 mx-2 z-index-2">
				<a class="d-block blur-shadow-image">
					<img src="{{ asset($berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid border-radius-lg">
				</a>
			</div>
			<div class="card-body text-center">
				<h5 class="font-weight-bold">{{ $berita->judul }}</h5>
				<p class="mb-0">{{ Str::limit($berita->isi, 100) }}</p>
				<a href="{{ route('berita.show', $berita->id) }}" class="btn bg-gradient-info btn-sm mt-3">Selengkapnya</a>
			</div>
		</div>
	</div>
@endforeach
