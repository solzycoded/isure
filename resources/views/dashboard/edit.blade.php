<x-dashboard.section :header="'<a href=\'/insurance-policies/' . $insurancePolicy->name . '-insurance\' class=\'app-color link-offset-2 link-underline link-underline-opacity-0 text-capitalize\'>' . $insurancePolicy->name . ' Insurance</a> / Edit'">
    <form action="/insurance-policies/{{ $insurancePolicy->name}}-insurance" method="POST">
        @csrf
        @method('PATCH')

        <div class="row">

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <x-form.input :name="'name'" :display="'Name'" placeholder="what's the name of this {{ $insurancePolicy->name}} insurance?" value="{{ old('name', $insurancePolicy->name) }}" required readonly />
                </div>

                <div class="form-group">
                    <x-form.input :name="'default_premium'" :display="'Default Premium Price (£)'" placeholder="what's the default premium price?" value="{{ old('default_premium', $insurancePolicy->default_premium) }}" required />
                </div>

                {{-- description --}}
                <div class="form-group">
                    <x-form.textarea :name="'description'" :display="'Description'" placeholder="what is this {{ $insurancePolicy->name }} insurance about?" rows="5">{{ old('description', $insurancePolicy->description) }}</x-form.textarea>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                {{-- terms and conditions --}}
                <div class="form-group">
                    <x-form.textarea :name="'terms_and_conditions'" :display="'terms & conditions'" placeholder="what are the terms and conditions for this {{ $insurancePolicy->name}} insurance policy?" rows="10">{!! old('terms_and_conditions', $insurancePolicy->terms_and_conditions) !!}</x-form.textarea>
                </div>
            </div>

            <div class="col-12">
                <div style="max-width: 200px">
                    <x-form.submit-button>
                        Update <i class="bi bi-check2-circle"></i>
                    </x-form.submit-button>
                </div>
            </div>
        </div>
    </form>
</x-dashboard.section>
