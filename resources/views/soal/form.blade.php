<div class="col-lg-12">
    <div class="form-group {{ $errors->has('kategori_soal_id') ? 'has-error' : ''}}">
        {!! Form::label('kategori_soal_id', 'Kategori Soal', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('kategori_soal_id', $kategoriSoal, null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! Form::hidden('tipe_soal_id', 1, ['required' => 'required']) !!}
            {!! $errors->first('kategori_soal_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('soal') ? 'has-error' : ''}}">
        {!! Form::label('soal', 'Soal', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('soal', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('soal', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('urutan') ? 'has-error' : ''}}">
        {!! Form::label('urutan', 'Urutan', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('urutan', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('urutan', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="col-lg-12" id="pilihan-ganda">
    <div class="form-group {{ $errors->has('a') ? 'has-error' : ''}}">
        {!! Form::label('a', 'A', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('a', (isset($checkOpsiA)? $checkOpsiA->jawaban : null), ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('a', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('a_nilai') ? 'has-error' : ''}}">
        {!! Form::label('a_nilai', 'Nilai A', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('a_nilai', (isset($checkOpsiA)? $checkOpsiA->nilai : null), ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('a_nilai', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('b') ? 'has-error' : ''}}">
        {!! Form::label('b', 'B', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('b', (isset($checkOpsiB)? $checkOpsiB->jawaban : null), ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('b', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('b_nilai') ? 'has-error' : ''}}">
        {!! Form::label('b_nilai', 'Nilai B', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('b_nilai', (isset($checkOpsiB)? $checkOpsiB->nilai : null), ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('b_nilai', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="form-group">
        <div class="col-md-offset-2 col-md-4">
            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
@section('scripts')
<script type="text/javascript">
    $("#tipeSoalForm").change(function () {
        $("#tipeSoalForm option:selected").each(function () {
            if (this.value == 2) {
                $('#pilihan-ganda').hide();
            } else {
                $('#pilihan-ganda').show();
            }
        });
    }).change();
</script>
@endsection