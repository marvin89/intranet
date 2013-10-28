<?php
	include ('utils/macros.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            eeStec Intranet
            @show
        </title>
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- CSS are placed here -->
        <link href="css/bootstrap.css" rel="stylesheet">
	    <link href="css/flat-ui.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<script src="js/jquery-1.8.3.min.js"></script>
		<script src="js/google-actions.js" type="text/javascript"></script>
    </head>

    <body>
        <!-- Menu -->
        <div class="navbar navbar-inverse navbar-static-top" id="main-menu">
	    	<div class="navbar-inner">
		    	<div class="container">
			    	<ul class="nav span12">
			    		{{ HTML::nav_link('home', 'Home') }}
			    		{{ HTML::nav_link('departments', 'Departments', array(
			    				'departments/pr' => 'Public Relations',
			    				'departments/hr' => 'Human Resources',
			    				'departments/fr' => 'Fund Raising'
			    			) 
			    		) }}
			    		{{ HTML::nav_link('projects', 'Projects') }}
			    		<li class="pull-right userInfo">
			    			<a href="profile/{{ $user->uid }}">
			    				<div class="fui-user"></div>{{ $user->givenName }} {{ $user->familyName }}
			    			</a>
			    			<ul>
				    			<li>
				    				<div class="details">
					    				<img width="50" src="{{ $user->image }}" alt="{{ $user->givenName }} {{ $user->familyName }}" />
					    				<dl>
						    				<dt>{{ $user->givenName }} {{ $user->familyName }}</dt>
						    				<dt>{{ $user->email }}</dt>
						    				<dt>{{ $user->birthday }}</dt>
					    				</dl>
					    				<div class="span1 pull-right">
						    				<a href="logout" class="btn btn-danger btn-block">Logout</a>
					    				</div>
				    				</div>
				    			</li>
			    			</ul>
			    		</li>
			    	</ul>	
		    	</div>	
	    	</div>    
        </div>
        
        <!-- Container -->
        <div class="container">
			
            <!-- Content -->
            @yield('content')

        </div>

        <!-- Scripts are placed here -->
		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
	    <script src="js/jquery.ui.touch-punch.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/bootstrap-select.js"></script>
	    <script src="js/bootstrap-switch.js"></script>
	    <script src="js/flatui-checkbox.js"></script>
	    <script src="js/flatui-radio.js"></script>
	    <script src="js/jquery.tagsinput.js"></script>
	    <script src="js/jquery.placeholder.js"></script>
	    <script src="js/jquery.stacktable.js"></script>
	    <script src="js/jquery.cookie.js"></script>
	    <script src="js/main.js" type="text/javascript"></script>
	    
    </body>
</html>
