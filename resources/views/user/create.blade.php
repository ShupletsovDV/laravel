<!DOCTYPE html>
<html lang="en">
<head><script>(function(w,i,g){w[g]=w[g]||[];if(typeof w[g].push=='function')w[g].push(i)})
(window,'GTM-WHH7CJ83','google_tags_first_party');</script><script>(function(w,d,s,l){w[l]=w[l]||[];(function(){w[l].push(arguments);})('set', 'developer_id.dYzg1YT', true);
		w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s);j.async=true;j.src='/wzrt/';
		f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer');</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2-bootstrap4.min.css') }}">
<script data-cfasync="false" nonce="21b47368-94c5-4c08-bdac-d6a0d977021e">try{(function(w,d){!function(kP,kQ,kR,kS){if(kP.zaraz)console.error("zaraz is loaded twice");else{kP[kR]=kP[kR]||{};kP[kR].executed=[];kP.zaraz={deferred:[],listeners:[]};kP.zaraz._v="20";kP.zaraz._n="21b47368-94c5-4c08-bdac-d6a0d977021e";kP.zaraz.q=[];kP.zaraz._f=function(kT){return async function(){var kU=Array.prototype.slice.call(arguments);kP.zaraz.q.push({m:kT,a:kU})}};for(const kV of["track","set","debug"])kP.zaraz[kV]=kP.zaraz._f(kV);kP.zaraz.init=()=>{var kW=kQ.getElementsByTagName(kS)[0],kX=kQ.createElement(kS),kY=kQ.getElementsByTagName("title")[0];kY&&(kP[kR].t=kQ.getElementsByTagName("title")[0].text);kP[kR].x=Math.random();kP[kR].w=kP.screen.width;kP[kR].h=kP.screen.height;kP[kR].j=kP.innerHeight;kP[kR].e=kP.innerWidth;kP[kR].l=kP.location.href;kP[kR].r=kQ.referrer;kP[kR].k=kP.screen.colorDepth;kP[kR].n=kQ.characterSet;kP[kR].o=(new Date).getTimezoneOffset();if(kP.dataLayer)for(const kZ of Object.entries(Object.entries(dataLayer).reduce((k$,la)=>({...k$[1],...la[1]}),{})))zaraz.set(kZ[0],kZ[1],{scope:"page"});kP[kR].q=[];for(;kP.zaraz.q.length;){const lb=kP.zaraz.q.shift();kP[kR].q.push(lb)}kX.defer=!0;for(const lc of[localStorage,sessionStorage])Object.keys(lc||{}).filter(le=>le.startsWith("_zaraz_")).forEach(ld=>{try{kP[kR]["z_"+ld.slice(7)]=JSON.parse(lc.getItem(ld))}catch{kP[kR]["z_"+ld.slice(7)]=lc.getItem(ld)}});kX.referrerPolicy="origin";kX.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(kP[kR])));kW.parentNode.insertBefore(kX,kW)};["complete","interactive"].includes(kQ.readyState)?zaraz.init():kP.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async kH=>new Promise(kI=>{if(kH){kH.e&&kH.e.forEach(kJ=>{try{const kK=d.querySelector("script[nonce]"),kL=kK?.nonce||kK?.getAttribute("nonce"),kM=d.createElement("script");kL&&(kM.nonce=kL);kM.innerHTML=kJ;kM.onload=()=>{d.head.removeChild(kM)};d.head.appendChild(kM)}catch(kN){console.error(`Error executing script: ${kJ}\n`,kN)}});Promise.allSettled((kH.f||[]).map(kO=>fetch(kO[0],kO[1])))}kI()});zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>Регистрация</b>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>

                            </div>
        @endif
        <form action="{{ route('register.store') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="name" value="{{ old('name') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email"  value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4 offset-8">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </div>
      </form>


      <a href="#" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('assets/admin/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/i18n/ru.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/admin/js/adminlte.min.js') }}"></script>
    <script>
        $('.nav-sidebar a').each(function () {
            let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
            let link = this.href;
            if (link == location) {
                $(this).addClass('active');
                $(this).closest('.nav-item').addClass('menu-open');
            }
        });

        $('.select2').select2({
            theme: 'bootstrap4',
            language: 'ru'
        });
    </script>
<script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092" integrity="sha512-UKNk8GbxkABxKcXYuLkO16EleLGUkcvJWtpSNmExE0Too3ZaFAxTscNWEc1OdAv5/BikHawapSCaiD2XCmp+Bw==" data-cf-beacon='{"version":"2024.11.0","token":"2437d112162f4ec4b63c3ca0eb38fb20","r":1,"spa":2}' crossorigin="anonymous"></script>
</body>
</html>
