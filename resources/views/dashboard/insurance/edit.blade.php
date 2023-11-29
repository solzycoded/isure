<x-dashboard.section :header="'<a href=\'/insurance-policies/' . $insurancePolicy->name . '-insurance\' class=\'app-color link-offset-2 link-underline link-underline-opacity-0 text-capitalize\'>' . $insurancePolicy->name . ' Insurance</a> / Edit'">
    {{-- <x-form.section :action="'/insurance-policies/' . $insurancePolicy->name . '-insurance/create'" :method="'POST'"> --}}
    <form action="/insurance-policies/{{ $insurancePolicy->name}}-insurance" method="POST">
        @csrf
        @method('PATCH')

        <div class="row">
            {{-- home insurance type --}}
            
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <x-form.input :name="'name'" :display="'Name'" placeholder="what's the name of this home insurance?" required />
                </div>

                {{-- description --}}
                <div class="form-group">
                    <x-form.textarea :name="'description'" :display="'Description'" placeholder="what is this home insurance about?" rows="5" />
                </div>
            </div>

            {{-- <hr class="col-12">

            <div class="col-12 mb-3">
                <h5 class="fw-bold">What else would you like to add to this policy?</h5>
                <small class="text-secondary">It’s left to you, to decide!(YOU'RE GOING TO HAVE TO FIND A BETTER SUB-HEADER FOR THIS PART!)</small>
            </div>

            <div>
                <input type="text" name="" id="" class="form-control">
            </div> --}}
            <div class="col-12">
                <div style="max-width: 200px">
                    <x-form.submit-button>
                        Submit <i class="bi bi-arrow-right"></i>
                    </x-form.submit-button>
                </div>
            </div>
        </div>
    </form>
    {{-- </x-form.section> --}}
</x-dashboard.section>