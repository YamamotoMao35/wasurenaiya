@extends('layouts.wasurenaiya')

@section('title', '忘れないや')

@section('header')
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="#page-top"><img src="images/wasurenaiya3.png" style="width: 150px"></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
				<li>
					<a class="page-scroll" href="/hello">トピックス</a>
				</li>
				<li>
					<a class="page-scroll" href="https://paiza.hatenablog.com/entry/2018/09/25/paizacloud_php">利用案内</a>
				</li>
				<li>
					<a class="page-scroll" href="https://miyabi-lab.space/blog/22">会社概要</a>
				</li>
				<li>
					<a class="page-scroll" href="https://twitter.com/MihouTechPeak51">Twitter</a>
				</li>
				<li>
					<a class="page-scroll" href="/home">管理人ページ</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>
@endsection

@section('content')
		@section('main-menu')
		<section id="about">
			<div class="container" style="padding-top: 100px">
				<div class="row">
					<div class="col-6 col-md-4">
					<div class="form-group">
						<label for="exampleSelect1exampleFormControlSelect1">カテゴリから探す</label>
							<select class="form-control" id="exampleFormControlSelect1">
								<option>--未選択--</option>
								<option>筆記用具</option>
								<option>貴重品</option>
								<option>小物</option>
								<option>電化製品</option>
								<option>書籍</option>
							</select>
						</div>
					</div>
					<form class="form-inline">
						<div class="form-group col-md-4 mx-sm-3 mb-2">
							<form action="/board/add" method="post">
								{{ csrf_field()}}
								<tr><th></th><td><input type="text" placeholder="キーワードで検索" name="message"></td></tr>
							</form>
							<button type="submit" class="btn btn-primary mb-2">検索</button>
						</div>
					</form>
					<div class="col-6 col-md-4">
						<ul class="list-group" style="max-width: 400px;">
							<li class="list-group-item">
								<div class="text-warning">
									@if (Auth::check())
									<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
									@else
									<p>※ログインしていません。(<a href="/login">ログイン</a>|<a href="/register">新規登録</a>)</p>
									@endif
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<!-- about module -->
					<div class="col-md-4 text-center">
						<div class="mz-module-about">
							<i class="fa fa-briefcase ot-circle"></i>
							<h3>Web Development</h3>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-4 text-center">
						<div class="mz-module-about">
							<i class="fa fa-photo ot-circle"></i>
							<h3>Visualisation</h3>
							<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-4 text-center">
						<div class="mz-module-about">
							<i class="fa fa-camera-retro ot-circle"></i>
							<h3>Photography</h3>
							<p>Accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
						</div>
					</div>
					<!-- end about module -->
				</div>
			</div>
			<!-- /.container -->
		</section>
		@endsection
		@section('contact')
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Contact Us</h2>
							<p>If you have some Questions or need Help! Please Contact Us!<br>We make Cool and Clean Design for your Business</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h3>仕事場所</h3>
						<p>兵庫県</p>
						<!-- <p><i class="fa fa-envelope"></i> mail@yourcompany.com</p> -->
					</div>
					<div class="col-md-3">
						<h3>業務時間</h3>
						<p><i class="fa fa-clock-o"></i> <span class="day">平日:</span><span>9am to 10pm</span></p>
						<p><i class="fa fa-clock-o"></i> <span class="day">土曜日:</span><span>11am to 10pm</span></p>
						<p><i class="fa fa-clock-o"></i> <span class="day">日曜日:</span><span>Closed</span></p>
					</div>
					<div class="col-md-6">
						<form name="sentMessage" id="contactForm" novalidate="">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button type="submit" class="btn btn-primary">送信</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		@endsection
		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>
		@section('footer')
		<footer>
			<div class="container text-center">
				<p>Designed by <a href="https://mihoutechpeak.hatenablog.com/archive"><span>Mihou</span>TechPeak.com</a></p>
				<p>copyright 2019 wasurenaiya.</p>
			</div>
		</footer>
    @endsection

@endsection
