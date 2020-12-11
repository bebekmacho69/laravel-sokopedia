        <div class="container">
            <div class="row justify-content-center" style="margin-bottom: 100px;">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Catalog
                        </div>
                        <div class="card-body">
                            There is no product yet! will be reloaded soon. <br>
                            please come back later :) <br>
                        @guest
                            @if(Route::has('register'))
                                <a class="btn btn-primary" type="button" style="margin-top:10px;" href="/login" style="color: #04bc00;">Login</a>
                            @endif
                        @else
                            <a onclick="event.preventDefault(); 
                                document.getElementById('logout-form').submit();" 
                                href="{{ route('logout') }}" 
                                class="btn btn-primary" type="button" style="margin-top:10px;">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>