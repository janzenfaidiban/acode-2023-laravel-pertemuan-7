<!-- nav START -->
<nav class="py-5 bg-secondary">

    <div class="container">
        <div class="col-12">

            <ul class="list-group list-group-horizontal">
                
                <li class="list-group-item @if(Request::segment('1') == '') active @endif">
                    <a href="{{ url('/') }}" class="fs-4 text-decoration-none px-4 @if(Request::segment('1') == '') link-light @endif">Home</a>
                </li>

                <li class="list-group-item @if(Request::segment('1') == 'profile') active @endif">
                    <a href="{{ url('profile') }}" class="fs-4 text-decoration-none px-4 @if(Request::segment('1') == 'profile') link-light @endif">Profile</a>
                </li>

                <li class="list-group-item @if(Request::segment('1') == 'products') active @endif">
                    <a href="{{ url('products') }}" class="fs-4 text-decoration-none px-4 @if(Request::segment('1') == 'products') link-light @endif">Products</a>
                </li>

                <li class="list-group-item @if(Request::segment('1') == 'contact') active @endif">
                    <a href="{{ url('contact') }}" class="fs-4 text-decoration-none px-4 @if(Request::segment('1') == 'contact') link-light @endif">Contact</a>
                </li>

            </ul>

        </div>
    </div>

</nav>
<!-- nav END -->