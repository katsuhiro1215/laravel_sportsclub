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

    <nav class="sidebar-nav mb-2">
      <h3 class="sidebar-title">User</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="profile.html" class="nav-link">
            <i class="fa-solid fa-palette"></i>
            <p>User一覧</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="student-create.html" class="nav-link">
            <i class="fa-solid fa-palette"></i>
            <p>User新規作成</p>
          </a>
        </li>
      </ul>
    </nav>


    <nav class="sidebar-nav mb-2">
      <h3 class="sidebar-title">Foundation</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="color.html" class="nav-link">
            <i class="fa-solid fa-palette"></i>
            <p>Variables - Color</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="typograph.html" class="nav-link">
            <i class="fa-solid fa-font"></i>
            <p>Variables - Text</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="base.html" class="nav-link">
            <i class="fa-solid fa-folder-open"></i>
            <p>Base</p>
          </a>
        </li>
      </ul>
    </nav>

    <nav class="sidebar-nav mb-2">
      <h3 class="sidebar-title">Layout</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link menu-open">
            <i class="fa-solid fa-money-bill"></i>
            <p>Table</p>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="child-nav">
            <li class="child-nav-item">
              <a href="table.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>Table</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="data_talbe.html" class="child-nav-link">
                <i class="mdi mdi-material-ui"></i>
                <p>Data Table</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="user_table.html" class="child-nav-link">
                <i class="ri-remixicon-line"></i>
                <p>User Table</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-open">
            <i class="fa-solid fa-money-bill"></i>
            <p>Form</p>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="child-nav">
            <li class="child-nav-item">
              <a href="general_form.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>General Form</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="login.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>Login Form</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="login2.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>Login Form2</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="login3.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>Login Form3</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="register.html" class="child-nav-link">
                <i class="mdi mdi-material-ui"></i>
                <p>Register Form</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="register2.html" class="child-nav-link">
                <i class="mdi mdi-material-ui"></i>
                <p>Register Form2</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="register3.html" class="child-nav-link">
                <i class="mdi mdi-material-ui"></i>
                <p>Register Form3</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

    <nav class="sidebar-nav mb-2">
      <h3 class="sidebar-title">Project</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="calendar.html" class="nav-link menu-open">
            <i class="fa-solid fa-money-bill"></i>
            <p>Calendar</p>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-open">
            <i class="fa-solid fa-money-bill"></i>
            <p>Form</p>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
      </ul>
    </nav>

    <nav class="sidebar-nav mb-2">
      <h3 class="sidebar-title">Object -Component</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="accordion.html" class="nav-link">
            <i class="fas fa-tachometer"></i>
            <p>Accordion</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="alert.html" class="nav-link">
            <i class="fas fa-tachometer"></i>
            <p>Alert</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="button.html" class="nav-link">
            <i class="fas fa-tachometer"></i>
            <p>Button</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="box.html" class="nav-link">
            <i class="fa-solid fa-folder-open"></i>
            <p>Box</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="card.html" class="nav-link">
            <i class="fa-solid fa-folder-open"></i>
            <p>Card</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="carousel.html" class="nav-link">
            <i class="fas fa-users"></i>
            <p>Carousel</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pagination.html" class="nav-link">
            <i class="fas fa-users"></i>
            <p>Pagination</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="progress.html" class="nav-link">
            <i class="fas fa-users"></i>
            <p>Progress</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="toast.html" class="nav-link">
            <i class="fas fa-users"></i>
            <p>Toasts</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="tooltip.html" class="nav-link">
            <i class="fas fa-users"></i>
            <p>Tooltips</p>
          </a>
        </li>
      </ul>
    </nav>

    <nav class="sidebar-nav mb-2">
      <h3 class="sidebar-title">Project</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link menu-open">
            <i class="fa-solid fa-shopping-cart"></i>
            <p>Ecomerce</p>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="child-nav">
            <li class="child-nav-item">
              <a href="ec-dashboard.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="ec-product-list.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>ProductList</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="ec-product-create.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>ProductCreate</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="table.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>ShoppingCart</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="table.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>Dashboard</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-open">
            <i class="fa-solid fa-shopping-cart"></i>
            <p>Resevation</p>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="child-nav">
            <li class="child-nav-item">
              <a href="reserve-dashboard.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>Calendar</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="reserve-calendar.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>List</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="ec-product-create.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>ProductCreate</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="table.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>ShoppingCart</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="table.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>Dashboard</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

    <nav class="sidebar-nav mt-4">
      <h3 class="sidebar-title">Utility</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="blog.html" class="nav-link">
            <i class="fas fa-tachometer"></i>
            <p>Blog</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="chart.html" class="nav-link">
            <i class="fas fa-tachometer"></i>
            <p>Chart</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="calendar.html" class="nav-link">
            <i class="fa-solid fa-folder-open"></i>
            <p>Calendar</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-open">
            <i class="fa-solid fa-money-bill"></i>
            <p>Icons</p>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="child-nav">
            <li class="child-nav-item">
              <a href="icons_fontawesome.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>Font Awesome</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="icons_material.html" class="child-nav-link">
                <i class="mdi mdi-material-ui"></i>
                <p>Material Icon</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="icons_remix.html" class="child-nav-link">
                <i class="ri-remixicon-line"></i>
                <p>Remix Icon</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="icons_flag.html" class="child-nav-link">
                <i class="flag-icon flag-icon-jp"></i>
                <p>Flag Icon</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="icons_weather.html" class="child-nav-link">
                <i class="wi wi-night-sleet"></i>
                <p>Weather Icon</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

    <nav class="sidebar-nav mt-2">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link menu-open">
            <i class="fa-solid fa-money-bill"></i>
            <p>Website</p>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="child-nav">
            <li class="child-nav-item">
              <a href="top_page.html" class="child-nav-link">
                <i class="fa-solid fa-font-awesome"></i>
                <p>Top Page</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="page2.html" class="child-nav-link">
                <i class="mdi mdi-material-ui"></i>
                <p>Page2</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="page3.html" class="child-nav-link">
                <i class="ri-remixicon-line"></i>
                <p>Page3</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="blog_page.html" class="child-nav-link">
                <i class="flag-icon flag-icon-jp"></i>
                <p>Blog Page</p>
              </a>
            </li>
            <li class="child-nav-item">
              <a href="contact.html" class="child-nav-link">
                <i class="wi wi-night-sleet"></i>
                <p>Contact Page</p>
              </a>
            </li>
          </ul>
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