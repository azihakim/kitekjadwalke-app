@extends('master')
@section('css')
	<style>
		.section-datatable .dataTables_wrapper .dataTables_paginate .paginate_button {
			background: #198754;
			color: white !important;
			border-radius: 5px;
			margin: 0 2px;
		}
	</style>
@endsection

@section('content')
	@if (auth()->check())
		<div class="row">
			<div class="col-lg-12 text-end">
				<a href="{{ route('schedules.create') }}" type="button" class="btn btn-outline-primary">Tambah</a>
			</div>
		</div>
	@endif
	<div class="section-datatble">
		<table id="myTable" class="table datatable-custom">
			<thead>
				<tr>
					<th>Nama Kegiatan</th>
					<th>Tanggal</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($schedules as $item)
					<tr>
						<td>{{ $item->title }}</td>
						<td>{{ $item->formatted_date }}</td>
						<td style="width: 5%">
							@if (auth()->check())
								<a href="{{ route('schedules.edit', $item->id) }}" class="btn btn-warning">Edit</a>
								<form action="{{ route('schedules.destroy', $item->id) }}" method="POST" style="display:inline;">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger">Hapus</button>
								</form>
							@endif

							@if ($item->file)
								<a href="{{ $item->file_url }}" class="btn btn-success" target="_blank">File</a>
							@else
								<span>No file available</span>
							@endif
						</td>
					</tr>
				@endforeach

			</tbody>
		</table>
	</div>
@endsection

@section('scripts')
	<script>
		$(document).ready(function() {
			$('#myTable').DataTable({
				language: {
					paginate: {
						previous: "&laquo;", // «
						next: "&raquo;" // »
					}
				}
			});
		});
	</script>
@endsection
