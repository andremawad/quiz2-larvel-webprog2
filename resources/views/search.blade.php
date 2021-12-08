<div >
    <div>
        <form action="{{ route('search') }}" method="POST">
            @csrf
            <div>
                <label for="address">
                    Address / Description
                </label>
                <input
                    id="address" type="text" placeholder="Address" name="address">
            </div>
            <div>
                <label for="type">
                    Type of housing
                </label>
                <select name="type" id="type">
                    <option value="1">Full house</option>
                    <option value="2">Room</option>
                </select>
            </div>
            <div>
                <button
                    type="submit">
                    Searchs
                </button>
                <a
                    href="{{ route('dashboard') }}">
                    Go Back !
                </a>
        </form>
        <div></div>
        <div>
            @foreach ($results as $result)
                <div>
                    <div>
                        <img src="{{ asset('/storage/images/' . $result->image) }}" alt="">
                    </div>
                    <h3>{{ $result->address }}</h3>
                    <p>{{ $result->description }}</p>
                    <p>{{ $result->price }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>