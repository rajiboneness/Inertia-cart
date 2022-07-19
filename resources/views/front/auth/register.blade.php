<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

    <title>Inertia Cart | admin panel</title>
  </head>
  <body>
    <main class="login">
      <div class="login__left">
        <img src="{{ asset('admin/images/awards.jpg') }}">
      </div>
      <div class="login__right">
        <div class="login__block">
          <div class="logo__block">
            <img src="{{ asset('/img/logo.png') }}">
          </div>

          @if (Session::get('success'))<div class="alert alert-success">{{ Session::get('success') }}</div>@endif
          @if (Session::get('failure'))<div class="alert alert-danger">{{ Session::get('failure') }}</div>@endif

          <form method="POST" action="{{ route('front.user.create') }}">
          @csrf
            <div class="row">
               <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="fname" value="{{ old('fname') }}" id="floatingInput" placeholder="firstname">
                    <label for="floatingInput">First Name</label>
                  </div>
                  @error('fname') <p class="small text-danger">{{ $message }}</p> @enderror
               </div>
               <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="lname" value="{{ old('lname') }}" id="floatingInput" placeholder="lastname">
                    <label for="floatingInput">Last Nmae</label>
                  </div>
                  @error('lname') <p class="small text-danger">{{ $message }}</p> @enderror
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                  </div>
                  @error('email') <p class="small text-danger">{{ $message }}</p> @enderror
               </div>
               <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="mobile" value="{{ old('mobile') }}" id="floatingInput" placeholder="1234567892">
                    <label for="floatingInput">Mobile No</label>
                  </div>
                  @error('mobile') <p class="small text-danger">{{ $message }}</p> @enderror
               </div>
            </div>
            
            <div class="form-floating mb-3">
              <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            @error('password') <p class="small text-danger">{{ $message }}</p> @enderror

            <div class="d-grid">
              <button type="submit" class="btn btn-lg btn-primary">Register</button>
            </div>
          </form>

          <div class="row mt-3">
              <div class="col-12 text-center">
                <a href="{{ route('front.user.login') }}">Back to Login</a>
              </div>
            </div>
        </div>
      </div>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>