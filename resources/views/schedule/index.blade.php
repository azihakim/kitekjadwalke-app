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
	<div class="row">
		<div class="col-lg-12 text-end">
			<a href="{{ route('schedules.create') }}" type="button" class="btn btn-outline-primary">Tambah Agenda Kegiatan</a>
		</div>
	</div>
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
							<a href="{{ route('schedules.show', $item->id) }}" class="btn btn-primary">Detail</a>
							<a href="{{ route('schedules.edit', $item->id) }}" class="btn btn-warning">Edit</a>
							<form action="{{ route('schedules.destroy', $item->id) }}" method="POST" style="display:inline;">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger">Hapus</button>
							</form>
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
