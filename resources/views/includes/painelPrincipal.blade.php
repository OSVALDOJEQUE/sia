<div class="menu-principal">          
                @switch(Auth::user()->permission)
  
                  @case(0)
                     <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:180px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                        </li>
                        <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/agentes.png')}}"></a>
                        </li>
                      

                        <li><a  href="{{route('cards')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/cartoes-gerados.png')}}"></a>
                        </li>


                         <li><a  href="{{route('card.solicited')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/gerar-cartoes.png')}}"></a>
                          @if($lenght = count($solicitations)>0)
                          <span class="notifications solicitation">{{$lenght}}</span>
                          @endif
                        </li>

                         <li><a  href="{{route('entities')}}"><img class="logo" style="max-width:128px" src="{{asset('logo/icons/listar-entidades.png')}}"></a>
                         
                        </li>

                     
                       
                         <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                        </li>
                        <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                        <lenght></lenght>
                        </li>
                           <li><a  href="{{route('user.create')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/criar-usuario.png')}}"></a>
                        </li>
                          <li><a  href="{{route('users')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/usuarios.png')}}"></a>
                        </li>
                      
                        <li><a  href="{{route('reports')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/gerar-relatorios.png')}}"></a>
                        </li>
                    @break

                        @case(1)
                     <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:180px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                        </li>
                        <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/agentes.png')}}"></a>
                        </li>
                      

                        <li><a  href="{{route('cards')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/cartoes-gerados.png')}}"></a>
                        </li>


                         <li><a  href="{{route('card.solicited')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/gerar-cartoes.png')}}"></a>
                          @if($lenght = count($solicitations)>0)
                          <span class="notifications solicitation">{{$lenght}}</span>
                          @endif
                        </li>

                         <li><a  href="{{route('entities')}}"><img class="logo" style="max-width:128px" src="{{asset('logo/icons/listar-entidades.png')}}"></a>
                         
                        </li>

                     
                       
                         <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                        </li>
                        <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                        <lenght></lenght>
                        </li>
                        <li><a  href="{{route('user.create')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/criar-usuario.png')}}"></a>
                        </li>
                          <li><a  href="{{route('users')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/usuarios.png')}}"></a>
                        </li>
                      
                        <li><a  href="{{route('reports')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/gerar-relatorios.png')}}"></a>
                        </li>
                    @break

                    @case(2)
                        <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:180px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                        </li>
                        <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/agentes.png')}}"></a>
                        </li>
                      

                        <li><a  href="{{route('cards')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/cartoes-gerados.png')}}"></a>
                        </li>


                         <li><a  href="{{route('card.solicited')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/gerar-cartoes.png')}}"></a>
                          @if($lenght = count($solicitations)>0)
                          <span class="notifications solicitation">{{$lenght}}</span>
                          @endif
                        </li>

                         <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                        </li>
                        <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                        <lenght></lenght>
                        </li>
                    @break

                    @case(3)
                        <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:180px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                        </li>
                        <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/agentes.png')}}"></a>
                        </li>
                      

                        <li><a  href="{{route('cards')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/cartoes-gerados.png')}}"></a>
                        </li>


                         <li><a  href="{{route('card.solicited')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/gerar-cartoes.png')}}"></a>
                          @if($lenght = count($solicitations)>0)
                          <span class="notifications solicitation">{{$lenght}}</span>
                          @endif
                        </li>

                         <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                        </li>
                        <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                        <lenght></lenght>
                        </li>
                    @break

                       @case(4)
                          <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:180px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                        </li>
                        <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/agentes.png')}}"></a>
                        </li>
                      

                        <li><a  href="{{route('cards')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/cartoes-gerados.png')}}"></a>
                        </li>


                         <li><a  href="{{route('card.solicited')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/gerar-cartoes.png')}}"></a>
                          @if($lenght = count($solicitations)>0)
                          <span class="notifications solicitation">{{$lenght}}</span>
                          @endif
                        </li>

                         <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                        </li>
                        <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                        <lenght></lenght>
                        </li>
                    @break

                    @case(5)
                        <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:180px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                        </li>
                        <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/agentes.png')}}"></a>
                        </li>
                      

                        <li><a  href="{{route('cards')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/cartoes-gerados.png')}}"></a>
                        </li>


                         <li><a  href="{{route('card.solicited')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/gerar-cartoes.png')}}"></a>
                          @if($lenght = count($solicitations)>0)
                          <span class="notifications solicitation">{{$lenght}}</span>
                          @endif
                        </li>

                         <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                        </li>
                        <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                        <lenght></lenght>
                        </li>
                    @break

                    @case(6)
                      <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:180px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                      </li>
                      <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/agentes.png')}}"></a>
                      </li>
                      <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                      </li>
                      <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                      <lenght></lenght>
                      </li>
                    @break

                    @case(7)
                      <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                      <lenght></lenght>
                      </li>
                       <li><a  href="{{route('user.create')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/criar-usuario.png')}}"></a>
                      </li>
                      <li><a  href="{{route('users')}}"><img class="logo" style="max-width:180px" src="{{asset('logo/icons/usuarios.png')}}"></a>
                      </li>
                    @break
                @endswitch
              </div>
            



              <div class="mobile-menu">
                @switch(Auth::user()->permission)
  
                  @case(0)
                     <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:75px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                        </li>
                        <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/agentes.png')}}"></a>
                        </li>
                      

                        <li><a  href="{{route('cards')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/cartoes-gerados.png')}}"></a>
                        </li>


                         <li><a  href="{{route('card.solicited')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/gerar-cartoes.png')}}"></a>
                          @if($lenght = count($solicitations)>0)
                          <span class="notifications solicitation">{{$lenght}}</span>
                          @endif
                        </li>

                         <li><a  href="{{route('entities')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/listar-entidades.png')}}"></a>
                         
                        </li>

                     
                       
                         <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                        </li>
                        <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                        <lenght></lenght>
                        </li>
                           <li><a  href="{{route('user.create')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/criar-usuario.png')}}"></a>
                        </li>
                          <li><a  href="{{route('users')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/usuarios.png')}}"></a>
                        </li>
                      
                        <li><a  href="{{route('reports')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/gerar-relatorios.png')}}"></a>
                        </li>
                    @break

                        @case(1)
                     <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:75px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                        </li>
                        <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/agentes.png')}}"></a>
                        </li>
                      

                        <li><a  href="{{route('cards')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/cartoes-gerados.png')}}"></a>
                        </li>


                         <li><a  href="{{route('card.solicited')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/gerar-cartoes.png')}}"></a>
                          @if($lenght = count($solicitations)>0)
                          <span class="notifications solicitation">{{$lenght}}</span>
                          @endif
                        </li>

                         <li><a  href="{{route('entities')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/listar-entidades.png')}}"></a>
                         
                        </li>

                     
                       
                         <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                        </li>
                        <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                        <lenght></lenght>
                        </li>
                        <li><a  href="{{route('user.create')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/criar-usuario.png')}}"></a>
                        </li>
                          <li><a  href="{{route('users')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/usuarios.png')}}"></a>
                        </li>
                      
                        <li><a  href="{{route('reports')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/gerar-relatorios.png')}}"></a>
                        </li>
                    @break

                    @case(2)
                        <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:75px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                        </li>
                        <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/agentes.png')}}"></a>
                        </li>
                      

                        <li><a  href="{{route('cards')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/cartoes-gerados.png')}}"></a>
                        </li>


                         <li><a  href="{{route('card.solicited')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/gerar-cartoes.png')}}"></a>
                          @if($lenght = count($solicitations)>0)
                          <span class="notifications solicitation">{{$lenght}}</span>
                          @endif
                        </li>

                         <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                        </li>
                        <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                        <lenght></lenght>
                        </li>
                    @break

                    @case(3)
                        <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:75px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                        </li>
                        <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/agentes.png')}}"></a>
                        </li>
                      

                        <li><a  href="{{route('cards')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/cartoes-gerados.png')}}"></a>
                        </li>


                         <li><a  href="{{route('card.solicited')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/gerar-cartoes.png')}}"></a>
                          @if($lenght = count($solicitations)>0)
                          <span class="notifications solicitation">{{$lenght}}</span>
                          @endif
                        </li>

                         <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                        </li>
                        <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                        <lenght></lenght>
                        </li>
                    @break

                       @case(4)
                          <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:75px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                        </li>
                        <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/agentes.png')}}"></a>
                        </li>
                      

                        <li><a  href="{{route('cards')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/cartoes-gerados.png')}}"></a>
                        </li>


                         <li><a  href="{{route('card.solicited')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/gerar-cartoes.png')}}"></a>
                          @if($lenght = count($solicitations)>0)
                          <span class="notifications solicitation">{{$lenght}}</span>
                          @endif
                        </li>

                         <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                        </li>
                        <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                        <lenght></lenght>
                        </li>
                    @break

                    @case(5)
                        <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:75px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                        </li>
                        <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/agentes.png')}}"></a>
                        </li>
                      

                        <li><a  href="{{route('cards')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/cartoes-gerados.png')}}"></a>
                        </li>


                         <li><a  href="{{route('card.solicited')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/gerar-cartoes.png')}}"></a>
                          @if($lenght = count($solicitations)>0)
                          <span class="notifications solicitation">{{$lenght}}</span>
                          @endif
                        </li>

                         <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                        </li>
                        <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                        <lenght></lenght>
                        </li>
                    @break

                    @case(6)
                      <li ><a  href="{{route('agent.create')}}"> <img class="logo" style="max-width:75px" src="{{asset('logo/icons/criar-agentes.png')}}"></a>
                      </li>
                      <li ><a  href="{{route('agents')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/agentes.png')}}"></a>
                      </li>
                      <li><a  href="{{route('message.create')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificar-agentes.png')}}"></a>
                      </li>
                      <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                      <lenght></lenght>
                      </li>
                    @break

                    @case(7)
                      <li><a  href="{{route('messages')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/notificacoes.png')}}"></a>
                      <lenght></lenght>
                      </li>
                       <li><a  href="{{route('user.create')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/criar-usuario.png')}}"></a>
                      </li>
                      <li><a  href="{{route('users')}}"><img class="logo" style="max-width:75px" src="{{asset('logo/icons/usuarios.png')}}"></a>
                      </li>
                    @break
                @endswitch
              </div>



              
