<!DOCTYPE html>
<html lang="fr">
  <head>
    @include('layout.partials.head')
  </head>
  <body>
      @include('layout.partials.nav')
      <div class="container-fluid">
        <div class="row">
          @include('layout.partials.nav2')
          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @yield('content')
          </main>
        </div>
      </div>
      
      @include('layout.partials.footer')

      @include('layout.partials.footer-scripts')

      @yield('scripts')
  </body>
</html>

