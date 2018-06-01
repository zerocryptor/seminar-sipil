@extends('layouts.app')

@section('content')
	@include('sections.banner')
	<div class="container atascol wrapper" id="tentang-seminar">
		<div class="row">
			<div class="col-xs-12">
				<a href="#" class="btn btn-flat greensipil" style="max-width: 100%; margin-top: 15px">DAFTAR SEKARANG</a>
			</div>
			<div class="col-xs-12 col-md-8">
				<div class="padding-20">
				<h3 style="font-size: 18px;">Latar Belakang</h3>
				<div class="garis"></div>
					<img src="{{ asset('img/build.jpg') }}" width="300px" class="margin-bottom-15">
					<div class="latar-belakang-text col-xs-10 no-padding">
						Kemajuan teknologi memungkinkan terjadinya otomtisasi hamper di semua bidang. Sementara itu, kepemilikan perangkat pintar di berbagai bagian dunia mengarah pada tinkat keterkaitan satu sama lain yang tak terbayangkan sebelumnya. Di antara berbagai tantangan yang sedang dihadapi dunia saat ini, mungkin yang paling besar adalah bagaimana membentuk Revolusi Industri keempat (Revolusi Industri 4.0) yang dimulai pada permulaan abad ini. Teknologi dan pendekatan baru yang menggabungkan dunia fisik, digital, dan biologi secara fundamental akan mengubah umat manusia.<br><br>
					</div>
					<div class="latar-belakang-text col-xs-10 no-padding">
						Salah satu yang dikembangkan di masa mendatang adalah Konsep green building atau bangunan ramah lingkungan didorong menjadi tren dunia bagi pengembangan property saat ini. Bangunan ramah lingkungan ini punya kontribusi menahan laju pemanasan global dengan membenahi iklim mikro. Konsep bangunan ramah lingkungan atau green building concept adalah terciptanya konstruksi dari tahap perencanaan, pelaksanaan dan pemakaian produk konstruksi yang ramah lingkungan, efisien dalam pemakaian energi dan sumber daya, serta berbiaya rendah, dan memperhatikan kesehatan, kenyamanan penghuninya yang emuanya berpegang kepada kaidah bersinambungan. Bangunan hijau juga harus dimulai denga penggunaan lahan yang sesuai dengan tata ruang kota dan merupakan daerah peruntukan. Selain itu Green Building juga memperhatikan sampai taraf pengoperasian hingga dalam operasional pemeliharaannya. Manfaat Pembangunan Green Building meliputi manfaat lingkungan, manfaat ekonomi, manfaat sosial.
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="padding-20">
					<h3 style="font-size: 18px;">Bidang Peminatan</h3>
					<div class="garis"></div>
					<div class="bidang-kajian-text col-xs-10 no-padding">
					<ul>
						<li>Material</li>
						<li>Stuktur</li>
						<li>A-Oteknik</li>
						<li>Manajemen Konstruksi</li>
						<li>Sumber Daya Air dan Lingkungan</li>
						<li>Metode Pelaksanaan dan K3</li>
						<li>Transportasi</li>
					</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-8">
				<div class="padding-20">
				<h3 style="font-size: 18px;">Rundown Acara</h3>
				<div class="garis"></div>
					<div class="latar-belakang-text col-xs-10 no-padding">
						<a href="#" class="btn btn-info btn-flat greensipil left" style="margin-right:10px"><i class="fa fa-download"></i> Hari Pertama</a>
						<a href="#" class="btn btn-info btn-flat greensipil left"><i class="fa fa-download"></i> Hari Kedua</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-8">
				<div class="padding-20">
				<h3 style="font-size: 18px;">Format Abstrak Dan Makalah</h3>
				<div class="garis"></div>
					<div class="latar-belakang-text col-xs-10 no-padding">
						<a href="#" class="btn btn-info btn-flat btn-makalah greensipil left" style="margin-right:10px"><i class="fa fa-download"></i> Format Abstrak</a>
						<a href="#" class="btn btn-info btn-flat btn-makalah greensipil left" style="margin-right:10px"><i class="fa fa-download"></i> Format Makalah</a>
						<a href="#" class="btn btn-info btn-flat btn-makalah greensipil" style="margin-right:-30px"><i class="fa fa-download"></i> Contoh Penulisan</a>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-center" id="pembicara">
			<h2 style="font-size: 25px">Pembicara</h2>
				<div class="garis" style="margin: 20px auto"></div>
				<div class="col-xs-6" class="text-center">
					<div class="profilecontainer">
						<img src="{{ asset('img/profile.png') }}" class="img-responsive imgprofile">
						<h3> Ir. Rana Yusuf Natsir </h3>
						<small style="font-size: 15px"> Core Founder Green Building Council Indonesia (GBCI) </small>
					</div>
				</div>
				<div class="col-xs-6" class="text-center">
					<div class="profilecontainer">
						<img src="{{ asset('img/profile.png') }}" class="img-responsive imgprofile">
						<h3> Dr. Ir. Oswar Muadzin Mungkasa, MURP </h3>
						<small style="font-size: 15px"> Deputi Gubernur DKI Jakarta bidang Tata Ruang dan Lingkungan </small>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section id="important-dates" class="greensipil">
		<div class="container">
			<div class="row text-center">
				<h2 style="font-size: 25px; color: #fff;">Tanggal Penting</h2>
				<div class="garis-putih" style="margin: 20px auto"></div>
			</div>
		</div>
	</section>
	@include('sections.galeri')
	@include('sections.detail')
	@include('sections.maps')

	<!-- atur posisinya sesuai layout yang dipengen, jadi ga sesuai sama punya mesin, itu yang diatas cuman contoh-->
@endsection