<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Head Start -->
    @include('admin.inc.head')
    <!-- Head End -->
  </head>
  <body>
    <div class="l-wrapper">
      <!-- Sidebar Start -->
      @include('admin.inc.sidebar')
      <!-- Sidebar End -->
      <!-- Main Contents Start -->
      <main class="l-main">
        <!-- Header Start -->
        @include('admin.inc.header')
        <!-- Header End -->
        <div class="main-contents p-4">
          @yield('admin')
        </div>
        <!-- Footer Start -->
        @include('admin.inc.footer')
        <!-- Footer End -->
      </main>
      <!-- Main Contents End -->
      <!-- Sidebar Start -->
      @include('admin.inc.subsidebar')
      <!-- Sidebar End -->
    </div>

    @include('admin.inc.script')
  </body>
</html>
