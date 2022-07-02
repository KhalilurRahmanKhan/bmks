@extends("layouts.dashboard")
@section("dashboard_content")
<div class="container">
    <h3>Notices</h3>
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
                    <th scope="col">Notice</th>
                    <th scope="col">Active</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @forelse($notices as $notice)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$notice->notice}}</td>
                    <td>
                        @if($notice->active == 1)
                        <a class="btn btn-sm btn-danger" href="{{url('notice/status')}}/{{$notice->id}}">Unactive</a>
                        @else
                        <a class="btn btn-sm btn-success" href="{{url('notice/status')}}/{{$notice->id}}">Active</a>
                        @endif
                    </td>
                    <td style="display: flex ;">
                        <a href="{{url('notice')}}/{{$notice->id}}/edit"> <button class="btn btn-sm btn-secondary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                        <form action="{{url('notice')}}/{{$notice->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
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