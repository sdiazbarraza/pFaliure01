<h6
    class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
    <span>Direct access</span>
    <a class="d-flex align-items-center text-muted" href="#">
        <span data-feather="plus-circle"></span>
    </a>
</h6>
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('dashboard') }}">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
        </a>
    </li>
</ul>

<h6
    class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
    <span>Maintainers</span>
    <a class="d-flex align-items-center text-muted" href="#">
        <span data-feather="plus-circle"></span>
    </a>
</h6>
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="file"></span>
            Users
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="file"></span>
            Permissions
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('receivers.index') }}">
            <span data-feather="file"></span>
            Receivers
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('providers.index') }}">
            <span data-feather="shopping-cart"></span>
            Providers
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('clients.index') }}">
            <span data-feather="users"></span>
            Clients
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">
            <span data-feather="users"></span>
            Products
        </a>
    </li>
</ul>

<h6
    class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
    <span>Operations</span>
    <a class="d-flex align-items-center text-muted" href="#">
        <span data-feather="plus-circle"></span>
    </a>
</h6>
<ul class="nav flex-column mb-2">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('shippings.index') }}">
            <span data-feather="file-text"></span>
            Shippings
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dispatch_orders.index') }}">
            <span data-feather="file-text"></span>
            Dispatch Orders
        </a>
    </li>
</ul>