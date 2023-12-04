<!doctype html>
<html lang="en">

<head>
  <title>To Do App</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<div class="container my-5">
    <h1>Add Your To Do</h1>
    <form action="{{url('/')}}/todo" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{old('title')}}">
          <span class="text-danger">
            @error('title')
                {{$message}}
            @enderror
          </span>
          <br>
        </div>
        <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <div class="form-floating">
            <textarea name="textarea" class="form-control" id="textarea" style="height: 100px" value="{{old('textarea')}}"></textarea>
            <span class="text-danger">
                @error('textarea')
                    {{$message}}
                @enderror
              </span>
              <br>
          </div>
        <input type="submit" name="to-do" value="Add To Do" class="btn btn-primary my-3">
      </form>
</div>


  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($view as $value)
        <tr>
          <td scope="row">{{$value->tile}}</td>
          <td>{{$value->description}}</td>
          <td><a href="{{url('/')}}/todo/{{$value->id}}" class="text-danger fs-2"><i class="fa fa-times" aria-hidden="true"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>