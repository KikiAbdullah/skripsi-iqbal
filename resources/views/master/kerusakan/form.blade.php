<div class="row mb-3">
    <label class="col-lg-3 col-form-label text-lg-end d-none d-lg-block">Kode</label>
    <div class="col-lg-9">
        {!! Form::text('kode', null, ['class' => in_array('kode', $errors->keys()) ? 'form-control is-invalid' :
        'form-control', 'placeholder' => 'Kode']) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-lg-3 col-form-label text-lg-end d-none d-lg-block">Text</label>
    <div class="col-lg-9">
        {!! Form::text('text', null, ['class' => in_array('text', $errors->keys()) ? 'form-control is-invalid' :
        'form-control', 'placeholder' => 'Text']) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-lg-3 col-form-label text-lg-end d-none d-lg-block">Deskripsi</label>
    <div class="col-lg-9">
        {!! Form::text('deskripsi', null, ['class' => in_array('deskripsi', $errors->keys()) ? 'form-control is-invalid'
        :
        'form-control', 'placeholder' => 'Deskripsi']) !!}
    </div>
</div>