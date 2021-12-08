<div>
    <div>
        <form action="{{ route('home') }}" method="POST">
            @csrf
            <div>
                <label for="address">
                    Address
                </label>
                <input
                    id="address" type="text" placeholder="Address" name="address">
            </div>
            <div>
                <label for="description">
                    Description
                </label>
                <input
                    id="description" type="text" placeholder="Description" name="description">
            </div>
            <div>
                <label for="type">
                    Type of housing
                </label>
                <select name="type" id="type"
                  >
                    <option value="1">Full house</option>
                    <option value="2">Room</option>
                </select>
            </div>
            <div>
                <label for="price">
                    Price per night
                </label>
                <input
                    id="price" type="number" placeholder="Price per night" name="price">
            </div>
            <div>
                <label for="number_beds">
                    Number of beds
                </label>
                <input
                    id="number_beds" type="number" placeholder="Number of beds" name="number_beds">
            </div>
            <div>
                <label for="image">
                    Choose an image
                </label>
                <input id="image" type="file" name="image">
            </div>
            <div >
                <button
                    type="submit">
                    Create
                </button>
        </form>
    </div>
</div>