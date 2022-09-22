	@if( !isset($btn_show) || $btn_show==true  )
	<a class="btn btn-outline-info" href="{{ route($entity.'.show',$id) }}">
		Show
	</a>
	@endif
	@if( !isset($btn_edit) || $btn_edit==true  )
	<a href="{{ route( $entity.'.edit', $id )  }}" class="btn btn-outline-primary" >
		Edit
	</a>
	@endif
	@if( !isset($btn_delete) || $btn_delete==true  )
	<form method="POST" action="{{route( $entity.'.destroy',  $id )}}" class="form-confirm-delete"
				data-textconfirm="{{@$textConfirm}}" style="display:inline">
		<input name="_method" value="DELETE" type="hidden">
		{{csrf_field()}}
		<button type="submit" class="btn btn-outline-danger cont-trash">
			Delete
		</button>
	</form>
	@endif
