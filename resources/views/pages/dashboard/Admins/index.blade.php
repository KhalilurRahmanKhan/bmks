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
                        <button>Block</button>
                        <button>Delete</button>

                    </td>
        

                    @empty
                    <td>No data</td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>


</div>
@endsection