<div class="toolbar">
	<div class="left">
		<div class="logo">
			<p class="title white">
				<a href="{{ route('home') }}" class="menu white">Khuyến Nông</a>
			</p>
		</div>
	</div>

	<div class="center">
		<ul class="menu">
			<li>
				<p class="title darkgray">
					<a href="{{ route('bt.index') }}" class="menu darkgray">Giống cây</a>
				</p>
			</li>
			<li>
				<p class="title darkgray">
					<a href="{{ route('post.index') }}" class="menu darkgray">Bài viết</a>
				</p>
			</li>
			<li>
				<p class="title darkgray">
					<a href="{{ route('question.index') }}" class="menu darkgray">Hỏi đáp</a>
				</p>
			</li>
			<li>
				<p class="title darkgray">
					Thống kê
					
				</p>
			</li>
		</ul>
	</div>

	<div class="right">
		<div class="logintext rightpos">
			<p class="title">
				<a href="{{ route('user.login') }}" class="menu green">Login</a>
			</p>
		</div>
		
		<div class="toolbarsearchholder rightpos">
			<form action="{{ route('search') }}" method="GET">
				<div class="toolsearchholder">
					<input type="text" name="searchinput" placeholder="Nhập để tìm kiếm" class="toolsearch darkgray" required></input>
				</div>
				<div class="toolsearchsubmitholder">
					<input type="submit" value="TÌM" class="toolsearchsubmit white"></form>
				</div>
			</form>
		</div>

	</div>

</div>