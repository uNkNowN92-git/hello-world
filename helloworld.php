<!DOCTYPE html>
<head>
  <title>Hello World!</title>
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <link rel="stylesheet" type="text/css" href="/css/https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css">
  <link rel="stylesheet" type="text/css" href="/css/https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <script src="/js/https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js"></script>
  <script src="/js/https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.alert.min.js"></script>
  <script src="/js/https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/jquery.js"></script>
  <script src="/js/https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/modernizr.js"></script>
</head>
<body>
<?php
  date_default_timezone_set('Asia/Manila');
?>
<div class="row">
<h1>Hello, world!</h1>
<p><?php echo date('F j, Y g:i:s A'); ?></p>
<section class="content">
	<h2>Header</h2>
	<span class="input">
		<input class="input__field input__field--yoko" type="text" id="input-16">
		<label class="input__label input__label--yoko" for="input-16">
			<span class="input__label-content input__label-content--yoko">Street</span>
		</label>
	</span>
	<span class="input">
		<input class="input__field input__field--yoko" type="text" id="input-17">
		<label class="input__label input__label--yoko" for="input-17">
			<span class="input__label-content input__label-content--yoko">City</span>
		</label>
	</span>
</section>
</div>
</body>
</html>
