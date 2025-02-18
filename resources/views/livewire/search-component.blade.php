<div>

    <div class="form-control mb-5">
        <input type="text" wire:model='search'>
    </div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
			</tr>
		</thead>
		<tbody>
			@if ($posts->count() > 0)
                @foreach ($posts as $post )      
				<tr>
					<th scope="row">{{ $post->id }}</th>
					<td>{{ $post->name }}</td>
				</tr>
                @endforeach
			@endif

		</tbody>
	</table>
    {{ $posts->links() }}
</div>
