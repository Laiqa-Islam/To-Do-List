@extends('layout')

@section('content')
    <main>
        {{-- hero section --}}
        <div class="bg-dark text-secondary px-4 py-5 text-center">
            <div class="py-5">
                <h1 class="display-5 fw-bolder fs-1 text-white">To do List</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4">Turn Chaos into Clarity – Master Your Day with Ease!</p>
                    <form method="POST" action="/home" class="register-form" id="register-form">
                        @csrf
                        <div class="form-group">
                            <label for="title"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="title" id="name" placeholder="Title" />
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <br>
                            {{-- <label for="rating">Rate us (1 to 5):</label> --}}
                            <input type="number" id="priority" name="priority" min="1" max="5"
                                placeholder="Choose Priority Level (Between 1 to 5)">
                            @error('priority')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group form-button">
                            <button id="addList" class="btn btn-info btn-lg px-4 me-sm-3 fw-bold">Add List</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr class="bg-dark mt-1 mb-1 section-title-hr white-hr" />
        {{-- main content --}}
        <div class="bg-dark text-secondary px-4 py-5 text-left">
            <div class="py-5 ms-4">
                @unless ($lists->isEmpty())
                    <h3 class="display-5 fs-2 fw-bold text-white">Your List Of Tasks To Do</h3>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col" class="text-center">Priority</th>
                                <th scope="col">Action</th>
                                <th scope="col">Action</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- displaying list of tasks --}}
                            @foreach ($lists as $list)
                                <tr>
                                    {{-- List title --}}
                                    <td colspan="1" class="fs-3 px-5 ">{{ $list->title }}</td>
                                    {{-- id for js --}}
                                    <input type="hidden" class="listId" value="{{ $list->id }}">
                                    {{-- list priority --}}
                                    <td colspan="1" class="fs-3 px-5 text-center listPriority">{{ $list->priority }}</td>
                                    {{-- Edit Btn --}}
                                    <td colspan="1"><a class="btn btn-warning btn px-2 "
                                            href="/edit/{{ $list->id }}">Edit</a></td>
                                    {{-- Delete Btn --}}
                                    <td colspan="1"><a class="btn btn-danger btn px-2 "
                                            href="/delete/{{ $list->id }}">Delete</a></td>
                                    {{-- status Btn --}}
                                    <td colspan="1">
                                        <form action="/home/status/{{ $list->id }}" method="post">
                                            @csrf
                                            <button class="btn  btn px-2 status" type="submit">Incomplete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <table>
                        <tbody>

                            <tr>
                                <td colspan="4" class="text-center">No tasks to display</td>
                            </tr>
                        </tbody>
                    </table>
                @endunless

            </div>
        </div>
    </main>

@endsection
