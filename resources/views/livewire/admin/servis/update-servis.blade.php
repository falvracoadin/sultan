<div>
    <div class="modal fade @if($updated_servis) show @endif" tabindex="-1" style="@if($updated_servis)display:block; @endif background-color: rgba(0, 0, 0, 0.541);">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title">Update Servis!</h5>
          </div>
          <div class="modal-body">
            <p>{{$nama_servis}}</p>
            @if($errors->any())
            <div class="alert alert-danger" role="alert">
              {{implode(' ,', $errors->all())}}
            </div>
            @endif
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Nama Servis</span>
              <input wire:model.debounce.1s="nama_servis" type="text" class="form-control" placeholder="Nama Servis" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div wire:ignore class="input-group mb-3">
              <textarea wire:model.1s="deskripsi" style="width: 100%;">{{$deskripsi}}</textarea>
            </div>
  
          </div>
          <div class="modal-footer">
            <button wire:click="close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button wire:click="update" type="button" class="btn btn-danger">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  