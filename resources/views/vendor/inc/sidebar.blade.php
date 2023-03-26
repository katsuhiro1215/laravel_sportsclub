<div class="l-sidebar">
  <section class="sidebar">
    <h1 class="brand-name">
      <a href="index.html" class="brand-name__link">
        <img src="{{ asset('backend/assets/images/login.jpg') }}" alt="" class="brand-name__img" />
        <span class="brand-name__text">Name Here</span>
      </a>
    </h1>

    <nav class="sidebar-nav mb-2">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="/" class="nav-link">
            <i class="fas fa-tachometer"></i>
            <p>Dashboard</p>
          </a>
        </li>
      </ul>
    </nav>

    <nav class="sidebar-nav mb-2">
      <h3 class="sidebar-title">User</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="{{ route('vendor.user.index') }}" class="nav-link">
            <i class="fa-solid fa-palette"></i>
            <p>User一覧</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('vendor.user.create') }}" class="nav-link">
            <i class="fa-solid fa-palette"></i>
            <p>User新規作成</p>
          </a>
        </li>
      </ul>
    </nav>

    <nav class="sidebar-nav mb-2">
      <h3 class="sidebar-title">Event</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="{{ route('vendor.event.index') }}" class="nav-link">
            <i class="fa-solid fa-palette"></i>
            <p>Event一覧</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('vendor.event.create') }}" class="nav-link">
            <i class="fa-solid fa-palette"></i>
            <p>Event新規作成</p>
          </a>
        </li>
      </ul>
    </nav>

    <nav class="sidebar-nav mt-2">
      <ul class="nav nav-pills flex-column flex-end">
        <li class="nav-item">
          <a href="cog.html" class="nav-link">
            <i class="fas fa-cog"></i>
            <p>設定</p>
          </a>
        </li>
      </ul>
    </nav>
  </section>
</div>