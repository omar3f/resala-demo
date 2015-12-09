
<div class="row">
    <div class="col-sm-4 col-sm-push-4">
        <div class="row">
            <div class="col-sm-push-1 col-sm-10">
                {!! Form::open(['method' => 'POST', 'action' => 'DonorsController@' . $method, "data-remote" => "1"]) !!}
                {!! form::text('first_name', null, ["class" => "form-control form-group", "placeholder" => "First Name"]) !!}
                    <p class="first_name_error errors hide">We need your first name.</p>

                {!! form::text('last_name', null, ["class" => "form-control form-group", "placeholder" => "Last Name"]) !!}
                <p class="last_name_error errors hide">We need your last name.</p>

                {!! form::text('phone', null, ["class" => "form-control form-group", "placeholder" => "Phone"]) !!}
                <p class="phone_error errors hide">We need your phone.</p>

                {!! form::text('email', null, ["class" => "form-control form-group", "placeholder" => "Email"]) !!}
                <p class="email_error errors hide">We need your email.</p>


                {!! form::select('governorate_id', array_same_key_val(App\Governorate::lists('governorate')) ,null, ["class" => "form-control form-group"]) !!}
                <p class="governorate_id_error errors hide">We need your governorate.</p>

                {!! form::select('blood_id', array_same_key_val(App\Blood::lists('blood')), null, ["class" => "form-control form-group"]) !!}
                <p class="blood_id_error errors hide">We need your blood type.</p>

                {!! Form::submit('Donate', ["class" => "btn btn-primary form-group form-control"]) !!}
                {!! Form::close() !!}

            </div>
        </div>


    </div>
</div>
