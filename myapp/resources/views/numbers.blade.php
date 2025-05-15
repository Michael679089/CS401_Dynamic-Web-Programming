<!DOCTYPE html>
<html>
<head>
    <title>Number Checker</title>
</head>
<body>
    <h1>Odd, Even and Prime Number Checker</h1>

    <form method="POST" action="{{ route('check.number') }}">
        @csrf
        <label>Enter a number:</label>
        <input type="number" name="number" required>
        <button type="submit">Check</button>
    </form>

    @if (isset($result))
        <h2>Results for number {{ $number }}:</h2>
        <p>Odd or Even: <strong>{{ $result['odd_even'] }}</strong></p>
        <p>Prime Check: <strong>{{ $result['is_prime'] }}</strong></p>
    @endif
</body>
</html>
