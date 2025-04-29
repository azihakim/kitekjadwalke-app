@extends('master')

@section('css')
	<!-- Tambahkan CSS tambahan jika diperlukan -->
@endsection

@section('content')
	<h2 class="text-center">Berita Terbaru</h2>
	<div class="container">
		<div id="berita-list" class="row">
			@include('profil.partialberita', ['beritas' => $beritas])
		</div>
		<div class="text-center my-4" id="loading" style="display: none;">
			<div class="spinner-border text-info" role="status">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		let page = 1;
		let loading = false;
		let hasMore = true;

		function loadMoreData(page) {
			if (loading || !hasMore) return;
			loading = true;
			$('#loading').show();

			$.ajax({
				url: '?page=' + page,
				type: 'get',
				dataType: 'json',
				success: function(response) {
					$('#loading').hide();
					if (response.html) {
						$('#berita-list').append(response.html);
						loading = false;
						hasMore = response.hasMore;
					} else {
						hasMore = false;
					}
				},
				error: function() {
					$('#loading').hide();
					console.error('Terjadi kesalahan saat memuat data.');
					loading = false;
				}
			});
		}

		$(window).scroll(function() {
			if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
				if (!loading && hasMore) {
					page++;
					loadMoreData(page);
				}
			}
		});
	</script>
@endsection
