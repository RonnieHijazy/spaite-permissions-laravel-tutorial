@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
	
						@role('writer|admin')
							<h1>Only Writer Can Show This..</h1>
						@endrole


						@can('edit post')
							<h1>Only Editor Can Show This..</h1>
						@endcan
						
						@role('publisher|admin')
							<h1>Only Publisher Can Show This..</h1>
						@endrole
						
						@role('admin')
							<h1>Only admin Can Show This..</h1>
						@endrole		
						
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
