<!DOCTYPE html>
<html>
<head>
    <title>Card in Deck</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>

    <div class="container">
        <form id="deck-form" method="POST" action="{{ url('deal') }}">
            @csrf

            <div class="form-group">
                <label for="players">
                    Player Amount
                </label>

                <input class="form-control" type="text" name="players">
                @if ($errors->has('players'))
                    <span class="text-danger">{{ $errors->first('players') }}</span>
                @endif
            </div>

            

            <div class="form-group">
                <input class="btn btn-primary" id="sendBtn" type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>