<x-admin-layout title="ADMINISTRATOR">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="text-center mt-4">
                    <img src="{{ asset($web_logo) }}" alt="{{ $web_name }}">
                </div>

                <div class="card my-5">      
                    <form action="{{ route('login') }}" method="post" class="card-body cardbody-color p-lg-5">
                        @csrf
                        
                        <h1 class="text-center">LOGIN</h1>
                        <h5 class="text-center text-muted">ADMINISTRATOR</h5>

                        admin@topap.com
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        Admin*7890
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- <div class="form-pincode text-center my-2 mb-4">
                            <label>Pin code</label>
                            <input type="password" class="form-control text-center fs-4" id="pincode" style="letter-spacing:1rem;">
                        </div> --}}


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                            <a class="btn btn-outline-danger w-100 my-3" href="/">Halaman user</a>
                        </div>
                    </form>

                 </div>
          </div>
        </div>
      </div>
</x-admin-layout>