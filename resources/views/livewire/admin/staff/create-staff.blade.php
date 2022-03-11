<div>
    <div class="modal fade @if($show) show @endif" tabindex="-1" style="@if($show)display:block; @endif background-color: rgba(0, 0, 0, 0.541);">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title">Tambah Staff!</h5>
          </div>
          <div class="modal-body">
            <p>{{$nama_staff_new}}</p>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Nama Servis</span>
              <input wire:model.debounce.1s="nama_staff_new" type="text" class="form-control" placeholder="Nama Staff" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div wire:ignore class="input-group mb-3">
              <textarea wire:model.1s="deskripsi_new" style="width: 100%;">{{$deskripsi_new}}</textarea>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Posisi Staff</span>
                <input wire:model.debounce.1s="posisi_new" type="text" class="form-control" placeholder="Posisi Staff" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Foto Staff</button>
                <input wire:model="newFile" name="file" type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
            </div>
  
          </div>
          @if($errors->any())
          <div class="alert alert-danger" role="alert">
            {{implode(' ,', $errors->all())}}
          </div>
          @endif
          <div class="modal-footer">
            <button wire:click="close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button wire:click="create" type="button" class="btn btn-danger">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  