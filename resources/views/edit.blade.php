@extends('layout')

@section('content')
    <main>

        <hr class="bg-dark mt-1 mb-1 section-title-hr white-hr" />
        {{-- main content --}}
        <div class="bg-dark text-secondary px-4 py-5 text-left">
            <div class="py-5 ms-4">

                <h3 class="display-5 fs-2 fw-bold text-white">Update Task "{{$list->title}}"</h3>

                            <form method="POST" action="/edit/{{ $list->id }}" class="register-form my-5" id="register-form">
                                @csrf
                                <div class="form-group">
                                    <label for="title"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="title" id="name" value="{{ $list->title }}" />
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <br>
                                    <input type="number" id="priority" name="priority" min="1" max="5" value="{{$list->priority}}">
                                    @error('priority')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                                <div class="form-group form-button">
                                    <button class="btn btn-info btn-lg px-4 me-sm-3 fw-bold">Update List</button>
                                </div>
                            </form>
   

            </div>
        </div>
    </main>
@endsection
