<label>color</label>
<div class="form-group @if ($errors->has('color')) has-error @endif">
	<div class="col-md-2 inline">
		<input type="text" id="encoder_color" name="color" class="form-control input_colorpicker" value="{{ @old('color', $encoder->color ) }}" autocomplete="false" />
	</div>
	<div class="col-md-10">
		<div class="colorpicker_selector">
			<div style="background-color: #FF0000"></div>
		</div>
	</div>
	@if ($errors->has('color')) <p class="help-block">{{ $errors->first('color') }}</p> @endif
</div>
