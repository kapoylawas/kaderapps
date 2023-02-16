@extends('layouts.backend.app', ['title'=> 'Bank'])

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-10">
        <form action="{{ route('admin.bank.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-card-form title="CREATE NEW BANK" url="{{ route('admin.bank.index') }}" titleBtn="Create Jabatan">
                <x-input title="Nama Bank" type="text" name="name" placeholder="Enter bank" :value="old('name')" />
                <x-input title="Biaya Transfer" type="text" name="biayatf" placeholder="Enter Biaya Transfer"
                    :value="old('biayatf')" />
            </x-card-form>
        </form>
    </div>
</div>
@endsection