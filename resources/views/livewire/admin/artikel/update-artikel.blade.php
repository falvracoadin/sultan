<div>
  <div class="modal fade @if($updated_artikel) show @endif" tabindex="-1" style="@if($updated_artikel)display:block; @endif background-color: rgba(0, 0, 0, 0.541);">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Update Artikel!</h5>
        </div>
        <div class="modal-body">
          <p>{{$nama_artikel}}</p>
          @if($errors->any())
          <div class="alert alert-danger" role="alert">
            {{implode(' ,', $errors->all())}}
          </div>
          @endif
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nama Artikel</span>
            <input wire:model="nama_artikel" type="text" class="form-control" placeholder="Nama Artikel" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div wire:ignore class="input-group mb-3">
            <textarea id="deskripsiartikel" style="width: 100%;"></textarea>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Tanggal Terbit</span>
            <input wire:model="tanggal_terbit" type="date" class="form-control" placeholder="Tanggal Terbit" aria-label="tanggalterbit" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon4">Penulis</span>
            <select wire:model="id_staff" class="form-control">
              @foreach($staff as $st)
                <option value="{{$st['id']}}">{{$st['nama_staff']}}</option>
              @endforeach
                <option value="Pilih penulis">Pilih Penulis</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon5">Kategori</span>
            <select wire:model="kategori" class="form-control">
              @foreach($kategoris as $kt)
                <option value="{{$kt['kategori']}}">{{$kt['kategori']}}</option>
              @endforeach
            </select>
          </div>
          <div class="input-group mb-3">
            @if($gambar)<p style="display: inline-block;width: 100%;">Current image : <a href="{{asset("storage/$gambar")}}">view</a></p><br>@endif
            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Gambar Artikel</button>
            <input wire:model="file" name="file" type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
          </div>

        </div>
        <div class="modal-footer">
          <button wire:click="close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button wire:click="update" type="button" class="btn btn-danger">Save</button>
        </div>
      </div>
    </div>
  </div>
  <script wire:ignore>
    let desc = null;
    $('document').ready(()=>{
      tinymce.init({
                selector: '#deskripsiartikel',
                plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                imagetools_cors_hosts: ['picsum.photos'],
                menubar: 'file edit view insert format tools table help',
                toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                toolbar_sticky: true,
                autosave_ask_before_unload: true,
                autosave_interval: "30s",
                autosave_prefix: "{path}{query}-{id}-",
                autosave_restore_when_empty: false,
                autosave_retention: "2m",
                image_advtab: true,
                /*content_css: '//www.tiny.cloud/css/codepen.min.css',*/
                link_list: [{
                        title: 'My page 1',
                        value: 'https://www.codexworld.com'
                    },
                    {
                        title: 'My page 2',
                        value: 'https://www.xwebtools.com'
                    }
                ],
                image_list: [{
                        title: 'My page 1',
                        value: 'https://www.codexworld.com'
                    },
                    {
                        title: 'My page 2',
                        value: 'https://www.xwebtools.com'
                    }
                ],
                image_class_list: [{
                        title: 'None',
                        value: ''
                    },
                    {
                        title: 'Some class',
                        value: 'class-name'
                    }
                ],
                importcss_append: true,
                file_picker_callback: function(callback, value, meta) {
                    /* Provide file and text for the link dialog */
                    if (meta.filetype === 'file') {
                        callback('https://www.google.com/logos/google.jpg', {
                            text: 'My text'
                        });
                    }

                    /* Provide image and alt text for the image dialog */
                    if (meta.filetype === 'image') {
                        callback('https://www.google.com/logos/google.jpg', {
                            alt: 'My alt text'
                        });
                    }

                    /* Provide alternative source and posted for the media dialog */
                    if (meta.filetype === 'media') {
                        callback('movie.mp4', {
                            source2: 'alt.ogg',
                            poster: 'https://www.google.com/logos/google.jpg'
                        });
                    }
                },
                templates: [{
                        title: 'New Table',
                        description: 'creates a new table',
                        content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                    },
                    {
                        title: 'Starting my story',
                        description: 'A cure for writers block',
                        content: 'Once upon a time...'
                    },
                    {
                        title: 'New list with dates',
                        description: 'New List with dates',
                        content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                    }
                ],
                template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                height: 600,
                image_caption: true,
                quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                noneditable_noneditable_class: "mceNonEditable",
                toolbar_mode: 'sliding',
                contextmenu: "link image imagetools table",
            });
            
        desc = tinymce.get('deskripsiartikel');
        
      }
    )

     document.addEventListener('DOMContentLoaded', () => {
      Livewire.hook('message.processed', (el, component) => {
        let deskrip = @this.deskripsi;
        if(desc.getContent() == ''){
          desc.setContent(deskrip);
        }else{
          @this.deskripsi = desc.getContent();
        }
      })
    })

    
  </script>
</div>
