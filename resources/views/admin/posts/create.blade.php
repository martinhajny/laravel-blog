@extends('layouts.app')

@section('content')

	<div class="panel panel-default">
		<div class="panel panel-heading" style="margin-bottom: 0">
			<span>Create new post</span>
		</div>
		<div class="panel panel-body" style="margin-bottom: 0">
			<form action="{{ route('post.store') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="featured">Featured image</label>
					<input type="file" name="featured" class="form-control">
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" id="content" cols="0" rows="5" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-primary" type="submit">
							Store post
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

@stop