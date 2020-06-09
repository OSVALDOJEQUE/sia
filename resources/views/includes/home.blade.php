      
          @if(Auth::user()->permission==0)
             <a href="{{route('home')}}"><i class="fas fa-fw fa-home"></i> Home</a>
           @else
               @if(Auth::user()->permission==1)
                    <a href="{{route('home')}}"><i class="fas fa-fw fa-home"></i> Home</a>
                  @else 
                     @if(Auth::user()->permission==2)
                     <a href="{{route('home')}}"><i class="fas fa-fw fa-home"></i> Home</a>
                     @else
                        @if(Auth::user()->permission==3)
                        <a href="{{route('home')}}"><i class="fas fa-fw fa-home"></i> Home</a>
                        @else
                            @if(Auth::user()->permission==4)
                              <a href="{{route('home')}}"><i class="fas fa-fw fa-home"></i> Home</a>
                            @else
                              <a href="{{route('home')}}"><i class="fas fa-fw fa-home"></i> Home</a>
                            @endif
                        @endif
                    @endif
                @endif
              @endif