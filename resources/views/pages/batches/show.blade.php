@extends('layouts.master', ['title' => 'Batch Details'])

@section('content')
    <table class="striped centered">
        <tbody>
            <tr>
                <td><h5>Batch Number:</h5></td>
                <td><h5>{{ $batch->batch_number }}</h5></td>
            </tr>
            <tr>
                <td><h5>Batch Name:</h5></td>
                <td><h5>{{ $batch->batch_name }}</h5></td>
            </tr>
            <tr>
                <td><h5>Subject:</h5></td>
                <td><h5>{{ $batch->batch_subject }}</h5></td>
            </tr>
            <tr>
                <td><h5>Course:</h5></td>
                <td><h5>{{ $batch->batch_course }}</h5></td>
            </tr>
            <tr>
                <td><h5>Academic Year:</h5></td>
                <td><h5>{{ $batch->batch_academic_year}}</h5></td>
            </tr>
        </tbody>
    </table>

    @section('button-float')
        <div class="fixed-action-btn horizontal click-to-toggle">
            <a class="btn-floating btn-large red">
                <i class="material-icons">menu</i>
            </a>
            <ul>
                <li>
                    <ahref="{{ route('batches.edit', $batch) }}"  class="btn-floating red">
                        <i class="material-icons">edit</i>
                    </a>
                </li>
                <li>
                    <form action="{{ route('batches.destroy', $batch) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button style="background:none; border: none;" type="submit">
                            <i class="material-icons">delete</i>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    @endsection
@endsection
