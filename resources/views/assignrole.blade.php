

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Stylish Login</title>
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


<form action="assignrole" method="POST">
    @csrf
    <div class="registration-container">
        <form action="">
            <label for="cars" style="color: white">Select User</label>

            <select name="user_id" id="">
                <option value="" hidden>--Select User--</option>
                @foreach($users as $u)
                    <option value="{{$u->user_id}}">{{$u->name}}</option>
                @endforeach
            </select>
            <label for="cars" style="color: white">Choose a role:</label>

            <select name="user_role_id" id="">
                <option value="" hidden>--Select Role--</option>
                @foreach($role as $r)
                    <option value="{{$r->user_role_id}}">{{$r->role}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Assign role</button>
            <a href="{{ 'superadmin' }}" class="btn btn-danger">HOME</a>

        </form>
    </div>
</form>

    </div>




</body>
</html>

