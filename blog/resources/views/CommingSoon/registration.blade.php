<!DOCTYPE html>
<html>
    <body>

    <h2>HTML Forms</h2>

    <form method="POST" action="{{route('registration')}}">
    @csrf
        <label for="fname">Name:</label>
        <input type="text" id="fname" name="name" placeholder="John"><br><br>

        <label for="Password">Password:</label>
        <input type="password" name="password" placeholder="123"><br><br><br>

        <input type="submit" value="Submit">
    </form>

    </body>
</html>
