<!doctype html>
<meta name="csrf-token" content="{{ csrf_token() }}">

<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Header effect</title>
    </head>

<body>
    <div id="app">
        <tabs></tabs>
    </div>
</body>

<script src={{asset('js/vue_dev_andrei.js')}}?v={{time()}}></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>