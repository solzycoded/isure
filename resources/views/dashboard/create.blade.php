<x-dashboard.section :header="'<a href=\'/insurance-policies/' . $insurancePolicy->name . '-insurance\' class=\'app-color link-offset-2 link-underline link-underline-opacity-0 text-capitalize\'>' . $insurancePolicy->name . ' Insurance</a> / Create'">
    {{-- <x-form.section :action="'/insurance-policies/' . $insurancePolicy->name . '-insurance/create'" :method="'POST'"> --}}
        <div class="row">
            {{-- home insurance type --}}
            
            <div class="col-12 col-sm-6">
                <input type="hidden" name="type" value="{{ $insurancePolicy->name }}">

                {{-- name --}}
                <div class="form-group">
                    <x-form.input :name="'name'" :display="'Name'" placeholder="what's the name of this {{ $insurancePolicy->name }} insurance?" required />
                </div>

                {{-- premium --}}
                <div class="form-group mb-3">
                    <label for="premium" class="fw-bold">Premium</label>
                    <input type="number" name="premium" id="premium" class="form-control">
                </div>

                {{-- description --}}
                <div class="form-group">
                    <x-form.textarea :name="'description'" :display="'Description'" placeholder="what is this {{ $insurancePolicy->name }} insurance about?" rows="5" />
                </div>
                {{-- </x-form.section> --}}
            </div>

            <div class="col-12 col-sm-6 mb-3">
                <h5 class="fw-bold">What's this {{ $insurancePolicy->name }} insurance made up of?</h5>
                <div>
                    <h6>Add New Clause</h6>
                    <div class="form-group">
                        <select class="form-select rounded-0 clause-header-list mb-1" name="clause_header" id="clause_header">
                            <option disabled selected value="">Select clause header</option>
                        </select>
                        <input type="text" name="new_clause" id="new_clause" class="form-control rounded-0" placeholder="Enter New clause title">
                    </div>
                    <div class="mt-1" style="width: 100%">
                        <button type="button" class="add-new-clause btn btn-secondary" style="width: inherit">Add <i class="bi bi-plus-circle"></i></button>
                    </div>
                </div>
            </div>
            <hr>

            <div class="col-12 container-fluid">
                <div class="text-center">
                    <h6 class="fw-bolder" style="font-size: 17px">Insurance Clause List</h6>
                    {{-- <div class="border-bottom">
                        <input type="search" id="search-clause-list" class="form-control border-0 text-center p-1" placeholder="Search for a clause or option">
                    </div> --}}
                </div>
                <div class="row mt-3 insurance-clause-list" style="max-height: 400px; overflow-y: auto">
                </div>
            </div>

            <div class="col-12 mt-4">
                <div style="max-width: 200px">
                    <x-form.submit-button class="create-insurance-type">
                        Submit <i class="bi bi-arrow-right"></i>
                    </x-form.submit-button>
                </div>
            </div>
        </div>
</x-dashboard.section>