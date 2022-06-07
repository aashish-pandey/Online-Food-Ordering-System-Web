<head>
	<title>Foods List</title>

    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style type="text/css">
    	.brand{
    		background: #cbb09c !important;
    	}
    	.brand-text
    	{
    		color: #cbb09c !important;
    	}

    	form{
    		max-width: 460px;
    		margin: 20px auto;
    		padding: 20px;
    	}
        .pizza{
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }
        .image-preview{
            width: 300px;
            min-height: 100px;
            border: 2px solid #ddd;
            margin-top: 15px;

            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #ccc;
        }

        .image-preview__image{
            display: none;
            width: 100%;
        }
     
    </style>
</head>
<body class="teal accent-4">
	<!-- <nav class="white z-depth-0">
		<div class="container">
			<a href="home.php" class = "brand-logo brand-text">Aashish Pizza</a>
			<ul id="nav-mobile" class = "right hide-on-small-and-down">
				<li><a href = "add.php" class = "btn brand z-depth-0 indigo">Add a pizza</a></li>
			</ul>
		</div>
	</nav> -->

    <nav class="nav-wrapper red accent-3">
        <div class="container">
            <a href="home.php" class="brand-logo center hide-on-med-and-down" style="font-weight: bolder;">Foods List</a>
             <a href="home.php" class="brand-logo right hide-on-large-only" style="font-weight: bolder;">Foods List</a>

            <ul class="left">
                <li><a href="home.php" class="btn transparent indigo-text text-darken-4 z-depth-1 hide-on-med-and-down">HOME</a></li>
                 <li><a href="profile.php" class="btn transparent indigo-text text-darken-4 z-depth-1 hide-on-med-and-down">PROFILE</a></li>
                <li><a href="home.php?logout='1" class="btn transparent indigo-text text-darken-4 z-depth-1" name="logout" method = "GET">Log Out</a></li>
            </ul>

            <ul class="right hide-on-med-and-down">
                <li><a href="add.php" class="btn orange accent-3 waves-effect waves-lighten indigo-text text-darken-4">Add New Food</a></li>
            </ul>
        </div>
    </nav>
