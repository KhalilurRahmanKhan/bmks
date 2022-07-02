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
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @forelse($projects as $project)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$project->title}}</td>
                    <td>{{$project->description}}</td>
                    <td style="display: flex ;">
                        <a href="{{url('project')}}/{{$project->id}}/edit"> <button class="btn btn-sm btn-secondary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                        <form action="{{url('project')}}/{{$project->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Are you sure?')"  class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>

                    @empty
                    <td colspan="4" class="text-center text-danger">No data</td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>


</div>
@endsection