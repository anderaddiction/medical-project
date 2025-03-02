@csrf
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Appointment') }}</label>
            <input type="text" name="name" id="name" class="form-control required" placeholder="{{ __('Enter appointment name') }}"
                value="{{ old('name', $appointment->name) }}">
            <small class="feedback text-danger">
                {{ $errors->first('name') }}
            </small>
        </div>
    </div>

    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="patient_id">{{ __('Patient') }} <span class="text-danger">*</span></label>
            <select class="form-select required" name="patient_id">
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($patients as $id => $name)
                <option value="{{ $id }}" {{ $id==old('patient_id', $appointment->patient_id) ? 'selected' : '' }}>{{
                    $name }}
                </option>
                @endforeach
            </select>
            <small class="feedback text-danger">
                {{ $errors->first('patient_id') }}
            </small>
        </div>
    </div>

    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="specialty_id">{{ __('Speciality') }} <span
                    class="text-danger">*</span></label>
            <select class="form-select required" name="specialty_id">
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($specialties as $id => $name)
                    <option value="{{ $id }}"
                        {{ $id == old('specialty_id', $appointment->specialty_id) ? 'selected' : '' }}>{{ $name }}
                    </option>
                @endforeach
            </select>
            <small class="feedback text-danger">
                {{ $errors->first('specialty_id') }}
            </small>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label" for="date">{{ __('Date') }}</label>
            <input type="date" name="date" id="date" class="form-control required"
                placeholder="{{ __('Enter appointment date') }}" value="{{ old('date', $appointment->date) }}">
            <small class="feedback text-danger">
                {{ $errors->first('date') }}
            </small>
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label" for="start_hour">{{ __('Start Hour') }}</label>
            <input type="text" name="start_hour" id="start_hour" class="form-control required"
                placeholder="{{ __('Enter appointment start hour') }}" value="{{ old('start_hour', $appointment->start_hour) }}">
            <small class="feedback text-danger">
                {{ $errors->first('start_hour') }}
            </small>
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label" for="end_hour">{{ __('End Hour') }}</label>
            <input type="text" name="end_hour" id="end_hour" class="form-control required"
                placeholder="{{ __('Enter appointment end hour') }}" value="{{ old('end_hour', $appointment->end_hour) }}">
            <small class="feedback text-danger">
                {{ $errors->first('end_hour') }}
            </small>
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">{{ __('Status') }}</label>
            <select class="form-select required" name="status">
                <option value=" ">{{ __('Select an option') }}</option>
                <option value="1" {{ old('status', $appointment->status) == '1' ? 'selected' : '' }}>@lang('Active')
                </option>
                <option value="0" {{ old('status', $appointment->status) == '0' ? 'selected' : '' }}>@lang('Pending')
                </option>
                <option value="2" {{ old('status', $appointment->status) == '2' ? 'selected' : '' }}>@lang('Canceled')
                </option>
                <option value="3" {{ old('status', $appointment->status) == '3' ? 'selected' : '' }}>@lang('Closed')
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
            id="note" name="note" value="{{ old('note', $appointment->note) }}">{{ old('note', $appointment->note) }}</textarea>
    </div>
</div>
<div class="mt-4">
    <button type="submit" class="btn btn-primary w-md">{{ $btnText }}</button>
</div>
