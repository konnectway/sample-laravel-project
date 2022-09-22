@if( $item->$field )
<div class="container_remove_image">

	<div class="card mb-3">

		<div class="card-head">
			<div class="cancel_img_remove_container" style="display:none;">
				<i class="fa fa-trash"></i>
			</div>
  			<img class="card-img-top img-fluid img_preview"
	  			@if( $item->$field )
	  				src="{{ $item->imageUrl($field) }}"
	  			@else
	  				src="" style="display:none";
	  			@endif
	  			@if(isset($img_height))
	  				height="{{$img_height}}"
	  			@endif
  			>
  		</div>
  		<div class="card-body">

	    	@if( !isset($cant_delete) || $cant_delete==true  )
			<div class="img_remove_container">
				<button class="btn-delete btn btn-xs btn-danger btn_delete_image" >
					<i class="fa fa-trash mr-2"></i>Borrar imagen
				</button>
			</div>
			<div class="cancel_img_remove_container" style="display:none;">
				<button class="btn btn-info btn-xs btn_cancel_delete_image" >
					<i class="fa fa-undo mr-2"></i>No Borrar
				</button>

			</div>
			@endif

  		</div>
	</div>

	<input type="hidden" name="delete_{{$field}}" class="h_image_delete" value="0">
	{!! Field::file($field,['class'=>'file_image_preview']) !!}
</div>
@endif
