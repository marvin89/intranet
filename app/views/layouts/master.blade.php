<?php
	if (Session::has('uid')) {
		$uid = Session::get('uid');
		$currentUser = User::where('uid','=',$uid)->first();
		$fullName = $currentUser->givenName.' '.$currentUser->familyName;
		$image = $currentUser->image;
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            eeStec Intranet
            @show
        </title>

        <!-- CSS are placed here -->
        <link href="css/bootstrap.css" rel="stylesheet">
	    <link href="css/flat-ui.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<script src="js/jquery-1.8.3.min.js"></script>
		<script src="js/google-actions.js" type="text/javascript"></script>
    </head>

    <body>
        <!-- Container -->
        <div class="container">
			
            <!-- Content -->
            @yield('content')
            
            <div class="tile">
	            <h2><?php echo $fullName; ?></h2>
	            <img src="<?php echo $image; ?>" alt="<?php echo $fullName; ?>" />
            </div>

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
	    <script src="js/main.js" type="text/javascript"></script>
	    
    </body>
</html>
