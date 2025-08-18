<x-layouts.app :title="__('About')">

<div class="container mx-auto py-12 bg-white dark:bg-zinc-800">
    <h1 class="text-4xl font-bold mb-6 text-slate-700 dark:text-slate-200">Create Blog Post</h1>
    <form method="POST" action="{{ route('blog.create') }}" class="space-y-6">
        @csrf
        <div>
            <label for="title" class="block mb-2 font-semibold text-slate-700 dark:text-slate-200">Title</label>
            <input id="title" name="title" type="text" class="w-full p-3 border rounded dark:bg-zinc-900 dark:text-slate-200" required />
        </div>
        <div>
            <label for="blog_text" class="block mb-2 font-semibold text-slate-700 dark:text-slate-200">Blog Text</label>
            <textarea id="blog_text" name="blog_text" rows="6" class="w-full p-3 border rounded dark:bg-zinc-900 dark:text-slate-200" required></textarea>
        </div>
        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Create Blog</button>
    </form>
</div>
<script src="https://cdn.tiny.cloud/1/qpuriefs0vhoo7azs8ty9kf1lyz69bininv5bq6grbpqpbh7/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      licence_key: 'qpuriefs0vhoo7azs8ty9kf1lyz69bininv5bq6grbpqpbh7',
      height : "600",
      selector: '#blog-text',
      plugins: 'template autoresize autolink image fullscreen imagetools emoticons link lists hr paste media table',
      toolbar: 'insert undo redo fullscreen fontsizeselect alignleft aligncenter alignright alignjustify h1 h2 bold italic numlist bullist image link emoticons hr paste table',
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

