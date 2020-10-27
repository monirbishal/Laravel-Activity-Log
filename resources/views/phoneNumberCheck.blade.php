<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
          <div class="row mt-5 justify-content-center">
              <div class="col-md-6">
                <h1 class="text-center mb-3 mt-5">Phone Number Validation</h1>
                  <div class="card p-4">
                      @if (session('success'))    
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    <form action="{{ route('phoneNumberValidate') }}" method="POST">
                        @csrf
                        <label for="phone">Phone Number</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <select name="country_code" class="form-control" style="width: 170px">
                              @foreach ($countries as $key => $value)
                                  <option value="{{ $key }}"> {{ $value['country'] }}</option>
                              @endforeach
                            </select>
                          </div>
                          <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" aria-describedby="phoneHelp" placeholder="Ex: 019897001**">
                        </div>
                        @error('phone')
                          @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    <span>{{ $error }}</span>
                                </div>
                          @endforeach
                        @enderror
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>