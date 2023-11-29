<x-dashboard.section :header="'<a href=\'/\' class=\'app-color link-offset-2 link-underline link-underline-opacity-0 text-capitalize\'>Insurance Policies</a> / <span class=\'text-capitalize\'>' . $type . '<span> Insurance<a href=\'/insurance-policies/' . $type . '-insurance/create\' class=\'p-0 ms-1 btn btn-transparent fw-bolder\' style=\'font-size: 17px !important\'><i class=\'bi bi-plus-circle\'></i></a>'">

    <div>
        <div class="mb-3">
            <h4>List of <span class="text-capitalize">{{ $type }}</span> Insurance Types</h4>
            <form action="/insurance-policies/types/?search=" method="GET">
                <input type="hidden" name="type" value="{{ $type }}">
                <div class="input-group">
                    <input type="search" name="search" class="form-control" class="Search for {{ $type }} insurance name">
                    <button type="submit" class="btn btn-secondary">Search</button>
                </div>
            </form>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Premium</th>
                <th scope="col">Description</th>
                <th scope="col">Clause Present</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @if (count($insuranceCovers)==0)
                    <tr><td colspan="6" class="text-center">There are approximately 0 types of {{ $type }} Insurance.</td></tr>
                @endif
                @foreach ($insuranceCovers as $i => $cover)
                    <tr>
                        <th scope="row">{{ $i + 1 }}</th>
                        <td class="text-capitalize">{{ $cover->name }}</td>
                        <td>{{ $cover->premium }}</td>
                        <td>{{ Str::limit($cover->description, 30, '...') }}</td>
                        <td>{{ count($cover->insuranceCoverClauses) }}</td>
                        <td>
                            <div class="container-fluid p-0">
                                <div class="row">
                                    {{-- delete --}}
                                    <div class="col-12 col-sm-3 col-md-2">
                                        <form action="/insurance-cover/delete/{{ $cover->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            {{-- <input type="hidden" name="id" value="{{ $cover->id }}"> --}}
                                            <button type="submit" class="btn btn-transparent text-danger fw-bold p-0"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</x-dashboard.section>