<div>
    <div>
        <form action="{{ route('create') }}" method="post">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Your name"
                    value="{{ old('name') }}">

                @error('name')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username"
                    value="{{ old('username') }}">

                @error('username')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
            </div>

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
                <label for="password_confirmation">Password again</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Repeat your password"
                    value="">

                @error('password_confirmation')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</div>