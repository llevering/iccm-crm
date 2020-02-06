@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Sponsors</div>

                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        <div class="btn-group" style="padding-bottom: 1em;">
                            <a href="{{route('sponsor.create')}}" class="btn btn-primary">Create new sponsor</a>
                        </div>

                        {{ $sponsors->links() }}

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>

                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        Town
                                    </th>
                                    <th>
                                        #-donations
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sponsors as $sponsor)
                                    <tr>
                                        <td>
                                            <form action="{{ route('sponsor.destroy', ['sponsor' => $sponsor]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf

                                                <div class="btn-group">
                                                    <a href="{{route("sponsor.edit", ['sponsor' => $sponsor])}}" class="btn btn-primary">Edit</a>
                                                    <input type="submit" class="btn btn-danger" value="Remove">
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            {{$sponsor->name}}
                                        </td>
                                        <td>
                                            {{$sponsor->address}}
                                        </td>
                                        <td>
                                            {{$sponsor->town}}
                                        </td>
                                        <td>
                                            {{$sponsor->donations->count()}}
                                        </td>
                                        <td>
                                            {{$sponsor->donations->sum('amount')}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $sponsors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
