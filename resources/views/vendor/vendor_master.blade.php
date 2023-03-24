<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Head Start -->
    @include('vendor.inc.head')
    <!-- Head End -->
  </head>
  <body>
    <div class="l-wrapper">
      <!-- Sidebar Start -->
      @include('vendor.inc.sidebar')
      <!-- Sidebar End -->
      <!-- Main Contents Start -->
      <main class="l-main">
        <!-- Header Start -->
        @include('vendor.inc.header')
        <!-- Header End -->
        <div class="main-contents p-4">
          @yield('vendor')
        </div>
        <!-- Footer Start -->
        @include('vendor.inc.footer')
        <!-- Footer End -->
      </main>
      <!-- Main Contents End -->
      <!-- Sidebar Start -->
      @include('vendor.inc.subsidebar')
      <!-- Sidebar End -->
    </div>

    @include('vendor.inc.script')
  </body>
</html>
