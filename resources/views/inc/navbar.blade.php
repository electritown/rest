<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">{{config('app.name', 'Restaurant')}}</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">

            <li ><a href="/">Home</a></li>

          {{-- Authentication --}}
          {{-- @can('isAdmin', 'isWaiter') --}}
            <li><a href="/table">Tables</a></li>
            <li><a href="/meals">Meals</a></li>
            <li><router-link to="/example ">Go to Foo</router-link></li>
          {{-- @endcan --}}

          {{-- Authentication --}}
          {{-- @can('isAdmin', 'isCooker') --}}
            <li><a href="/ingredients">Ingredients</a></li>
            <li><a href="/categories">Categories</a></li>
          {{-- @endcan --}}

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class=""><a class="fa fa-shopping-cart" href="{{ url('/cart') }}">Cart ({{ Cart::instance('default')->count(false) }})</a></li>
          </ul>
        
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  
