<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
{{--            {!! Form::label('name', 'First Name') !!}--}}
            {!! Form::text('name', null, ['class' => 'form-control input-lg', 'placeholder' => 'First Name']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
{{--            {!! Form::label('surname', 'Last Name') !!}--}}
            {!! Form::text('surname', null, ['class' => 'form-control input-lg', 'placeholder' => 'Last Name']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {{--{!! Form::label('email', 'Email') !!}--}}
    {!! Form::email('email', null, ['class' => 'form-control input-lg', 'placeholder' => 'Email Address']) !!}
</div>

<div class="form-group">
    {{--{!! Form::label('phone', 'Phone') !!}--}}
    {!! Form::text('phone', null, ['class' => 'form-control input-lg', 'placeholder' => 'Phone']) !!}
</div>

<div class="form-group">
{{--    {!! Form::label('subscription', 'Subscription Type') !!}--}}
    {!! Form::select('subscription', array('Monthly' => 'Monthly Subscription', 'Yearly' => 'Yearly Subscription'), 0, ['class' => 'form-control input-lg']) !!}
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-4">
        <div class="form-group">
            {!! Form::label('avatar', 'Optional: upload your avatar') !!}
            {!! Form::file('avatar', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<hr class="colorgraph">

