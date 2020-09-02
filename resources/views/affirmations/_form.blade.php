<form class="form-horizontal" action="{{ $action }}" name="affirmation-form" method="POST">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="{{ $method }}">
    <div class="form-group">
        <label for="marketer_id" class="col-md-1 control-label">Marketer</label>
        <div class="col-md-3">
            {{ Form::select('marketer_id', $marketers, $affirmation->marketer_id, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="state_id" class="col-md-1 control-label">State</label>
        <div class="col-md-3">
            {{ Form::select('state_id', $states, $affirmation->state_id, ['class' => 'form-control']) }}
        </div>
    </div>


    <div class="form-group">
        <label for="source_file_name" class="col-md-1 control-label">Affirmation</label>
        <div class="col-md-3">
            {{ Form::text('affirmation', $affirmation->affirmation, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="version" class="col-md-1 control-label">Display Order</label>
        <div class="col-md-3">
            {{ Form::text('display_order', $affirmation->display_order, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-1 control-label"></label>
        <div class="col-md-9">
            <button class="btn btn-sm btn-success" type="submit">Save Affirmation</button>
        </div>
    </div>

</form>
