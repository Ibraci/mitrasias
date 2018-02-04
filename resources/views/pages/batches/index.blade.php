@extends('layouts.master', ['title' => 'Batches'])

@section('content')
    <span class="card-title">Batches</span>
    <table class="responsive-table bordered">
        <thead>
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Course</th>
            <th>Academic Year</th>
            <th style="width: 100px">Action</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($batches as $batch)
                <tr>
                    <td>{{ $batch->batch_number }}</td>
                    <td><a href="{{ route('batches.show', $batch) }}">{{ $batch->batch_name }}</a></td>
                    <td>{{ $batch->batch_subject }}</td>
                    <td>{{ $batch->batch_course }}</td>
                    <td>{{ $batch->batch_academic_year }}</td>
                    <td>
                        <a href="{{ route('batches.edit', $batch) }}">
                            <i class="fa fa-pencil-square-o" aria-hidden="true" style="color: red"></i>
                        </a> &nbsp;&nbsp;&nbsp;
                        <form action="{{ route('batches.destroy', $batch) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button style="background:none; display:inline; border: none;" type="submit">
                                <i class="fa fa-trash-o" aria-hidden="true" style="color: red"></i>
                            </button>
                        </form> &nbsp;&nbsp;&nbsp;
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    @section('button-float')
        <div class="fixed-action-btn horizontal">
            <a href="{{ route('batches.create') }}" class="btn-floating btn-large red">
                <i class="large material-icons">add</i>
            </a>
        </div>
    @endsection

@endsection
