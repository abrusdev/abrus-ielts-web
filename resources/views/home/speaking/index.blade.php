@extends("layouts.speaking")

@section("content")

    <div class="container d-flex justify-content-center flex-column align-items-center p-4">
        <div class="col-6 bg-white">
            <form action="{{ route("speaking.topics") }}" method="POST" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Topic's name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="part" class="form-label">Speaking Parts</label>
                    <select type="text" name="part" class="form-control" id="part">
                        <option value="1" @if($part == 1) selected @endif>Part-1</option>
                        <option value="2" @if($part == 2) selected @endif>Part-2</option>
                        <option value="3" @if($part == 3) selected @endif>Part-3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3 w-100 mb-4">Submit</button>
            </form>
        </div>

        <table class="mt-5 table table-light table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Part</th>
            </tr>
            </thead>
            <tbody>
            @foreach($topics as $topic)
                <tr>
                    <th scope="row">{{ $topic['id'] }}</th>
                    <td>{{ $topic["name"] }}</td>
                    <td>{{ $topic["part"] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
