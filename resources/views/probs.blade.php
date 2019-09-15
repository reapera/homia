<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homia | Your Home Sweet Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body style="background-color:lightgrey;">
        <div style="display:flex;flex-direction:column;justify-content:center;height:100vh;">
            <div style="display:flex;flex-direction:row;justify-content:center;">
                <form action="/probs" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group tab1">
                    <input type="file" name="image"/>
                    <textarea name="desc" class="form-control"></textarea>
                    </div>
                    
                    <div class="form-group tab2" style="display:none;">
                        <input name="age" class="form-control">
                        <input name="email" class="form-control">
                    </div>
                    <button type="button" class="btn btn-primary nexttab tab1">Submit</button>
                    <button type="button" class="btn btn-primary prevtab tab2" style="display:none;">Back</button>
                    <input type="submit" class="btn btn-primary tab2" style="display:none;" value="Ask" />
                </form>
            </div>
        </div>
    </body>
    <script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('.nexttab').on('click', function(){
        $('.tab1').hide();
        $('.tab2').show();
    });
    $('.prevtab').on('click', function(){
        $('.tab2').hide();
        $('.tab1').show();
    });
    
    @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    swal("Oops!", {{$error}}, "error");
    @endforeach
    @endif
    @if (session()->has('message'))
    swal("Thank you!", "Your question has been submitted", "success");
    @endif
</script>
</html>
