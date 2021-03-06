<div class="sidebar" data-color="purple" data-background-color="white">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="/home" class="simple-text logo-normal">
      {{ __('Taskboard') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'tasks' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('tasks.index') }}">
          <i class="material-icons">task</i>
          <p>{{ __('Your Tasks') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
