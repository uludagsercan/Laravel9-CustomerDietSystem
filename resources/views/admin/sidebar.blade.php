<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
                <img src="{{asset('assets')}}/admin/static/logo-white.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
        </h1>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav pt-lg-3">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                  </span>
                        <span class="nav-link-title">
                    Category
                  </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="{{route('admin.category.index')}}" >
                                    All Categories
                                </a>
                                <a class="dropdown-item" href="{{route('admin.category.create')}}" >
                                    Add Category
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->

                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-vaccine" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M17 3l4 4"></path>
                    <path d="M19 5l-4.5 4.5"></path>
                    <path d="M11.5 6.5l6 6"></path>
                    <path d="M16.5 11.5l-6.5 6.5h-4v-4l6.5 -6.5"></path>
                    <path d="M7.5 12.5l1.5 1.5"></path>
                    <path d="M10.5 9.5l1.5 1.5"></path>
                    <path d="M3 21l3 -3"></path>
                </svg>
                  </span>
                        <span class="nav-link-title">
                    Treatment
                  </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="{{route('admin.treatment.index')}}" >
                                    All Treatments
                                </a>
                                <a class="dropdown-item" href="{{route('admin.treatment.create')}}" >
                                    Add Treatment
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('admin.setting')}}" data-bs-auto-close="false" role="button" aria-expanded="false" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->

                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                  </span>
                        <span class="nav-link-title">
                    Settings
                  </span>
                    </a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('admin.message.index')}}" data-bs-auto-close="false" role="button" aria-expanded="false" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4"></path><line x1="8" y1="9" x2="16" y2="9"></line><line x1="8" y1="13" x2="14" y2="13"></line></svg>
                  </span>
                        <span class="nav-link-title">
                    Messages
                  </span>
                    </a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('admin.message.index')}}" data-bs-auto-close="false" role="button" aria-expanded="false" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 122.88 97.85" style="enable-background:new 0 0 122.88 97.85" xml:space="preserve"><g><path d="M45.44,0H15.95c-4.4,0-8.17,1.55-11.3,4.65C1.51,7.75,0,11.52,0,15.95v28c0,4.44,1.55,8.21,4.65,11.3 c3.1,3.1,6.87,4.65,11.3,4.65h13.11c-0.92,3.52-2.04,6.87-3.45,10c-1.37,3.17-3.73,6.2-6.97,9.09c6.23-1.62,11.76-4.05,16.66-7.25 c4.86-3.17,9.09-7.15,12.57-11.83h10.56c4.4,0,8.17-1.58,11.3-4.65c3.13-3.1,4.65-6.87,4.65-11.3v-28c0-4.4-1.55-8.17-4.65-11.3 C66.64,1.51,62.87,0,58.43,0H45.44L45.44,0z M98.04,56.71h-9.34l-1.34,4.16h-8.41l10.04-25.22h9.02l9.99,25.22h-8.63L98.04,56.71 L98.04,56.71z M96.3,51.25l-2.91-9.06l-2.92,9.06H96.3L96.3,51.25z M48.41,37.7c1.09,0.72,1.81,1.18,2.14,1.36 c0.5,0.27,1.18,0.58,2.02,0.94l-2.43,4.65c-1.22-0.56-2.44-1.23-3.64-2c-1.2-0.78-2.04-1.36-2.52-1.74 c-1.94,0.79-4.37,1.19-7.29,1.19c-4.32,0-7.73-1.06-10.22-3.19c-2.95-2.51-4.42-6.05-4.42-10.6c0-4.42,1.29-7.86,3.87-10.31 c2.58-2.45,6.18-3.67,10.81-3.67c4.72,0,8.35,1.19,10.92,3.59c2.57,2.39,3.85,5.82,3.85,10.27C51.5,32.14,50.47,35.31,48.41,37.7 L48.41,37.7z M41.68,33.44c0.7-1.18,1.05-2.95,1.05-5.31c0-2.71-0.54-4.64-1.6-5.8c-1.07-1.16-2.54-1.74-4.42-1.74 c-1.75,0-3.17,0.59-4.25,1.78c-1.09,1.18-1.63,3.03-1.63,5.55c0,2.93,0.53,4.99,1.59,6.17c1.06,1.18,2.52,1.78,4.37,1.78 c0.6,0,1.16-0.06,1.69-0.16c-0.74-0.68-1.9-1.31-3.5-1.91l1.38-2.98c0.78,0.13,1.39,0.3,1.82,0.49c0.44,0.19,1.28,0.71,2.55,1.54 C41.01,33.03,41.33,33.23,41.68,33.44L41.68,33.44z M122.88,32.15v28c0,2.54-0.46,4.93-1.37,7.15c-0.92,2.22-2.25,4.23-4.09,6.02 c-0.77,0.77-1.62,1.48-2.46,2.08c-0.88,0.63-1.8,1.16-2.71,1.62c-0.04,0.04-0.11,0.04-0.14,0.07c-1.2,0.56-2.43,0.95-3.7,1.23 c-1.34,0.28-2.71,0.42-4.12,0.42H90.79c0.18,0.56,0.35,1.13,0.56,1.69c0.53,1.55,1.16,3.1,1.83,4.61v0.04 c0.6,1.41,1.44,2.75,2.47,4.09c1.06,1.37,2.32,2.71,3.84,4.09c1.09,0.95,1.2,2.61,0.21,3.7c-0.67,0.77-1.69,1.06-2.61,0.81 c-3.24-0.85-6.34-1.9-9.23-3.17c-2.89-1.27-5.63-2.75-8.21-4.44c-2.54-1.66-4.93-3.56-7.15-5.63c-1.87-1.76-3.63-3.7-5.28-5.74 h-9.23c-1.73,0-3.42-0.21-5-0.63c-1.58-0.42-3.1-1.09-4.54-1.97c-1.23-0.74-1.62-2.36-0.88-3.59c0.74-1.23,2.36-1.62,3.59-0.88 c0.99,0.6,2.04,1.06,3.2,1.37c1.13,0.32,2.36,0.46,3.63,0.46h10.53c0.81,0,1.58,0.35,2.11,1.06c1.66,2.22,3.49,4.26,5.49,6.13 c1.97,1.87,4.12,3.56,6.44,5.07c2.22,1.44,4.58,2.75,7.08,3.87c-0.49-0.81-0.88-1.62-1.27-2.43c-0.7-1.62-1.37-3.28-1.97-5.04 c-0.56-1.66-1.09-3.38-1.55-5.11c-0.11-0.28-0.14-0.6-0.14-0.92c0-1.44,1.16-2.64,2.64-2.64h16.94c1.06,0,2.04-0.11,2.99-0.32 c0.92-0.21,1.76-0.49,2.57-0.85c0.04-0.04,0.07-0.04,0.11-0.07c0.67-0.32,1.34-0.7,1.94-1.13c0.63-0.46,1.23-0.95,1.8-1.55 c1.3-1.3,2.29-2.75,2.92-4.3c0.63-1.55,0.95-3.28,0.95-5.14v-28c0-1.87-0.32-3.59-0.95-5.14c-0.63-1.55-1.62-2.99-2.92-4.3 c-1.3-1.3-2.75-2.29-4.3-2.92c-1.55-0.63-3.28-0.95-5.14-0.95H86.57c-1.44,0-2.64-1.16-2.64-2.64c0-1.44,1.16-2.64,2.64-2.64h17.72 c2.54,0,4.9,0.46,7.11,1.37c2.22,0.92,4.19,2.25,6.02,4.05c1.8,1.8,3.17,3.8,4.05,6.02c0.92,2.22,1.37,4.58,1.37,7.11H122.88 L122.88,32.15z"/></g></svg>
                  </span>
                        <span class="nav-link-title">
                    Faq
                  </span>
                    </a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('admin.comment.index')}}" data-bs-auto-close="false" role="button" aria-expanded="false" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 29.338 29.338" style="enable-background:new 0 0 29.338 29.338;" xml:space="preserve">
<g>
	<path style="fill:#010002;" d="M27.184,1.605H2.156C0.967,1.605,0,2.572,0,3.76v17.572c0,1.188,0.967,2.155,2.156,2.155h13.543   l5.057,3.777c0.414,0.31,0.842,0.468,1.268,0.468c0.789,0,1.639-0.602,1.637-1.923v-2.322h3.523c1.188,0,2.154-0.967,2.154-2.155   V3.76C29.338,2.572,28.371,1.605,27.184,1.605z M27.34,21.332c0,0.085-0.068,0.155-0.154,0.155h-5.523v3.955l-5.297-3.956H2.156   c-0.086,0-0.154-0.07-0.154-0.155V3.759c0-0.085,0.068-0.155,0.154-0.155v0.001h25.029c0.086,0,0.154,0.07,0.154,0.155   L27.34,21.332L27.34,21.332z M5.505,10.792h4.334v4.333H5.505C5.505,15.125,5.505,10.792,5.505,10.792z M12.505,10.792h4.334v4.333   h-4.334V10.792z M19.505,10.792h4.334v4.333h-4.334V10.792z"/>
</g>

</svg>
                   </span>
                        <span class="nav-link-title">
                    Comments
                  </span>
                    </a>

                </li>
            </ul>
        </div>

    </div>
</aside>
