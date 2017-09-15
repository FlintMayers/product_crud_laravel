<div class="form-group">
    {!! Form::label('name', 'First Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('surname', 'Last Name') !!}
    {!! Form::text('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('phone', 'Phone') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('subscription', 'Subscription Type') !!}
    {!! Form::select('subscription', array('Monthly' => 'Monthly', 'Yearly' => 'Yearly'), 0, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('avatar', 'Optional: upload your avatar') !!}
    {!! Form::file('avatar', null, ['class' => 'form-control']) !!}
</div>

