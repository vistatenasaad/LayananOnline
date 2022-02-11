@extends('layouts.layout')

@section('nama_user', 'Super Admin')
@section('content')

<div class="content mt-3">

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">{{$jml1}}</span>
                </h4>
                <p class="text-light">Total Admin</p>
            </div>

        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">{{$jml2}}</span>
                </h4>
                <p class="text-light">Admin Front Office</p>

            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">{{$jml3}}</span>
                </h4>
                <p class="text-light">Admin Back Office</p>
            </div>
        </div>
    </div>
    <!--/.col-->
</div> <!-- .content -->
<div class="card">
    <div class="card-header">
        <strong class="card-title">Tabel User</strong>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Role</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($user as $u)
                <tr>
                    <th scope="row">{{$no}}</th>
                    <td>{{$u->id}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->role}}</td>
                    <td>
                        <a href="/edituser/{{$u->id}}"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                        <a href="/delete/{{$u->id}}"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                    </td>
                </tr>
                <?php $no++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection