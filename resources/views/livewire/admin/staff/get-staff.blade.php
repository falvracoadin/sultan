<div>
    <style wire:ignore>
        .pointer{
            cursor: pointer;
        }
        .green{
            background-color: #00CCCC;
            color: white;
        }
        .pic{
            max-width: 200px;
        }
    </style>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input wire:model.debounce.500ms="keyword" class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">                              
                    </form>
                </div>                
            </div>           
            <div wire:ignore class="row tm-row">
                <div class="col-md-6">
                    <a wire:click="addStaff"><button type="button" class="btn green">Tambah Staff</button></a>
                </div>
            </div>
            <div class="row tm-row tm-mb-60">
                <div class="col-12">
                    <hr class="tm-hr-primary  tm-mb-55">
                </div>                
                @foreach($staffs as $st)
                    <div class="col-lg-6 tm-mb-60 tm-person-col" wire:click="showUpdateStaff({{$st['id']}})">
                        <div class="media tm-person">
                            <img src="{{asset('storage/'.$st['file'])}}" alt="Image" class="mr-4 pic">
                            <div class="media-body pointer">
                                <h2 class="tm-color-primary tm-post-title mb-2">{{$st['nama_staff']}}</h2>
                                <h3 class="tm-h3 mb-3">{{$st['posisi']}}</h3>
                                <p class="mb-0 tm-line-height-short">
                                    {{substr($st['deskripsi'], 0, 50)}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>
    @livewire('admin.staff.update-staff')
    @livewire('admin.staff.create-staff')
</div>
