<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <!-- Hapus bagian app-brand demo atau modifikasi menjadi lebih sederhana -->
  <div class="app-brand demo" style="min-height: 64px; display: flex; align-items: center; padding-left: 1.5rem;">
      <a href="index.html" class="app-brand-link">
          <span class="app-brand-text demo menu-text fw-bolder">WELCOME ADMIN!!</span>
      </a>
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
          <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
  </div>
    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item ">
    <a href="{{ url('admin') }}" class="menu-link d-flex align-items-center">
        <i class="menu-icon tf-icons bx bx-home-circle me-2"></i>
        <span data-i18n="Analytics">Dashboard</span>
    </a>
</li>   
      <!-- Components -->
     
      <!-- User interface -->
  <li class="menu-item">
    <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-table"></i>
        <div data-i18n="Tables">Tables</div>
    </a>
    <ul class="menu-sub">
        <li class="menu-item">
            <a href="{{route('albums.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-album me-2"></i>
                <div data-i18n="Alerts">Album</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('lagu.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-music me-2"></i>
                <div data-i18n="Badges">Lagu</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('events.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar-event me-2"></i>
                <div data-i18n="Buttons">Event</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('musisi.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user me-2"></i>
                <div data-i18n="Carousel">Musisi</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('merchandise.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-purchase-tag me-2"></i>
                <div data-i18n="Carousel">Merchandise</div>
            </a>
        </li>
    </ul>
</li>
         

        

      <!-- Extended components -->
      {{-- <li class="menu-item">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-copy"></i>
          <div data-i18n="Extended UI">Extended UI</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
              <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="extended-ui-text-divider.html" class="menu-link">
              <div data-i18n="Text Divider">Text Divider</div>
            </a>
          </li>
        </ul>
      </li> --}}

      <!-- Forms & Tables -->
     
      
      {{-- <!-- Tables -->
      <li class="menu-item">
        <a href="tables-basic.html" class="menu-link">
          <i class="menu-icon tf-icons bx bx-table"></i>
          <div data-i18n="Tables">Tables</div>
        </a>
      </li> --}}
      <!-- Misc -->
     
    </ul>
  </aside>
  