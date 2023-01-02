<div>
    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Login to your account</h2>

            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif

            <form class="" wire:submit.prevent="LoginHandler()" method="post" autocomplete="off">
                <div class="mb-3">
                    <label class="form-label">Email or Username</label>
                    <input type="text" class="form-control" placeholder="Enter email or username" wire:model="login_id">
                    @error('login_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="form-label">
                    Password
                    <span class="form-label-description">
                        <a href="{{route('author.forgot-password')}}">I forgot password</a>
                    </span>
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" class="form-control"  placeholder="Your password"  autocomplete="off" wire:model="password">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                            </a>
                        </span>
                    </div>
                    @error('password')
                            {{-- <a href="{{route('author.forgot-password')}}">I forgot password</a> --}}
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                <div class="mb-2">
                    <label class="form-check">
                    <input type="checkbox" class="form-check-input"/>
                    <span class="form-check-label">Remember me on this device</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
