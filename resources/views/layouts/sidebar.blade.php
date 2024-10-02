<nav class="col-md-3 col-lg-2 d-none d-md-block sidebar">
    <div class="row">
        <div class="col">
            <div class=" btn-group profile ">
                <div class="col-3 pl-1 avatar">
                    <img class="rounded-circle bg-white" src="{{ asset('images/act-4-300.png') }}" alt="">
                </div>
                <div class="col-2 pr-1">
                    <div class="btn-group dropend">
                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split profile-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    {{-- <button type="button" class="p-1 btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>

    </div>
    <hr>
    <x-sidebar />
</nav>
