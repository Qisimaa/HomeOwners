<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Send Enquiry Form</a>
        </div>

        <!-- Navbar Right -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="">About</a></li>
                <li><a href="/enquiryform">Enquiry Form</a></li>

            </ul>
        </div>
    </div>
</nav>
<div class="container col-md-8 col-md-offset-2">
    <div class="well well bs-component">

        <form  class="form-horizontal" method="post" action="{{url('test')}}">
            {{csrf_field()}}
           <div class="form-group">
               <label name="email">Email</label>
               <input type="email" name="email" id="email" class="form-control">

           </div>
            <div class="form-group">
                <label name="email">Name</label>
                <input type="text" name="name" id="name" class="form-control">

            </div>
            <div class="form-group">
                <label name="email">Username</label>
                <input type="text" name="username" id="username" class="form-control">
                <input type="checkbox" name="check" id="check" value="Success">
                <label for="check">Yoxla</label>

            </div>
            <input type="submit" value="Send Message" name="submit" class="btn btn-success">

        </form>
    </div>
</div>
</body>
</html>