<nav>
    <a href="{{ route('admin.users.index') }}">Users</a>
    <a href="#">Event</a>
    <a href="#">Bookings</a>
    <a href="#">Product</a>
    <a href="#">Serial Number</a>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        
        <button type="submit">Logout</button>
    </form>
</nav>
