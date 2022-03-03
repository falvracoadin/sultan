<div>
    <style wire:ignore>
        .green{
            background-color: #00CCCC;
            color: white;
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
                    <a wire:click="addArtikel"><button type="button" class="btn green">Tambah Artikel</button></a>
                </div>    
                <div class="col-md-6">
                    <a wire:click='addKategori'><button type="button" class="btn green">Tambah Kategori Artikel</button></a>
                </div>
            </div>         
            <div class="row tm-row">
                @foreach($artikels as $ind => $art)
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="{{asset($art['gambar'] == null ? 'admin/img/img-01.jpg' : 'storage/'.$art['gambar'])}}" alt="Image" class="img-fluid">                            
                        </div>
                        <span wire:click='delete({{$art['id']}})' class="position-absolute tm-new-badge">delete</span>
                        <h2 wire:click="showUpdateArtikel({{$art['id']}})"  class="tm-pt-30 tm-color-primary tm-post-title">{{$art['nama_artikel']}}</h2>
                    </a>
                    <div wire:click="showUpdateArtikel({{$art['id']}})" style="cursor: pointer;>             
                        <p class="tm-pt-30">
                            {{substr($art['deskripsi'], 0, 200)}}
                        </p>
                        <div class="d-flex justify-content-between tm-pt-45">
                            <span class="tm-color-primary">{{$art['kategori']}}</span>
                            <span class="tm-color-primary">{{date('d M Y', strtotime($art['tanggal_terbit']))}}</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span>{{$numComment[$ind]['jumlah']}} comments</span>
                            <span>by {{$penulis[$ind]['nama_staff']}}</span>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    @if($maxPage > 1)
                        <a href="#" wire:click="getPage({{$currentPage - 1}})" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                        <a href="#" wire:click="getPage({{$currentPage + 1}})" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                    @endif
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            @if($maxPage < 3)
                                @for($i = 0; $i < $maxPage; $i++)
                                    <li class="tm-paging-item {{$currentPage == $i ? 'active' : ''}}">
                                        <a wire:click="getPage({{$i}})" class="mb-2 tm-btn tm-paging-link">{{$i+1}}</a>
                                    </li>
                                @endfor
                            @elseif($currentPage < 3)
                                @for($i = 0; $i < 3; $i++)
                                    <li class="tm-paging-item {{$currentPage == $i ? 'active' : ''}}">
                                        <a wire:click="getPage({{$i}})" class="mb-2 tm-btn tm-paging-link">{{$i+1}}</a>
                                    </li>
                                @endfor
                                <li class="tm-paging-item">
                                    <a class="mb-2 tm-btn tm-paging-link">...</a>
                                </li>
                                <li class="tm-paging-item">
                                    <a wire:click="getPage({{$maxPage - 1}})" class="mb-2 tm-btn tm-paging-link">{{$maxPage}}</a>
                                </li>
                            @elseif($currentPage >= 3 and $currentPage < $maxPage - 3)
                                <li class="tm-paging-item">
                                    <a wire:click="getPage(0)" class="mb-2 tm-btn tm-paging-link">1</a>
                                </li>
                                <li class="tm-paging-item">
                                    <a class="mb-2 tm-btn tm-paging-link">...</a>
                                </li>
                                @for($i = $currentPage - 1; $i < $currentPage + 2; $i++)
                                    <li class="tm-paging-item {{$currentPage == $i ? 'active' : ''}}">
                                        <a wire:click="getPage({{$i}})" class="mb-2 tm-btn tm-paging-link">{{$i+1}}</a>
                                    </li>
                                @endfor
                                <li class="tm-paging-item ">
                                    <a class="mb-2 tm-btn tm-paging-link">...</a>
                                </li>
                                <li class="tm-paging-item ">
                                    <a wire:click="getPage({{$maxPage - 1}})" class="mb-2 tm-btn tm-paging-link">{{$maxPage}}</a>
                                </li>
                            @elseif($currentPage >= $maxPage - 3)
                                <li class="tm-paging-item ">
                                    <a wire:click="getPage(0)" class="mb-2 tm-btn tm-paging-link">1</a>
                                </li>
                                <li class="tm-paging-item ">
                                    <a class="mb-2 tm-btn tm-paging-link">...</a>
                                </li>
                                @for($i = $maxPage - 3; $i < $maxPage; $i++)
                                    <li class="tm-paging-item {{$currentPage == $i ? 'active' : ''}}">
                                        <a wire:click="getPage({{$i}})" class="mb-2 tm-btn tm-paging-link">{{$i+1}}</a>
                                    </li>
                                @endfor
                            @endif
                        </ul>
                    </nav>
                </div>                
            </div>
        </main>
    </div>
    @livewire('admin.artikel.update-artikel', ['id' => $updateId])
    @livewire('admin.artikel.create-artikel')
    @livewire('admin.artikel.create-kategori-artikel')
    @if($delete !== null)
    <div class="modal fade show" tabindex="-1" style="display:block;background-color: rgba(0, 0, 0, 0.541);">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Konfirmasi Penghapusan !</h5>
            </div>
            <div class="modal-body">
              <p>Anda yakin ingin menghapus artikel?</p>
            </div>
            <div class="modal-footer">
              <button wire:click="delete(-1)" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button wire:click="confirmDelete" type="button" class="btn btn-danger">Yakin</button>
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
