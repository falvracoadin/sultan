<div>
    <style wire:ignore>
        .green{
            background-color: #00CCCC;
            color: white;
        }
        .pointer{
            cursor: pointer;
        }
        #status {
            width: 170px;
            height: 60px;
            padding: 10px;
            border: ;
            background-color: #00CCCC;
            color: whitesmoke;
            cursor: pointer;
            border-radius: 30px;
            margin-left: 10px;
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
                <div class="col-12">
                    <label for="status">Tampilkan</label>
                    <select id="status" wire:model="tampilkan" >
                        <option value="0">Belum Terjawab</option>
                        <option value="1">Telah Terjawab</option>
                        <option value="2">Semuanya</option>
                    </select>
                </div>              
            </div>    
            <div class="row tm-row table-responsive">
                <table class="table table-hover mt-4 table-striped">
                    <thead class="table-info">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subjek</th>
                        <th scope="col">Status Terjawab</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $ind => $cont)
                            <tr wire:click="showContact({{$cont['id']}})" class="pointer">
                                <th scope="row">{{$ind + 1}}</th>
                                <th scope="row">{{$cont['nama']}}</th>
                                <th scope="row">{{$cont['email']}}</th>
                                <th scope="row">{{$cont['subjek']}}</th>
                                <th scope="row">{{$cont['status_terjawab']}}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    @if($contact)
    <div>
        <div class="modal fade @if($contact) show @endif" tabindex="-1" style="@if($contact)display:block; @endif background-color: rgba(0, 0, 0, 0.541);">
          <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title">Contact Us!</h5>
              </div>
              <div class="modal-body">
                <p>{{$contact['nama']}}</p>
                @if($errors->any())
                <div class="alert alert-danger" role="alert">
                  {{implode(' ,', $errors->all())}}
                </div>
                @endif
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Nama</span>
                  <input disabled wire:model.debounce.1s="contact.nama" type="text" class="form-control" placeholder="Nama" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input disabled wire:model.debounce.1s="contact.email" type="email" class="form-control" placeholder="Nama" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Subjek</span>
                    <input disabled wire:model.debounce.1s="contact.subjek" type="text" class="form-control" placeholder="Nama" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div wire:ignore class="input-group mb-3">
                  <textarea disabled wire:model.1s="contact.deskripsi" style="width: 100%;">{{$contact['deskripsi']}}</textarea>
                </div>
                <div wire:ignore class="input-group mb-3">
                    <textarea wire:model.1s="contact.jawaban" style="width: 100%;">{{$contact['jawaban']}}</textarea>
                  </div>
              </div>
              <div class="modal-footer">
                <button wire:click="close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button wire:click="answer" type="button" class="btn btn-danger">Save</button>
              </div>
            </div>
          </div>
        </div>
    </div>    
    @endif
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
