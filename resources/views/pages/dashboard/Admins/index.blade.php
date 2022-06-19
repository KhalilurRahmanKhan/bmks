@extends("layouts.dashboard")
@section("dashboard_content")
<div class="container">
    <h3>Projects</h3>
    <div class="row mt-5 px-5 justify-content-center">
        @if(session('status'))
        <div class="alert alert-danger">
        {{session('status')}}
        </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @forelse($admins as $admin)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$admin->username}}</td>
                    <td>
                        <button class="btn btn-warning btn-sm"><i class="fa-solid fa-ban"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>

                    </td>
        

                    @empty
                    <td colspan="5" class="text-center text-dangter">No data</td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>


</div>
@endsection