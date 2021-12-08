
    <div>
        <div>
            @if (session('status'))
                <div>
                    <!-- session()->has('status') -->
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('signin') }}" method="post">
                @csrf
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email"
                        value="{{ old('email') }}">
                    @error('email')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password"
                        value="">
                    @error('password')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <div>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remeber me</label>
                    </div>
                </div>
                <div>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>