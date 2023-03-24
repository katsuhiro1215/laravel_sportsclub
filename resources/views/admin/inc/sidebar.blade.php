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
      <h3 class="sidebar-title">Vendor管理</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="{{ route('admin.vendor.index') }}" class="nav-link">
            <i class="ri-login-box-line"></i>
            <p>Vendor一覧</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.vendor.create') }}" class="nav-link">
            <i class="ri-login-box-line"></i>
            <p>Vendor新規作成</p>
          </a>
        </li>
      </ul>
    </nav>

    <nav class="sidebar-nav mt-2">
      <ul class="nav nav-pills flex-column flex-end">
        <li class="nav-item">
          <a class="nav-link menu-open">
            <i class="fas fa-cog"></i>
            <p>設定</p>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="child-nav">
            <li class="child-nav-item">
              <a href="table.html" class="child-nav-link">
                <i class="fas fa-cog"></i>
                <p>一般設定</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="{{ route('admin.company.index') }}" class="child-nav-link">
                <i class="fas fa-cog"></i>
                <p>会社概要</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </section>
</div>