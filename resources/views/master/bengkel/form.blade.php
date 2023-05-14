<div class="row mb-3">
    <label class="col-lg-3 col-form-label text-lg-end d-none d-lg-block">Nama Bengkel</label>
    <div class="col-lg-9">
        {!! Form::text('name', null, ['class' => in_array('name', $errors->keys()) ? 'form-control is-invalid' :
        'form-control', 'placeholder' => 'Nama Bengkel']) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-lg-3 col-form-label text-lg-end d-none d-lg-block">Alamat</label>
    <div class="col-lg-9">
        {!! Form::text('alamat', null, ['class' => in_array('alamat', $errors->keys()) ? 'form-control is-invalid' :
        'form-control', 'placeholder' => 'Alamat']) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-lg-3 col-form-label text-lg-end d-none d-lg-block">No. Telp</label>
    <div class="col-lg-9">
        {!! Form::text('telp', null, ['class' => in_array('telp', $errors->keys()) ? 'form-control is-invalid' :
        'form-control', 'placeholder' => 'No. Telp']) !!}
    </div>
</div>


<div class="row mb-3">
    <label class="col-lg-3 col-form-label text-lg-end d-none d-lg-block">URL Google Maps</label>
    <div class="col-lg-9">
        {!! Form::text('urlmaps', null, ['class' => in_array('urlmaps', $errors->keys()) ? 'form-control is-invalid' :
        'form-control', 'placeholder' => 'URL Google Maps']) !!}
    </div>
</div>

<div class="row mb-3">
    <label class="col-lg-3 col-form-label text-lg-end d-none d-lg-block">Google Maps</label>
    <div class="col-lg-9">
        {!! Form::text('gmaps', null, ['class' => in_array('gmaps', $errors->keys()) ? 'form-control is-invalid' :
        'form-control', 'placeholder' => 'Google Maps']) !!}
    </div>
</div>

<div class="row mb-3">
    <label class="col-lg-3 col-form-label text-lg-end d-none d-lg-block">Deskripsi</label>
    <div class="col-lg-9">
        {!! Form::text('desc', null, ['class' => in_array('desc', $errors->keys()) ? 'form-control is-invalid' :
        'form-control', 'placeholder' => 'Deskripsi']) !!}
    </div>
</div>