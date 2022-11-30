
<x-app-layout>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/530bb6b399.js" crossorigin="anonymous"></script>
</head>



  <div class="hero">

    <div class="content">
      <h4>Welcome to Our Website</h4>
      <h1>Yaz<span>Tec</span></h1>
      <h3> WE HAVE WHAT YOU NEED! </h3>
        <form action="{{ route('dashboard')}}">
                <button class="btn">Shop Here! &#8594; </button>
        </form>
    </div>
  </div>


    <section>
        <h1 class="team-section-title">&#8595 See Our best sellers below! &#8595</h1>
    <div class="team-row">

      <div class="YZproduct">
        <img src="{{ URL::asset('image/1.jpg')}}">
        <br>
        <h2>YazTec Keyboard Pro</h2>
        <br>
        <div id=Star>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
      </div>
        <div class="info">
          <br>
          <p style="text-align: center;">
            <br>
            <a class="button" href="{{ route('dashboard') }}">Find out more</a>
      </div>
      </div>

      <div class="YZproduct">
        <img src="{{ URL::asset('image/4.jpg')}}">
        <br>
        <h2>YazTec Mouse Pro</h2>
        <br>
        <div id=Star>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
      </div>
      <br>
        <div class="info">
          <br>
          <p style="text-align: center;">
            <br>
            <a class="button" href="{{ route('dashboard') }}">Find out more</a>
      </div>
      </div>

     <div class="YZproduct">
       <img src="{{ URL::asset('image/5.jpg')}}">
       <br>
       <h2>YazTec Monitor Pro</h2>
       <br>
       <div id=Star>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </div>
       <div class="Info">
         <br>
        <p style="text-align: center;">
          <br>
          <a class="button" href="{{ route('dashboard') }}">Find out more</a>
    </div>
    </div>

  </section>



</x-app-layout>

