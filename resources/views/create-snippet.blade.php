<x-layouts.app :title="__('Create Code Snippet')">
<div class="container mx-auto py-12 bg-white dark:bg-zinc-800">
    <h1 class="text-4xl font-bold mb-6 text-slate-700 dark:text-slate-200">Create Code Snippet</h1>
    <form method="POST" action="{{ route('snippet.save') }}" class="space-y-6">
        @csrf
        <div>
            <label for="title" class="block mb-2 font-semibold text-slate-700 dark:text-slate-200">Title</label>
            <input id="title" name="title" type="text" class="w-full p-3 border rounded dark:bg-zinc-900 dark:text-slate-200" required />
        </div>
        <div>
            <label for="text" class="block mb-2 font-semibold text-slate-700 dark:text-slate-200">Text</label>
            <textarea id="text" name="text" rows="3" class="w-full p-3 border rounded dark:bg-zinc-900 dark:text-slate-200"></textarea>
        </div>
        <div>
            <label for="code" class="block mb-2 font-semibold text-slate-700 dark:text-slate-200">Code</label>
            <textarea id="code" name="code" rows="6" class="w-full p-3 border rounded dark:bg-zinc-900 dark:text-slate-200"></textarea>
        </div>
        <div>
            <label for="type" class="block mb-2 font-semibold text-slate-700 dark:text-slate-200">Type</label>
            <input id="type" name="type" type="text" class="w-full p-3 border rounded dark:bg-zinc-900 dark:text-slate-200" required />
        </div>
        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 hover:cursor-pointer">Create Snippet</button>
    </form>
</div>
<script src="https://cdn.tiny.cloud/1/7hhx6257f94d68pmfnx64iuwl6evhnhfgr8u1zib3n43yarm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      licence_key: '7hhx6257f94d68pmfnx64iuwl6evhnhfgr8u1zib3n43yarm',
      height : "600",
      selector: '#code',
      plugins: 'autoresize autolink image fullscreen codesample imagetools emoticons link lists hr paste media table',
      toolbar: 'codesample insert undo redo fullscreen fontsizeselect alignleft aligncenter alignright alignjustify h1 h2 bold italic numlist bullist image link emoticons hr paste table',
      contextmenu: "link image table paste",
      content_style: 'textarea { padding: 20px; }',
      templates: [
    {title: 'Some title 1', description: 'Some desc 1', content: 'My content'},
    {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'},
  ],
      autoresize_bottom_margin: 50,
      images_upload_handler: function (blobInfo, success, failure) {
           var xhr, formData;
           xhr = new XMLHttpRequest();
           xhr.withCredentials = false;
           xhr.open('POST', '{{ route("image.upload") }}');
           var token = '{{ csrf_token() }}';
           xhr.setRequestHeader("X-CSRF-Token", token);
           xhr.onload = function() {
               var json;
               if (xhr.status != 200) {
                   failure('HTTP Error: ' + xhr.status);
                   return;
               }
               json = JSON.parse(xhr.responseText);
               if (!json || typeof json.location != 'string') {
                   failure('Invalid JSON: ' + xhr.responseText);
                   return;
               }
               success(json.location);
           };
           formData = new FormData();
           formData.append('file', blobInfo.blob(), blobInfo.filename());
           xhr.send(formData);
       }
    });
</script>
</x-layouts.app>
