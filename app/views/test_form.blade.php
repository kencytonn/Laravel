<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Application</title>
</head>
<body>
<h1>Simple Form</h1>
{{ Form::open() }}
<div class="form-group">
    {{ Form::label('username', 'Username') }}
    {{Form::text('username',Input::old('username'),  array('placeholder'=>'Username'))}}
</div>
<div class="form-group">
    {{ Form::label('email', 'Email Address') }}
    {{Form::text('email',Input::old('email'),  array('placeholder'=>'Email@email.com'))}}
</div>
<div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{Form::password('password',Input::old('password'),  array('placeholder'=>'******'))}}
</div>

<div>{{Form::submit('Click Me')}}</div>
{{ Form::close() }}

</body>

</html>
