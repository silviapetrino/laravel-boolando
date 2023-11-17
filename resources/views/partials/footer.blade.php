
@php
    $mainMenuFooter = config('menues.main_menu_footer');
    $socialsMenuFooter = config('menues.socials_menu_footer');
@endphp
 {{-- footer --}}

 <footer>
    <div class="container display-flex">
      <div class="text">
        <h5><a href="#">Booleando s.r.l</a></h5>
        <nav>
            <ul>
                @foreach ( $mainMenuFooter as $item )
                <li>
                    <a href="{{ $item['name']}}">{{ $item['text'] }}</a>
                </li>
                @endforeach
            </ul>
      </nav>
      </div>
      <div class="social">
        <span>Trovaci anche su</span>
        <nav>
          <ul>
            @foreach ($socialsMenuFooter as $item)
                <li>
                <a href="{{ $item['href']}}">
                    <i class=" {{ $item['icon'] }}"></i>
                </a>
                </li>
            @endforeach

        </ul>
      </nav>
      </div>
      </div>

  <!-- /footer  -->

  </footer>
