<div>
	<form class="m-50 w-auto" wire:submit.prevent='submit'>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="text" class="form-control  @error('email') is-invalid @enderror " wire:model.defer='email'>
			<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
			@error('email')
				<span class="text-danger invalid-feedback">{{ $message }}</span>
			@enderror
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input type="password" class="form-control  @error('password') is-invalid @enderror " wire:model.defer='password'>
			@error('password')
				<span class="text-danger invalid-feedback">{{ $message }}</span>
			@enderror
		</div>
		<div class="mb-3 form-check">
			<input type="checkbox" class="form-check-input" wire:model.defer='remember'>
			<label class="form-check-label" for="exampleCheck1">remember</label>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
