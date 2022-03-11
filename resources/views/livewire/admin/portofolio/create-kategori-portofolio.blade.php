<div>
    <style wire:ignore>
        .cl {
            cursor: default;
        }

        .cls {
            transition: all 1s;
            cursor: pointer;
        }

        .cls:hover {
            background-color: red;
            transform: scaleX(2) scaleY(2) translateX(5px);
        }
    </style>
    <div class="modal fade @if($show and $idDelete === null) show @endif" tabindex="-1"
        style="@if($show and $idDelete === null)display:block; @endif background-color: rgba(0, 0, 0, 0.541);">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kategori Portofolio</h5>
                </div>
                <div class="d-flex flex-row">
                    @foreach($kategoris as $ind => $kt)
                    <button type="button" disabled class="btn btn-success ml-2 cl">
                        {{$kt['kategori']}} <span wire:click="delete({{$ind}})" class="badge badge-danger cls"
                            title="delete {{$kt['kategori']}}">X</span>
                    </button>
                    @endforeach
                </div>
                <div class="modal-body">
                    <p>Kategori Portofolio Baru</p>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="new1">Kategori Portofolio</span>
                        <input wire:model.debounce.500ms="kategori" type="text" class="form-control"
                            placeholder="Kategori Portofolio" aria-label="kategori" aria-describedby="basic-addon1">
                    </div>
                </div>

                @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{implode(' ,', $errors->all())}}
                </div>
                @endif
                <div class="modal-footer">
                    <button wire:click="close" type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancel</button>
                    <button wire:click="create" type="button" class="btn btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade @if($idDelete !== null) show @endif" tabindex="-1"
        style="@if($idDelete !== null)display:block; @endif background-color: rgba(0, 0, 0, 0.541);">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                @if($idDelete !== null)
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Kategori {{$kategoris[$idDelete]['kategori']}}</h5>
                </div>
                <div class="modal-body">
                    <p>Hapus Kategori {{$kategoris[$idDelete]['kategori']}}</p>
                </div>
                @endif
                <div class="modal-footer">
                    <button wire:click="cancel" type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancel</button>
                    <button wire:click="confirmDelete" type="button" class="btn btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>