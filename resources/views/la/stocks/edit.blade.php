@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/stocks') }}">Stock</a> :
@endsection
@section("contentheader_description", $stock->$view_col)
@section("section", "Stocks")
@section("section_url", url(config('laraadmin.adminRoute') . '/stocks'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Stocks Edit : ".$stock->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($stock, ['route' => [config('laraadmin.adminRoute') . '.stocks.update', $stock->id ], 'method'=>'PUT', 'id' => 'stock-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'kode_barang')
					@la_input($module, 'jumlah_barang')
					@la_input($module, 'harga_jual')
					@la_input($module, 'harga_beli')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/stocks') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#stock-edit-form").validate({
		
	});
});
</script>
@endpush
