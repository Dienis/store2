@if(!isset($innerLoop))
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarTop">
      <a class="navbar-brand" href="#">Hidden brand</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        @else
          <ul class="dropdown-menu">
            @endif

            @php

              if (Voyager::translatable($items)) {
                  $items = $items->load('translations');
              }

            @endphp

            @foreach ($items as $item)

              @php

                $originalItem = $item;
                if (Voyager::translatable($item)) {
                    $item = $item->translate($options->locale);
                }

                $isActive = null;
                $listItemClass = null;
                $linkAttributes =  null;
                $styles = null;
                $icon = null;
                $caret = null;

                // Background Color or Color
                if (isset($options->color) && $options->color == true) {
                    $styles = 'color:'.$item->color;
                }
                if (isset($options->background) && $options->background == true) {
                    $styles = 'background-color:'.$item->color;
                }

                // Check if link is current
            if(url($item->link()) == url()->current()){
                $isActive = 'active';
            }

                // With Children Attributes
                if(!$originalItem->children->isEmpty()) {
                    $linkAttributes =  'class="dropdown-toggle" data-toggle="dropdown"';
                    $caret = '<span class="caret"></span>';

                    if(url($item->link()) == url()->current()){
                        $listItemClass = 'dropdown active';
                    }else{
                        $listItemClass = 'dropdown';
                    }
                }

                // Set Icon
                if(isset($options->icon) && $options->icon == true){
                    $icon = '<i class="' . $item->icon_class . '"></i>';
                }

              @endphp

              <li class="{{ $listItemClass }} {{ $isActive }} nav-item">
                <a class="nav-link" href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}" {!! $linkAttributes or '' !!}>
                  {!! $icon !!}
                  <span>{{ $item->title }}</span>
                  {!! $caret !!}
                </a>
                @if(!$originalItem->children->isEmpty())
                  @include('voyager::menu.bootstrap', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
                @endif
              </li>
            @endforeach
          </ul>
      </ul>
    </div>
    </div>
  </nav>
