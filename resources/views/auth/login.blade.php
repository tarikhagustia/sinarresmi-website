<form action="{{ route('login') }}" method="POST">
    @csrf

    <input type="text" name="email" id="email" placeholder="Email Address">
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="submit" name="submit" value="Login">
</form>
