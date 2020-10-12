document.querySelector('[type="file"]').addEventListener('change', function() {

  [].forEach.call(this.files, function(file) {
      var reader = new FileReader();
      reader.onload = function(event) {
        var img = document.createElement('img');
        img.src = event.target.result;

        div.appendChild(img);

        queue.push({file: file, element: img});
      };

      reader.readAsDataURL(file);
  });
}, false);
