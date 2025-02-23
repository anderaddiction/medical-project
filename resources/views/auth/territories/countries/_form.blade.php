@csrf
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Name') }}</label>
            <input type="text" name="name" id="name" class="form-control required" placeholder="{{ __('Enter continent') }}"
                value="{{ old('name', $country->name) }}">
            <small class="feedback text-danger">
                {{ $errors->first('name') }}
            </small>
        </div>
    </div>

    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="continent_id">{{ __('Continent') }} <span
                    class="text-danger">*</span></label>
            <select class="form-select required" name="continent_id">
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($continents as $id => $name)
                    <option value="{{ $id }}"
                        {{ $id == old('continent_id', $country->continent_id) ? 'selected' : '' }}>{{ $name }}
                    </option>
                @endforeach
            </select>
            <small class="feedback text-danger">
                {{ $errors->first('continent_id') }}
            </small>
        </div>
    </div>


    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label">{{ __('Status') }}</label>
            <select class="form-select required" name="status">
                <option value=" ">{{ __('Select an option') }}</option>
                <option value="1" {{ old('status', $country->status) == '1' ? 'selected' : '' }}>@lang('Active')
                </option>
                <option value="0" {{ old('status', $country->status) == '0' ? 'selected' : '' }}>@lang('Inactive')
                </option>
            </select>
            <small class="feedback text-danger">
                {{ $errors->first('status') }}
            </small>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="mb-3">
        <label class="form-label" for="formrow-password-input">{{ __('Note') }}</label>
        <textarea type="text" cols="10" rows="5" class="form-control required" placeholder="{{ __('Enter note') }}"
            id="note" name="note" value="{{ old('note', $country->note) }}">{{ old('note', $country->note) }}</textarea>
    </div>
</div>
<div class="mt-4">
    <button type="submit" class="btn btn-primary w-md">{{ $btnText }}</button>
</div>
