@extends('master')
@section('title', 'Edit Schedule')
@section('css')
	<style>
		.file-upload-wrapper {
			position: relative;
			display: inline-block;
		}

		.custom-file-upload {
			border: 2px dashed #0d6efd;
			background-color: #f8f9fa;
			padding: 20px 40px;
			cursor: pointer;
			border-radius: 10px;
			font-weight: bold;
			color: #0d6efd;
			transition: background-color 0.3s, border-color 0.3s, color 0.3s;
		}

		.custom-file-upload:hover {
			background-color: #e2e6ea;
			border-color: #0b5ed7;
		}

		.custom-file-upload.selected {
			background-color: #198754;
			border-color: #198754;
			color: #ffffff;
		}

		#file-upload {
			display: none;
		}
	</style>
@endsection

@section('content')
	<section>
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<div class="container py-4">
			<div class="row">
				<div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
					<h3 class="text-center">Edit Agenda</h3>
					<form action="{{ route('schedules.update', $schedule->id) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group input-group-static mb-4">
										<label>Tanggal Agenda</label>
										<input class="form-control" type="date" name="date"
											value="{{ old('date', $schedule->date->format('Y-m-d')) }}" required>
									</div>
								</div>
								<div class="col-md-6 ps-2">
									<div class="input-group input-group-static">
										<label>Nama Kegiatan</label>
										<input type="text" class="form-control" name="title" value="{{ old('title', $schedule->title) }}"
											required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 ps-2">
									<div class="file-upload-wrapper">
										<label for="file-upload" class="custom-file-upload" id="upload-label">
											{{ $schedule->file ? 'Ganti File' : 'Upload File Agenda' }}
										</label>
										<input name="file" id="file-upload" type="file" />
										@if ($schedule->file)
											<div class="mt-2">
												<a href="{{ $schedule->file_url }}" target="_blank" class="btn btn-sm btn-outline-primary">Lihat File Saat
													Ini</a>
											</div>
										@endif
									</div>
								</div>
								<div class="col-md-6 ps-2">
									<div class="form-check form-switch mb-4 d-flex align-items-center mt-3">
										<input name="state" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
											{{ old('state', $schedule->state) ? 'checked' : '' }}>
										<label class="form-check-label ms-3 mb-0" for="flexSwitchCheckDefault" id="switchLabel">
											{{ old('state', $schedule->state) ? 'Agenda Aktif' : 'Agenda Tidak Aktif' }}
										</label>
									</div>

									<script>
										document.getElementById('flexSwitchCheckDefault').addEventListener('change', function() {
											const label = document.getElementById('switchLabel');
											if (this.checked) {
												label.textContent = "Agenda Aktif";
											} else {
												label.textContent = "Agenda Tidak Aktif";
											}
										});
									</script>
								</div>
							</div>

							<div class="row mt-4">
								<div class="col-md-12">
									<button type="submit" class="btn bg-gradient-dark w-100">Update Agenda kegiatan</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('scripts')
	<script>
		document.getElementById('file-upload').addEventListener('change', function(e) {
			const label = document.getElementById('upload-label');
			label.textContent = "Loading...";
			label.classList.remove('selected');

			setTimeout(() => {
				const fileName = e.target.files[0] ?
					(e.target.files[0].name.length > 20 ? e.target.files[0].name.substring(0, 20) + '...' : e
						.target.files[0].name) :
					"Pilih File";

				label.textContent = fileName;
				label.classList.add('selected');
			}, 1500);
		});
	</script>
@endsection
