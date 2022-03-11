<div>
    <style wire:ignore>
        .green {
            background-color: #00CCCC;
            color: white;
            min-width: 100px;;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .box select {
            background-color: #00CCCC;
            color: white;
            padding: 12px;
            width: 250px;
            border: none;
            font-size: 20px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
            -webkit-appearance: button;
            appearance: button;
            outline: none;
        }

        .box::before {
            content: "\f13a";
            font-family: FontAwesome;
            position: absolute;
            top: 0;
            right: 0;
            width: 20%;
            height: 100%;
            text-align: center;
            font-size: 28px;
            line-height: 45px;
            color: rgba(255, 255, 255, 0.5);
            background-color: rgba(255, 255, 255, 0.1);
            pointer-events: none;
        }

        .box:hover::before {
            color: rgba(255, 255, 255, 0.6);
            background-color: rgba(255, 255, 255, 0.2);
        }

        .box select option {
            padding: 30px;
        }
        h2{
            width: 100%;
            margin-bottom: 20px;
            font-weight: bold;
            color: #015555;
        }
        hr{
            background: #00CCCC;
            border: 1px solid #00cccc;
        }
    </style>
    <div class="container-fluid">
        <main class="tm-main">
            <div wire:ignore class="row tm-row" wire:ignore>
                <div class="col-md-12">
                    <div class="box">
                        <select wire:model="section">
                            @foreach($banners as $ind => $bn)
                                <option value="{{$ind}}" @if($section == $ind) selected @endif>{{$bn['nama_app']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row tm-row mt-5">
                <div class="col-md-12 mt-3 mb-5">
                    <h2>{{strtoupper($nama_app)}}</h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Nama App</span>
                        </div>
                        <input wire:model="nama_app" disabled type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-md-6">
                    @if($gambar)<a href="{{asset('storage/'.$gambar)}}">lihat background</a>@endif
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Background</span>
                        </div>
                        <div class="custom-file">
                          <input wire:model="file" type="file" class="custom-file-input" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Deskripsi</span>
                        </div>
                        <textarea wire:model="deskripsi" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                </div>
            </div>
            <div class="row tm-row mt-5">
                <div class="col-md-12">
                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                    @elseif(session('err'))
                    <div class="alert alert-danger" role="alert">
                        {{session('err')}}
                    </div>
                    @elseif($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{implode(' ,', $errors->all())}}
                        </div>
                    @endif
                </div>
                <div class="col-md-6">
                    <button wire:click="save" class="btn green">Save</button>
                </div>
            </div>
        </main>
    </div>
</div>