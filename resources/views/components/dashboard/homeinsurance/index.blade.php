<x-dashboard.section :header="'Home Insurance'">
    <div class="d-flex justify-content-start">
        {{-- type --}}
        <div class="pe-3">
            <a href="/dashboard/home-insurance/create" class="btn text-white app-background-color">Create New Policy <i class="ps-2 bi bi-house-add-fill fw-bold"></i></a>
        </div>

        {{-- terms and conditions --}}
        <div class="pe-3">
            <a role="button" href="/dashboard/home-insurance/create" class="btn text-white app-background-color">Create Terms & Conditions <i class="ps-2 bi bi-plus-circle fw-bold"></i></a>
        </div>

        {{-- create offers --}}
        <div class="pe-3">
            <a role="button" href="/dashboard/home-insurance/create" class="btn text-white app-background-color">Create Offers <i class="ps-2 bi bi-house-check-fill fw-bold"></i></a>
        </div>

        {{-- create non-offers --}}
        <div class="pe-3">
            <a role="button" class="btn text-white app-background-color">Create Non-offers <i class="ps-2 bi bi-house-exclamation-fill fw-bold"></i></a>
        </div>
    </div>
    <hr class="border-2">
    <div>
        <div class="mb-3">
            <h4>List of Home Insurance Types</h4>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Type</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Contents</td>
                <td>This is the description of content insurance</td>
                <td>
                    <div class="container-fluid p-0">
                        <div class="row">
                            {{-- view --}}
                            <div class="col-12 col-sm-3 col-md-2">
                                <a role="button" class="btn btn-transparent text-dark fw-bold p-0"><i class="bi bi-eye-fill"></i></a>
                            </div>
                            {{-- edit --}}
                            <div class="col-12 col-sm-3 col-md-2">
                                <a href="/dashboard/home-insurance/edit/{1}" class="btn btn-transparent text-dark fw-bold p-0"><i class="bi bi-pencil"></i></a>
                            </div>
                            {{-- delete --}}
                            <div class="col-12 col-sm-3 col-md-2">
                                <form action="/dashboard/home-insurance/delete" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="1">
                                    <button type="submit" class="btn btn-transparent text-dark fw-bold p-0"><i class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
</x-dashboard.section>