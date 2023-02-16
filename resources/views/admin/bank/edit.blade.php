@extends('layouts.backend.app', ['title'=> 'Bank'])

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-10">
        <form action="{{ route('admin.bank.update', $bank->id) }}" method="POST">
            @csrf
            @method('PUT')
            <x-card-form title="EDIT BANK" url="{{ route('admin.bank.index') }}" titleBtn="Update Bank">
                <x-input title="Nama" type="text" name="name" placeholder="Enter bank" :value="$bank->name" />
                <x-input title="Biaya Transfer" type="number" name="biayatf" placeholder="Enter Kelompok Jabatan"
                    :value="$bank->biayatf" />
            </x-card-form>
        </form>
    </div>
</div>
@endsection