@extends('theme.default')


@section('content')



<div class="pann"></div>
<div class="panel panel-primary">
	<div class="panel-heading">PDF</div>
	<div class="panel-body text-left">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				@if (session('notification'))
                    <div class="alert alert-success">
                        {{ session('notification') }}
                    </div>
                @endif
				@if (count($errors) > 0)
            	<div class="alert alert-danger">
                	<ul>
	                    @foreach ($errors->all() as $error)
	                    <li>{{$error}}</li>
	                    @endforeach
                	</ul>
            	</div>
        		@endif

				<form action="/PdfDemo/HtmlToPDF" method="POST">
					{{ csrf_field() }}
					<table cellspacing="3" cellpadding="5" width="100%">
						@if (! auth()->user()->is_client)
						<tr>

							<label>Título</label>
							<p>
								<input type="text" name="title" class="form-control">
							</p>							
														
						</tr>
						<tr>
							<p>
								<textarea name="editor1" id="editor1" >{{ old('editor1') }}</textarea>
								
								<script>
		        					$editor = CKEDITOR.replace ("editor1");
		        					CKFinder.setupCKEditor( $editor, '/ckfinder/' );
		        				</script>

							</p>
						</tr>
						<tr>
							
								<div class="form-group">

									<input type="submit" class="btn btn-primary" name="action" value="Guardar PDF" />

								</div>										
							
						</tr>
						@endif 
						<tr>
							<p>
								<label>Buscar instructivo en formato pdf</label>
							</p>
							<div >
								<p>
									<input class="form-control" list="titles" name="select" id="select">
									<datalist id="titles">
	  								@foreach($pdf_demos as $pdf)
									 	<option>{{ $pdf->title }}</option>
									@endforeach
									</datalist>
								</p>
							</div>
						</tr>
						<tr>
							<div class="form-group">

									<input type="submit" class="btn btn-primary" name="action" value="Ver PDF" />							
							</div>
						</tr>
					</table>
				</form>
			</div>

		</div>
	</div>

</div>


@endsection