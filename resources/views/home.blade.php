@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Post List</div>
				 @if ($message = Session::get('success'))
					<div class="alert alert-success">
						<p>{{ $message }}</p>
					</div>
				@endif

				{!! Form::open(['route'=>'add_post']) !!}
                <div class="panel-body">
                    <div class="form-group">
						<label for="exampleInputEmail1">Post</label>
						<textarea class="form-control" name="post" placeholder="Enter Post"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>	
                </div>
				{!! Form::close() !!}
            </div>
			
			<hr>
			<div class="panel panel-default">
                <table class="table table-bordered">
					<tr>
						<th>No</th>
						<th>Post</th>
						<th width="280px">Action</th>
					</tr>
				@foreach ($post as $p)
				<tr>
					<td>{{ ++$i }}</td>
					<td>{{ $p->post}}</td>
					<td>
						<a class="btn btn-info" href="{{url('show-post/'.$p->id) }}">Show</a>
						<a href="{{url('delete/'.$p->id) }}"  class="btn btn-danger" >DELETE</a>
					</td>
				</tr>
				@endforeach
				</table>

				{!! $post->links() !!}
            </div>
			
        </div>
    </div>
</div>
@endsection








 
