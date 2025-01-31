@extends('layout')

@section('content')
    <main>
        {{-- hero section --}}
        <div class="bg-dark text-secondary px-4 py-5 text-center">
            <div class="py-5">
                <h1 class="display-5 fw-bolder fs-1 text-white">To do List</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4">Turn Chaos into Clarity – Master Your Day with Ease!</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="/register" type="button"
                            class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Register</a>
                        <a href="/login" type="button" class="btn btn-outline-light btn-lg px-4">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-dark mt-1 mb-1 section-title-hr white-hr" />
        {{-- main content --}}
        <div class="bg-dark text-secondary px-4 py-5 text-left">
            <div class="py-5 ms-4">
                <h3 class="display-5 fs-2 fw-bold text-white">Welcome to Your Productivity Hub!</h3>
                <div class=" mx-auto">
                    <p class="fs-5 mb-4">Organize your tasks, set priorities, and achieve your goals—all in one place.
                    </p>
                    <div class="ms-5">
                        <h5 class="display-5 fs-3 fw-bold text-white">Why Choose Us?</h5>
                        <ul>
                            <li>🗂️ Organized Tasks: Break your day into manageable chunks.</li>
                            <li>📆 Stay On Track: Never miss a deadline with smart reminders. </li>
                            <li>✨ Boost Your Productivity: Simplify your life with our intuitive design. </li>
                        </ul>
                    </div>
                    <div class="d-grid gap-3 d-sm-flex ms-3">
                        <p>💡 Ready to take control of your day?</p>
                        <a href="" class="link-info px-2  ">Register</a> OR
                        <a href="" class="link-info px-2">Login</a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="bg-dark mt-1 mb-1 section-title-hr white-hr" />

        {{-- How it Works --}}
        <div class="bg-dark text-secondary px-4 py-5 text-left">
            <div class="py-5 ms-4">
                <h3 class="display-5 fs-2 fw-bold text-white">How It Works</h3>
                <div class=" mx-auto">
                    <p class="fs-5 mb-4">Getting started is simple—just follow these steps:
                    </p>
                    <div class="ms-5">
                        <ol>
                            <li class="text-light"><h5 >Create Your Tasks</h5></li>
                            <p>Add your tasks quickly with an intuitive interface. Categorize them and set deadlines effortlessly.</p>
                            <br>
                            <li class="text-light"><h5>Set Priority</h5></li>
                            <p>Use priority levels to focus on what matters most.</p>
                            <br>
                            <li class="text-light"><h5>Achieve Your Goals</h5></li>
                            <p>Tick off completed tasks, stay motivated, and watch your productivity soar!</p>
                        </ol>
                    </div>
                    <div class="d-grid gap-3 d-sm-flex ms-3">
                        <p class="fw-bold text-light">🎯 Start organizing your life today and experience the difference.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection