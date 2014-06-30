<div style='width: 600px; margin:auto;'>
	<form action="/auth/login" method="post" class="form-horizontal">
		<!-- Text input-->
		<div class="control-group">
			<label class="control-label" for="username">Username</label>
			<div class="controls">
				<input id="username" name="username" placeholder="username"
					class="input-xlarge" required="" type="text">
			</div>
		</div>

		<!-- Password input-->
		<div class="control-group">
			<label class="control-label" for="password">Password</label>
			<div class="controls">
				<input id="password" name="password" placeholder="password"
					class="input-xlarge" required="" type="password">
			</div>
		</div>

		<!-- Button -->
		<div class="control-group">
			<label class="control-label" for="login_button"></label>
			<div class="controls">
				<button id="login_button" name="login_button"
					class="btn btn-default">LOGIN</button>
			</div>
		</div>
	</form>
</div>