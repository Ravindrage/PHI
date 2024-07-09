<html>
<head>
<link src= "style.css"> </link>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script>

function submit1()
{
	document.getElementById('signin').submit();

}

</script>

<style>
        .formstyle{
            height: 30rem;
            width: 30rem;
            padding: 2rem;
        }

        @media (max-width: 320px) { 
            .formstyle{
                height: 30rem;
                width: 20rem;
            }
         }
    </style>

</head>
<body>
<!-- Login Page

<form action="function.php" name="signin" id="signin" method="POST">

<Input type="text" name="username" id="username">
<br>
<input type="password" name="pass" id="pass"  >
<br>
<input type="hidden" name="signinform" id="signinform" value="submitted">
<br>
<input type="submit">

</form> -->

<div class="container formstyle">
        <h1 style="text-align:center">Login Form</h1>
        <br>

        <form class="row g-3" action="function.php" name="signin" id="signin" method="POST">
            <div class="col-md-12">
                <label for="input" class="form-label">Username</label>
                <input type="text" class=" form-control username" name="username" id="username">
            </div>
            <div class="col-md-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control pass" name="pass" id="pass">
            </div>     
            <div class="col-12" style="text-align:center">
                    <input type="hidden" name="signinform" id="signinform" value="submitted">
                <button style="height:3rem; width:7rem; font-size:1.5rem;" type="submit" class="btn btn-primary">Login </button>
            </div>
        </form>
    </div>

</body>