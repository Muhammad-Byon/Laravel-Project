@extends('layout.main')
@section('container')
@parent
	<div class="row justify-content-center mt-5">
		<div class="col-lg-5">
			@if(session()->has('errorLogin'))
				<div class="alert alert-danger" role="alert">
					{{ session('errorLogin') }}
				</div>
			@endif
			<main class="form-signin">
			<form method="post" action="/login">
				@csrf
				<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

				<div class="form-floating">
					<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com">
					<label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating">
					<input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
					<label for="floatingPassword">Password</label>
				</div>
				<button class="w-100 btn btn-lg btn-primary" type="submit">Lets Goo</button>
				<p class="mt-2  text-center">&copy; 2022</p>
			</form>
		</main>
		</div>
	</div>


@endsection