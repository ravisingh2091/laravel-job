<form class="form-horizontal" action="{{ $action }}" name="product-form" method="POST">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="{{ $method }}">
    @if (isset($show_clone_disable) && $show_clone_disable)
    <div class="form-group">
        <label for="disable_source_product" class="col-md-1 control-label">Disable Source Product</label>
        <div class="col-md-3">
            {{ Form::hidden('disable_source_product', '0') }}
            {{ Form::checkbox('disable_source_product', '1', true) }}
        </div>
    </div>
    @endif
    <div class="form-group">
        <label for="marketer_id" class="col-md-1 control-label">Marketer</label>
        <div class="col-md-3">
            {{ Form::select('marketer_id', $marketers, $product->marketer_id, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="utility_territory_id" class="col-md-1 control-label">Utility Territory</label>
        <div class="col-md-3">
            {{ Form::select('utility_territory_id', $utilityTerritories, $product->utility_territory_id, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="commodity_id" class="col-md-1 control-label">Commodity</label>
        <div class="col-md-3">
            {{ Form::select('commodity_id', $commodities, $product->commodity_id, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="rate" class="col-md-1 control-label">Rate</label>
        <div class="col-md-3">
            {{ Form::text('rate', $product->rate, ['class' => 'form-control xsmall-input']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="term_months" class="col-md-1 control-label">Term Months</label>
        <div class="col-md-3">
            {{ Form::text('term_months', $product->term_months, ['class' => 'form-control xsmall-input']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="secondary_rate" class="col-md-1 control-label">Secondary Rate</label>
        <div class="col-md-3">
            {{ Form::text('secondary_rate', $product->secondary_rate, ['class' => 'form-control xsmall-input']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="secondary_term_months" class="col-md-1 control-label">Secondary Term Months</label>
        <div class="col-md-3">
            {{ Form::text('secondary_term_months', $product->secondary_term_months, ['class' => 'form-control xsmall-input']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="unit_of_measure" class="col-md-1 control-label">Unit of Measure</label>
        <div class="col-md-3">
            {{ Form::text('unit_of_measure', $product->unit_of_measure, ['class' => 'form-control xsmall-input']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="next_product_id" class="col-md-1 control-label">Next Product ID</label>
        <div class="col-md-3">
            {{ Form::text('next_product_id', $product->next_product_id, ['class' => 'form-control xsmall-input']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="revenue_class" class="col-md-1 control-label">Revenue Class</label>
        <div class="col-md-3">
            {{ Form::select('revenue_class', $revenueClasses, $product->revenue_class, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="enroll_fee" class="col-md-1 control-label">Enroll Fee</label>
        <div class="col-md-3">
            {{ Form::text('enroll_fee', $product->enroll_fee, ['class' => 'form-control xsmall-input']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="cancel_fee" class="col-md-1 control-label">Cancel Fee</label>
        <div class="col-md-3">
            {{ Form::text('cancel_fee', $product->cancel_fee, ['class' => 'form-control xsmall-input']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="enabled" class="col-md-1 control-label">Enabled</label>
        <div class="col-md-3">
            {{ Form::hidden('enabled', '0') }}
            {{ Form::checkbox('enabled', '1', $product->enabled) }}
        </div>
    </div>
    <div class="form-group">
        <label for="product_type_id" class="col-md-1 control-label">Product Type</label>
        <div class="col-md-3">
            {{ Form::select('product_type_id', $productTypes, $product->product_type_id, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="renewable_type" class="col-md-1 control-label">Renewable Type</label>
        <div class="col-md-3">
            {{ Form::select('renewable_type', $renewableTypes, $product->renewable_type, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="website_description" class="col-md-1 control-label">Description</label>
        <div class="col-md-3">
            {{ Form::textarea('website_description', $product->website_description, ['class' => 'form-control xsmall-input']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="foreign_code" class="col-md-1 control-label">SPA Code</label>
        <div class="col-md-3">
            {{ Form::text('foreign_code', $product->foreign_code, ['class' => 'form-control xsmall-input']) }}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-1 control-label"></label>
        <div class="col-md-9">
            <button class="btn btn-sm btn-success" type="submit">Save Product</button>
        </div>
    </div>

</form>
