
<div class="form-group {{ $errors->has('seller_id') ? 'has-error' : ''}}">
    <label for="seller_id" class="control-label">{{ 'Seller Id' }}</label>
    <input class="form-control" name="seller_id" type="number" id="seller_id" value="{{ isset($lotto->seller_id) ? $lotto->seller_id : ''}}" >
    {!! $errors->first('seller_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($lotto->price) ? $lotto->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
    <label for="number" class="control-label">{{ 'Number' }}</label>
    <input class="form-control" name="number" type="number" id="number" value="{{ isset($lotto->number) ? $lotto->number : ''}}" >
    {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($lotto->quantity) ? $lotto->quantity : ''}}" >
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stock') ? 'has-error' : ''}}">
    <label for="stock" class="control-label">{{ 'Stock' }}</label>
    <input class="form-control" name="stock" type="number" id="stock" value="{{ isset($lotto->stock) ? $lotto->stock : ''}}" >
    {!! $errors->first('stock', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lot') ? 'has-error' : ''}}">
    <label for="lot" class="control-label">{{ 'Lot' }}</label>
    <input class="form-control" name="lot" type="number" id="lot" value="{{ isset($lotto->lot) ? $lotto->lot : ''}}" >
    {!! $errors->first('lot', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <input class="form-control" name="status" type="number" id="status" value="{{ isset($lotto->status) ? $lotto->status : ''}}" >
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('annouced_date') ? 'has-error' : ''}}">
    <label for="annouced_date" class="control-label">{{ 'Annouced Date' }}</label>
    <input class="form-control" name="annouced_date" type="datetime-local" id="annouced_date" value="{{ isset($lotto->annouced_date) ? $lotto->annouced_date : ''}}" >
    {!! $errors->first('annouced_date', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('note') ? 'has-error' : ''}}">
    <label for="note" class="control-label">{{ 'Note' }}</label>
    <textarea class="form-control" rows="5" name="note" type="textarea" id="note" >{{ isset($lotto->note) ? $lotto->note : ''}}</textarea>
    {!! $errors->first('note', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
