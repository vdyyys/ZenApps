@extends('layout.app')
@section('content')
<style>
	/* CSS used here will be applied after bootstrap.css */
.nav-pills > li.active > a, .nav-link > li.active > a:focus, .nav-link > li.active > a:hover {
 border-top: none;
 border-left: none;
 border-right: none;
 border-bottom: 3px solid #e9a39c;
 font-weight: bold;
}
.nav-pills .nav-link .pilus{
	border: none;
	background: none;
	border: 20px;
}

.nav-link > li > a:hover {
  text-decoration:none;
}

.nav > li > a:focus, .nav > li > a:hover {
	background-color: transparent;
}

.text-detail-paket:hover {
    text-decoration: none;
    color: black;
  }

.text-detail-paket{
    text-decoration: none;
    color: black;
}

</style>
</head>
<br /><br /><br />
<section class="section-bg-2 section-content padding-y-sm">
<div class="container">
<br>
<h1 class="text-detail-paket">Detail Paket Nikah ABC Organizer</h1>
<br>
<main class="card">
	<div class="row no-gutters">
		<div class="col-sm-6">
			<article class="gallery-wrap"> 
				<div class="img-big-wrap">
					<div>
                    <a href="" data-fancybox="">
                        <img class="img-responsive img-wrap" src="{{ asset('img/upload/thinking.png') }}">
                    </a>
                    </div>
				</div>
			</article>
		</div>
		<div class="col-sm-6">
			<article class="card-body">
				<!-- short-info-wrap -->
					<h3 class="title mb-3">Paket Nikah</h3>
				<div class="mb-3"> 
					<var class="price h3 text-warning"> 
						<span class="currency">Rp. 10.000,-</span>
					</var> 
				</div>
				<br />
				<div class="row">
						<dt class="col-sm-3">Kategori</dt>
						<dd class="col-sm-9">Wedding</dd>

						<dt class="col-sm-3">Fasilitas</dt>
						<dd class="col-sm-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras feugiat nisl et magna scelerisque condimentum. Morbi a tincidunt lectus. Maecenas placerat tellus leo. Nunc magna urna, viverra eget tellus eu, volutpat hendrerit turpis. Nunc a libero gravida diam placerat interdum non non mi. Proin pretium vel justo quis vestibulum. Curabitur blandit, orci sit amet gravida gravida, purus risus eleifend metus, lobortis convallis elit dolor a odio. Cras nisi nulla, varius quis ligula at, consequat dapibus sem. Integer at neque imperdiet, fringilla ipsum a, ultrices lorem. Vivamus at vehicula sem. Proin pellentesque tristique pretium. Suspendisse sapien nisi, ullamcorper sodales fringilla vitae, tempus nec mi. Donec dapibus enim eu viverra tincidunt. Praesent ut ex sed purus sagittis pharetra.</dd>
				</div>
				<br>
					<a href="#" class="btn btn-danger"><i class="fa fa-shopping-basket"></i> Pesan Paket</a>
			</article> 
		</div> 
	</div>
</main>

<article class="card mt-3">
	<div class="card-body">
			<div class="content-section-c">
				<div class="container">
							<ul class="nav nav-pills pilus mb-3" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Toko</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="true">Deskripsi</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Ulasan</a>
									</li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
										<p>berkualitas</p>
									</div>
									<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
										<div class="media mt-3">
											<a class="pr-2" href="#">
													<img src="https://bootdey.com/img/Content/avatar/avatar3.png" width="36" height="36" class="rounded-circle mr-2" alt="Marie Salter">
											</a>
											<div class="media-body">
													<p class="text-muted">
															<strong>Marie Salter</strong><br> pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris.
													</p>
											</div>
									</div>	
									</div>
									<div class="tab-pane active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
										<div class="media mt-3">
											<a class="pr-2" href="#">
													<img src="{{ asset('img/EO/eo-2.jpg') }}" width="65" height="65" class="rounded-circle mr-5" alt="Marie Salter">
											</a>
											<div class="media-body">
													<h4>little things</h4>
													<a href="#" class="btn btn-danger"><i class="fa fa-comment"></i> Kontak</a>
											</div>
									</div>
									</div>
								</div>
					</div>
			</div>
	</div>
</article>
</section>

<script>
	$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$('#myTab a[href="#profile"]').tab('show') // Select tab by name
$('#myTab li:first-child a').tab('show') // Select first tab
$('#myTab li:last-child a').tab('show') // Select last tab
$('#myTab li:nth-child(3) a').tab('show') // Select third tab
</script>
</body>
</html>
@endsection