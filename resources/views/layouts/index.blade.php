<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Central Negros Electric Cooperative, Inc. Server</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>



    <body>
    <div class="nav-bar">

        <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="/images/download2.png" style="width: 75px; height: 75px;"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/user_profile">User Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/notifications">Notifications</a>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Data Tables
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/data_table/accounts">Accounts</a>
                    <a class="dropdown-item" href="/data_table/disconnected_accounts">Disconnected Accounts</a>
                    <a class="dropdown-item" href="/data_table/billing">Billing</a>
                    <a class="dropdown-item" href="/data_table/collection">Collection</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Log-out</a>
            </li>
            </ul>
        </div>
        </nav>
        </div>

        <div class="datetime">

		<p id="datetime1" style="margin:0;display:inline;float:left"></p>
		<p style="margin:0;display:inline;float:left">,</p>
		<p id="datetime2" style="margin:0;display:inline:float:right"></p>

		<p> <span id="datetime"></span></p>

            <script>
            var dt = new Date();
            document.getElementById("datetime1").innerHTML = dt.toDateString();
            document.getElementById("datetime2").innerHTML = dt.toLocaleTimeString();
            </script>

        </div>

       @yield('content')

    </body>

    <script src="/js/style.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src-"/js/bootstrap.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</html>
