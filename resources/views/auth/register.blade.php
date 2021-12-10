<form action="{{ route('register') }}" method="POST">
    @csrf

    <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
    <input type="text" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}">
    <input type="password" name="password" id="password" placeholder="Password" value="{{ old('password') }}">
    <input type="submit" name="submit" value="Register">
</form>
