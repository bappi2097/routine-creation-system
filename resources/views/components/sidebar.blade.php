<div class="sidebar-navigation hidde-sm hidden-xs">
    <div class="logo">
        <a href="/home">Routine<em>Creation</em></a>
    </div>
    <nav>
        <ul>
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
        </ul>
    </nav>
</div>
<div class="page-content mt-6 mr-6">
    <ul class="flex float-right">
        <li class="mr-2 text-bold rounded-full">
            {{auth()->user()->name}}
        </li>
        <li>
            <a class=" hover:text-blue-400" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }} </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </li>
    </ul>  
</div>