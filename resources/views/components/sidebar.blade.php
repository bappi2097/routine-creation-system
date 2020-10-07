<div class="sidebar-navigation hidde-sm hidden-xs">
    <div class="logo">
        <a href="/home">Routine<em>Creation</em></a>
    </div>
    <nav>
        <ul>
            <h2 class="text-white text-xl">{{auth()->user()->name}}</h2>
            <li>
                <a href="/home">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Home
                </a>
            </li>
            <li>
                <a href="/routine" onclick="day()">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Routine
                </a>
            </li>
            <li>
                <a href="/day" onclick="day()">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Day
                </a>
            </li>
            <li>
                <a href="/slot">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Slot
                </a>
            </li>
            <li>
                <a href="/room">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Room
                </a>
            </li>
            <li>
                <a href="/teacher">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Teacher
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    {{ __('Logout') }} </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
</div>