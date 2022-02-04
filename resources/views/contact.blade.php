<!-- START CONTACT -->
<section id="contact" class="tm-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">					
					<h2 class="title">Biz bilan <strong>aloqa</strong></h2>
					<hr>					
				</div>
				<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-10 col-sm-10">
                    @if(session()->has('success'))
                        <div class="alert-success " role="alert">
                            {{session()->get('success')}}
                        </div>
                    @endif      
					@if($errors->any())
                        <div class="alert-danger" role="alert">
                            <ul>    
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
					<form action="{{route('contact.store')}}" method="post">
						@csrf
						<div class="col-md-6 col-sm-6">
							<input class="form-control" type="text" value="{{ @old('name')}}" name="name" placeholder="Isminggiz">
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="input-group">
								<div class="input-group-addon">+998</div>
								<input type="text" class="form-control" id="exampleInputAmount" value="{{ @old('phone')}}" name="phone" placeholder="Telefon raqaminggiz! Misol:901234567">
							</div>
						</div>
						<div class="col-md-12 col-sm-12">
							<textarea class="form-control" value="{{ @old('message')}}" name="message" placeholder="Xabaringgiz" rows="6"></textarea>
						</div>
						<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
							<input class="form-control" type="submit" value="xabarni jo`natish">
						</div>
					</form>
				</div>
				<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-12 col-sm-12">
					<p> &copy; 2021 Ultra Soft</p>
				</div>
			</div>
		</div>
	</section>
	<!-- END CONTACT -->
    