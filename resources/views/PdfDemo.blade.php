@extends('theme.default')



@section('content')

<style type="text/css">
	h3.center-text {
	    text-align: center;
	}
</style>



<div class="panel panel-primary">
	<div class="panel-heading">base de contenidos</div>
	<div class="panel-body text-center">

		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<br/> <br/> <br/> <br/>
				<table cellspacing="3" cellpadding="5" width="100%">
					<tr>
						<td width="25%">
							<div class="form-group">
								<a href="{{ route('SamplePDF') }}" class="btn btn-primary">Generate Sample PDF</a>
							</div>
						</td>

						<td width="25%">
							<div class="form-group">
								<a href="{{ route('SavePDF') }}" class="btn btn-primary">Save Sample PDF</a>
							</div>
						</td>

						<td width="25%">
							<div class="form-group">
								<a href="{{ route('DownloadPDF') }}" class="btn btn-primary">Download Sample PDF</a>
							</div>
						</td>

						<td width="25%">
							<div class="form-group">
								<a href="{{ route('HtmlToPDF') }}" class="btn btn-primary">Html To PDF</a>
							</div>
						</td>

					</tr>
				</table>
			</div>

			 <!-- Footer Elements -->
			 <div class="container">

			 	<!--Grid row-->
			 	<div class="row d-flex justify-content-center">

			 		<!--Grid column-->
			 		<div class="col-md-4">

			 			<!-- Video -->
			 			<a href="" class="btn btn-primary">contenido audiovisual</a>

			 			<div class="embed-responsive embed-responsive-16by9 mb-4">
			 				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/D4dyPBJeTko" allowfullscreen></iframe>
			 			</div>

			 		</div>
			 		<!--Grid column-->

			 	</div>
			 	<!--Grid row-->

			 </div>
			 <!-- Footer Elements -->



		</div>
	</div>
</div>
@endsection