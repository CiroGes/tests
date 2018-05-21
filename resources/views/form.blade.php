<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {!!Html::style('css/app.css')!!}
    {!!Html::script('js/app.js')!!}

    <title>Form</title>
  </head>

  <body>
    <header style="height: 100px;">
    </header>

    <div class="container">
      <div class="col-sm-12">
        <h1 class="text-center">Formulario</h1>

        <div class="col-sm-6 col-sm-offset-3">
          {!! Form::open(['route' => 'store']) !!}

          <div class="form-group">
            <label for="text">Texto</label>
            <input type="text" name="text" class="form-control" id="text" placeholder="Algún texto">
          </div>

          <button type="submit" class="btn btn-primary pull-right">Envialo Papa</button>

          {!! Form::close() !!}
        </div>

      </div>
    </div>
  </body>

</html>
