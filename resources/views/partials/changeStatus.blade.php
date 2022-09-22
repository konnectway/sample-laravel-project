<div class="custom-control custom-switch">
		<input class="toggle-update-status custom-control-input" type="checkbox"
				id="switch-status-{{$entity}}-{{$id}}"
				data-id="{{$id}}"
				data-action="{{ route( $entity.'.updateStatus', $id )  }}"
				autocomplete="off"
				class="js-switch" {{ $status == 1 ? 'checked' : '' }}
				@if(isset($disabled) && $disabled)
				disabled="disabled"
				@endif
			>
	<label class="custom-control-label" for="switch-status-{{$entity}}-{{$id}}"></label>
</div>