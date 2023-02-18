@include ('includes.header')

<div class="container p-10 w-full sm:w-4/6 text-center">
    <div class="rounded-lg shadow-lg bg-white ">
        <img class="mx-auto w-48 mb-4" src="/images/logo.jpg" alt="JM Electronautica"> 
            @yield('content')

    </div>      
</div>          
@include('includes.footer')
  
</body>
</html>
