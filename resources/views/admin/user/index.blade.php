@extends('layouts.backend.app', ['title' => 'User'])

@section('content')
    <div class="row">
        <div class="col-12">
            <x-input-search placeholder="Search user.." :url="route('admin.user.index')" />
        </div>
        <div class="col-12">
            <x-card title="LIST USER">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>ROLE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $i => $user)
                            <tr>
                                <td>{{ $users->firstItem() + $i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $role)
                                        {{ $role->name }}
                                    @endforeach
                                </td>
                                <td>
                                    <x-button-modal :id="$user->id" />
                                    <x-modal :id="$user->id" :url="route('admin.user.update', $user->id)" title="{{ $user->name }}"
                                        titleBtn="Update User">
                                        <x-select title="Role" name="roles[]">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}" @selected($user->roles()->find($role->id))>
                                                    {{ $role->name }}
                                                </option>
                                            @endforeach
                                        </x-select>
                                    </x-modal>
                                    <x-button-delete :id="$user->id" :url="route('admin.user.destroy', $user->id)" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-card>
            <div class="d-flex justify-content-end">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection