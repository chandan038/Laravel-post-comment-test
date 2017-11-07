@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
				 <div class="panel-heading">Post By : {{ $post->user->name }}
					<a href="{{url('home') }}" class="btn btn-warning" style="float:right;"> Back</a>
				 </div>
				 <div class="panel-body">
                    <p>{{ $post->post }}</p>	
                </div>
			</div>
            <div class="panel panel-default">
               @if ($message = Session::get('success'))
					<div class="alert alert-success">
						<p>{{ $message }}</p>
					</div>
				@endif
				 <div class="panel-body">
					@foreach ($post->Post_comment as $cmnt)
						<p>{{ $cmnt->comment }}</p>
					@endforeach
				
					{!! Form::open(['route'=>'add_post_comment']) !!}
				   
						<div class="form-group">
							<label for="exampleInputEmail1">Comment</label>
							<textarea class="form-control" name="comment" placeholder="Enter Comment"></textarea>
						</div>
						<input type="hidden" name="post_id" value="{{ $post->id }}" />
						<button type="submit" class="btn btn-primary">Submit</button>	
					
					{!! Form::close() !!}
				</div>
            </div>
			
			<hr>
			
			
        </div>
    </div>
</div>
@endsection








 
