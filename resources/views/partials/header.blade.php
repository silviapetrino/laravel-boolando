@php
    $mainMenuHeader = config('menues.main_menu_header');
    $socialMenuHeader = config('menues.socials_menu_header');
@endphp

{{-- header  --}}

<header id="topbar">
    <div class="container display-flex">
      <nav>
        <ul>
            @foreach ( $mainMenuHeader as $item)
                 <li>
                    <a href="{{ route($item['name']) }} ">{{ $item['text'] }}</a>
                </li>
            @endforeach

        </ul>
      </nav>

      <div id="logo">
        <a href="{{ route('home')}}">
            <img src="/boolean-logo.png" alt="logo" title="logo-boolean">
        </a>
    </div>

      <nav>
        <ul>
            @foreach ( $socialMenuHeader as $item)
            <li>
                <a href="{{ $item['href'] }}">
                    <i class="{{ $item['icon'] }}"></i>
                </a>
           </li>
            @endforeach
        </ul>
      </nav>
  </header>
