<html>
	<head>
		<title>RIP Harambe</title>
		<script>
			function validateform(event) {
				event.preventDefault();
				alert('Form is disabled. Try again later.');
				return false;
			}
		</script>
		<style>
			.full-comment{
				border: 1px solid black;
				width: 100%;
				margin: 10px 0;
			}
			.name, .comment{
				margin: 3px;
			}
		</style>
	</head>
	<body>
		<div style="width: 50%; margin:auto;">
			<img src="Harambe.jpg" alt="Harambe" style="display: block; margin:auto"/>
			<h1 style="text-align:center">Harambe did nothing wrong.</h1>
			<div class="guestform">
			<h3>Leave your petition here</h3>
			<?php

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
					echo '<script>alert("name variable is empty!")</script>';
				} elseif (empty($_POST["comment"])) {
					echo '<script>alert("comment variable is empty!")</script>';
				} else {
					echo 'Well done, here is your flag: GCTF{c0mm3n75_4r3_73rr1bl3_pl4c3h0ld3r5}';
				}
			}
			?>
			<h4>Someone keeps posting stupid comments, so the form is disabled for now.</h4>
            <?php 		
                /* <form method="POST" onsubmit="validateform(event);">
                    <button type="submit" value="submit">Submit</button>
                </form> */
            ?>
			<div>
				<div class="full-comment">
					<div class="name">
						<strong>Name</strong>: Lucy
					</div>
					<div class="comment">
						<strong>Comment</strong>:<br/>
						<div>
							He died doing what he loved. Kidnapping children.
						</div>
					</div>
				</div>
				<div class="full-comment">
					<div class="name">
						<strong>Name</strong>: Qiurong
					</div>
					<div class="comment">
						<strong>Comment</strong>:<br/>
						<div>
							This is stupid. You are stupid. This website is stupid.
						</div>
					</div>
				</div>
			</div>
            <a href="index.html" target="_blank">Source Code</a>
		</div>
	</body>
</html>