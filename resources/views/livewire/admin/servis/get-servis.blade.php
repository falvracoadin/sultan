<div>
    <style wire:ignore>
        .green{
            background-color: #00CCCC;
            color: white;
        }
        .pointer{
            cursor: pointer;
        }
    </style>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div wire:ignore class="row tm-row">
                <div class="col-12">
                    <form id="myform" class="form-inline tm-mb-80 tm-search-form">                
                        <input wire:model.debounce.500ms='keyword' class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">                              
                    </form>
                </div>                  
            </div>   
            <div wire:ignore class="row tm-row">
                <div class="col-md-6">
                    <a wire:click="addServis"><button type="button" class="btn green">Tambah Servis</button></a>
                </div>
            </div>         
            <div class="row tm-row">
                <table class="table table-hover mt-4 table-striped">
                    <thead class="table-info">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Servis</th>
                        <th scope="col">Deskripsi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($servis as $ind => $serv)
                            <tr wire:click="showUpdateServis({{$serv['id']}})" class="pointer">
                                <th scope="row">{{$ind + 1}}</th>
                                <td>{{$serv['nama_servis']}}</td>
                                <td>{{substr($serv['deskripsi'],0,100)}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    @if($delete !== null)
    <div class="modal fade show" tabindex="-1" style="display:block;background-color: rgba(0, 0, 0, 0.541);">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Konfirmasi Penghapusan !</h5>
            </div>
            <div class="modal-body">
              <p>Anda yakin ingin menghapus servis?</p>
            </div>
            <div class="modal-footer">
              <button wire:click="delete(-1)" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button wire:click="confirmDelete" type="button" class="btn btn-danger">Yakin</button>
            </div>
          </div>
        </div>
    </div>
    @endif
    @livewire('admin.servis.update-servis')
    @livewire('admin.servis.create-servis')
    <script>
        $('#myform').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) { 
                e.preventDefault();
                return false;
            }
        });
    </script>
</div>
