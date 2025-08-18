
        <!--**********************************
            Content body start
        ***********************************-->
  <style>
.custom-modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.6);
  justify-content: center;
  align-items: center;
}

.modal-inner {
  padding: 10px;
  border-radius: 10px;
  max-width: 440px;
  width: 90%;
  max-height: 80vh;
  overflow: auto;
  text-align: center;
  position: relative;
}

.custom-modal-content {
  max-width: 100%;
  max-height: 70vh;
  border-radius: 6px;
}
</style>
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Deposit </a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Approved Deposit</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Approved Fund</h4>
                            </div>
                            <div class="card-body">
                                
                                      <form action="{{ route('admin.approve-buyFund') }}" method="GET">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group mb-3">
                                                    <input type="text" style="height: 3rem;" Placeholder="Search Users"
                                                        name="search" class="form-control" value="{{ @$search }}">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <select name="limit" style="height: 3rem;" class="form-control">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <input type="submit" style="padding: 0.6rem 2rem;" name="submit"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Search" />
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <a href="{{ route('admin.approve-buyFund') }}" style="padding: 0.6rem 2rem;"
                                                        name="reset"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Reset">Reset</a>
                                                </div>
                                            </div>
        
        
                                        </div>
                                    </form>
                                    
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S NO.</th>
                                                <th>User Name</th>
                                                <th>User Id</th>
                                                <th>Amount</th>
                                                <th>Transaction Date.</th>
                                            <th>Image</th> 


                                                <th>Status</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($buyfund_list) || is_object($buyfund_list)){ ?>

                                                <?php $cnt = $buyfund_list->perPage() * ($buyfund_list->currentPage() - 1); ?>
                                                 @foreach($buyfund_list as $value)
                
                                                  <tr>
                                                      <td><?= $cnt += 1?></td>
                                                      <td>{{$value->user->name}}</td>
                                                      <td>{{$value->user_id_fk}}</td>
                                                      <td>{{currency()}} {{$value->amount}}</td>
                                                      <td>{{$value->created_at}}</td>
       <td>
    @if(!empty($value->slip))
        <img src="{{ asset('public/uploads/' . $value->slip) }}" 
             class="zoomable-image" 
             onclick="openImageModal(this.src)" 
             width="100" height="60" 
             style="cursor: zoom-in; object-fit: cover;">
    @else
        N/A
    @endif
</td>
                                                      <td ><span class="badge bg-{{ $value->status == 'Approved' ? 'success' : 'danger' }}">{{$value->status}}</span></td>
                                                      
                                                  @endforeach
                
                                             <?php }?>
                                        </tbody>
                                       
                                    </table>
                                    
                                      <br>

                                    {{ $buyfund_list->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                 
					
				</div>
            </div>
        </div>
   <div id="imageModalCustom" class="custom-modal" onclick="closeImageModal(event)">
  <div class="modal-inner">
    <img class="custom-modal-content" id="modalImageZoomed">
  </div>
</div>


<script>
function openImageModal(src) {
  const modal = document.getElementById("imageModalCustom");
  const modalImage = document.getElementById("modalImageZoomed");
  modal.style.display = "flex";
  modalImage.src = src;
}

function closeImageModal(event) {
  const modalInner = document.querySelector('.modal-inner');
  if (!modalInner.contains(event.target)) {
    document.getElementById("imageModalCustom").style.display = "none";
  }
}
</script>
        <!--**********************************
            Content body end
        ***********************************-->
