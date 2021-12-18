<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


body{
    margin: 0;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #212529;
    text-align: left;
    background-color: #f5f8fa;
}

.navbar-laravel
{
    box-shadow: 0 2px 4px rgba(0,0,0,.04);
}

.navbar-brand , .nav-link, .my-form, .login-form
{
    font-family: Raleway, sans-serif;
}

.my-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.my-form .row
{
    margin-left: 0;
    margin-right: 0;
}

.login-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.login-form .row
{
    margin-left: 0;
    margin-right: 0;
}
</style>
</head>
<body>


<!-- 
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>

        </div>
    </div>
</nav> -->


<h1 style="text-align:center;margin-top:20px;margin-bottom:20px;">insert Items</h1>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form action="itemSubmit" method="POST">
                            {{@csrf_field()}}
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">title</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" placeholder="title" name="title" required autofocus>
                                </div>
                            </div>
                            <span style="color:red; font-weight:bold;">
                                @error('title')
                                    {{$message}}
                                @enderror
                            </span>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">price</label>
                                <div class="col-md-6">
                                    <input type="text" id="price" class="form-control" name="price" required>
                                </div>
                            </div>
                            <span style="color:red; font-weight:bold;">
                                @error('price')
                                    {{$message}}
                                @enderror
                            </span>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">price</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" cols="12" rows="5" name="description"> Description</textarea>
                                </div>
                            </div>
                            <span style="color:red; font-weight:bold;">
                                @error('description')
                                    {{$message}}
                                @enderror
                            </span>
                            

                       

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    insert Item
                                </button>
                            
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>





</body>
</html>