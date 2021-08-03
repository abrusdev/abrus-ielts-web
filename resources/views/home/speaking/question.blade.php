@extends("layouts.speaking")

@section("content")

    <div class="container d-flex justify-content-center flex-column align-items-center p-4">
        <div class="col-6 bg-white">
            <form action="{{ route("speaking.questions", $id) }}" method="POST" class="p-4">
                @csrf
                <div class="mb-3">
                    <h5 class="text-center">{{ $topic }}</h5>

                    <label for="name" class="form-label">Questions:</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3 w-100 mb-4">Submit</button>
            </form>
        </div>


        <table class="mt-4 table table-light table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody id="part-1">
            @foreach($questions as $q)
                <tr>
                    <th scope="row">{{ $q['id'] }}</th>
                    <td>{{ $q["name"] }}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection
