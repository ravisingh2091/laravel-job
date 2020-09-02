<form class="form-horizontal" action="{{ $action }}" name="utility-territory-rate-form" method="POST">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="{{ $method }}">
    <div class="form-group">
        <label for="state_id" class="col-md-1 control-label">Utility</label>
        <div class="col-md-3">
            {{ Form::select('utility_territory_id', $utilities, $rate->utility_territory_id, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="effective_at" class="col-md-1 control-label">Effective At</label>
        <div class="col-md-3">
            {{ Form::text('effective_at', $rate->effective_at, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="rate" class="col-md-1 control-label">Rate</label>
        <div class="col-md-3">
            {{ Form::text('rate', $rate->rate, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-1 control-label"></label>
        <div class="col-md-9">
            <button class="btn btn-sm btn-success" type="submit">Save Template</button>
        </div>
    </div>

</form>

