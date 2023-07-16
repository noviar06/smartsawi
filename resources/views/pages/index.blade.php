@extends('pages.layouts.main')

@section('title')
    Home
@endsection

@section('content')
  {{-- hero --}}
  <section id="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1>Membantu Mendiagnosa Penyakit Tanaman Sawi Hidroponik.</h1>
          <p>Di sini, kami menyediakan sistem yang dapat membantu Anda mengidentifikasi dan mendiagnosis penyakit yang mungkin terjadi pada tanaman sawi hidroponik Anda. Kami menggunakan metode <span class="fw-bold">forward chaining</span> dan <span class="fw-bold">certainty factor</span> untuk memberikan hasil yang akurat.</p>

            <a class="button-hero shadow" href="{{ route('login') }}">Diagnosa Sekarang</a>
        </div>
        <div class="col-md-6">
          <img src="{{ asset('dist/img/hero-img.png') }}" class="img-fluid" alt="hero-img">
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,122.7C384,128,480,160,576,154.7C672,149,768,107,864,106.7C960,107,1056,149,1152,160C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>

  <section id="about">
    <div class="container">
      <div class="row align-items-center">
        <h1 class="text-center">About Us</h1>
        <div class="col-md-6 mt-5">
          <div class="card shadow border-0 p-5">
            <div class="card-title text-center"><h1>Tim</h1></div>
            <p>Kami adalah tim yang terdiri dari ahli pertanian dan pengembang perangkat lunak yang memiliki pengalaman dalam budidaya sawi hidroponik. Dalam usaha kami untuk mendukung petani dan penggemar sawi hidroponik, kami menciptakan Sistem Diagnosa Penyakit Tanaman Sawi Hidroponik ini.</p>
          </div>
          
        </div>
        <div class="col-md-6 mt-5">
          <div class="card shadow border-0 p-5">
            <div class="card-title text-center"><h1>Visi & Misi</h1></div>
            <p>
              Visi kami adalah memberikan alat yang handal dan mudah digunakan untuk mendiagnosis penyakit pada tanaman sawi hidroponik. Dengan kombinasi metode forward chaining dan certainty factor, kami dapat memberikan hasil diagnosa yang cepat dan akurat.
            </p>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,160C384,139,480,117,576,133.3C672,149,768,203,864,192C960,181,1056,107,1152,74.7C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row align-items-center">
        <h1 class="text-center mb-5">Contact</h1>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Hubungi Kami
            </div>
            <div class="card-body">
              @if (Session::has('pesan_terkirim'))
                <div class="alert alert-success" role="alert">
                  {{ Session::get('pesan_terkirim') }}
                </div>
              @endif
              <form method="POST" action="{{ route('sendEmail') }}">
                  @csrf
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for=pesan">Pesan</label>
                    <textarea class="form-control" name="pesan" id="pesan"></textarea>
                  </div>
                  <button type="submit" class="mt-5 btn btn-lg btn-success float-end">Kirim</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img src="{{ asset('dist/img/contact.png') }}" alt="contact-vector">
        </div>
      </div>
    </div>
  </section>
@endsection