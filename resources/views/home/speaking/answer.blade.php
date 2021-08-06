@extends("layouts.speaking")

@section("content")

    <div class="container d-flex justify-content-center flex-column align-items-center p-4">

        <div class="col-6 w-100 p-0">
            <form action="{{ route("speaking.questions", $id) }}">
                <button class="btn btn-dark pl-4 pr-4 mt-4">Back</button>
            </form>
        </div>

        <div class="col-6 bg-white mt-4">
            <form action="{{ route("speaking.answers", [$id, $q]) }}" method="POST" class="p-4">
                @csrf
                <div class="mb-3">
                    <h5 class="text-center">Question: {{ $question['name'] }}</h5>

                    <label for="name" class="form-label">Add answer</label>
                    <textarea type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"
                              rows="7"
                              required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3 w-100 mb-4">Add</button>
            </form>
        </div>


        <table class="mt-4 table table-light table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Content</th>
            </tr>
            </thead>
            <tbody id="part-1">
            @foreach($answers as $a)
                <tr>
                    <th scope="row">{{ $a['id'] }}</th>
                    <th class="position-relative">
                        <form action="{{ route("speaking.answers.update", [$id, $q]) }}" method="POST">
                            @csrf
                            <input type="text" hidden name="id" id="id" value="{{ $a['id'] }}">
                            <textarea type="text" name="name" class="form-control" id="name"
                                      aria-describedby="emailHelp"
                                      rows="7"
                                      required>{{ $a["content"] }}</textarea>
                            <button class="btn btn-outline-warning mt-2">Update</button>
                        </form>
                        <form action="{{ route("speaking.answers.delete", [$id, $q]) }}" method="post"
                              class="position-absolute" style="left:7rem; bottom: 0.75rem;">
                            @csrf
                            <input type="text" hidden name="id" id="id" value="{{ $a['id'] }}"
                                   class="position-absolute ">
                            <button class="btn btn-danger mt-2">Delete</button>
                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection
