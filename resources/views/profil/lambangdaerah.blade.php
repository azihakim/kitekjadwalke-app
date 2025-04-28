@extends('master')
@section('css')
	<style>
		.center-content {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			text-align: center;
		}

		.lambang-img {
			max-width: 300px;
			margin-bottom: 20px;
		}
	</style>
@endsection

@section('content')
	<div class="section-datatble">
		<h2 class="text-center">Lambang Daerah Musibanyuasin</h2>
		<div class="center-content">
			<img src="https://upload.wikimedia.org/wikipedia/commons/4/4b/Lambang_Kabupaten_Musi_Banyuasin.png" alt="Lambang Daerah"
				class="lambang-img">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, architecto magni voluptatum cum quo cupiditate
				dignissimos reprehenderit odit consectetur! Quia temporibus odio aperiam! Et omnis sint earum similique placeat
				nulla. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat aut voluptas quos! Pariatur, in enim fugit
				eveniet tempora quod dolorum ipsum, dignissimos assumenda voluptates corporis eligendi suscipit reiciendis neque
				vitae!</p>
		</div>
	</div>
@endsection

@section('scripts')
@endsection
