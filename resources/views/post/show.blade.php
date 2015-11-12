@extends('layout.layout')

@section('title','Post')

@section('content')

	<div class="mainviewbtholder">
		<div class="viewbtholder">
			<br>
			<div class="btviewcontrolholder">
				<form action="{{ route('post.destroy', $post->id) }}" method="POST" class="btviewremovebtholder menu white">
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
					<input type="submit" value="Xóa" class="btviewremovebt white">
				</form>
				<a href="{{ route('post.edit', $post->id) }}" class="btvieweditbt menu white">Chỉnh sửa</a>
			</div>
			<br><br>

			<div class="btviewheader">
				<div class="btheadimgholder">
					<img src="/img/{{ $post->img }}" class="btviewimg">
					<div class="btviewmask"></div>
				</div>
				<div class="btviewinfoholder">
					<h1 class="btviewtitle fontgothambold darkgray">{{ $post->title }}</h1>
					<ul style="list-style-type: none;margin: 0px;padding:0;">
						<li class="btviewitem darkgray"><b>Chuyên mục:</b> {{ $post->type }}</li>
					</ul>
				</div>
			</div>
			<div class="btviewcontent">
				<p>
					{!! nl2br($post->content, false) !!}
				</p>
			</div>
				
		</div>
	</div>

@endsection