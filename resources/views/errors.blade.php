<div class="col-sm-6 col-sm-offset-3">
@if (count($errors) > 0)
    <!--   	errors -->
        <div class="row">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>