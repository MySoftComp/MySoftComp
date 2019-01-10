<!doctype html>
<html lang="en">
	<head>
    @yield('head')
    <link rel="icon" type="text/css" href="../image/logo.png">
		<title>MySoftComp @yield('title')</title>
	</head>

	<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top navigasi">
      <a class="navbar-brand" href="/home"><img src="../image/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
       <div class="navbar-nav text-center">
          <a class="nav-item nav-link" href="/home">Home</a>
          {{-- <a class="nav-item nav-link" href="/howto">How To</a> --}}
          <a class="nav-item nav-link" href="/view_product">List</a>
          <a class="nav-item nav-link" href="/compare">Compare</a>
        </div>
      </div>
    </nav>
    <!-- End Navigasi -->

    <main>
        @yield('main')
    </main>

    <!-- Footer -->
    <footer class="my-5 pt-5 text-muted text-center text-small footer">
        <p class="mb-1">&copy; 2018 MySoftComp @yield('footer')</p>
    </footer>
    {{-- End Footer --}}


		<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>