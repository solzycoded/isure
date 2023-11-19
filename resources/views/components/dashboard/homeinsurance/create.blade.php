<x-dashboard.section :header="'<a href=\'/dashboard/home-insurance\' class=\'app-color link-offset-2 link-underline link-underline-opacity-0\'>Home Insurance</a> / Create'">
    <x-form.section :action="'/dashboard/home-insurance/create'" :method="'POST'">
        <div class="row">
            {{-- home insurance type --}}
            <div class="col-12 col-sm-6">
                <x-form.input :name="'type'" :display="'Type'" placeholder="what's the name of this home insurance?" required />
            </div>

            {{-- description --}}
            <div class="col-12 col-sm-6">
                <x-form.textarea :name="'description'" :display="'Description'" placeholder="what is this home insurance basically about?" rows="5" required />
            </div>

            <hr class="col-12">

            <div class="col-12 mb-3">
                <h5 class="fw-bold">What else would you like to add to this policy?</h5>
                <small class="text-secondary">It’s left to you, to decide!(YOU'RE GOING TO HAVE TO FIND A BETTER SUB-HEADER FOR THIS PART!)</small>
            </div>

            <div>
                <input type="text" name="" id="" class="form-control">
            </div>
        </div>
    </x-form.section>
</x-dashboard.section>