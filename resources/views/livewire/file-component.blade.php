<div>
	<form class="m-50 w-auto" wire:submit.prevent='submit'>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">upload Photo</label>
			<input type="file" class="form-control  @error('photo') is-invalid @enderror " wire:model='photo' >
			<small wire:loading wire:target='photo' >uploading</small>
			@error('photo')
				<span class="text-danger invalid-feedback">{{ $message }}</span>
			@enderror

		</div>

		<div class="mb-3">
			 @if ($photo)
			 photo Preview:
				<img src="{{ $photo->temporaryUrl() }}" width="200">
			 @endif
		</div>

		<button type="submit" style="background-color: green" class="btn btn-primary">Submit</button>
	</form>
</div>
