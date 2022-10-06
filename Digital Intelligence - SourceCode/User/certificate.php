<html>
    <head>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid tan;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                color: tan;
            }

            .marquee {
                color: tan;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
        </style>
    </head>
	<?php	
		session_start();					
	?>
    <body>

    <img src="Employability_logo_color-04_FINAL (2).jpg" alt="atmc logo">

        <div class="container">
            <div class="logo">
                Employability.life
            </div>

            <div class="marquee">
                Certificate of Completion
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
			<?php
                if(isset($_SESSION['sname']))
				{
					echo $_SESSION['sname'];
				}
			?>
            </div>

            <div class="reason">
                For successful completion of Digital Intelligence module of Employability.life
            </div>
        </div>
    </body>
</html>
