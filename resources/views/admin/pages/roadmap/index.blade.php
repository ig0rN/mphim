@extends('admin.layouts.master')

@section('main')

<h1>Roadmap</h1>
<hr>

@include('admin.flash')

<div class="mb-3">
    <a href="{{ route('admin.roadmap.create') }}" class="btn btn-success">Create New Roadmap Event</a>
</div>

@if($roadmap->count() > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Text</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roadmap as $event)
                <tr>
                    <td>{{ $event->date }}</td>
                    <td>{!! $event->{'body_' . app()->getLocale()} !!}</td>
                    <td>
                        <a class="btn btn-primary btn-edit" href="{{ route('admin.roadmap.edit', ['id' => $event->id]) }}">Edit</a>
                        <form action="{{ route('admin.roadmap.destroy', ['id' => $event->id]) }}" class="form-delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <h2>There are no roadmap events. Please create one.</h2>
@endif
@endsection