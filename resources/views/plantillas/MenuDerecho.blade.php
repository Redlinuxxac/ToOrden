<ul id="nav-mobile" class="right hide-on-med-and-down">
    <li><a href="javascript:void(0);" data-target="dropdown3" data-beloworigin="true" class="waves-effect waves-block waves-light notification-button dropdown-trigger"><i class="material-icons">mail_outline <small class="noti-ot">3</small></i> </a>
        <ul id="dropdown3" class="dropdown-content" id="notifications-dropdown" tabindex="0">
            <li tabindex="0">
                <h6>MENSAJE<span class="new badge">3</span></h6>
            </li>
            <li class="divider" tabindex="0"></li>
            <li tabindex="0"><a class="black-text" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
            </li>
            <li tabindex="0"><a class="black-text" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
            </li>
            <li tabindex="0"><a class="black-text" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
            </li>
        </ul>
    </li>
    <li><a href="javascript:void(0);" data-target="dropdown2" data-beloworigin="true" class="waves-effect waves-block waves-light notification-button dropdown-trigger"><i class="material-icons ">notifications_none <small class="noti-ot">10</small></i> </a>
        <ul id="dropdown2" class="dropdown-content" id="notifications-dropdown" tabindex="0">
            <li tabindex="0">
                <h6>NOTIFICATIONS<span class="new badge">10</span></h6>
            </li>
            <li class="divider" tabindex="0"></li>
            <li tabindex="0"><a class="black-text" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
            </li>
            <li tabindex="0"><a class="black-text" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
            </li>
            <li tabindex="0"><a class="black-text" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
            </li>
            <li tabindex="0"><a class="black-text" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
            </li>
            <li tabindex="0"><a class="black-text" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
            </li>
        </ul>
    </li>
    <li><a href="javascript:void(0);" data-target="dropdown1" data-beloworigin="true" class="waves-effect waves-block waves-light notification-button dropdown-trigger"> <span class="circle responsive-img valign taman-us"><img src="img/person1.jpg" alt=""></span></a>

        <ul id="dropdown1" class="dropdown-content noti-contendor">
            <li><a href="#!" class="grey-text text-darken-1"><i class="material-icons">person_outline</i> Perfil</a></li>
            
            <li>
                <a href="#!">{{ auth()->user()->name }} - {{ str_replace('App\\', '', auth()->user()->userable_type) }}</a>
                Centro: <span>{{ auth()->user()->school->name }}</span>
                Codigo: <span>{{ auth()->user()->school->codigoCentro }}</span>
        </li>
            <li class="divider"></li>
            <li class="divider" tabindex="0"></li>
            <li><a href="#!" class="grey-text text-darken-1"><i class="material-icons">settings</i> Configuracion</a></li>
            <li class="divider" tabindex="0"></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="material-icons">exit_to_app</i> Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    </form></li>
        </ul>

    </li>
</ul>