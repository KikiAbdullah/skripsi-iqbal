<div class="row mb-3">
    <label class="col-lg-3 col-form-label text-lg-end d-none d-lg-block">Roles</label>
    <div class="col-lg-9">
        @if (empty($item))
        {!! Form::select('kode_kerusakan', $data['list_kerusakan'], null, ['class' => 'select', 'placeholder' => 'Pilih
        Kerusakan']) !!}
        @else
        {!! Form::select('kode_kerusakan', $data['list_kerusakan'], $item->kode_kerusakan ?? null, ['class' =>
        'select',
        'placeholder' => 'Pilih Kerusakan']) !!}
        @endif
    </div>
</div>

<div class="row mb-3">
    <label class="col-lg-3 col-form-label text-lg-end d-none d-lg-block">Gejala</label>
    <div class="col-lg-9">
        @foreach ($data['list_gejala'] as $kode_gejala => $gejala)
        
        <div class="form-check mb-2">
            <input type="checkbox" name="kode_gejala[{{ $kode_gejala }}]" class="form-check-input">
            <label class="form-check-label">{{ $gejala }}</label>
        </div>
        @endforeach
    </div>
</div>