<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registartion</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regis.css">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="background-color: black;">

    <div class="con" >
        <div class="header">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="{{ 'superadmin' }}" class="nav-link px-2 text-secondary">Home</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                  <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">

                </form>

              </div>
              <div class="con">
                <div>
                  <!-- Your login form content -->
                </div>


              </div>
        </div>

        <form action="registration" method="post">
            @csrf
            <div class="registration-container">
                <div class="login-form">
                    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    @endif
                    <h1>Register</h1>

                    <label for="username">Username</label>
                    <input type="text" id="username" name="name" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>

                    <label for="Mobil">Mobile</label>
                    <input type="text" id="mobile" name="mobile" required>

                    {{-- <label for="cars">Choose a role:</label>
                    <select name="roel" id="role" class="form-control">
                      <option value="volvo" hidden>--Select Role--</option>
                      @foreach ($role as $item)
                        <option value="{{$item->user_role_id}}">{{$item->role}}</option>
                      @endforeach
                    </select> --}}

                    <button type="submit"  style="background-color: red; color: black;" class="mt-4">Register</button>
                </div>
            </div>
        </form>
    </div>

    <div>
        
    </div>
</body>
</html>
