<div class="table-responsive">

<table class="table table-bordered" id="html_table" width="100%">

			<thead class="m-datatable__head">

				<tr>

						<th class="text-center">#</th>

						<th class="text-center">الإسم </th>

						<th class="text-center">الصورة</th>


						@can('update_status_products')

						<th class="text-center">الحالة</th>

						@endcan

						@can('edit_products')

						<th class="text-center">تعديل</th>

						@endcan

						@can('delete_products')

						<th class="text-center">حذف</th>

						@endcan

				</tr>

			</thead>

			<tbody class="m-datatable__body load">

				@php 

					$i =1;

				@endphp

				@if(count($data['static']) > 0)

					@foreach($data['static'] as $static)

					@php 

						if($static->status==1)

								{

								$class='btn btn-success m-btn m-btn--icon m-btn--pill';

								$color='green'; 

								$icon='check';

								$text = 'مفعل';

							}else{

								$class='btn btn-danger m-btn m-btn--icon m-btn--pill';

								$color='red';

								$icon='check';

								$text = 'غير مفعل';

							}

					@endphp

					<tr class="m-datatable__row">

						<td class="text-center">

							{{$i++}}

						</td>

						<td class="text-center">

							{{$static['title']}}

						</td>

						<td class="text-center">

							<img src="/uploads/{{$static->photo}}" width="50px" alt="">

						</td>

						@can('update_status_products')

						<td class="text-center">

						<a  color="{{$color}}" data-id="{{$static->id}}" class="{{$class}} UpdateStats "  href="javaScript:;">  <span>{{$text}}</span> </a>

						</td>

						@endcan

						@can('edit_products')

						<td class="text-center">

						<a href="#" data-id="{{$static->id}}" class="btn btn-warning m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air

                     	updateDetails"> <i class="fa fa-edit"></i> </a>

						</td>

						@endcan

						@can('delete_products')

						<td class="text-center"><a href="#" data-id="{{$static->id}}" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air

							delete"> <i class="fa fa-trash"></i> </a>

						</td>

						@endcan

					</tr>

					@endforeach

				@else

				<tr  class="m-datatable__row"><td colspan="10" class="text-center">لا يوجد بيانات</td></tr>

				@endif

			</tbody>

	</table>

	<div style="text-align: center;">

			{!! $data['static']->render() !!}

	</div>

</div>