@extends('layouts.index')

@section('content')


<!--Utilizo el mismo formulario para insertar o para editar, solo me cambia el action -->
<h1>Registro clientes</h1>
    
    <form action="" method="POST" >
        @csrf

		
<div class="container">
	<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
		
	
 
	<div class="bg-blue-200  sm:col-span-2 md:col-span-4" >
		<label for="costumer_name">Nombre</label>
        <input type="text" name="costumer_name" value=""/>
	</div>
	<div class="bg-blue-300 sm:col-span-2 md:col-span-4">
		<label for="address">Dirección</label>
        <input type="text" name="address" value=""/>
	</div>
	<div class="bg-blue-400 ">
		<label for="passport">Identificación</label>
        <input type="text" name="passport" value=""/>
	</div>
	<div class="bg-blue-500 ">  
		<label for="country">Pais</label>
        <input type="text" name="country" value=""/>
	</div>
	<div class="bg-blue-600 "> 
		<label for="telephone">Teléfono</label>
        <input type="text" name="telephone" value=""/>
	</div>
	<div class="bg-blue-700 "> 
		<label for="email">Email</label>
        <input type="email" name="email" value=""/>
	</div>
		


	</div>
</div>

<br>
<br>

<

        
       
    
        
    
        
    
        
        
      
    
        <label for="boat_name">Nombre embarcación</label>
        <input type="text" name="boat_name" value=""/>
    
        <label for="marina">Marina</label>
        <input type="text" name="marina" value=""/>
    
        <label for="type">Tipo de barco</label>
        <input type="text" name="type" value=""/>
        <br>
        <br>
        <input type="submit" value="Guardar"/>
        
    </form>

	

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<meta name="robots" content="noindex, follow">
<script nonce="d40efdc8-8acd-426b-baa0-31b7b494a766">(function(w,d){!function(f,g,h,i){f[h]=f[h]||{};f[h].executed=[];f.zaraz={deferred:[],listeners:[]};f.zaraz.q=[];f.zaraz._f=function(j){return function(){var k=Array.prototype.slice.call(arguments);f.zaraz.q.push({m:j,a:k})}};for(const l of["track","set","debug"])f.zaraz[l]=f.zaraz._f(l);f.zaraz.init=()=>{var m=g.getElementsByTagName(i)[0],n=g.createElement(i),o=g.getElementsByTagName("title")[0];o&&(f[h].t=g.getElementsByTagName("title")[0].text);f[h].x=Math.random();f[h].w=f.screen.width;f[h].h=f.screen.height;f[h].j=f.innerHeight;f[h].e=f.innerWidth;f[h].l=f.location.href;f[h].r=g.referrer;f[h].k=f.screen.colorDepth;f[h].n=g.characterSet;f[h].o=(new Date).getTimezoneOffset();if(f.dataLayer)for(const s of Object.entries(Object.entries(dataLayer).reduce(((t,u)=>({...t[1],...u[1]})))))zaraz.set(s[0],s[1],{scope:"page"});f[h].q=[];for(;f.zaraz.q.length;){const v=f.zaraz.q.shift();f[h].q.push(v)}n.defer=!0;for(const w of[localStorage,sessionStorage])Object.keys(w||{}).filter((y=>y.startsWith("_zaraz_"))).forEach((x=>{try{f[h]["z_"+x.slice(7)]=JSON.parse(w.getItem(x))}catch{f[h]["z_"+x.slice(7)]=w.getItem(x)}}));n.referrerPolicy="origin";n.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(f[h])));m.parentNode.insertBefore(n,m)};["complete","interactive"].includes(g.readyState)?zaraz.init():f.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<div class="container-contact100">
<div class="wrap-contact100">
<form class="contact100-form validate-form">
<span class="contact100-form-title">
Contact Us
</span>
<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
<span class="label-input100">FULL NAME *</span>
<input class="input100" type="text" name="name" placeholder="Enter Your Name">
</div>
<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Enter Your Email (e@a.x)">
<span class="label-input100">Email *</span>
<input class="input100" type="text" name="email" placeholder="Enter Your Email ">
</div>
<div class="wrap-input100 bg1 rs1-wrap-input100">
<span class="label-input100">Phone</span>
<input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
</div>
<div class="wrap-input100 input100-select bg1">
<span class="label-input100">Needed Services *</span>
<div>
<select class="js-select2" name="service">
<option>Please chooses</option>
<option>eCommerce Bussiness</option>
<option>UI/UX Design</option>
<option>Online Services</option>
</select>
<div class="dropDownSelect2"></div>
</div>
</div>
<div class="w-full dis-none js-show-service">
<div class="wrap-contact100-form-radio">
<span class="label-input100">What type of products do you sell?</span>
<div class="contact100-form-radio m-t-15">
<input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical" checked="checked">
<label class="label-radio100" for="radio1">
Phycical Products
</label>
</div>
<div class="contact100-form-radio">
<input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
<label class="label-radio100" for="radio2">
Digital Products
</label>
</div>
<div class="contact100-form-radio">
<input class="input-radio100" id="radio3" type="radio" name="type-product" value="service">
<label class="label-radio100" for="radio3">
Services Consulting
</label>
</div>
</div>
<div class="wrap-contact100-form-range">
<span class="label-input100">Budget *</span>
<div class="contact100-form-range-value">
$<span id="value-lower">610</span> - $<span id="value-upper">980</span>
<input type="text" name="from-value">
<input type="text" name="to-value">
</div>
<div class="contact100-form-range-bar">
<div id="filter-bar"></div>
</div>
</div>
</div>
<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Please Type Your Message">
<span class="label-input100">Message</span>
<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
</div>
<div class="container-contact100-form-btn">
<button class="contact100-form-btn">
<span>
Submit
<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
</span>
</button>
</div>
</form>
</div>
</div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>
<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="vendor/noui/nouislider.min.js"></script>
<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"790970871bf28686","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>
</html>


@endsection
