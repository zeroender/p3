<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', 'Schedule Application')
        </title>

    	  <meta charset='utf-8'>
        <link href="/css/app.css" type='text/css' rel='stylesheet'>
    	  <link href="/css/styles.css" type ='text/css' rel='stylesheet'>

        <!-- Begin bootstrap css and JS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


        <!-- End bootstrap css and JS -->
        @stack('head')
    </head>

    <body>
	      <header>
		        <div class='container'>
			          <img src='images/calendar.jpg' alt='Calendar Image'>
		        </div>
	      </header>

	      <section>
		        <div class='container'>
			          @yield('content')
		        </div>
	      </section>

	    @stack('body')



    </body>
</html>
