@extends('layout.layout')

@section('title', 'Giống cây')

@section('content')

	<div class="postlisthoder">
		<div class="headitemholder" style="height: 30px;">
			<div class="createitemholder createitem">
				<center><a href="{{ route('bt.create') }}" class="textcreateitem menu white fontgothambold">Tạo giống</a></center>
			</div>
			<div class="titlelistitemholder">
				<div class="titlelistitem">
					<center><h2 class="textlistitem textcreateitem menu white fontgothambold">Danh sách giống cây</h2></center>
				</div>
			</div>
		</div>
		@foreach ($bts as $p) 

			@include('layout.postlist', ['title' => $p->nameNormal, 'type' => $p->nameScience, 'content' => $p->info, 'thumbnail' => $p->img, 'id' => $p->id, 'mode' => '1'])

		@endforeach
	</div>

@endsection