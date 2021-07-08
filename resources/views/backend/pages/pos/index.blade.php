@extends('backend.layouts.app')
<!--start section -->
@section('admin-content')

<div class="container-fluid">
    <h4>P-RQ Center</h4>
    <div class="box box-block bg-white">
        <div class="row mb-3">
            
            <div class="col-md-4">
                
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="priority">Customer Mobile No </label>
                    <div class="col-sm-5">
                        <input type="tel" class="form-control" name="clint_number" id="clint_number" placeholder="01234567890"  >
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label for="recipient-name" class="form-control-label">csutomer Mobile No</label>
                    <div class="">
                        <input class="form-check-input" type="text" name="co" id="costomer" value="barcode">
                    </div>
                   
                    <select class="form-control m-b-1" id="supplier_id">
                        <option value="0">--Please Select--</option>
                        @foreach ($suppliers as $supllier)
                            <option value="{{$supllier->id}}">{{$supllier->official_name}}</option>
                        @endforeach
                        
                    </select> 
                </div> --}}
            </div>
            {{-- <div class="col-md-4">
                <label for="" class="form-control-label">Search By</label>
                <div class="form-group">
                    
                    <label class="form-check-inline">
                        <input class="form-check-input" type="radio" name="filter_by" id="inlineRadio1" value="barcode">Barcode
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="radio" name="filter_by" id="inlineRadio2" value="product_id">Product id
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="radio" name="filter_by" id="inlineRadio3" value="product_name">Product Name
                    </label>
                </div>
            </div> --}}
            {{-- <div class="col-md-2">
                <label for="" class="form-control-label">.</label>
                <button class="btn btn-primary form-control" type="button" onclick="btnSet()">Set</button>
            </div> --}}
            <div class="col-md-4">
                <div class="form-group row">
                    <label for="" class="col-sm-5 col-form-label">Date</label>
                    <div class="col-sm-5">
                        <input type="text" name="" class="form-control" value="{{ now() }}">
                    </div>
                </div>    
            </div>
            <div class="col-md-12 m-b-3 m-b-3 m-t-3">
                <div class="table-responsive">
                    <form action="" id="select_product_form">
                    <table class="table table-striped table-bordered" id="table-2">
                        <thead>
                            <tr>
                            <th>Product Search</th>
                            <th>Name</th>
                            <th>Size</th>
                            <th>Unit</th>
                            <th>Cost Price</th>
                            <th>Selling Price</th>
                            <th>Offer Price</th>
                            <th>Quantity</th>
                            <th>Total Amount</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <tr>
                                
                                <td width='20%'> 
                                    <div class="form-group">
                                        <select id="select_product" class="form-control js-example-basic-single" name="">
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}" data-product_size="{{$product->size}}" data-product_sku="{{$product->sku}}" data-product_id="{{ $product->product->id }}" data-product_title="{{ $product->product->product_title }}" data-buy_price="{{ $product->product->buy_price }}" data-sell_price="{{ $product->product->sell_price }}" data-offer_price="{{ $product->product->offer_price }}" selected>{{ $product->sku }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <select id="select_product" name="" data-plugin="" class="form-control">
                                    <option value="">--please select--</option>
                                    </select> --}}
                                    {{-- <input type="text" name="" id="name" class="form-control"> --}}
                                </td>    
                               <td>
                                <input type="text" name="" id="product_title" class="form-control" disabled>
                              </td>
                              <td>
                                <input type="text" name="" id="product_size" class="form-control" disabled>
                              </td>
                              <td>
                                <input type="text" name="" id="unit" class="form-control" disabled>
                              </td>
                              <td>
                                <input type="number" name="" id="buy_price" class="form-control" disabled>
                              </td>
                              <td>
                                <input type="number" name="" id="sell_price" class="form-control" disabled>
                              </td>
                              <td>
                                <input type="number" name="" id="offer_price" class="form-control" disabled>
                              </td>
                              <td>
                                <input type="number" name="" id="qty" class="form-control" value="1">
                              </td>
                              <td>
                                <input type="number" name="" id="total_amount" class="form-control" disabled>
                              </td>
                              <td>
                                <button type="button" class="btn btn-success btn-circle waves-effect waves-light" onclick="addProductToTable()">
                                    <i class="ti-check"></i>
                                </button>
                              </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </form>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 m-b-3">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="product_list">
                        <thead>
                            <tr>
                                <th style="display: none">id</th>
                            <th>Productid</th>
                            <th>Name</th>
                            <th>size</th>
                            <th>Unit</th>
                            <th>Buying Price</th>
                            <th>Selling Price</th>
                            <th>Offer Price</th>
                            <th>Quantity</th>
                            <th>Total Amount</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div> 
            </div>
            <div class="col-md-6">
                supplier details
                due balance
                paid balance
                other information
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Sub Total</label>
                            <input type="number" class="form-control" name="sub_total" id="sub_total" value="0" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">discount</label>
                            <input type="number" class="form-control" name="discount" id="discount" value="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Total Payable</label>
                            <input type="number" class="form-control" name="total_payable" id="total_payable" value="0" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Paid Amount</label>
                            <input type="number" class="form-control" name="paid_amount" id="paid_amount" value="0" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Due After Payable</label>
                            <input type="number" class="form-control" name="due_amount" id="due_amount" value="0" disabled>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="my-select" class="form-control-label">Payment Status</label>
                            <select id="my-select" class="form-control" name="" id="payment_status">
                                <option value="cash">Cash</option>
                                <option value="cash">Bank</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="my-select" class="form-control-label">Transaction Id/Bank Account Number</label>
                            <input type="text" class="form-control">
                        </div>
                    </div> --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">.</label>
                            <button type="submit" class="form-control btn btn-primary" onclick="invoice_Data_Send()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection   
<!--end section--> 
@section('script')
<script>
    //$('[data-plugin="select"]').select2();

     $(document).ready(function () {
         $('body').addClass('compact-sidebar');
         $('.js-example-basic-single').select2();
     });
    //  function btnSet(){
    //     var supplier_id=$('#supplier_id option:selected').val();
    //     var filter_by=$("input[name='filter_by']:checked").val();
    //     filter_product={
    //         'supplier_id':supplier_id,
    //         'filter_by':filter_by,
    //     }
        
    //     $.ajax({
    //         type: "get",
    //         url: "/api/product/search/supplier_id"+"/"+supplier_id,
    //      //    data: filter_product,
    //         success: function (response) {
    //             console.log(response);
    //            var option='<option value="0">'+'--please select---'+'</option>';
    //            response.data.forEach(selectOption)

    //            function selectOption(value){
    //                option+='<option value='+value.id+' data-product_gen_id='+value.product_gen_id+' data-name='+value.name+' data-unit_id='+value.unit.name+' data-buying_price='+value.buying_price +' data-selling_price='+value.selling_price +'>'+filterText(value)+'</option>'
    //            }
    //              document.getElementById("select_product").innerHTML = option;
    //            function filterText(value){
    //                console.log(value, filter_by);
    //                if(filter_by=='product_id'){
                       
    //                     return value.product_gen_id;
    //                }else if(filter_by=='product_name'){
    //                  return value.name;
    //                }else{
    //                  return value.barcode;
    //                }
    //            }
               
    //            $('[data-plugin="select"]').select2("open");


    //            $('#select_product').on('change keyup click',function (e) { 
                   
                   
    //                $("#name").val($(this).find(':selected').data('name'));
    //                $("#unit").val($(this).find(':selected').data('unit_id'));
    //                $("#buying_price").val($(this).find(':selected').data('buying_price'));
    //                $("#selling_price").val($(this).find(':selected').data('selling_price'));
                   
    //            });
    //            //('[data-plugin="select"]').select2("close");
    //            $('#select_product').on('select2:close',function(e){
    //              $("#qty").focus();
    //            });
    //         }
    //     });

    //  }
    //document.getElementById("select_product").innerHTML = option;
    $('#select_product').on('change keyup click',function (e) {   
        //alert('ok');           
        $("#product_title").val($(this).find(':selected').data('product_title'));
        $("#product_size").val($(this).find(':selected').data('product_size'));
        $("#unit").val($(this).find(':selected').data('product_id'));
        $("#buy_price").val($(this).find(':selected').data('buy_price'));
        $("#sell_price").val($(this).find(':selected').data('sell_price'));
        $("#offer_price").val($(this).find(':selected').data('offer_price'));
        //$("#qty").focus();
    });

        $('#select_product').on('select2:close',function(e){
        $("#qty").focus();
         });

     $(function(){
         $('#qty,#offer_price').on('focus change keydown keyup click',qty);
         function qty() {
            var sum=(Number($('#qty').val()))*(Number($("#offer_price").val()));
            $("#total_amount").val(sum);
         }
     })



     function addProductToTable() {
         //valurs are collect from select option table;
         var product={
             'product_id':$('#select_product option:selected').data('product_id'),
             'id':$('#select_product option:selected').val(),
             'product_name':$('#product_title').val(),
             'product_size':$('#select_product option:selected').data('product_size'),
             'unit':$('#unit').val(),
             'buy_price':Number($('#buy_price').val()),
             'sell_price':Number($('#sell_price').val()),
             'offer_price':Number($('#offer_price').val()),
             'qty':Number($('#qty').val()),
             'total_amount':Number($('#total_amount').val()),
         }
         addRow(product);
         $("#select_product_form")[0].reset();
         //$('[data-plugin="select"]').select2("open");
     }


     var sub_total=0;
     function addRow(product){
        // supplier_id=$('#supplier_id option:selected').val();
         //filter_by=$("input[name='filter_by']:checked").val();
         console.log(product.product_id);
        //return true;
        // if(supplier_id == 0){
        //     alert('please select supplier');
        //     return true;
        // }else if( filter_by == null){
        //  alert('please select Search By');
        //     return true;
        // }else 
        if( product.product_id == (null ||0) ){
         alert('please select product');
            return true;
        }else{
         
         var tableB=$('#product_list tbody');
         var row=$(
         '<tr>'
             +'<td style="display:none">'+product.id+'</td>'
             +'<td>'+product.product_id+'</td>'
             +'<td>'+product.product_name+'</td>'
             +'<td>'+product.product_size+'</td>'
             +'<td>'+product.unit+'</td>'
             +'<td>'+product.buy_price+'</td>'
             +'<td>'+product.sell_price+'</td>'
             +'<td>'+product.offer_price+'</td>'
             +'<td>'+product.qty+'</td>'
             +'<td>'+product.total_amount+'</td>'
             +"<td><button type='button' class='btn btn-danger btn-circle waves-effect waves-light' onclick='deleteProductFromTable(this)'><i class='ti-close'></i></button></td>"
                 +'</tr>'                
         );
         row.data('id',product.id);
         row.data('id',product.product_id);
         row.data('id',product.product_name);
         row.data('id',product.product_size);
         row.data('id',product.unit);
         row.data('id',product.buy_price);
         row.data('id',product.sell_price);
         row.data('id',product.offer_price);
         row.data('id',product.qty);
         row.data('id',product.total_amount);
         tableB.append(row);
          sub_total+=Number(product.total_amount);

          $('#sub_total,#due_amount, #total_payable').val(sub_total);
             }//esle
         };
         
         var last_product_price;
         function deleteProductFromTable(e){
             last_product_price=parseFloat($(e).parent().parent().find('td:nth-last-child(2)').text(),10);
             sub_total-=Number(last_product_price);
             $('#discount').val(0);
             $('#paid_amount').val(0);
             $('#sub_total,#total_payable,#due_amount').val(sub_total);
             $(e).parent().parent().remove();
         };

         $(function(){
             $('#sub_total,#discount,#total_payable,#paid_amount,#due_amount').on('change keydown keyup click',total);
             function total(){
                 var sub_total=$('#sub_total').val();
                 var discount=$('#discount').val();
                 var total_payable=$('#total_payable').val();
                 var paid_amount=$('#paid_amount').val();
                 var due_amount=$('#due_amount').val();
                total_payable=Number(sub_total-((discount/100)*sub_total));
                $('#total_payable').val(total_payable);
                due_amount=Number(total_payable-paid_amount);
                $('#due_amount').val(due_amount);
             }
         });

         function invoice_Data_Send(){
             var sub_total=$('#sub_total').val();
             var discount=$('#discount').val();
             var total_payable=$('#total_payable').val();
             var due_amount=$('#due_amount').val();
             var paid_amount=$('#paid_amount').val();
             var clint_phone_number=$('#clint_number').val();
             
             //var supplier_id=$('#supplier_id option:selected').val();
             var product_data=[]
             $('#product_list tbody tr').each(function(row,tr){
                 var product_data_from_table={
                     'product_id':$(tr).find('td:eq(1)').text(),
                     'product_size':$(tr).find('td:eq(3)').text(),
                     //'buying_price':$(tr).find('td:eq(5)').text(),
                     'quantity':$(tr).find('td:eq(8)').text(),
                     //'total_amount':$(tr).find('td:eq(10)').text(),

                 }
                 product_data.push(product_data_from_table);
             });
            
              //console.log(product_data);
             // return true;
             data={
                 'sub_total':sub_total,
                 'discount':discount,
                 'total_payable':total_payable,
                 'due_amount':due_amount,
                 'paid_amount':paid_amount,
                 //'supplier_id':supplier_id,
                 'order_type':'purchase',
                 'delivery_clint_phone_number':clint_phone_number,
                 'product_data':product_data,
             }
             console.log(data);
             //return true;
             $.ajax({
                 type: "post",
                 url: "/api/admin/order/store",
                 data: data,
                 //dataType: "dataType",
                 success: function (result) {
                     console.log(result);
                     var id =result.data;
                     if (result.error==false) {
                     $( "div").remove( ".text-danger" );
                          successNotification();
                         // removeUpdateProperty("product");
                         // document.getElementById("myform").reset();
                         var url ="{{ url('/') }}";
                            url = url+'/admin/order/orderDetails/'+id;
                        
                        setTimeout(function () {
                            //window.location.replace(url); //will redirect to your blog page (an ex: blog.html)
                            window.open(url, '_blank');
                            }, 1000);
                     }
                     if(result.error==true){
                         getError(result.message);
                     }
                 }
             });
         }

 </script>
@endsection