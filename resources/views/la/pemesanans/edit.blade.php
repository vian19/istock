@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/pemesanans') }}">Pemesanan</a> :
@endsection
@section("contentheader_description", $pemesanan->$view_col)
@section("section", "Pemesanans")
@section("section_url", url(config('laraadmin.adminRoute') . '/pemesanans'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Pemesanans Edit : ".$pemesanan->$view_col)

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
				{!! Form::model($pemesanan, ['route' => [config('laraadmin.adminRoute') . '.pemesanans.update', $pemesanan->id ], 'method'=>'PUT', 'id' => 'pemesanan-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'kode_barang')
					@la_input($module, 'jumlah_barang')
					@la_input($module, 'tanggal_pemesanan')
					@la_input($module, 'status')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/pemesanans') }}">Cancel</a></button>
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
	$("#pemesanan-edit-form").validate({
		
	});
});
</script>
@endpush
