<!-- Modal -->
<div class="modal fade" id="UseExistingBeneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLongTitle">Remit</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <br/><br/>
        Do you want to use one of your existing beneficiaries?
        <br/> <br/>
      </div>
      <div class="modal-footer">
        <a href="{{URL::to('/add-new-beneficiary')}}"  class="btn btn-crm btn-default" >No</button>
        <a href="{{URL::to('/show-remitter-beneficiaries')}}"  class="btn btn-crm btn-primary">Yes</a>
      </div>
    </div>
  </div>
</div>