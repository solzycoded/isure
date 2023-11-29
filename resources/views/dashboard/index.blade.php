<x-dashboard.section :header="'Insurance Policies'">

    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
              </tr>
            </thead> 
            <tbody>
                @foreach ($insurancePolicies as $policy)
                    <tr>
                        <td class="text-capitalize">{{ $policy->name }} Insurance</td>
                        <td>
                            <div class="container-fluid p-0">
                                <div class="row">
                                    {{-- types of insurance --}}
                                    <div class="col-12 col-sm-3 col-md-2">
                                        <a href="/insurance-policies/covers/{{ $policy->name }}" class="btn btn-transparent text-dark fw-bold p-0"><i class="bi bi-list-ol"></i></a>
                                    </div>
                                    {{-- create --}}
                                    <div class="col-12 col-sm-3 col-md-2">
                                        <a href="/insurance-policies/{{ $policy->name }}-insurance/create" class="btn btn-transparent text-dark fw-bold p-0"><i class="bi bi-plus-circle"></i></a>
                                    </div>
                                    {{-- edit --}}
                                    <div class="col-12 col-sm-3 col-md-2">
                                        <a href="/{{ $policy->name }}-insurance/edit" class="btn btn-transparent text-dark fw-bold p-0"><i class="bi bi-pencil"></i></a>
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