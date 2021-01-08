<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
	.h-screen{ height: 100vh; }	          
</style>
<body>
   <div class="d-flex flex-column h-screen justify-content-between ">
   <header>
	@include('layouts.nav')
   </header>
   <main>
 	@yield('content')
   </main>
   <footer>
         FOOTER
   </footer>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
   </div>
</body>
</html>


